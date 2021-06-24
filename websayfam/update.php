<?php
    include 'functions.php';
    $pdo=websayfam_connect_mysql();
    $msg='';

    if(isset($_GET['id'])){
    if(!empty($_POST))
    
    {
        $id=isset($_POST['id']) ? $_POST['id']: NULL;
        $name=isset($_POST['name']) ? $_POST['name']: '';
        $email=isset($_POST['email']) ? $_POST['email']: '';
        $fiyat=isset($_POST['fiyat'])? $_POST['fiyat']: '';
        $film=isset($_POST['film'])? $_POST['film']: '';
        $created=isset($_POST['created'])? $_POST['created']: '';

        $stmt=$pdo->prepare('UPDATE contacts SET id=?, name=?, email=?,fiyat=?,film=?,created=?  WHERE id=?');
        $stmt->execute([$id,$name,$email,$fiyat,$film,$created,$_GET['id']]);
        $msg='Güncelleme Başarılı';
    }

       $stm=$pdo->prepare('SELECT *FROM contacts WHERE id=?');
       $stm->execute([$_GET['id']]);
       $contact=$stm->fetch(PDO::FETCH_ASSOC);

       if(!$contact)
       {
           exit('Id yok.');
       }
    }
    else{
        exit('Id Girilmemiş.');
    }

?>
    <?=template_header('Güncelle')?>
    <div class="contect update">
        <h2>Güncelleme Sayfası</h2>
        
    <form action="update.php?id=<?=$contact['id']?>"method="POST">
        <label for="id">No</label> 
        <input class="form-control" name="id" value="<?=$contact['id']?>" id="id">
        <br>
        <label for="name">Adı Ve Soyadı</label>
        <br>
        <input class="form-control" name="name" value="<?=$contact['name']?>" id="name">
     
        <br>
        <label for="email">E-Mail</label>
        <br>
        <input class="form-control" name="email"  value="<?=$contact['email']?>" id="email">
        <br>
        <label for="fiyat">Fiyat</label>
        <br>
        <input class="form-control" name="fiyat"  value="<?=$contact['fiyat']?>" id="fiyat">
        <br>
        <label for="title">Film</label>
        <br>
        <input class="form-control" name="film"  value="<?=$contact['film']?>" id="film">
        <br>
        <label for="created">Satın Alma Tarihi</label>
        <br>
       
       <input type="datetime-local" input class="form-control" name="created" value="<?=date('Y-m-d\TH:i',strtotime($contact['created']))?>"id="created">
       <br>
       <input type="submit" value="Güncelle">
   
    </form>

    <?php if ($msg):?>
    <p><?=$msg ?></p>
    <?php endif;?>
</div>


<?=template_footer()?>