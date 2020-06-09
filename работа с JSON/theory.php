<?php
$array = array(
  [55.831903, 37.411961],
  [55.763338, 37.565466],
  [55.763338, 37.565466],
  [55.744522, 37.616378],
  [55.780898, 37.642889]
);
print_r($array);
echo "<br/><br/>";

echo gettype($array['1'])."<br/><br/>";

$json = json_encode($array['1'], JSON_UNESCAPED_UNICODE);
echo $json; echo "<br/><br/>";




//
//$arr = json_decode($json, true);
//switch (json_last_error()){
//    case JSON_ERROR_NONE:
//        echo "Ошибок нет <br/>";
//    break;
//    case JSON_ERROR_DEPTH:
//        echo "Достигнута максимальная глубина стека <br/>";
//    break;
//    case JSON_ERROR_STATE_MISMATCH:
//        echo "Некорректные разряды или несоответствие режимов <br/>";
//    break;
//    case JSON_ERROR_CTRL_CHAR:
//        echo "Некорректный управляющий символ <br/>";
//    break;
//    case JSON_ERROR_SYNTAX:
//        echo "Синтаксическая ошибка, некорректный JSON <br/>";
//    break;
//    case JSON_ERROR_UTF8:
//        echo "Некорректные символы UTF-8, возможно неверно закодирован <br/>";
//    break;
//    default:
//        echo "Неизвестная ошибка <br/>";
//    break;
//}
//print_r($arr);