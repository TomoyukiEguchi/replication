<?php include 'partials/header.php' ?>
<?php include 'partials/navbar_search.php' ?>

<div class="container">

    <p style='margin-top: 30px'>RECOMMENDED MOVIES</p>
    
        <?php
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
        ?>

</div>

<?php include 'partials/footer.php' ?>