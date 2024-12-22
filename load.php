<?php
session_start();

$host = 'localhost';
$database = '2685_php_posts';
$user = 'root';
$password = '';



function dd(string|array|int|object|bool $itm, bool $die = false): void
{
    echo '<pre style="background: #112; color: #3f3; padding: 10px;">';
    var_dump($itm);
    echo '</pre>';

    if ($die)
        die();
}


$db = new mysqli(username: $user, password: $password, hostname: $host, database: $database);
 


if (isset($_SESSION['success'])) {
    ?>
    <div
        class="px-2 py-1 max-w-96 mx-auto my-3 border-2 border-green-300 rounded-md bg-green-100 text-green-600 text-lg font-bold shadow-md">
        <?= $_SESSION['success']; ?>
    </div>

    <?php

    // Delete the $_SESSION['success']
    unset($_SESSION['success']);

}