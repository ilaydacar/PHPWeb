<?php
include 'functions.php';


$pdo=websayfam_connect_mysql();
$msg='';
if(!empty($_POST))
{
    $id=isset($_POST['id']) && !empty($_POST['id']) && $_POST['id']!='auto' ? $_POST['id']: NULL;
    $name=isset($_POST['name']) ? $_POST['name']: '';
    $email=isset($_POST['email']) ? $_POST['email']: '';
    $fiyat=isset($_POST['fiyat'])? $_POST['fiyat']: '';
    $film=isset($_POST['film'])? $_POST['film']: '';
    $created=isset($_POST['created'])? $_POST['created']: '';

   
    $stm=$pdo->prepare('INSERT INTO contacts VALUES(?,?,?,?,?,?)');
    $stm->execute([$id,$name,$email,$fiyat,$film,$created]);

    $msg='Hatasız Tamamlandı.';
}

?>

<?=template_header('Kayıt')?>


<form action="create.php" method="POST">
    <div class="container">
    
    <div class=container3>
    <div class="col-md-6">
        
    <h3>Yeni Film Satın Alanları Ekleme</h3>
        <br>
        <label for="id">No</label> 
        <input class="form-control" name="id" value="otomatik" id="id">
        <br>
        <label for="name">Adı Ve Soyadı</label>
        <br>
        <input class="form-control" name="name" placeholder="Adınızı Ve Soyadınızı Girin." id="name">
     
        <br>
        <label for="email">E-Mail</label>
        <br>
        <input class="form-control" name="email" placeholder="name@gmail.com" id="email">
        <br>
        <label for="fiyat">Fiyat</label>
        <br>
        <input class="form-control" name="fiyat" placeholder="35 TL" id="fiyat">
        <br>
        <label for="title">Film</label>
        <br>
        <input class="form-control" name="film" placeholder="Film" id="film">
        <br>
        <label for="created">Satın Alma Tarihi</label>
        <br>
       
       <input type="datetime-local" input class="form-control" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
       <br>
       <input type="submit" value="Güncelle">

        
       

    </form>
    <?php if($msg): ?>
    <p><?=$msg ?></p>
    <?php endif; ?>
</div>

<?=template_footer() ?>