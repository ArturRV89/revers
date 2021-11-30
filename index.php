<?php
include 'SentenceReverse.php';
use App\SentenceReverse;

$result = SentenceReverse::reverse('Привет! Давно не виделись.');
var_dump($result);
