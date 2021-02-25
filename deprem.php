<?php 

$id = addslashes(strip_tags(htmlspecialchars(@$_GET["id"])));
$fgc = file_get_contents("https://deprem-api.herokuapp.com/");
$array = json_decode($fgc, true);

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
    <title>Son Depremler - İbrahim Ödev</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="sondepremler">
        <div class="container">
        <h1>Türkiyedeki Son Depremler</h1>
        <a href="javascript:history.back(-1)" title="Geri Dön"><i class="fas fa-chevron-circle-left"></i> Geri Dön</a> -
        <a href="detayli/" title="Detaylı Gösterim Sayfası">DETAYLI GÖSTERİM</a> -
        <a href="bilgilendirme.html" title="Bilgilendirme Sayfası">BİLGİLENDİRME</a> -
        <a href="depremaninda.html" title="Deprem Anında Sayfası">DEPREM ANINDA YAPILMASI GEREKENLER</a>
        </div>
      </div>
      <div class="content">
        <?php 
      

        if(@$array['depremler'][$id]['Id']) {
          @$unix = $array['depremler'][$id]['Unix_Time'];
          @date_default_timezone_set('Asia/Kuwait'); // Türkiye Zaman Dilimi
          @$zaman = gmdate("Y-m-d H:i:s", $unix); // Unix Değeri çevirme
          if (!$unix) {
            $unix = null;
          } else {
          ?>

            <div class="deprem_page">
              <div class="deprem_menu">
                <div class="nav">
                  <div class="title">
                    <h1><?php @print($array['depremler'][$id]['Yer']); ?></h1>
                    <div class="buyukluk">
                      <h1><i class="far fa-heart-rate"></i> <?php @print($array['depremler'][$id]['Buyukluk']['ML']); ?></h1>
                    </div>
                  </div>
                  <div class="ts">
                    <h4><i class="far fa-calendar-alt"></i> <?php @print($array['depremler'][$id]['Tarih']); ?></h4>
                    <h4><i class="far fa-clock"></i> <?php @print($array['depremler'][$id]['Saat']); ?></h4>
                    <h4><i class="fas fa-history"></i> <?php @print(kacDKOldu( $zaman ));?></h4>
                  </div>
                  <div class="buyuklukler">
                    <div class="md">
                      <h3>MD</h3>
                      <b><?php @print($array['depremler'][$id]['Buyukluk']['MD']); ?></b>
                    </div>
                    <div class="ml">
                      <h3>ML</h3>
                      <b><?php @print($array['depremler'][$id]['Buyukluk']['ML']); ?></b>
                    </div>
                    <div class="mw">
                      <h3>Mw</h3>
                      <b><?php @print($array['depremler'][$id]['Buyukluk']['Mw']); ?></b>
                    </div>
                  </div>
                </div>
                <div class="foo">
                  <ul>
                    <li>Derinlik : <?php @print($array['depremler'][$id]['Derinlik(km)']); ?> km</li>
                    <li>Enlem : <?php @print($array['depremler'][$id]['Enlem(N)']); ?> N</li>
                    <li>Boylam : <?php @print($array['depremler'][$id]['Boylam(E)']); ?> E</li>
                  </ul>
                  <h4>Nitelik : <?php @print($array['depremler'][$id]['Nitelik']); ?></h4>
                </div>
              </div>
            </div>

          <?php
            }  
        }
        else {
          echo "tüh böyle bir id yok ! :/";
        }
        ?>
      </div>
  </body>
</html>