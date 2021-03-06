<?php
//Работа с if-else
//Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
function equalToZero($a) {
    if ($a == 0) return "Верно <br/>";
    else return "Неверно <br/>";
}

echo equalToZero(1);
echo equalToZero(0);
echo equalToZero(-3);


//Если переменная $a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
echo "<br/><br/>";
function greaterThanZero($a) {
    if ($a > 0) {
        return "Верно <br/>";
    }else {
        return "Неверно <br/>";
    }
}

echo greaterThanZero(1);
echo greaterThanZero(0);
echo greaterThanZero(-3);


//Если переменная $a меньше нуля, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
echo "<br/><br/>";
function lessThanZero($a){
    if ($a < 0) {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo lessThanZero(1);
echo lessThanZero(0);
echo lessThanZero(-3);


//Если переменная $a больше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
echo "<br/><br/>";
function greaterOrEqualZero($a){
    if ($a >= 0) {
        return "Верно <br/>";
    }else return "Неверно <br/>";
}

echo greaterOrEqualZero(1);
echo greaterOrEqualZero(0);
echo greaterOrEqualZero(-3);


//Если переменная $a меньше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
echo "<br/><br/>";
function lessOrEqualZero($a) {
    if ($a <= 0) return "Верно <br/>";
    else {
        return "Неверно <br/>";
    }
}

echo lessOrEqualZero(1);
echo lessOrEqualZero(0);
echo lessOrEqualZero(-3);


//Если переменная $a не равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
echo "<br/><br/>";
function notEqualZero ($a) {
    if ($a != 0) {return "Верно <br/>";} else {return "Неверно <br/>";}
}

echo notEqualZero(1);
echo notEqualZero(0);
echo notEqualZero(-3);


//Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3.
echo "<br/><br/>";
function test($a) {
    if ($a == 'test') {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo test('test');
echo test('тест');
echo test(3);


//Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном '1', 1, 3.
echo "<br/><br/>";
function valueAndType($a) {
    if ($a === '1') {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo valueAndType('1');
echo valueAndType(1);
echo valueAndType(3);


//Работа с empty и isset
//Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
echo "<br/><br/>";
function emptyVar($a) {
    if (empty($a)) {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo emptyVar(1);
echo emptyVar(3);
echo emptyVar(-3);
echo emptyVar(0);
echo emptyVar(null);
echo emptyVar(true);
echo emptyVar('');
echo emptyVar('0');


//Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'.
echo "<br/><br/>";
function notEmptyVar($a) {
    if (!empty($a)) {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo notEmptyVar(1);
echo notEmptyVar(3);
echo notEmptyVar(-3);
echo notEmptyVar(0);
echo notEmptyVar(null);
echo notEmptyVar(true);
echo notEmptyVar('');
echo notEmptyVar('0');


//Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 3 и null.
echo "<br/><br/>";
function issetVar($a) {
    if (isset($a)) {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo issetVar(3);
echo issetVar(null);


//Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'.
echo "<br/><br/>";
function notIssetVar($a) {
    if (!isset($a)) {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo notIssetVar(3);
echo notIssetVar(null);


//Работа с OR и AND
//Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
echo "<br/><br/>";
function andValue($a) {
    if ($a > 0 && $a < 5) {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo andValue(5);
echo andValue(0);
echo andValue(-3);
echo andValue(2);


//Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10. Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
echo "<br/><br/>";
function orValue($a) {
    if ($a == 0 or $a == 2) {
        return $a + 7 . "<br/>";
    }else {
        return $a / 10 . "<br/>";
    }
}

echo orValue(5);
echo orValue(0);
echo orValue(-3);
echo orValue(2);


//Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность (результат вычитания).
//Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.
echo "<br/><br/>";
function sumOrDiffValue($a, $b) {
    if ($a <= 1 and $b >= 3) {
        return $a + $b . "<br/>";
    }else {
        return $a - $b . "<br/>";
    }
}

echo sumOrDiffValue(1, 3);
echo sumOrDiffValue(0, 6);
echo sumOrDiffValue(3, 5);


//Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна 6-ти и меньше 14-ти, то выведите 'Верно',
//в противном случае выведите 'Неверно'.
echo "<br/><br/>";
function func($a, $b) {
    if (($a > 2 and $a < 11) || ($b >= 6 and $b < 14)) {return "Верно <br/>";}
    else {return "Неверно <br/>";}
}

echo func(1, 3);
echo func(0, 6);
echo func(3, 5);


//На switch-case
//Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в переменную $result
//запишем 'зима', если имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case.
echo "<br/><br/>";
function switchCase($num) {
    switch ($num) {
        case 1:
            $result = "Зима <br/>";
            break;
        case 2:
            $result = "Лето <br/>";
            break;
        case 3:
            $result = "Весна <br/>";
            break;
        case 4:
            $result = "Осень <br/>";
            break;
    }
    return $result;
}

echo switchCase(3);
echo switchCase(2);
echo switchCase(4);
echo switchCase(1);


//Задачи
//В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает
//это число (в первую, вторую или третью).
echo "<br/><br/>";
function decade($day) {
    switch ($day){
        case ($day >= 1 and $day < 11):
            return "1 декада";
            break;
        case ($day >= 11 and $day < 21):
            return "2 декада";
            break;
        case ($day >= 21 and $day <= 31):
            return "3 декада";
            break;
    }
}

echo decade(11) . "<br/>";
echo "Для проверки: " . decade(21);


//В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц
// (зима, лето, весна, осень).
echo "<br/><br/>";
function season($month) {
    switch ($month){
        case ($month == 12 || $month >= 1 && $month <= 2):
            return "Зима";
            break;
        case ($month >= 3 and $month <=5):
            return "Весна";
            break;
        case ($month >= 6 && $month <= 8):
            return "Лето";
            break;
        case ($month >= 9 && $month <= 11):
            return "Осень";
            break;
    }
}

echo season(1) . "<br/>";
echo "Для проверки: " . season(9);


//В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля).
//Год будет високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они делятся на 400.
echo "<br/><br/>";
function leapYear($year) {
    if ((($year % 4 == 0) and ($year % 100 != 0)) or ($year % 400 == 0)) {
        return "Високосный год";
    }else {
        return "Невисокосный год";
    }
}
echo leapYear(1600) . "<br/>";
echo "Для проверки: " . leapYear(1700);


//Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'.
//Если это так - выведите 'да', в противном случае выведите 'нет'.
echo "<br><br/>";
$str = 'abcde';
if ($str[0] == 'a') {
    echo "Да";
}else {
    echo "Нет";
}


//Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
//Если это так - выведите 'да', в противном случае выведите 'нет'.
echo "<br/><br/>";
$str = '12345';
switch ($str) {
    case ($str[0] == 1 or $str[0] == 2 || $str[0] == 3):
        echo "Да";
        break;
    default:
        echo "Нет";
        break;
}


//Дана строка из 3-х цифр. Найдите сумму этих цифр. То есть сложите как числа первый символ строки, второй и третий.
echo "<br/><br/>";
function digitSum($str) {
    return $str[0] + $str[1] + $str[2];
}

echo digitSum('123') . "<br/>";
echo "Для проверки: " . digitSum('567');


//Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.
//Если это так - выведите 'да', в противном случае выведите 'нет'.
echo "<br/><br/>";
function digitSumEqual($str) {
    $sum1 = $str[0] + $str[1] + $str[2];
    $sum2 = $str[3] + $str[4] + $str[5];
    if ($sum1 == $sum2) {return "Да";}
    else {return "Нет";}
}

echo digitSumEqual('123456') . "<br/>";
echo "Для проверки: " . digitSumEqual('121211');