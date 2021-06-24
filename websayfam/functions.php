<?php
function websayfam_connect_mysql(){
    $DATABASE_HOST='localhost';
    $DATABASE_USER='root';
    $DATABASE_PASS='';
    $DATABASE_NAME='websayfam';


    try{
        return new PDO('mysql:host='. $DATABASE_HOST . '; dbname='. $DATABASE_NAME .';charset=utf8', $DATABASE_USER,$DATABASE_PASS);
    }
    catch (PDOException $exception){
        exit('Bir hata var');
    }

}

function template_header($title){
    echo <<<EOT
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <body>
    <nav class="nav1">
        <div>
            <h1>Film Satın Alan Kişiler Hakkında</h1>
            <a href="index.php"></i>ANASAYFA</a>
            <a href="read.php"></i>İLETİŞİM</a>
        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    EOT;
}
function template_footer()
{
    echo <<<EOT
    </body>
    </html>
    EOT;
}

    



?>