<?php include 'partials/header.php' ?>

<div class="homecarousel-container">
    <i class="fa fa-chevron-left" id="prevBtn"></i>
    <i class="fa fa-chevron-right" id="nextBtn"></i>
    
    <div class="homecarousel-slide">
        <?php 
            $sql = "SELECT * FROM watch_with_the_family";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if ($queryResults > 0) {
                echo "<img src=images/nancy_drew_and_the_hidden_staircase.jpeg id='lastClone' alt=''>";
                while ($row=mysqli_fetch_assoc($result)){
                    echo "<a href='view.php?id=" . $row['movie_id'] . "'>";
                    echo "<div class='text-block'>";
                    echo "<p>" . $row['title']. "</p></div></a>";
                    echo "<img src=images/" . $row['img_filename'] . ".jpeg alt=''>";
                }
                echo "<img src=images/ice_age_continental_drift.jpeg id='firstClone' alt=''>";
            }
        ?>
    </div>
    <!--<div class="image_overlay"></div>-->
</div>
