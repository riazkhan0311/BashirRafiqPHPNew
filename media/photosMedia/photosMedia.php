<?php
require_once("../../includes/config.php");
//now we can use our config file
include(ROOT_PATH . "../includes/header.php");
?>

<div class="bismillah img-responsive text-center hidden-sm hidden-md hidden-lg"><img src="../../img/indexImg/bismillah.jpeg" width="60%"></div>

<div class="container">


    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><!--Bashir Rafiq-->
                    <strong>Pictures</strong>
                </h2>
                <hr>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="box">
                        <div class="col-lg-12 text-center">
                            <div id="carousel-example-generic" class="carousel slide">
                                <!-- Indicators -->
                                <ol class="carousel-indicators hidden-xs">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive img-full" src="../../img/aboutFamily/kidsAirport.JPG" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-full" src="../../img/aboutFamily/kidsAtZoo.JPG" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-full" src="../../img/aboutFamily/riazAndKids.JPG" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-full" src="../../img/aboutFamily/iftikhar.JPG" alt="">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="icon-prev"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix visible-md-block"></div>


        </div>
    </div>
</div>

<div class="col-lg-12 text-center">
    <ul class="pager">
        <li class="middle"><a href="../../index.html">Home</a>
        </li>
        <li class="middle"><a href="photosMedia.html">Back to Top</a>
        </li>
    </ul>
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

