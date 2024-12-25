<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Users</title>

</head>

<body class='bg-gray-600 flex flex-wrap justify-center'>
    
<nav class=' w-full flex items-center justify-around gap-3 outline-none bg-gray-500 p-2 m-2 rounded-xl font-bold hover:text-blue-400 '>
        <a class='hover:text-blue-900' href="/" id="home">Home</a>
        <a class='hover:text-blue-900' href="users.php">Users</a>
        <a class='hover:text-blue-900' href="comment.php">Comments</a>
        <a class='hover:text-blue-900' href="status.php">Post Status</a>
        <a class='hover:text-blue-900' href="posts.php">Posts</a>
        <a class='hover:text-blue-900' href="reactions.php">ٌReactions</a>
    </nav>
    
    
</html>


<?php 

include 'load.php';

$qry = "SELECT * FROM `pst_users`;";

$res = $db->query($qry);

$user = mysqli_fetch_all($res, MYSQLI_ASSOC);

//dd($data);
?>
<h2
    class="w-full text-center text-2xl font-bold text-black border-4 p-2 rounded-xl border-gray-800 hover:text-gray-800 hover:border-black">
    All Users</h2>

<?php
foreach($user as $u){
    include 'components/user/user.php';
}
 
?>
</body>