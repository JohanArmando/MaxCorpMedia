<?php
$iterator = new GlobIterator('*.php');

printf("Matched %d item(s)\r\n", $iterator->count());
?>