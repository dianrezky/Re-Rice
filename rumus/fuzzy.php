<?php

    //nilai grafik suhu 

    function nilai_grafiksuhu($suhu){
        if (suhu_rendah($suhu)!=0) {
            echo "Rendah (" . suhu_rendah($suhu) . ")";
            echo "<br>";
        }
        if (suhu_normal($suhu) != 0) {
            echo "Normal (" . suhu_normal($suhu) . ")";
            echo "<br>";
        }
        if (suhu_maksimal($suhu) != 0) {
            echo "Tinggi (" . suhu_maksimal($suhu) . ")";
            echo "<br>";
        }
        echo "<br>";
    }

    //nilai grafik air
    function nilai_grafikair($air){
        if (air_sedikit($air)!=0) {
            echo "Sedikit (" . air_sedikit($air) . ")";
            echo "<br>";
        }
        if (air_normal($air) != 0) {
            echo "Normal (" . air_normal($air) . ")";
            echo "<br>";
        }
        if (air_banyak($air) != 0) {
            echo "Banyak (" . air_banyak($air) . ")";
            echo "<br>";
        }
        echo "<br>";
    }

    //nilai grafik waktu

    function nilai_grafikwaktu($waktu){
        if (waktu_cepat($waktu)!=0) {
            echo "Cepat (" . waktu_cepat($waktu) . ")";
            echo "<br>";
        }
        if (waktu_sedang($waktu) != 0) {
            echo "Sedang (" . waktu_sedang($waktu) . ")";
            echo "<br>";
        }
        if (waktu_lambat($waktu) != 0) {
            echo "Lambat (" . waktu_lambat($waktu) . ")";
            echo "<br>";
        }
        echo "<br>";
    }

    //nilai grafik beras

    function nilai_grafikberas($beras){
        if (beras_sedikit($beras)!=0) {
            echo "Sedikit (" . beras_sedikit($beras) . ")";
            echo "<br>";
        }
        if (beras_sedang($beras) != 0) {
            echo "Sedang (" . beras_sedang($beras) . ")";
            echo "<br>";
        }
        if (beras_banyak($beras) != 0) {
            echo "Banyak (" . beras_banyak($beras) . ")";
            echo "<br>";
        }
        echo "<br>";
    }

    //Hasil Fuzzifikasi

    function hasil_fuzzifikasi($suhu, $air, $beras, $waktu){
        
        nilai_grafiksuhu($suhu);
        nilai_grafikair($air);
        nilai_grafikberas($beras);
        nilai_grafikwaktu($waktu);
    }

    //INFERENSI

    function inferensi($suhu, $air, $beras, $waktu){

        $x = 0; 
        $no = 1;
        $kondisi = [];

        $kondisi_suhu_print =["Rendah", "Normal", "Tinggi"];
        $kondisi_waktu_print =["Cepat", "Sedang", "Lambat"];
        $kondisi_beras_print =["Sedikit", "Sedang", "Banyak"];
        $kondisi_air_print =["Sedikit", "Normal", "Banyak"];

        $nilaisuhu = [suhu_rendah($suhu), suhu_normal($suhu), suhu_maksimal($suhu)];
        $nilaiwaktu = [waktu_cepat($waktu), waktu_sedang($waktu), waktu_lambat($waktu)];
        $nilaiberas = [beras_sedikit($beras), beras_sedang($beras), beras_banyak($beras)];
        $nilaiair = [air_sedikit($air), air_normal($air), air_banyak($air)];

        /*
        $nilai_i = count($nilaisuhu);
        echo"Nilai i adalah $nilai_i";

        $nilai_j = count($nilaiwaktu);
        echo"Nilai j adalah $nilai_j";

        $nilai_k = count($nilaiwaktu);
        echo"Nilai k adalah $nilai_k";

        $nilai_l = count($nilaiair);
        echo"Nilai l adalah $nilai_l";
        */
        
        //i = suhu 
        //j = waktu
        //k = beras
        //l = air

        for($i=0;$i<3;$i++){
            for($j=0;$j<3;$j++){
                for($k=0;$k<3;$k++){
                    for($l=0;$l<3;$l++){
                        if( ($nilaisuhu[$i]>0) && ($nilaiwaktu[$j]>0) && ($nilaiberas[$k]>0) && ($nilaiair[$l]>0) ){
                            
                            $minimal[$x] = min($nilaisuhu[$i], $nilaiwaktu[$j], $nilaiberas[$k], $nilaiair[$l] );
                                
                                //SUHU NORMAL PULEN

                                //suhu normal; air normal; beras sedikit & sedang; waktu sedang&lambat
                                if(($i==1) && ($j>0) && ($k<=1) && ($l==1)){
                                    $kondisi[$x] = "Pulen";
                                }                                
                                //suhu normal; air banyak; beras sedikit; waktu sedang
                                else if(($i==1) && ($j==1) && ($k==0) && ($l==2)){
                                    $kondisi[$x] = "Pulen";
                                }
                                //suhu normal; air banyak; beras sedang; waktu sedang&lambat
                                else if(($i==1) && ($j>0) && ($k==1) && ($l==2)){
                                    $kondisi[$x] = "Pulen";
                                }
                                //suhu normal; air banyak; beras banyak; waktu lambat
                                else if(($i==1) && ($j==2) && ($k==2) && ($l==2)){
                                    $kondisi[$x] = "Pulen";
                                }

                                //SUHU TINGGI PULEN

                                //suhu tinggi; air normal; beras sedikit; waktu cepat&sedang&lambat
                                else if(($i==2) && ($j>=0) && ($k==0) && ($l==1)){
                                    $kondisi[$x] = "Pulen";
                                }
                                //suhu tinggi; air banyak; beras sedang; waktu cepat&sedang&lambat
                                else if(($i==2) && ($j>=0) && ($k==1) && ($l==2)){
                                    $kondisi[$x] = "Pulen";
                                }
                                //suhu tinggi; air banyak; beras banyak; waktu sedang&lambat
                                else if(($i==2) && ($j>0) && ($k==2) && ($l==2)){
                                    $kondisi[$x] = "Pulen";
                                }

                                //KASUS BUBUR
                                
                                //suhu normal; air banyak; beras sedikit; waktu lambat
                                else if(($i==1) && ($j==2) && ($k==0)  && ($l==2)){
                                    $kondisi[$x] = "Bubur";
                                }
                                else if(($i==2) && ($j>=0) && ($k==0)  && ($l==2)){
                                    $kondisi[$x] = "Bubur";
                                }
                                else{
                                    $kondisi[$x] = "Tidak Matang";
                                }
                                
                                echo "<font color='#ffffff'><p>"."IF Suhu ". $kondisi_suhu_print[$i] . " = " . $nilaisuhu[$i] . " AND Waktu ". $kondisi_waktu_print[$j] . " = ". $nilaiwaktu[$j] . " AND Beras ". $kondisi_beras_print[$k] . " = ". $nilaiberas[$k] . " AND Air ". $kondisi_air_print[$l] . " = " . $nilaiair[$l] . " THEN Hasil Nasi = " . $kondisi[$x] . " (" . $minimal[$x] . ")</font></p><br>";
                                echo"<font color='#ffffff'><p>"."------------------------------------------------------------------------------------------------------------------------</font></p><br>";
                                $x++;
                        }
                        $no++;
                        //echo"<font color='#ffffff'>$no<br>";

                    }
                }
            }
        }

        //NILAI FUZZY OUPUT

        $nilai_tidakmatang = 0;
        $nilai_pulen = 0;
        $nilai_bubur = 0;

        for($m=0;$m<$x;$m++){
            if($kondisi[$m]=="Bubur"){
                $nilai_bubur = max($minimal[$m], $nilai_bubur);
            }
            else if($kondisi[$m]=="Pulen"){
                $nilai_pulen = max($minimal[$m], $nilai_pulen);
            }
            else{
                $nilai_tidakmatang = max($minimal[$m], $nilai_tidakmatang);
            }
        }

        //DEFUZZIFIKASI

        //$nilai_y = ( ((5+10+15+20)*$nilai_tidakmatang) + ((35+38+41+44+47+50+53+56+59+62+65)*$nilai_pulen) + ((70+80+90+100)*$nilai_bubur) )/( (4*$nilai_tidakmatang) + (6*$nilai_pulen) + (4*$nilai_bubur) );
        
        echo "<br><br><u><font color='#ffffff'><h3>" . "Hasil Inferensi" ."</font></h3></u><br><br>";
        echo "<font color='#ffffff'><p>" . "Nilai Tidak Matang \t= " . $nilai_tidakmatang ."</font></p>";
        echo "<font color='#ffffff'><p>" . "Nilai Pulen \t= " . $nilai_pulen ."</font></p>";
        echo "<font color='#ffffff'><p>" . "Nilai Bubur \t= " . $nilai_bubur ."</font></p><br><br>";
        
        
        echo "<u><font color='#ffffff'><h3>" . "Hasil Defuzzifikasi" ."</font></h3></u><br><br>";

        echo'<img src="/TUBES_AI/grafik_hasilberas.jpg"><br><br><br><br>';

        //TIDAK MATANG
        if(($nilai_tidakmatang!=0)&&($nilai_pulen==0)&&($nilai_bubur==0)){
            echo '<img src="https://latex.codecogs.com/svg.latex?{\color{White}y*&space;=&space;\frac{((2&plus;4&plus;6&plus;8&plus;10&plus;12&plus;14&plus;16&plus;18&plus;20))*'.$nilai_tidakmatang.')&plus;0&plus;0}{(10*'.$nilai_tidakmatang.')&plus;0&plus;0}"/>';
            $nilai_y = ( (2+4+6+8+10+12+14+16+18+20)*$nilai_tidakmatang)/(10*$nilai_tidakmatang);   
        }
        //HANYA BUBUR
        else if(($nilai_tidakmatang==0)&&($nilai_pulen==0)&&($nilai_bubur!=0)){
            echo '<img src="https://latex.codecogs.com/svg.latex?{\color{White}y*&space;=&space;\frac{0&plus;0&plus;((80&plus;82&plus;84&plus;86&plus;88&plus;90&plus;92&plus;94&plus;96&plus;98)*'.$nilai_bubur.')}{0&plus;0&plus;(10*'.$nilai_bubur.')}"/>';
            $nilai_y = ((80+82+84+86+88+90+92+94+96+98)*$nilai_bubur)/(10*$nilai_bubur);   
        }
        //HANYA PULEN
        else if(($nilai_tidakmatang==0)&&($nilai_pulen!=0)&&($nilai_bubur==0)){
            echo '<img src="https://latex.codecogs.com/svg.latex?{\color{White}y*&space;=&space;\frac{0&plus;((40&plus;42&plus;44&plus;46&plus;48&plus;50&plus;52&plus;54&plus;58&plus;60)*'.$nilai_pulen.')&plus;0}{(10*'.$nilai_pulen.')&plus;0&plus;0}"/>';
            $nilai_y = ((40+42+44+46+48+50+52+54+58+60)*$nilai_pulen)/((10*$nilai_pulen));   
        }
        // TIDAK MATANG DAN PULEN
        else if(($nilai_tidakmatang!=0)&&($nilai_pulen!=0)&&($nilai_bubur==0)){
            echo '<img src="https://latex.codecogs.com/svg.latex?{\color{White}y*&space;=&space;\frac{((4&plus;8&plus;12&plus;16&plus;20))*'.$nilai_tidakmatang.')&plus;((35&plus;40&plus;45&plus;50&plus;55&plus;60)*'.$nilai_pulen.')&plus;0}{(5*'.$nilai_tidakmatang.')&plus;(5*'.$nilai_pulen.')&plus;0}"/>';
            $nilai_y = (((4+8+12+16+20)*$nilai_tidakmatang) + ((44+48+52+56+60)*$nilai_pulen))/( (5*$nilai_tidakmatang) + (5*$nilai_pulen) );   
        }
        //PULEN DAN BUBUR
        else if(($nilai_tidakmatang==0)&&($nilai_pulen!=0)&&($nilai_bubur!=0)){
            echo '<img src="https://latex.codecogs.com/svg.latex?{\color{White}y*&space;=&space;\frac{0&plus;((44&plus;48&plus;52&plus;56&plus;60)*'.$nilai_pulen.')&plus;((84&plus;88&plus;92&plus;96&plus;100)*'.$nilai_bubur.')}{0&plus;(5*'.$nilai_pulen.')&plus;(5*'.$nilai_bubur.')}"/>';
            $nilai_y = ( ((44+48+52+56+60)*$nilai_pulen) + ((84+88+92+96+100)*$nilai_bubur) )/((5*$nilai_pulen) + (5*$nilai_bubur));   
        }
        
        echo"<br></br><br></br>";
       
        echo "<font color='#ffffff'><h3>" . "Tingkat Kematangan Nasi (y*) = " .round($nilai_y,2)."</font></h3><br><br>";
    }


    // SUHU

    function suhu_rendah($suhu){

        $nilai_suhurendah = 0;

        if($suhu<=60){
            $nilai_suhurendah = 1;
        }
        else{
            if($suhu>60 && $suhu<70){
                $nilai_suhurendah = (70-$suhu)/10;
            }
            else{
                $nilai_suhurendah = 0;
            }
        }
        

        return $nilai_suhurendah;

    }

    function suhu_normal($suhu){

        $nilai_suhunormal = 0;

        if($suhu>=60 && $suhu<110){
            if($suhu>=90 && $suhu<=100){
                $nilai_suhunormal = 1;
            }
            else{
                if($suhu>=60 && $suhu<90){
                    $nilai_suhunormal = ($suhu-60)/30;
                }
                else{
                    if($suhu > 100 && $suhu<=110){
                        $nilai_suhunormal = (110-$suhu)/10;
                    }
                    else{
                        $nilai_suhunormal = 0;
                    }
                }
            }
        }

        return $nilai_suhunormal;
    
    }

    function suhu_maksimal($suhu){
        
        $nilai_suhumaksimal = 0;

        if($suhu>=100 && $suhu<125){
            if($suhu>=110 && $suhu<=120){
                $nilai_suhumaksimal = 1;
            }
            else{
                if($suhu>=100 && $suhu<110){
                    $nilai_suhumaksimal = ($suhu-100)/(110-100);
                }
                else{
                    if($suhu > 120 && $suhu<=125){
                        $nilai_suhumaksimal = (125-$suhu)/(125-120);
                    }
                    else{
                        $nilai_suhumaksimal = 0;
                    }
                }
            }
        }

        return $nilai_suhumaksimal;

    }


    //AIR

    
    function air_sedikit($air){

        $nilai_airsedikit = 0;

        if($air<=400){
            $nilai_airsedikit = 1;
        }
        else{
            if($air>400 && $air<600){
                $nilai_airsedikit = (600-$air)/200;
            }
            else{
                $nilai_airsedikit = 0;
            }
        }

        return $nilai_airsedikit;
    }

    function air_normal($air){

        $nilai_airnormal = 0;

        if($air>=400 && $air<1000){
            if($air>=600 && $air<=800){
                $nilai_airnormal = 1;
            }
            else{
                if($air>=400 && $air<600){
                    $nilai_airnormal = ($air-400)/200;
                }
                else{
                    if($air > 800 && $air<=1000){
                        $nilai_airnormal = (1000-$air)/200;
                    }
                    else{
                        $nilai_airnormal = 0;
                    }
                }
            }
        }

        return $nilai_airnormal;

    }

    function air_banyak($air){

        $nilai_airbanyak = 0;

        if ($air >= 1000) {
            $nilai_airbanyak = 1;
        } 
        else {
            if ($air >= 800 && $air < 1000) {
                $nilai_airbanyak = ($air-800) / 200;
            } 
            else {
                $nilai_airbanyak = 0;
            }
        }

        return $nilai_airbanyak;
    }

    //BERAS


    function beras_sedikit($beras){

        $nilai_berassedikit = 0;

        if($beras<=320){
            $nilai_berassedikit = 1;
        }
        else{
            if($beras>320 && $beras<480){
                $nilai_berassedikit = (480-$beras)/(480-320);
            }
            else{
                $nilai_berassedikit = 0;
            }
        }

        return $nilai_berassedikit;
    }

    function beras_sedang($beras){

        $nilai_berassedang = 0;

        if($beras>=320 && $beras<800){
            if($beras>=480 && $beras<=640){
                $nilai_berassedang = 1;
            }
            else{
                if($beras>=320 && $beras<480){
                    $nilai_berassedang = ($beras-320)/(480-320);
                }
                else{
                    if($beras > 640 && $beras<=800){
                        $nilai_berassedang = (800-$beras)/(800-640);
                    }
                    else{
                        $nilai_berassedang = 0;
                    }
                }
            }
        }

        return $nilai_berassedang;

    }

    function beras_banyak($beras){

        $nilai_berasbanyak = 0;

        if ($beras >= 800) {
            $nilai_berasbanyak = 1;
        } 
        else {
            if ($beras >= 640 && $beras < 800) {
                $nilai_berasbanyak = ($beras-640) / (800-640);
            } 
            else {
                $nilai_berasbanyak = 0;
            }
        }

        return $nilai_berasbanyak;
    }

    //WAKTU

    function waktu_cepat($waktu){

        $nilai_waktucepat = 0;

        if($waktu<=15){
            $nilai_waktucepat = 1;
        }
        else{
            if($waktu>15 && $waktu<25){
                $nilai_waktucepat = (25-$waktu)/10;
            }
            else{
                $nilai_waktucepat = 0;
            }
        }

        return $nilai_waktucepat;
    }

    function waktu_sedang($waktu){

        $nilai_waktusedang = 0;

        if($waktu>=20 && $waktu<35){
            if($waktu==30){
                $nilai_waktusedang = 1;
            }
            else{
                if($waktu>=20 && $waktu<30){
                    $nilai_waktusedang = ($waktu-20)/10;
                }
                else{
                    if($waktu > 30 && $waktu<=35){
                        $nilai_waktusedang = (35-$waktu)/5;
                    }
                    else{
                        $nilai_waktusedang = 0;
                    }
                }
            }
        }

        return $nilai_waktusedang;

    }

    function waktu_lambat($waktu){

        $nilai_waktulambat = 0;

        if ($waktu >= 40) {
            $nilai_waktulambat = 1;
        } 
        else {
            if ($waktu > 30 && $waktu < 40) {
                $nilai_waktulambat = ($waktu-30)/(40-30);
            } 
            else {
                $nilai_waktulambat = 0;
            }
        }

        return $nilai_waktulambat;
    }



?>