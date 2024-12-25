<?php 

include 'load.php';


$created_at = '2024-12-14 12:34:00';

$comment_date = new DATETIME($created_at);
$now = new DATETIME();

$int = $now->diff($comment_date);

if($int->days>0){
echo $int->days . " day" .
($int->days>1 ? 's': '') . " ago";
}elseif($int->h>0){
    echo $int->h . " hour" . 
    ($int->h>1 ? 's' : '') . " ago";
}elseif($int->i>0){
    echo $int->i . " minute" .
    ($int->i > 1 ? 's' : '') . " ago" ;
}else {
    echo "Just Now";
}