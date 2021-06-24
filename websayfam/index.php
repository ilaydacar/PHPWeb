<?php
    include 'functions.php';
   
?>

<?=template_header('Anasayfam')?>

<div class="class1">
    <p>  Film Anasayfasına Hoşgeldiniz </p>
    <h1>Aşağıdaki Filmlerden İstediğinizi Satın Alabilirsiniz.</h1>
   
<div class="class2">
<img src="resimler/sinema.jpg"width="1535" height="90">
    <img src="resimler/titanic.jpg" width="300" height="300">
    <img src="resimler/harrypotter.jpg" width="300" height="300"> 
    <img src="resimler/friends.jpg" width="300" height="300">
    <img src="resimler/matrix.jpg" width="300" height="300">
    <img src="resimler/starwars.jpg" width="320" height="300">
</div>


<div class="class3">
<img src="resimler/sinema.jpg"width="1535" height="90">
</div>
<br>
<div class="class4">
<h1>Top 10 Listesi <br> 1.HARRY POTTER<h1>
<img src="resimler/harrypotter.jpg" width="300" height="300"> 
<h3>KONU:Harry Potter, İngiliz yazar J. K. Rowling tarafından yazılmıştır.</h3>
<h4>%90 Beğenilmiştir. Sizde Filmi Oylayabilirsiniz.</h4>
<input type="radio" name="renk" value="Beğenmedim" checked>Beğenmedim<br>
<input type="radio" name="renk" value="Beğendim" checked>Beğendim<br>

<h1>Top 10 Listesi <br> 2.FRİENDS<h1>
<img src="resimler/friends.jpg" width="300" height="300"> 
<h3>KONU:6 arkadaşın hayat hikayesini anlatıyor.</h3>
<h4>%80 Beğenilmiştir. Sizde Filmi Oylayabilirsiniz.</h4>
<input type="radio" name="renk" value="Beğenmedim" checked>Beğenmedim<br>
<input type="radio" name="renk" value="Beğendim" checked>Beğendim<br>

<h1>Top 10 Listesi <br> 3.TİTANİC<h1>
<img src="resimler/titanic.jpg" width="300" height="300"> 
<h3>KONU:Amerika'ya giden bir geminin batmasını anlatıyor.</h3>
<h4>%70 Beğenilmiştir. Sizde Filmi Oylayabilirsiniz.</h4>
<input type="radio" name="renk" value="Beğenmedim" checked>Beğenmedim<br>
<input type="radio" name="renk" value="Beğendim" checked>Beğendim<br>

<h1>Top 10 Listesi <br> 4.MATRİX<h1>
<img src="resimler/matrix.jpg" width="300" height="300"> 
<h3>KONU:Bir yaşanan gerçek vardır, bir de yaşananın ötesinde olan gerçeklik. </h3>
<h4>%60 Beğenilmiştir. Sizde Filmi Oylayabilirsiniz.</h4>
<input type="radio" name="renk" value="Beğenmedim" checked>Beğenmedim<br>
<input type="radio" name="renk" value="Beğendim" checked>Beğendim<br>

<h1>Top 10 Listesi <br> 5.MATRİX<h1>
<img src="resimler/starwars.jpg" width="300" height="300"> 
<h3>KONU:Uzaylı ırkları ve sahiplerinin emirlerini yerine getiren robotları anlatır. </h3>
<h4>%50 Beğenilmiştir. Sizde Filmi Oylayabilirsiniz.</h4>
<input type="radio" name="renk" value="Beğenmedim" checked>Beğenmedim<br>
<input type="radio" name="renk" value="Beğendim" checked>Beğendim<br>

<?=template_footer()?>