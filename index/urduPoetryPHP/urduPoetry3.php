<?php
require_once("../../includes/config.php");
//now we can use our config file
include(ROOT_PATH . "../includes/header.php");
?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Urdu Poetry 3</strong>
                </h2>
                <hr>

                <hr class="visible-xs">
                <div class="col-lg-6">
                    <img class="img-responsive img-center img-border img-thumbnail" src="../../img/urduPoetryImg/poetry3_1.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <img class="img-responsive img-center img-border img-thumbnail" src="../../img/urduPoetryImg/poetry3_2.jpg" alt="">
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="middle"><a href="../../index.html">Home</a>
                        </li>
                        <li class="middle"><a href="../urduPoetry.html">Back to Urdu Poetry</a>
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
                <p>Copyright &copy; Bashir Rafiq 2016</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="../../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
