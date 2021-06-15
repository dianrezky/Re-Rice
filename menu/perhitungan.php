<?php

  include_once('../header.php');

?>
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/style.css">
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/themify-icons.css">
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/nice-select.css">
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/flaticon.css">
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/gijgo.css">
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/animate.min.css">
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/slick.css">
    <link rel="stylesheet" href="/TUBES_AI/assets/perhitungan/css/slicknav.css">


    
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Ketahui Tingkat Kematangan Nasi Yang Kalian Buat Disini!</h3>
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                <a href="info.php" class="boxed-btn3">INFO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div class="info text-center">
                                <h4>Perhitungan Fuzzy Mamdani</h4>
                                <p>Menghitung Tingkat Kematangan Beras</p>
                            </div>
                            <form method="POST" action="/TUBES_AI/menu/hasil.php">
                                <div class="form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h6>Suhu (°C)</h6>
                                            <input type="number" class="col-lg-12" name="suhu" id="suhu" placeholder="Masukkan Suhu (1-125°C)"/>
                                            <br></br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6>Waktu (menit)</h6>
                                            <input type="number" class="col-lg-12" name="waktu" id="waktu" placeholder="Masukkan Lama Waktu (0-50 menit)"/>
                                            <br></br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6>Air (ml)</h6>
                                            <input type="number" class="col-lg-12" name="air" id="air" placeholder="Masukkan Banyak Air (0-2000 ml)"/>
                                            <br></br>
                                        </div>
                                        <div class="col-lg-12">
                                            <h6>Beras (ml)</h6>
                                            <input type="number" class="col-lg-12" name="beras" id="beras" placeholder="Masukkan Banyak Beras (0-1000 ml)"/>
                                            <br></br>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit_btn">
                                    <button class="boxed-btn3" name="submit" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->



    <?php

        include_once("../footer.php");

    ?>
  
    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="/TUBES_AI/assets/perhitungan/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/popper.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/bootstrap.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/owl.carousel.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/isotope.pkgd.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/ajax-form.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/waypoints.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/jquery.counterup.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/imagesloaded.pkgd.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/scrollIt.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/jquery.scrollUp.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/wow.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/nice-select.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/jquery.slicknav.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/jquery.magnific-popup.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/plugins.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/gijgo.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/slick.min.js"></script>



    <!--contact js-->
    <script src="/TUBES_AI/assets/perhitungan/js/contact.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/jquery.ajaxchimp.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/jquery.form.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/jquery.validate.min.js"></script>
    <script src="/TUBES_AI/assets/perhitungan/js/mail-script.js"></script>


    <script src="/TUBES_AI/assets/perhitungan/js/main.js"></script>
</body>

</html>