<?php
include 'DBconfig.php';

// Create connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

if ($conn->connect_error) {

 die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Action'";

        $result = $conn->query($sql);
        if ($result->num_rows >0) {
         while($row[] = $result->fetch_assoc()) {
                 $tem = $row;
         }
        }


$sql2 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Animation'";

        $result2 = $conn->query($sql2);
        if ($result2->num_rows >0) {
         while($row2[] = $result2->fetch_assoc()) {
                 $tem2 = $row2;
         }
        }


$sql3 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Adventure'";

        $result3 = $conn->query($sql3);
        if ($result3->num_rows >0) {
         while($row3[] = $result3->fetch_assoc()) {
                 $tem3 = $row3;
         }
        }


$sql4 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Cartoons'";

        $result4 = $conn->query($sql4);
        if ($result4->num_rows >0) {
         while($row4[] = $result4->fetch_assoc()) {
                 $tem4 = $ro4w;
         }
        }


$sql5 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Comedy'";

        $result5 = $conn->query($sql5);
        if ($result5->num_rows >0) {
         while($row5[] = $result5->fetch_assoc()) {
                 $tem5 = $row5;
         }
        }


$sql6 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Crime'";

        $result6 = $conn->query($sql6);
        if ($result6->num_rows >0) {
         while($row6[] = $result6->fetch_assoc()) {
                 $tem6 = $row6;
         }
        }


$sql7 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Documentary'";

        $result7 = $conn->query($sql7);
        if ($result7->num_rows >0) {
         while($row7[] = $result7->fetch_assoc()) {
                 $tem7 = $row7;
         }
        }


$sql8 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Drama'";

        $result8 = $conn->query($sql8);
        if ($result3->num_rows >0) {
         while($row8[] = $result8->fetch_assoc()) {
                 $tem8 = $row8;
         }
        }


$sql9 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Fantasy'";

        $result9 = $conn->query($sql9);
        if ($result9->num_rows >0) {
         while($row9[] = $result9->fetch_assoc()) {
                 $tem9 = $row9;
         }
        }


$sql0 = "SELECT description, sources, card, background, title, studio FROM vodMovies        where category = 'History'";

        $result10 = $conn->query($sql10);
        if ($result10->num_rows >0) {
         while($row10[] = $result10->fetch_assoc()) {
                 $tem10 = $row10;
         }
        }


$sql11 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Horror'";

        $result11 = $conn->query($sql11);
        if ($result11->num_rows >0) {
         while($row11[] = $result11->fetch_assoc()) {
                 $tem11 = $row11;
         }
        }


$sql12 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Romance'";

        $result12 = $conn->query($sql12);
        if ($result12->num_rows >0) {
         while($row12[] = $result12->fetch_assoc()) {
                 $tem12 = $row12;
         }
        }


$sql13 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'SciFi'";

        $result13 = $conn->query($sql13);
        if ($result13->num_rows >0) {
         while($row13[] = $result13->fetch_assoc()) {
                 $tem13 = $row13;
         }
        }


$sql14 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Thriller'";

        $result14 = $conn->query($sql14);
        if ($result14->num_rows >0) {
         while($row14[] = $result14->fetch_assoc()) {
                 $tem14 = $row14;
         }
        }


header('Content-Type: application/json; charset=utf-8');

//echo json_encode(array('googlevideos' => $tem), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);


echo json_encode(array('googlevideos' => array(array('category' => 'Action', 'videos' => $tem),array('category' => 'Animation', 'videos' => $tem2),array('category' => 'Adventure', 'videos' => $tem3),array('category' => 'Cartoons', 'videos' => $tem4),array('category' => 'Comedy', 'videos' => $tem5),array('category' => 'Crime', 'videos' => $tem6),array('category' => 'Documentary', 'videos' => $tem7),array('category' => 'Drama', 'videos' => $tem8),array('category' => 'Fantasy', 'videos' => $tem9),array('category' => 'History', 'videos' => $tem10),array('category' => 'Horror', 'videos' => $tem11),array('category' => 'Romance', 'videos' => $tem12),array('category' => 'SciFi', 'videos' => $tem13),array('category' => 'Thriller', 'videos' => $tem14))), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);


// echo $json;


$conn->close();
?>

