<?php 

$sehir = addslashes(strip_tags(htmlspecialchars(@$_GET["sehir"])));
$fgc = file_get_contents("https://deprem-api.herokuapp.com/?location=".$sehir);
$array = json_decode($fgc, true);
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
    <meta name="keywords" content="deprem, son deprem, son depremler, türkiye deprem, son dakika, türkiye deprem, Deprem Mi Oldu, Deprem çantası, Deprem Haritası, Deprem Nedir, Deprem Sigortası, Deprem Yönetmeliği, Deprem çantasında Neler Olmalı, Deprem Son, Deprem Twitter" />
    <meta name="description" content="Türkiyedeki Son Depremleri Ve Depremin Kaç Saat/Dakika Önce Olduğunu Söyleyen Web Sitesi. İsterseniz Şehrinizi Seçerek 'de Şehrinizdeki Son Depremleri Görebilirsiniz." />
    <meta name="abstract" content="Türkiyedeki Son Depremler ve Kaç Saat Önce Olduğu." />
    <meta name="author" content="İbrahim Ödev, www.ibrahimodev.tk" />
    <meta name="Copyright" content="@ İbrahim Ödev 2020" />
    <meta name="robots" content="index, follow">
    <meta name="language" content="Turkish">
    <meta name="revisit-after" content="7 days">
    <meta name="publisher" content="Visual Studio Code 2020" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859">
    <meta http-equiv="content-language" content="tr">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Son Depremler - İbrahim Ödev</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="sondepremler">
        <div class="container">
        <h1>Türkiyedeki Son Depremler</h1>
        <a href="detayli/" title="Detaylı Gösterim Sayfası">DETAYLI GÖSTERİM</a> -
        <a href="bilgilendirme.html" title="Bilgilendirme Sayfası">BİLGİLENDİRME</a> -
        <a href="depremaninda.html" title="Deprem Anında Sayfası">DEPREM ANINDA YAPILMASI GEREKENLER</a>
        </div>
      <div class="deprem">
      <div class="select">
        <form action="" method="get">
        <select name="sehir">
          <option value="">Şehir Seçiniz</option>
          <option value="adana">Adana</option>
          <option value="adiyaman">Adıyaman</option>
          <option value="afyonkarahisar">Afyonkarahisar</option>
          <option value="agri">Ağrı</option>
          <option value="amasya">Amasya</option>
          <option value="ankara">Ankara</option>
          <option value="antalya">Antalya</option>
          <option value="artvin">Artvin</option>
          <option value="aydin">Aydın</option>
          <option value="balikesir">Balıkesir</option>
          <option value="bilecik">Bilecik</option>
          <option value="bingol">Bingöl</option>
          <option value="bitlis">Bitlis</option>
          <option value="bolu">Bolu</option>
          <option value="burdur">Burdur</option>
          <option value="bursa">Bursa</option>
          <option value="canakkale">Çanakkale</option>
          <option value="cankiri">Çankırı</option>
          <option value="corum">Çorum</option>
          <option value="denizli">Denizli</option>
          <option value="diyarbakir">Diyarbakır</option>
          <option value="edirne">Edirne</option>
          <option value="elazıg">Elazığ</option>
          <option value="erzincan">Erzincan</option>
          <option value="erzurum">Erzurum</option>
          <option value="eskisehir">Eskişehir</option>
          <option value="gaziantep">Gaziantep</option>
          <option value="giresun">Giresun</option>
          <option value="gumushane">Gümüşhane</option>
          <option value="hakkari">Hakkâri</option>
          <option value="hatay">Hatay</option>
          <option value="isparta">Isparta</option>
          <option value="mersin">Mersin</option>
          <option value="istanbul">İstanbul</option>
          <option value="izmir">İzmir</option>
          <option value="kars">Kars</option>
          <option value="kastamonu">Kastamonu</option>
          <option value="kayseri">Kayseri</option>
          <option value="kirklareli">Kırklareli</option>
          <option value="kirsehir">Kırşehir</option>
          <option value="kocaeli">Kocaeli</option>
          <option value="konya">Konya</option>
          <option value="kutahya">Kütahya</option>
          <option value="malatya">Malatya</option>
          <option value="manisa">Manisa</option>
          <option value="kahramanmaras">Kahramanmaraş</option>
          <option value="mardin">Mardin</option>
          <option value="mugla">Muğla</option>
          <option value="mus">Muş</option>
          <option value="nevsehir">Nevşehir</option>
          <option value="nigde">Niğde</option>
          <option value="ordu">Ordu</option>
          <option value="rize">Rize</option>
          <option value="sakarya">Sakarya</option>
          <option value="samsun">Samsun</option>
          <option value="siirt">Siirt</option>
          <option value="sinop">Sinop</option>
          <option value="sivas">Sivas</option>
          <option value="tekirdag">Tekirdağ</option>
          <option value="tokat">Tokat</option>
          <option value="trabzon">Trabzon</option>
          <option value="tunceli">Tunceli</option>
          <option value="sanliurfa">Şanlıurfa</option>
          <option value="usak">Uşak</option>
          <option value="van">Van</option>
          <option value="yozgat">Yozgat</option>
          <option value="zonguldak">Zonguldak</option>
          <option value="aksaray">Aksaray</option>
          <option value="bayburt">Bayburt</option>
          <option value="karaman">Karaman</option>
          <option value="kirikkale">Kırıkkale</option>
          <option value="batman">Batman</option>
          <option value="sirnak">Şırnak</option>
          <option value="bartin">Bartın</option>
          <option value="ardahan">Ardahan</option>
          <option value="igdir">Iğdır</option>
          <option value="yalova">Yalova</option>
          <option value="karabuk">Karabük</option>
          <option value="kilis">Kilis</option>
          <option value="osmaniye">Osmaniye</option>
          <option value="duzce">Düzce</option>
        </select>
        <input type="submit" value="Gönder">
        </form>
      </div>
          <table>
            <tr>
              <th>Bölge</th>
              <th>Büyüklük</th>
              <th>Kaç Saat Önce?</th>
              <th class="tarih">Tarih</th>
              <th class="saat">Saat</th>
            </tr>
      <?php 
      function kacDKOldu( $tarih ){
        try {    
            $date1 = new DateTime( date('Y-m-d H:i:s') );
            $date2 = new DateTime( $tarih );
     
            $interval = $date1->diff( $date2 );
     
            $result = $interval->format('%y Yıl %m Ay %d Gün %h Saat %i Dakika Önce.');  
            $result = preg_replace('/\b0+\s+[a-zA-Z-ıü]+,?\s*/is','',$result);
             
            return $result;
        } catch (Exception $e) {    
            return false;
        }       
    }
    if (!@$array['depremler'][0]) {
      echo("<div class='bos'><h1>boş</h1></div>");
    } else {
      for ($x = 0; $x <= 100; $x++) {
        @$unix = $array['depremler'][$x]['Unix_Time'];
        @date_default_timezone_set('Asia/Kuwait'); // Türkiye Zaman Dilimi
        @$zaman = gmdate("Y-m-d H:i:s", $unix); // Unix Değeri çevirme
        if (!$unix) {
          $unix = null;
        } else {

        ?>

            <tr>
              <td class="title"><a style="text-decoration: none; color: #eee;" href="deprem.php?id=<?php echo $x; ?>" title="Deprem Bölgesi"><?php @print($array['depremler'][$x]['Yer']); ?></a></td>
              <td><b><?php @print($array['depremler'][$x]['Buyukluk']['ML']); ?></b></td>
              <td><?php @print(kacDKOldu( $zaman ));?></td>
              <td class="tarih"><?php @print($array['depremler'][$x]['Tarih']); ?></td>
              <td class="saat"><?php @print($array['depremler'][$x]['Saat']); ?></td>
            </tr>
        <?php
      }
    }
  }
      ?>
      </table>
        </div>
      </div>
      <footer>Copyright © 2020 İbrahim Ödev Tüm hakları saklıdır.</footer>
      <a class="yukari-cik" id="top" href="#"><i class="fas fa-angle-up"></i></a>
    <script>
      var mybutton = document.getElementById("top");

      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
    </script>
  </body>
</html>