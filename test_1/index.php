<?php
include 'function.php';


$content = <<<EOD
Пароль: 0308
Спишется 395,97р.
Перевод на счет 41001000000000
EOD;

var_dump(parseSms($content));
/*
array(3) {
  ["code"]=>
  string(4) "0308"
  ["amount"]=>
  string(6) "395,97"
  ["account"]=>
  string(14) "41001000000000"
}
*/


$content = <<<EOD
Перевод на счет 41001000000000
Спишется 395,97р.
Пароль: 0308
EOD;

var_dump(parseSms($content));
/*
array(3) {
  ["code"]=>
  string(4) "0308"
  ["amount"]=>
  string(6) "395,97"
  ["account"]=>
  string(14) "41001000000000"
}
*/


$content = <<<EOD
Перевод на счет 41001000000000
Пароль: 0308
Спишется 395,97р.
EOD;

var_dump(parseSms($content));
/*
array(3) {
  ["code"]=>
  string(4) "0308"
  ["amount"]=>
  string(6) "395,97"
  ["account"]=>
  string(14) "41001000000000"
}
*/


$content = <<<EOD
Спишется 395,97р.
Пароль: 0308
Перевод на счет 41001000000000
EOD;

var_dump(parseSms($content));
/*
array(3) {
  ["code"]=>
  string(4) "0308"
  ["amount"]=>
  string(6) "395,97"
  ["account"]=>
  string(14) "41001000000000"
}
*/



?>