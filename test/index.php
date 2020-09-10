<?php
require_once '../vendor/autoload.php';

use Algorithm\Algorithm;
$upload = new Algorithm('twoNumberSum',[[1,3,4,56,34,5,2,6],8]);
print_r($upload->achieve());