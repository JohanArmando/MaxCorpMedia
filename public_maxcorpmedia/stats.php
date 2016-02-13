<?php
$dir    = 'counter';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
$stats  = count($files1)-2;
$stats  = number_format($stats);
echo $stats;
?>