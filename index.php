<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>BRI4NN.HTML</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crad/lv.svg" />
        <p>Pencet Love nya yaa cantikk</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Klik lagi disini yaa cantikk ‼️👈]</button>
        <button class="btn send">[ Last nihh cantikk hehe]</button>
      </div>
    </div>
<script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

konten = [
  { 
    gambar: "foto1.jpg",
    ucapan: "HALOO CANTIKK NYA AKUU‼️🤍✨",
  },
  {
    gambar: "foto2.gif",
    ucapan: "HAPPY BIRTHDAY YAA CANTIKK NYAA AKUU INII‼️🥳🤩🤍", 
  },
  {
    gambar: "foto3.gif",
    ucapan: "gaa berasaa yaa kamu udah ulang tahun ajaa nihh, hehe. udah bertambah aja umur kamuu sekarang. udahh umur berapaa cobaa kamuu hari inii? 13? 14? 15? WAHHH BERTAMBAH JADI 14 TAHUN YAA🤩. HBD YAA CANTIKK NYAA AKUUU‼️🥳🥹🫵.",
  },
  {
    gambar: "foto4.gif",
    ucapan: "I'm confused about where to start telling you all this, because there are so many things I want to tell you, hehe. aku harap kamu sehatt sehatt terus yaa, panjang umur, makin ceriaa and tambahh semangatt yaa cantikk? bertambah umur nya kamu inii menandakan makin dewasa juga umur kamuu.",
  },
  {
    gambar: "foto5.gif",
    ucapan: "i hope.. kamu tetap jadi orang yang aku kenal yaa cantikk? bertambah dewasa nya kamu ini tidak menjadi alasan kamu untuk berubah, tapi kalo berubah menjadi lebih baik lagii gapapa cantikk‼️. aku seneng, bahagia, and bersyukur sekarang kamu udah makin dewasa aja.",
  },
  {
    gambar: "foto6.gif",
    ucapan: "fokus sama pendidikan kamu yang sekarang yaa? I always support you wherever, whenever you are‼️🫵 jangan khawatir cantikk, i still here for you, i'll always be there for you. kalo kamu butuh aku, aku disini sayang‼️✨.",
  },
  {
    gambar: "foto7.gif",
    ucapan: "fokus sama apa yang kamu raih sekarang yaa? jangan lupa berdoa sama yang diatas juga yaa? i pray that you win in life, achieve all your dreams, and get everything you want. good luck sayang kuu‼️😼🫵✨",
  },
  {
        gambar: "foto8.gif",
        ucapan: "u did well, I'm so proud of you, proud for everything, always. and keep spirit for the future, okayy cantikk‼️🤩🫵💖✨.",
          
      },
  {
    gambar: "foto9.jpg",
    ucapan: "MAKASII UDAHH MAUU BACA INII SEMUAA CANTIKKK‼️🥹🫵🤍✨",
  },
];

    musik = "musik2.mp3";
    
nomorWhatsapp = "6287792797004";


/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>
