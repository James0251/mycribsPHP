<?php
//Работа с регистром символов. Для решения задач данного блока вам понадобятся следующие функции: strtolower, strtoupper, ucfirst, lcfirst, ucwords.
//Дана строка 'php'. Сделайте из нее строку 'PHP'.
$str = 'php';
echo strtoupper($str);


//Дана строка 'PHP'. Сделайте из нее строку 'php'.
echo "<br/><br/>";
$str = 'PHP';
echo strtolower($str);


//Дана строка 'london'. Сделайте из нее строку 'London'.
echo "<br/><br/>";
$str = 'london';
echo ucfirst($str);


//Дана строка 'London'. Сделайте из нее строку 'london'.
echo "<br/><br/>";
$str = 'London';
echo lcfirst($str);


//Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.
echo "<br/><br/>";
$str = 'london is the capital of great britain';
echo ucwords($str);


//Дана строка 'LONDON'. Сделайте из нее строку 'London'.
echo "<br/><br/>";
$str = 'LONDON';
echo ucfirst(strtolower($str));


//Работа с strlen. //strlen возвращает длину строки (количество символов в строке)
//Дана строка 'html css php'. Найдите количество символов в этой строке.
echo "<br/><br/>";
$str = 'html css php';
echo strlen($str);


//Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите
//пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
echo "<br/><br/>";
function pass($password) {
    if (strlen($password) > 5 && strlen($password) < 10) {
        return "Пароль подходит <br/>";
    }else return "Нужно придумать другой пароль";
}
echo pass('abcdef');
echo "Для проверки: " . pass(1234);

//Работа с substr. //substr вырезает и возвращает подстроку из строки
//Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
echo "<br/><br/>";
$str = 'html css php';
echo substr($str, 0, 4) . "<br/>";
echo substr($str, 5, 3) . "<br/>";
echo substr($str, 9, 3);


//Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
echo "<br/><br/>";
function last3Symbol($str) {
    return substr($str, -3);
}
echo last3Symbol('123456') . "<br/>";
echo "Для проверки: " . last3Symbol('dfdsklbr');


//Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
echo "<br/><br/>";
$str = 'https://github.com/James0251';
if (substr($str, 0, 7) == 'http://') {
    echo "Да";
}else echo "Нет";


//Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
echo "<br/><br/>";
$str1 = 'https://github.com/James0251';
if (substr($str1, 0, 7) == 'http://' || substr($str1, 0, 8) == 'https://') {
    echo "Да";
}else echo "Нет";


//Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
echo "<br/><br/>";
function expansion($str) {
    if (substr($str, -4) == '.png') {
        return "Да";
    }else return "Нет";
}

echo expansion('https://photos/image.jpg') . "<br/>";
echo "Для проверки: " . expansion('https://photos/image.png');


//Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
echo "<br/><br/>";
function expansion2($str) {
    if (substr($str, -4) == '.png' || substr($str, -4) == '.jpg') {
        return "Да";
    }else return "Нет";
}

echo expansion2('https://photos/image.jpg') . "<br/>";
echo "Для проверки: " . expansion2('https://photos/image.png');


//Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран.
//Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
echo "<br/><br/>";
function fiveSymbols($str) {
    if (strlen($str) > 5) {
        return substr($str, 0, 5) . '...';
    }else return $str;
}

echo fiveSymbols('abcdefghijklmnopqrstuvwxyz') . "<br/>";
echo "Для проверки: " . fiveSymbols('1234');


//Работа с str_replace. //str_replace ищет в строке заданный текст и меняет его на другой
//Дана строка '31.12.2013'. Замените все точки на дефисы.
echo "<br/><br/>";
$str = '31.12.2013';
echo str_replace('.', '-', $str);


//Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
echo "<br/><br/>";
$str = 'aafghbbertcciop';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str);


//Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
echo "<br/><br/>";
$str = '1a2b3c4b5d6e7f8g9h0';
echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str);


//Работа с strtr. //strtr осуществляет поиск и замену символов в строке
//Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы
// с функцией strtr (массив замен и две строки замен).
echo "<br/><br/>";
$str = 'aauubbiiccoo';
echo "Первый способ: " . strtr($str, ['a' => 1, 'b' => 2, 'c' => 3]) . "<br/>";
echo "Второй способ: " . strtr($str, 'abc', 123);


//Работа с substr_replace. //substr_replace заменяет указанную часть строки на другую
//Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
echo "<br/><br/>";
$str = 'aauubbiiccoo';
echo substr_replace($str, '!!!', 3, 5);


//Работа с strpos, strrpos. // strpos возвращает позицию первого вхождения подстроки в другую строку, а strrpos - возвращает позицию последнего вхождения
//Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
echo "<br/><br/>";
$str = 'abc abc abc';
echo "Позиция первой буквы b в строке $str:" . strpos($str, 'b');


//Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
echo "<br/><br/>";
$str = 'abc abc abc';
echo "Позиция последней буквы b в строке $str: " . strrpos($str, 'b');


//Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.
echo "<br/><br/>";
$str = 'abc abc abc';
echo "Позиция первой найденной буквы b начиная с третьего символа в строке $str: " . strpos($str, 'b', 3);


//Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
echo "<br/><br/>";
$str = 'aaa aaa aaa aaa aaa';
echo "Позиция второго пробела в строке $str: " . strpos($str, ' ', 4);


//Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
echo "<br/><br/>";
function twoPoint($str) {
    if (strpos($str, '..') || strrpos($str, '..')) {
        return "Да";
    }else return "Нет";
}

echo "Для проверки, 2 точки в начале: " . twoPoint('...aaa aaa aaa') . "<br/>";
echo "Для проверки, 2 точки в конце: " . twoPoint('aaa aaa aaa...') . "<br/>";
echo "Для проверки, без точек: " . twoPoint('aaa aaa aaa') . "<br/>";


//Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
echo "<br/><br/>";
function ifBeginStr($str) {
    if (strpos($str, 'http://') === 0) {
        return "Да";
    }else return "Нет";
}

echo ifBeginStr('http://github.com/James0251') . "<br/>";
echo "Для проверки: ". ifBeginStr('https://github.com/James0251');


//Работа с explode, implode. //explode разбивает строку в массив по определенному разделителю, implode сливает массив в строку с указанным разделителем
//Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
echo "<br/><br/>";
$str = 'html css php';
$arr[] = explode(' ', $str);
print_r($arr);


//Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
echo "<br/><br/>";
$arr = ['html', 'css', 'php'];
$str = implode(', ', $arr);
echo $str;


//В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
echo "<br/><br/>";
$date = '2013-12-31';
$arrr = explode('-', $date);
echo $arrr[2].'.'.$arrr[1].'.'.$arrr[0];


//Работа с str_split. //str_split разбивает строку в массив
//Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
echo "<br/><br/>";
$str = '1234567890';
$arr = str_split($str, 2);
print_r($arr);


//Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
echo "<br/><br/>";
$str = '1234567890';
$arr = str_split($str, 1);
print_r($arr);


//Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.
echo "<br/><br/>";
$str = '1234567890';
echo implode('-', str_split($str, 2));

//Работа с trim, ltrim, rtrim
//Дана строка. Очистите ее от концевых пробелов.
echo "<br/><br/>";
$str = '  string  ';
echo trim($str);


//Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
echo "<br/><br/>";
$str = '/php/';
echo trim($str, '/');


//Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.
echo "<br/><br/>";
$str = 'слова слова слова.';
echo rtrim($str, '.') . '.';


//Работа с strrev. //strrev переворачивает строку так, чтобы символы шли в обратном порядке
//Дана строка '12345'. Сделайте из нее строку '54321'.
echo "<br/><br/>";
$str = '12345';
$str = strrev($str);
echo $str;


//Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).
echo "<br/><br/>";
function palindrome($str) {
    if ($str == strrev($str)) {
        return "Это слово является палиндромом";
    }else return "Это слово не является палиндромом";
}

echo palindrome('madam') . "<br/>";
echo "Для проверки: " . palindrome("otto") . "<br/>";
echo "Для проверки: " . palindrome("abcdef");


//Работа с str_shuffle. //str_shuffle переставляет символы в строке в случайном порядке
//Дана строка. Перемешайте символы этой строки в случайном порядке.
echo "<br/><br/>";
$str = "str_shuffle";
echo str_shuffle($str);


//Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке
//могла быть любая латинская буква, а не ограниченный набор.
echo "<br/><br/>";
$alph = str_shuffle(strtolower('abcdefjhigklmnopqrstuvwxyz'));
for ($i = 0; $i <= strlen($alph); $i++) {
    if ($i <= 5) {
        echo $alph[$i];
    }
}


//Работа с number_format. //number_format позволяет форматировать число
//Дана строка '12345678'. Сделайте из нее строку '12 345 678'.
echo "<br/><br/>";
$str = '12345678';
echo strtr(number_format($str), ',', ' ');

//Работа с str_repeat
//Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и
//функции str_repeat.
//x
//xx
//xxx
//xxxx
//xxxxx
echo "<br/><br/>";
$str = 'x';
for ($i = 0; $i <= 5; $i++) {
    echo str_repeat($str, $i) . "<br/>";
}

//Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.
//1
//22
//333
//4444
//55555
//666666
//7777777
//88888888
//999999999
echo "<br/><br/>";
$str = 0;
for ($i = 0; $i <= 9; $i++) {
    echo str_repeat($str + $i, $i) . "<br/>";
}

//Работа с strip_tags и htmlspecialchars. //strip_tags удаляет HTML теги из строки, не трогая их содержимого,
                                          //htmlspecialchars позволяет вывести теги в браузер так, чтобы он не считал их командами, а выводил как строки
//Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
echo "<br/><br/>";
$str = 'html, <b>php</b>, js';
echo strip_tags($str);


//Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.
echo "<br/><br/>";
$str = 'html, <b>css</b>, <i>php</i>, <u>js</u>';
echo strip_tags($str, '<b><i>');


//Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.
echo "<br/><br/>";
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);


//Работа с chr и ord. //chr находит символ по его ASCII коду, ord возвращает ASCII код символа
//Узнайте код символов 'a', 'b', 'c', пробела.
echo "<br/><br/>";
echo "Символьный код буквы 'a': " . ord('a') . "<br/>";
echo "Символьный код буквы 'b': " . ord('b') . "<br/>";
echo "Символьный код буквы 'c': " . ord('c') . "<br/>";
echo "Символьный код пробела: " . ord(' ');


//Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.
//Выведите на экран символ с кодом 33.
echo "<br/><br/>";
echo "Символ с кодом 33, это: " . chr(33);


//Запишите в переменную $str случайный символ - большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые
//числа соответствуют большим буквам латинского алфавита.
echo "<br/><br/>";
$str = rand(65, 90);
echo "Рандомный символ латинского алфавита с помощью функции chr(): " . chr($str);


//Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита. Подсказка:
//воспользуйтесь циклом for или while.
echo "<br/><br/>";
$len = 7;
for ($i = 0; $i < $len; $i++) {
    if ($i <= $len)
    $str = chr(random_int(97, 122));
    echo $str;
}


//Дана буква английского алфавита. Узнайте, она маленькая или большая.
echo "<br/><br/>";
function largeOrSmallLetter($letter) {
    if ($letter >= chr(65) && $letter <= chr(90)) {
        return "Это большая буква!";
    }elseif ($letter >= chr(97) && $letter <= chr(122)) {
        return "Это маленькая буква!";
    }
}
echo "D:  " . largeOrSmallLetter('D') . "<br/>";
echo "Для проверки, q: " . largeOrSmallLetter('q');


//Работа с strchr, strrchr. //strchr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки
                            //strrchr находит последнее вхождение символа в строку и возвращает часть строки начиная с этого места до конца строки
//Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.
echo "<br/><br/>";
$str = 'ab-cd-ef';
echo strchr($str, '-');


//Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'. Показать решение.
echo "<br/><br/>";
$str = 'ab-cd-ef';
echo strrchr($str, '-');


//Работа с strstr. //strstr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки
//Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.
echo "<br/><br/>";
$str = 'ab--cd--ef';
echo strstr($str, '-');


//Задачи
//Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.
echo "<br/><br/>";
function conversion($str) {
    $arr = explode('_', $str);
    foreach ($arr as $elem) {
        $array[] = ucfirst($elem);
    }
    return lcfirst(implode('', $array));
}

echo conversion('var_test_text') . '<br/>';
echo "Для проверки: " . conversion('html_css_php_jquery');


//Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.
echo "<br/><br/>";
$arr = [3, 11, 23, 135, 444, 22, 5432, 567, -2, -539, 18];
foreach ($arr as $elem) {
    if ($elem == 3 || strpos($elem, '3') || strrpos($elem, '3')) {
        $array[] = $elem;
    }
}
echo implode(', ', $array);