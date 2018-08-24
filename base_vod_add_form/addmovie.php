
<?php

        $sql = new mysqli("localhost", "root", "qwe!@#123", "direct2guests_beta");
        $query = "INSERT INTO vodMovies (vod_group, vod_category, vod_type, vod_title, vod_description, vod_source_url, vod_card_url, vod_backgroud_url, vod_producer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $sql->prepare($query);
        var_dump($sql);
        $stmt->bind_param("sssssssss", $_POST['group'], $_POST['category'], $_POST['type'], $_POST['title'], $_POST['description'], $_POST['source'], $_POST['card'], $_POST['background'], $_POST['producer']);
        $stmt->execute();

?>

