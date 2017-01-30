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
                <h2 class="intro-text text-center">Contact
                    <strong>Munir Rafiq</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <!--<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.3524396066755!2d-0.2095090838822433!3d51.45168527962605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760f41d9143f0d%3A0x356cb98157df3d44!2s16+Gressenhall+Rd%2C+London+SW18+5QL%2C+UK!5e0!3m2!1sen!2sus!4v1484675518238" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong>+44 20 9999 9999</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:name@example.com">name@example.com</a></strong>
                </p>
                <p>Address:
                    <strong>16 Gressenhall Rd,
                        <br>London SW18 5QL, UK</strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!--<div class="row">-->
    <!--<div class="box">-->
    <!--<div class="col-lg-12">-->
    <!--<hr>-->
    <!--<h2 class="intro-text text-center">Contact-->
    <!--<strong>Munir Rafiq</strong>-->
    <!--</h2>-->
    <!--<hr>-->
    <!--<p>Please email or call Munir Rafiq for any questions you may have about Bashir Rafiq.</p>-->
    <!--<form role="form">-->
    <!--<div class="row">-->
    <!--<div class="form-group col-lg-4">-->
    <!--<label>Name</label>-->
    <!--<input type="text" class="form-control">-->
    <!--</div>-->
    <!--<div class="form-group col-lg-4">-->
    <!--<label>Email Address</label>-->
    <!--<input type="email" class="form-control">-->
    <!--</div>-->
    <!--<div class="form-group col-lg-4">-->
    <!--<label>Phone Number</label>-->
    <!--<input type="tel" class="form-control">-->
    <!--</div>-->
    <!--<div class="clearfix"></div>-->
    <!--<div class="form-group col-lg-12">-->
    <!--<label>Message</label>-->
    <!--<textarea class="form-control" rows="6"></textarea>-->
    <!--</div>-->
    <!--<div class="form-group col-lg-12">-->
    <!--<input type="hidden" name="save" value="contact">-->
    <!--<button type="submit" class="btn btn-default">Submit</button>-->
    <!--</div>-->
    <!--</div>-->
    <!--</form>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

</div>
<!-- /.container -->
<div class="col-lg-12 text-center">
    <ul class="pager">
        <li class="middle"><a href="contact.php">Back to Top</a>
        </li>
        <!--<li class="next"><a href="#">Newer &rarr;</a>-->
        <!--</li>-->
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
