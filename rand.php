<?php
include 'inc/functions.php';
$quotesCount = count($quotes) - 1;
$random = rand(0, $quotesCount);
echo $random;
?>