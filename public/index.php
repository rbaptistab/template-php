<?php
ob_start();

require 'home.php';

$content = ob_get_contents();

ob_end_clean();

var_dump($content);