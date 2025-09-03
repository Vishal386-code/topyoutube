<?php

function fetchAndStoreYouTubeCategories() {
    global $pdo;
    try {
        $apiKey = getenv('YOUTUBE_API_KEY');
        $regionCode = 'IN';
        $url = "https://www.googleapis.com/youtube/v3/videoCategories?part=snippet&regionCode={$regionCode}&key={$apiKey}";

        $response = file_get_contents($url);

        if ($response === false) {
            throw new Exception("Failed to fetch the API");
        }

        $data = json_decode($response, true);

        if (!isset($data['items'])) {
            throw new Exception("Invalid API response structure");
        }

        $sql = "INSERT INTO youtube_categories (category_id, title) VALUES (:category_id, :title)
                ON DUPLICATE KEY UPDATE title = VALUES(title)";
        $stmt = $pdo->prepare($sql);

        foreach ($data['items'] as $item) {
            $categoryId = $item['id'];
            $title = $item['snippet']['title'];

            $stmt->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);

            if (!$stmt->execute()) {
                throw new Exception("Failed to execute statement for category ID $categoryId");
            }
        }

    } catch (Exception $ex) {
        error_log("YouTube Category fetching error: " . $ex->getMessage());
    }
}
?>
