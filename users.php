<?php
$host = 'localhost';
$database = '2685_php_posts';
$user = 'root';
$password = '';



function dd($itm)
{
    echo '<pre>';
    var_dump($itm);
    echo '</pre>';
}


$db = new mysqli($host, $user, $password, $database);


$qry = 'SELECT * FROM `pst_users`;';

$res = $db->query($qry);


// $data = mysqli_fetch_all($res);
// $data = mysqli_fetch_all($res, 2);
// $data = mysqli_fetch_all($res, MYSQLI_NUM);


// $data = mysqli_fetch_all($res, 1);
// $data = mysqli_fetch_all($res, MYSQLI_ASSOC);

// $data = mysqli_fetch_all($res, 3);
$data = mysqli_fetch_all($res, MYSQLI_BOTH);


dd($data);
