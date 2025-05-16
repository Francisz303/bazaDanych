<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php

require_once 'db_connect.php';

$sql = "SELECT * FROM `users`;";
$result = $connect->query($sql);

if($result->num_rows > 0){
    echo '<h2>Lista użytkowników</h2>';
    echo '<table border=`1`><tr><th>ID</th><th>Imię</th><th>Email</th></tr>';
    while($row=$result->fetch_object()){
        echo '<tr>';
        echo '<td>'.$row->id.'</td>';
        echo '<td>'.$row->name.'</td>';
        echo '<td>'.$row->email.'</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo "<br>";
}else{
    echo 'Brak danych w tabeli użytkowników';
}

$connect->close();