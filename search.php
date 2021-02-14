<?php include 'partials/header.php' ?>
<?php include 'partials/navbar_search.php' ?>

<div class="container">
<?php
    if(isset($_POST['submit-search']) && $_POST['search'] != "") {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM movies WHERE title LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
            echo "<p style='margin-top: 30px'>There are " . $queryResult . " results.</p>";
            echo "<div class='row' style='margin: 30px auto;'>";    
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='view.php?id=" . $row['movie_id'] . "'><div class='col-sm' style='padding-left: 0px;'>";
                echo "<img style='height: 140px;' src=images/" . $row['img_filename'] . ".jpeg>";
                echo "<div class='card-title'>" . $row['title'] . "</div></div></a>";
            }
            echo "</div>";
        } else {
            echo "There are no results matching your search.";
            echo "<p style='margin-top: 6px'>RECOMMENDED MOVIES</p>";
            $recommend = "SELECT * FROM recommended";
            $r_result = mysqli_query($conn, $recommend);
            $r_queryResults = mysqli_num_rows($r_result);

            if ($r_queryResults > 0) {
                echo "<div class='row' style='margin: 30px auto;'>";
                while ($r_row = mysqli_fetch_assoc($r_result)){
                    echo "<a href='view.php?id=" . $r_row['movie_id'] . "'><div class='col-sm' style='padding-left: 0px;'>";
                    echo "<img style='height: 140px;' src=images/" . $r_row['img_filename'] . ".jpeg>";
                    echo "<div class='card-title'>" . $r_row['title'] . "</div></div></a>";
                }
                echo "</div>";
            }
        }
    mysqli_close($conn);
    }else{
        echo "<p style='margin-top: 30px'>RECOMMENDED MOVIES</p>";
        $recommend = "SELECT * FROM recommended";
        $r_result = mysqli_query($conn, $recommend);
        $r_queryResults = mysqli_num_rows($r_result);

        if ($r_queryResults > 0) {
            echo "<div class='row' style='margin: 30px auto;'>";
            while ($r_row = mysqli_fetch_assoc($r_result)){
                echo "<a href='view.php?id=" . $r_row['movie_id'] . "'><div class='col-sm' style='padding-left: 0px;'>";
                echo "<img style='height: 140px;' src=images/" . $r_row['img_filename'] . ".jpeg>";
                echo "<div class='card-title'>" . $r_row['title'] . "</div></div></a>";
            }
            echo "</div>";
        }
    }
?>
</div>

<?php include 'partials/footer.php' ?>