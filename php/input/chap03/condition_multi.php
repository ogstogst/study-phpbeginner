<?php
// print true ? 1 : false ? 'OK' : 'NG';
// print (true ? 1 : false) ? 'OK' : 'NG';
// print true ? 1 : (false ? 'OK' : 'NG');

$x = 1;
$flag = ($x === 1 ? 0 : -1);
var_dump($flag);
