<?php
include 'DBconfig.php';

// Create connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

if ($conn->connect_error) {

 die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Amateur'";

        $result = $conn->query($sql);
        if ($result->num_rows >0) {
         while($row[] = $result->fetch_assoc()) {
                 $tem = $row;
         }
        }


$sql2 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Big Ass'";

        $result2 = $conn->query($sql2);
        if ($result2->num_rows >0) {
         while($row2[] = $result2->fetch_assoc()) {
                 $tem2 = $row2;
         }
        }


$sql3 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Black'";

        $result3 = $conn->query($sql3);
        if ($result3->num_rows >0) {
         while($row3[] = $result3->fetch_assoc()) {
                 $tem3 = $row3;
         }
        }


$sql4 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Mature'";

        $result4 = $conn->query($sql4);
        if ($result4->num_rows >0) {
         while($row4[] = $result4->fetch_assoc()) {
                 $tem4 = $row4;
         }
        }


$sql5 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Teen'";

        $result5 = $conn->query($sql5);
        if ($result5->num_rows >0) {
         while($row5[] = $result5->fetch_assoc()) {
                 $tem5 = $row5;
         }
        }


$sql6 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Masturbation'";

        $result6 = $conn->query($sql6);
        if ($result6->num_rows >0) {
         while($row6[] = $result6->fetch_assoc()) {
                 $tem6 = $row6;
         }
        }

$sql7 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Asian'";

        $result7 = $conn->query($sql7);
        if ($result7->num_rows >0) {
         while($row7[] = $result7->fetch_assoc()) {
                 $tem7 = $row7;
         }
        }

$sql8 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Anal'";

        $result8 = $conn->query($sql8);
        if ($result8->num_rows >0) {
         while($row8[] = $result8->fetch_assoc()) {
                 $tem8 = $row8;
         }
        }

$sql9 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'College'";

        $result9 = $conn->query($sql9);
        if ($result9->num_rows >0) {
         while($row9[] = $result9->fetch_assoc()) {
                 $tem9 = $row9;
         }
        }

$sql10 = "SELECT description, sources, card, background, title, studio FROM vodMovies where category = 'Scandal'";

        $result10 = $conn->query($sql10);
        if ($result10->num_rows >0) {
         while($row10[] = $result10->fetch_assoc()) {
                 $tem10 = $row10;
         }
        }



header('Content-Type: application/json; charset=utf-8');

//echo json_encode(array('googlevideos' => $tem), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);


echo json_encode(array('googlevideos' => array(array('category' => 'Amateur', 'videos' => $tem),array('category' => 'Asian', 'videos' => $tem7),array('category' => 'Anal', 'videos' => $tem8),array('category' => 'College', 'videos' => $tem9),array('category' => 'Scandal', 'videos' => $tem10),array('category' => 'Big Ass', 'videos' => $tem2),array('category' => 'Black', 'videos' => $tem3),array('category' => 'Mature', 'videos' => $tem4),array('category' => 'Teen', 'videos' => $tem5),array('category' => 'Masturbation', 'videos' => $tem6))), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// echo $json;


$conn->close();
?>
