<?php

  include_once('../header.php');

?>
	<br></br>
	<br></br>

	<section class="ftco-section services-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Input Yang Digunakan</h2>
            <p>Dibawah Ini Merupakan Input Yang Digunakan Untuk Perhitungan Fuzzy Mamdani</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex align-items-center">
            	<div class="icon d-flex align-items-center justify-content-center order-md-last">
            		
            	</div>
              <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                <h3 class="heading">Waktu</h3>
                <p class="mb-0"  align="justify">Pada sistem ini, lama waktu yang diinputkan pada sistem kami yaitu mulai dari rentang 0 – 60 menit. Jika kita lihat rentang waktu memasak nasi berdasarkan hasil percobaan yang dilakukan (memasak nasi setiap harinya) dan juga jurnal yang sudah ada, bahwa waktu memasak nasi secara umum hingga beras tersebut matang berada pada menit 30.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex align-items-center">
            	<div class="icon d-flex align-items-center justify-content-center">
					<span></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">Air</h3>
                <p class="mb-0"  align="justify">Pada sistem ini, jumlah air yang diinputkan pada sistem kami yaitu mulai dari rentang 0 – 2000ml. Berdasarkan hasil pencarian yang kami lakukan terkait jumlah air yang dibutuhkan untuk menghasilkan tingkat kematangan nasi yang pulen adalah 1:2. Dimana 1 untuk beras dan 2 untuk air. Jika kita ingin mengasilkan tingkat kematangan yang bubur, maka perbandingannya adalah 1:3.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex align-items-center">
            	<div class="icon d-flex align-items-center justify-content-center order-md-last">
            		<span></span>
            	</div>
              <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                <h3 class="heading">Suhu</h3>
                <p  align="justify">Pada sistem ini, besaran suhu yang diinputkan pada sistem kami yaitu mulai dari rentang 0 – 125 °C. Berdasarkan jurnal yang kami temukan mengenai suhu pada rice cooker, pada suhu  0 – 60°C  masuk kedalam tahapan menyerap air dimana dapat disimpulkan bahwa masuk pada kategori rendah. Kemudian diketahui bahwa rice cooker akan mempertahankan suhu (warming) pada suhu 60 – 110°C sehingga masuk pada kategori normal. Pada suhu  100 – 125°C masuk kedalam tahapan mendidih sehingga masuk pada kategori tinggi.</p>
              </div>
            </div>      
          </div>
					<div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex align-items-center">
            	<div class="icon d-flex align-items-center justify-content-center">
            		<span></span>
            	</div>
              <div class="media-body pl-4">
                <h3 class="heading">Beras</h3>
                <p  align="justify">Pada sistem ini, jumlah beras yang dapat dihitung pada sistem kami dimulai dari range 0 – 1000 ml. Hal ini disesuaikan berdasarkan referensi yang kita dapatkan sebelumnya. Jika kita lihat ukuran yang berada pada baskom untuk memasak nasi pada rice cooker kecil memiliki nilai maksimal 1L sehingga kami memutuskan untuk nilai maksimal pada inputan jumlah beras yaitu 1000ml.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>


	<section class="ftco-section ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 style="color:aliceblue">Grafik Fungsi Keanggotaan</h2>
			<br></br> 
          </div>
        </div>
    		<div class="row justify-content-center">
    		<table>
                <tr>
                    <td>
                        <h2 align="center" style="color:aliceblue">Suhu</h2>
                        <br></br> 
                        <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_suhu1.jpg">
                    </td>
					<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                    <td>
                    	<h3 align="center" style="color:aliceblue">Air</h3>
                        <br></br> 
                        <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_air1.jpg">
                    </td>
                </tr>
                <tr><td><br></br><br></br></td></tr>
				<tr><td></td></tr>
                <tr>
                	<td>
                        <h3 align="center" style="color:aliceblue">Waktu</h3>
                        <br></br> 
                        <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_waktu1.jpg">
                    </td>
					<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
                    <td>
                    	<h2 align="center" style="color:aliceblue">Beras</h2>
                        <br></br> 
                        <img src="/TUBES_AI/assets/hasil/img/doctor/grafik_beras1.jpg">
                    </td>
                </tr>
            </table>
	        </div>
        </div>
    	</div>
    </section>

	<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Daftar Rules</h2>
            <h5>Dibawah Ini Merupakan Daftar Rules Yang Digunakan Untuk Perhitungan Ini</h5>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="table-responsive">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr>
						        <th>No</th>
						        <th>Rules</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td class="color">1</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">2</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
						      <tr>
						        <td class="color">3</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
						      <tr>
						        <td class="color">4</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">5</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
						      <tr>
						        <td class="color">6</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">7</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">8</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">9</td>
						        <td>IF SUHU = RENDAH AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">10</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">11</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">12</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">13</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">14</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">15</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">16</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">17</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">18</td>
						        <td>IF SUHU = RENDAH AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">19</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">20</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">21</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">22</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">23</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">24</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">25</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">26</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">27</td>
						        <td>IF SUHU = RENDAH AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">28</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">29</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">30</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">31</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">32</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">33</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">34</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">35</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">36</td>
						        <td>IF SUHU = NORMAL AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">37</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">38</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">39</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">40</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">41</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">42</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">43</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">44</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">45</td>
						        <td>IF SUHU = NORMAL AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">46</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">47</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">48</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = BUBUR</td>
						      </tr>
							  <tr>
						        <td class="color">49</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">50</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">51</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">52</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">53</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">54</td>
						        <td>IF SUHU = NORMAL AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">55</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">56</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">57</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">58</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">59</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">60</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">61</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">62</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">63</td>
						        <td>IF SUHU = TINGGI AND AIR = SEDIKIT AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">64</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">65</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">66</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">67</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG</td>
						      </tr>
							  <tr>
						        <td class="color">68</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">69</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG r</td>
						      </tr>
							  <tr>
						        <td class="color">70</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">71</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">72</td>
						        <td>IF SUHU = TINGGI AND AIR = NORMAL AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">73</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = CEPAT THEN HASIL BERAS = BUBUR</td>
						      </tr>
							  <tr>
						        <td class="color">74</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = SEDANG THEN HASIL BERAS = BUBUR</td>
						      </tr>
							  <tr>
						        <td class="color">75</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = SEDIKIT AND WAKTU = LAMBAT THEN HASIL BERAS = BUBUR</td>
						      </tr>
							  <tr>
						        <td class="color">76</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = CEPAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">77</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = SEDANG THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">78</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = SEDANG AND WAKTU = LAMBAT THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">79</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = CEPAT THEN HASIL BERAS = TIDAK MATANG </td>
						      </tr>
							  <tr>
						        <td class="color">80</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = SEDANG THEN HASIL BERAS = PULEN</td>
						      </tr>
							  <tr>
						        <td class="color">81</td>
						        <td>IF SUHU = TINGGI AND AIR = BANYAK AND BERAS = BANYAK AND WAKTU = LAMBAT THEN HASIL BERAS = PULEN</td>
						      </tr>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    	</div>
    </section>

	<section class="ftco-section ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 style="color:aliceblue">Grafik Fungsi Keanggotaan Output</h2>
			<br></br> 
          </div>
        </div>
    		<div class="row justify-content-center">
				<img src="/TUBES_AI/grafik_hasilberas.jpg">	
	        </div>
        </div>
    	</div>
    </section>


	

	<?php

		include_once("../footer.php");

	?>
</html>