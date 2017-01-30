<?php
require_once("includes/config.php");
//now we can use our config file
include(ROOT_PATH . "../includes/header.php");
?>

<div class="bismillah img-responsive text-center hidden-sm hidden-md hidden-lg"><img src="img/indexImg/bismillah.jpeg" width="60%"></div>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><!--Bashir Rafiq-->
                    <strong>More</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4">
                <hr>
                <a href="more/conference.php">
                    <h2 class="intro-text text-center">
                        <strong>CONFERENCE ON DELIVERANCE OF JESUS CHRIST FROM THE CROSS</strong>
                    </h2>
                    <hr>

                    <img class="img-responsive img-border img-left img-thumbnail" src="img/indexImg/30%20Conference_2_result_Fotor.jpg" alt="">
                    <hr class="visible-xs">
                    <i><p class="text-center">First International Conference on The Deliverance of Jesus Christ from the cross</p></a></i>

            </div>
            <div class="col-sm-4">
                <hr>
                <a href="more/huzoorLetterToImamBashirRafiq.php">
                    <h2 class="intro-text text-center">
                        <strong>Huzoor Letter to Imam Bashir Rafiq</strong>
                    </h2>
                    <hr>

                    <img class="img-responsive img-border img-left img-thumbnail" src="img/moreImg/letterFromHuzoor.png" alt="">
                    <hr class="visible-xs">
                    <i><p class="text-center">Here is a letter from Huzoor to Imam Bashir Rafiq.</p></a></i>

            </div>
            <div class="col-sm-4">
                <hr>
                <a href="more/jazbaatEBismil.php">
                    <h2 class="intro-text text-center">
                        <strong>Jazbaat e Bismil letter written in Urdu</strong>
                    </h2>
                    <hr>

                    <img class="img-responsive img-border img-left img-thumbnail" src="img/moreImg/jazbaat-e-bismil_Fotor.jpg" alt="">
                    <hr class="visible-xs">
                    <i><p class="text-center">Here is a letter/poem on Jazbaat e Bismil</p></a></i>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<div class="col-lg-12 text-center">
    <ul class="pager">
        <li class="middle"><a href="index.php">Home</a>
        </li>
        <li class="middle"><a href="more.php">Back to Top</a>
        </li>
    </ul>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>&copy; <?php echo date("Y"); ?> BASHIR RAFIQ </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
