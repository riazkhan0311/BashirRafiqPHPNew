<?php
require_once("../includes/config.php");
//now we can use our config file
include(ROOT_PATH . "../includes/header.php");
?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Huzoor Letter To Imam Bashir Rafiq</strong>
                </h2>
                <hr>
                <!--<img class="img-responsive img-border img-left" src="../img/index/threeWiseMen.jpg" alt="">-->
                <hr class="visible-xs">
                <div class="chapterContent">

                    <img class="img-responsive img-border img-center" src="../img/moreImg/huzoor-letter-to-imam-bashir-rafiq.jpg" alt="">


                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="middle"><a href="../index.php">Home</a>
                        </li>
                        <li class="middle"><a href="../more.php">Back to More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container -->

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
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
