<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#game" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PESONA</a>
    <a href="#articles" class="w3-bar-item w3-button w3-padding-large w3-hide-small">WISATA</a>
    <!-- <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a> -->
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>


<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#game" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PESONA</a>
  <a href="#articles" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">WISATA</a>
  <!-- <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GAME</a> -->
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="image/1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>VILLA</h3>
      <p><b>Potret Squad Juara Free Fire Nasional!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>WAHANA PARK</h3>
      <p><b>RRQ Kembali Merebut Tahta Juara Di MPL</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>NUANSA ALAM</h3>
      <p><b>Memenangkan Turnamen PUBGM Internasional Dan Mengharumkan Nama Bangsa</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="game">
    <h2 class="w3-wide">PARIWISATA PESONA KOTA BATU</h2>
    <p class="w3-opacity"><i>My Trip My Adventure</i></p>
    <p class="w3-justify">Kota Batu adalah sebuah kota di Provinsi Jawa Timur, Indonesia. Kota ini terletak 90 km sebelah barat daya Surabaya atau 15 km sebelah barat laut Malang. Kota Batu berada di jalur yang menghubungkan Malang-Kediri dan Malang-Jombang. Kota Batu berbatasan dengan Kabupaten Mojokerto dan Kabupaten Pasuruan di sebelah utara serta dengan Kabupaten Malang di sebelah timur, selatan, dan barat. Wilayah kota ini berada di ketinggian 700-2.000 meter dan ketinggian rata-rata yaitu 871 meter[5] di atas permukaan laut dengan suhu udara rata-rata mencapai 11-19 derajat Celsius.

Kota Batu dahulu merupakan bagian dari Kabupaten Malang, yang kemudian ditetapkan menjadi kota administratif pada 6 Maret 1993. Pada tanggal 17 Oktober 2001, Batu ditetapkan sebagai kota otonom yang terpisah dari Kabupaten Malang.

Batu dikenal sebagai salah satu kota wisata terkemuka di Indonesia, karena potensi keindahan alam yang luar biasa. Kekaguman bangsa Belanda terhadap keindahan dan keelokan alam Batu membuat wilayah kota Batu disejajarkan dengan sebuah negara di Eropa yaitu Swiss dan dijuluki sebagai De Kleine Zwitserland atau Swiss Kecil di Pulau Jawa[6] Bersama dengan Kota Malang dan Kabupaten Malang, Kota Batu merupakan bagian dari kesatuan wilayah yang dikenal dengan Malang Raya (Wilayah Metropolitan Malang).
</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Nuansa Alam</p>
        <a href="#infogame">
        <img src="images/1.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
      </div>
      <div class="w3-third">
        <p>Nuansa Kuliner</p>
        <a href="#infogame">
        <img src="images/2.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
      </div>
      <div class="w3-third">
        <p>Nuansa Games</p>
        <a href="#infogame">
        <img src="images/3.jpg" class="w3-round" alt="Random Name" style="width:60%"></a>
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="articles">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">ARTICLES</h2>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="images/msc3.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paralayang</b></p>
            <p class="w3-opacity">Fri 27 Nov 2020</p>
            <p>Paralayang merupakan destinasi wisata yang sering dikunjungi wisatawan</p>
            <a href="ml1.html"><button class="w3-button w3-black w3-margin-bottom">Baca selengkapnya</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/msc1.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Coban Talun</b></p>
            <p class="w3-opacity">Sat 28 Nov 2020</p>
            <p>Coban Talun merupakan destinasi wisata yang sering dikunjungi banyak orang</p>
            <a href="ml2.html"><button class="w3-button w3-black w3-margin-bottom">Baca selengkapnya</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/msc2.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Hutan Pinus</b></p>
            <p class="w3-opacity">Sun 29 Nov 2020</p>
            <p>Hutan Pinus di batu seringkali menawarkan keindahan yang memikat</p>
            <a href="ml3.html"><button class="w3-button w3-black w3-margin-bottom">Baca selengkapnya</button></a>
          </div>
        </div>
         <div class="w3-third w3-margin-bottom">
          <img src="images/ff2.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Pasar Malam</b></p>
            <p class="w3-opacity">Sun 20 Okt 2020</p>
            <p>Pasar Malam di sekitar alun alun batu menawarkan jajanan kuliner yang enak!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Baca selengkapnya</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/ff3.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Batu Kuliner</b></p>
            <p class="w3-opacity">Tue 19 Aug 2020</p>
            <p>Batu kuliner merupakan sebuah tempat yang menawarkan banyak macam jajanan yang pas di kantong!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Baca selengkapnya</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/ff4.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Pasar Tempo Doloe</b></p>
            <p class="w3-opacity">Mon 25 Sept 2020</p>
            <p>Pasar Tempo Doloe Menawarkan jajanan legendaris tempoe doloe dengan harga terjangkau!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Baca selengkapnya</button>
          </div>
        </div>
          </div>
         <div class="w3-third w3-margin-bottom">
          <img src="images/pubg6.png" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Jatim Park 1</b></p>
            <p class="w3-opacity">Sun 20 Okt 2020</p>
            <p>Jatim Park 1 menawarkan banyak sekali macam wahana yang seru lohh!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Baca selengkapnya</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/pubg5.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Museum Angkut</b></p>
            <p class="w3-opacity">Tue 19 Aug 2020</p>
            <p>Museum Angkut Batu menawarkan banyak sekali tempat foto astetik nan kekinian loh!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Baca selengkapnya</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/pubg4.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Wisata Kaca Batu</b></p>
            <p class="w3-opacity">Mon 25 Sept 2020</p>
            <p>Wisata Kaca Batu sangat banyak dikunjungi wisatawan di waktu weekend!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Baca selengkapnya</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Tutorial Google Map - Petani Kode</title>
  
    <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.082316259992131, 112.5850067791711),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  
</head>
<body>

    <!-- Elemen yang akan menjadi kontainer peta -->
    <div id="googleMap" style="width:100%;height:380px;"></div>
  
</body>
</html>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">amar</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
