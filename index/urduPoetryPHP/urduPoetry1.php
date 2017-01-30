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
                    <strong>Urdu Poetry 1</strong>
                </h2>
                <hr>

                <hr class="visible-xs">
                <div class="chapterContent">
                    <div class="urduPoetry">
                        <p>گلاب آنکھیں ، شراب آنکھیں</p>
                        <p>یہی تو ہیں لاجواب آنکھیں</p>
                        <p>اِنہیں میں الفت ، اِنہیں میں نفرت</p>
                        <p>ثواب آنکھیں ، عذاب آنکھیں</p>
                        <br>
                        <p>کبھی نظر میں بلا کی شوخی</p>
                        <p>کبھی سراپا حجاب آنکھیں .</p>
                        <p>کبھی چُھپاتی ہیں راز دل کے</p>
                        <p>کبھی ہیں دل کی کتاب آنکھیں</p>
                        <br>
                        <p>کسی نے دیکھی تو جھیل جیسی</p>
                        <p>کسی نے پائیں سراب آنکھیں</p>
                        <p>وە آئے تو لوگ مجھ سے بولے</p>
                        <p>حضور آنکھیں،جناب آنکھیں</p>
                        <br>
                        <p>عجیب تھا گفتگو کا عالم</p>
                        <p>سوال کوئی ، جواب آنکھیں</p>
                        <p>یہ مست مست بےمثال آنکھیں</p>
                        <p>مصوری کا کمال آنکھیں</p>

                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="middle"><a href="../../index.php">Home</a>
                        </li>
                        <li class="middle"><a href="../urduPoetry.php">Back to Urdu Poetry</a>
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
