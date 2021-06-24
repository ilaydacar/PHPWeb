<?php
    include 'functions.php';
    $pdo=websayfam_connect_mysql();

    $stmt=$pdo->prepare('SELECT * FROM contacts');
    $stmt->execute();
    $contacts=$stmt->FetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Listele')?>

<div class="Tablo">
    <h2>Film Satın Alma İletişim Bilgileri</h2>
    <a href="create.php" class="col-md-6">Film Satın Alan Kişilerin İletişimini Ekleme</a>
    <table class="table table-striped">
 
       <thead>
            <tr>
                <td>No</td>
                <td>Adı</td>
                <td>E-mail</td>
                <td>Fiyat</td>
                <td>Film</td>
                <td>Tarih</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $contact ): ?>
            <tr>
                <td><?=$contact['id'] ?></td>
                <td><?=$contact['name'] ?></td>
                <td><?=$contact['email'] ?></td>
                <td><?=$contact['fiyat'] ?></td>
                <td><?=$contact['film'] ?></td>
                <td><?=$contact['created'] ?></td>
                <td class="col-md-6">
                    <a href="update.php?id=<?=$contact['id']?>" buton class="gönderr" type="button">Güncelle</a>
                    <a href="delete.php?id=<?=$contact['id']?>" buton class="temizle"type="button">Temizle</a>
                </td>
           </tr>
           <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?=template_footer()?>