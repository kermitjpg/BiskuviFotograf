
<?php // Bağlantı kurma - 2

@$baglanti = new mysqli('localhost', 'root', 'databasesifre', 'databasename'); 
    if(mysqli_connect_error()) 
    {
        echo mysqli_connect_error();
        exit; 
    }
$baglanti->set_charset("utf8"); 
    

?>