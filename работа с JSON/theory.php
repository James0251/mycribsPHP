<?php
$array = array(
  '1' => 'значение 1',
    '2' => 'значение 2',
    '3' => 'значение 3',
    '4' => 'значение 4',
    '5' => 'значение 5'
);
$json = json_encode($array, JSON_UNESCAPED_UNICODE);
echo $json; echo "<br/><br/>";

$arr = json_decode($json, true);
switch (json_last_error()){
    case JSON_ERROR_NONE:
        echo "Ошибок нет <br/>";
    break;
    case JSON_ERROR_DEPTH:
        echo "Достигнута максимальная глубина стека <br/>";
    break;
    case JSON_ERROR_STATE_MISMATCH:
        echo "Некорректные разряды или несоответствие режимов <br/>";
    break;
    case JSON_ERROR_CTRL_CHAR:
        echo "Некорректный управляющий символ <br/>";
    break;
    case JSON_ERROR_SYNTAX:
        echo "Синтаксическая ошибка, некорректный JSON <br/>";
    break;
    case JSON_ERROR_UTF8:
        echo "Некорректные символы UTF-8, возможно неверно закодирован <br/>";
    break;
    default:
        echo "Неизвестная ошибка <br/>";
    break;
}
print_r($arr);