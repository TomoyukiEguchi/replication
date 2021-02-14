<?php include 'partials/header.php'; ?>
<div class="hbo-nav container">
    <div>
        <div class='hamburger' style="padding-top: 5px;">
            <div class='line'></div>
            <div class='line'></div>
            <div class='line'></div>
        </div>
    </div>
    <div class="d-flex justify-content-between" style="padding-left: 50px;">
        <form action="search.php" method="POST" id="search">
            <div><a href=index.php><i class="fa fa-times"></i></a>
                <input type="text" name="search" placeholder="SEARCH FOR A TITLE" size="50">
                <button type="submit" name="submit-search">Search</button>
            </div>
        </form>
        <!--<div style="color: #ffffff"><a href=index.php>HBO</a></div>-->
        <div class="d-flex">
            <div>START YOUR FREE TRIAL</div>
            <div style="padding-left: 30px;">SIGN IN</div>
        </div>
    </div>
</div>

