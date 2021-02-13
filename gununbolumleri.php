<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mesaj</title>
</head>

<body>
     <?php
     date_default_timezone_set('Europe/Istanbul');

         $saat=date("H:i");

         echo $saat."<p>";

         if($saat>="06:00" and $saat<"10:00"){
             echo "Günaydın";
         }elseif($saat>="10:00" and $saat<"17:00"){
             echo "İyi Günler";
         }elseif($saat>="17:00" and $saat<"20:00"){
             echo "İyi Akşamlar";
         }elseif($saat>="20:00" and $saat<"00:00"){
             echo "İyi Geceler";
         }elseif($saat>="00:00" and $saat<"06:00"){
             echo "Esenlikler Dilerim";
         }   
      ?>
    </body>
    </html>