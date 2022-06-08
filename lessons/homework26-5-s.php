<?php

$dsn = "mysql:host=localhost;dbname=countries";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$sth = $pdo->prepare("SELECT `curency` FROM `countries`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_COLUMN);
print_r($array);

$sth = $pdo->query("SELECT * FROM 'countries'");
$mass = array();

while($rws = sth_fetch_assoc($sth)){
    $mass[$rws['curency']] = $rws['countries'];
}
print_r( $mass );

$pdo = mysql_query("SELECT * FROM 'countries'");
$arr = array();
while($rows = mysql_fetch_row($pdo)){
    $arr[] = $rows[0];
}