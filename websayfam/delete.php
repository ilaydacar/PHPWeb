<?php
    include 'functions.php';
    $pdo=websayfam_connect_mysql();
    $msg='';

    if(isset($_GET['id']))
    {
        $stm=$pdo->prepare('SELECT *FROM contacts WHERE id=?');
        $stm->execute([$_GET['id']]);
        $contact=$stm->fetch(PDO::FETCH_ASSOC);
       

        if(!$contact){
            exit('Yanlış Girdiniz.');
        }
        
        if(isset($_GET['confirm'])){
            if($_GET['confirm']=='yes'){
                $stmt=$pdo->prepare('DELETE FROM contacts WHERE id=?');
                $stmt->execute([$_GET['id']]);
                $msg='Silme İşlemi Tamamlandı.';
               
            }
            else{
                header('Location:read.php');
                exit;
            }
        }
       
    }
    else{
        exit('Id Yoktur.');
    }  
?>

<?=template_header('Sil') ?>

<div class="Silme1">
   <?=$contact['id']?>
   <h2>Silme Sayfası <?php if($msg):?></h2>
    <p><?$msg ?></p>
    <?php else :?>
    <p>Siliniyor... Emin Misiniz?</p>
    <div class="silelim">
    <a href="delete.php?id=<?=$contact['id']?>&confirm=yes">Evet</a>
     <a href="delete.php?id=<?=$contact['id']?>&confirm=no">Hayır</a>



 
    
    
    </div>
    <?php endif;?>
</div>

    
      
    




<?=template_footer() ?>