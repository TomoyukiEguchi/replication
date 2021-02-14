<?php 
include 'partials/header.php';
include 'partials/navbar.php';
include 'carousel.php';
?>

<div class="container">

    <div class="movieTrack">
        <p>WATCH WITH THE FAMILY</p>
        <section class="responsive slider">
            <?php
                $family = "SELECT * FROM watch_with_the_family";
                $f_result = mysqli_query($conn, $family);
                $f_queryResults = mysqli_num_rows($f_result);

                if ($f_queryResults > 0) {
                    while ($f_row = mysqli_fetch_assoc($f_result)){
                        echo "<a href='view.php?id=" . $f_row['movie_id'] . "'><div class='card-container'>";
                        echo "<img style='height: 150px;' src=images/" . $f_row['img_filename'] . ".jpeg>";
                        echo "<div class='card-title'>" . $f_row['title'] . "</div></div></a>";
                    }
                }
            ?>
        </section>
    </div>

    <div class="movieTrack" style="padding: 40px 0;">
        <p>GET IN THE HOLIDAY SPIRIT</p>
        <section class="responsive slider">
            <?php
                $holiday = "SELECT * FROM get_in_the_holiday_spirit";
                $h_result = mysqli_query($conn, $holiday);
                $h_queryResults = mysqli_num_rows($h_result);

                if ($h_queryResults > 0) {
                    while ($h_row = mysqli_fetch_assoc($h_result)){
                        echo "<a href='view.php?id=" . $h_row['movie_id'] . "'><div class='card-container'>";
                        echo "<img style='height: 150px;' src=images/" . $h_row['img_filename'] . ".jpeg>";
                        echo "<div class='card-title'>" . $h_row['title'] . "</div></div></a>";
                    }
                }
            ?>                
        </section>
    </div>
</div>

<?php include 'partials/footer.php' ?>