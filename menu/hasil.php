<?php

    include_once('../header.php');

    //MENANGKAP DATA 


        $input_beras  = $_POST['beras'];
        $input_air    = $_POST['air'];
        $input_waktu  = $_POST['waktu'];
        $input_suhu   = $_POST['suhu'];

        if($input_beras>1000){
            echo "
                <script>
                    alert('Nilai Input Beras Lebih Dari 1000ml. Nilai Inputan Maksimal Yaitu 1000ml');
                    document.location.href='perhitungan.php';
                </script>
            ";
        }
        else if($input_air>2000){
            echo "
                <script>
                    alert('Nilai Input Air Lebih Dari 2000ml. Nilai Inputan Maksimal Yaitu 2000ml');
                    document.location.href='perhitungan.php';
                </script>
            ";

        }
        else if($input_suhu>124){
            echo "
            <script>
                alert('Nilai Input Suhu Lebih Dari 125°C. Nilai Inputan Maksimal Yaitu 125°C');
                document.location.href='perhitungan.php';
            </script>
        ";
        }
        else if(($input_air==NULL)||($input_suhu==NULL)||($input_waktu==NULL)||($input_beras==NULL)){
            echo "
            <script>
                alert('Pastikan Semua Kolom Diisi Semua');
                document.location.href='perhitungan.php';
            </script>
        ";
        }

    

    include('../rumus/fuzzy.php');

    //hasil_fuzzifikasi($input_suhu, $input_air, $input_beras, $input_waktu);
    //inferensi($input_suhu, $input_air, $input_beras, $input_waktu);


?>

    <link rel="icon" href="/TUBES_AI/assets/hasil/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/TUBES_AI/assets/hasil/css/style.css">


   
    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Inputan Yang Dimasukkan Oleh User</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="/TUBES_AI/assets/hasil/img/icon/temp.png" alt=""></span>
                            <h4>Besar Suhu</h4>
                            <p><b>Input : </b><?php echo $input_suhu ?> °C<br></p>
                            <p><b>Hasil Grafik :</b></p> 
                                <?php
                                    nilai_grafiksuhu($input_suhu);
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="/TUBES_AI/assets/hasil/img/icon/jam.png" alt=""></span>
                            <h4>Lama Waktu</h4>
                            <p><b>Input : </b><?php echo $input_waktu ?> menit<br></p>
                            <p><b>Hasil Grafik :</b></p> 
                                <?php
                                    nilai_grafikwaktu($input_waktu);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="/TUBES_AI/assets/hasil/img/ricecoker.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="/TUBES_AI/assets/hasil/img/icon/rice.png" alt=""></span>
                            <h4>Banyak Beras</h4>
                            <p><b>Input : </b><?php echo $input_beras ?> ml<br></p>
                            <p><b>Hasil Grafik :</b></p> 
                                <?php
                                    nilai_grafikberas($input_beras);
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="/TUBES_AI/assets/hasil/img/icon/drop-37730.png" alt=""></span>
                            <h4>Banyak Air</h4>
                            <p><b>Input : </b><?php echo $input_air ?> ml<br></p>
                            <p><b>Hasil Grafik :</b></p> 
                                <?php
                                    nilai_grafikair($input_air);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

     <!--::doctor_part start::-->
     <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Grafik Yang Digunakan Untuk Perhitungan </h2>
                        <br></br>
                       <table>
                            <tr>
                                <td>
                                    <br></br> 
                                    <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_suhu1.jpg">
                                </td>
                                <td>
                                    <h3 align="center" style="color:aliceblue">Air</h3>
                                    <br></br> 
                                    <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_air1.jpg">
                                </td>
                            </tr>
                            <tr><td><br></br><br></br></td></tr>
                            <tr>
                                <td>
                                    <br></br> 
                                    <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_waktu1.jpg">
                                </td>
                                <td>
                                    <br></br> 
                                    <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_beras1.jpg">
                                </td>
                            </tr>
                        </table>
                        <br></br><br></br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

    <center><h1><u style="color:#000000">Hasil Perhitungan</u></h1></center>
    <br></br>
    <br></br>
    
    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <h3><u style="color:aliceblue">Rules Yang Digunakan</u></h3>
                        <br></br>
                        <h5><?php inferensi($input_suhu, $input_air, $input_beras, $input_waktu);?></h5>
            
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <?php

        include_once("../footer.php");

    ?>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="/TUBES_AI/assets/hasil/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/TUBES_AI/assets/hasil/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/TUBES_AI/assets/hasil/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="/TUBES_AI/assets/hasil/js/owl.carousel.min.js"></script>
    <script src="/TUBES_AI/assets/hasil/js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="/TUBES_AI/assets/hasil/js/jquery.ajaxchimp.min.js"></script>
    <script src="/TUBES_AI/assets/hasil/js/jquery.form.js"></script>
    <script src="/TUBES_AI/assets/hasil/js/jquery.validate.min.js"></script>
    <script src="/TUBES_AI/assets/hasil/js/mail-script.js"></script>
    <script src="/TUBES_AI/assets/hasil/js/contact.js"></script>
    <!-- custom js -->
    <script src="/TUBES_AI/assets/hasil/js/custom.js"></script>
</body>

</html>