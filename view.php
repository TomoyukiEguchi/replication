<?php 
include 'partials/header.php';
include 'partials/navbar.php';

//$id = $_GET['id'];
$id = mysqli_real_escape_string($conn, $_GET['id']);
?>

<div class="container" style="margin: 30px auto;">

    <?php
        $sql = "SELECT * FROM movies WHERE movie_id='$id'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        if ($queryResults > 0) {
            echo "<div class='row'>";
            while ($row = mysqli_fetch_assoc($result)){    
                echo "<div class='col-8'>";
                echo "<img style='width: 100%;' src=images/". $row['img_filename'] .".jpeg></div>";
                echo "<div class='col-4'>";
                echo "<p style='font-size: 23px;'>" . $row['title'] . "</p>";
                echo "<p style='font-size: 13px;'>" . $row['pg'] . "</p>";
                echo "<p style='font-size: 17px;line-height: normal;'>" . $row['description'] . "</p>";
                echo "<p style='font-size: 13px;'>" . $row['released_time'] . "</p></div>";
            }
            echo "</div>";
        }
    ?>

</div>

<?php include 'partials/footer.php' ?>