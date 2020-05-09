<?php
echo "Работа с регистром символов<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: strtolower, strtoupper, ucfirst, lcfirst, ucwords.
// 1. Дана строка 'php'. Сделайте из нее строку 'PHP'.
$str = 'php'; echo strtoupper($str); echo "<br/>";
// 2. Дана строка 'PHP'. Сделайте из нее строку 'php'.
$str = 'PHP'; echo strtolower($str); echo "<br/>";
// 3. Дана строка 'london'. Сделайте из нее строку 'London'.
$str = 'london'; echo ucfirst($str); echo "<br/>";
// 4. Дана строка 'London'. Сделайте из нее строку 'london'.
$str = 'London'; echo lcfirst($str); echo "<br/>";
// 5. Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.
$str = 'london is the capital of great britain';
echo ucwords($str); echo "<br/>";
// 6. Дана строка 'LONDON'. Сделайте из нее строку 'London'.
$str = 'LONDON'; echo strtolower($str); echo "<br/><br/>";

echo "Работа с strlen<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: strlen.
// 7. Дана строка 'html css php'. Найдите количество символов в этой строке.
$str = 'html css php';
echo strlen($str); echo "<br/>";
// 8. Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти,
// то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
function password($password){
    if (strlen($password)>5 && strlen($password)<10){
        return "Пароль подходит<br/>";
    }else{
        return "Нужно придумать другой пароль<br/><br/>";
    }
}
echo password('123456');
echo "Для проверки: ".password('1234');

echo "Работа с substr<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: substr.
// 9. Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
$str = 'html css php';
echo substr($str, 0, 4)."<br/>";
echo substr($str, 4, 4)."<br/>";
echo substr($str, 8, 4)."<br/>";
// 10. Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
$str = 'html css php';
echo substr($str, -4); echo "<br/>";
// 11. Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
$str = 'https://github.com/James0251/mycribsPHP';
if (substr($str, 0, 7) == 'http://'){
    echo "Да <br/>";
}else echo "Нет <br/>";
// 12. Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
$str2 = 'https://github.com/James0251/mycribsPHP';
if ((substr($str2, 0, 7) == 'http://' or 'https://')){echo "Да <br/>";}
else{echo "Нет <br/>";}
// 13. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
$str = 'https://yandex.ru/images/search?from=tabbar&text=%D1%8F%D0%BD%D0%B4%D0%B5%D0%BA%D1%81&pos=2&img_url=https%3A%2F%2Fcs5.pikabu.ru%2Fpost_img%2Fbig%2F2014%2F09%2F08%2F4%2F1410149618_858784628.jpg';
if (substr(str, -4) == '.png')echo "Да<br/>";
else echo "Нет<br/>";
// 14. Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
$str3 = 'https://yandex.ru/images/search?from=tabbar&text=%D1%8F%D0%BD%D0%B4%D0%B5%D0%BA%D1%81&pos=2&img_url=https%3A%2F%2Fcs5.pikabu.ru%2Fpost_img%2Fbig%2F2014%2F09%2F08%2F4%2F1410149618_858784628.jpg';
if (substr($str, -4) == '.png' or '.jpg')echo "Да<br/>";
else echo "Нет<br/>";
// 15. Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран.
// Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
function string($str){
    if (strlen($str) > 5){
        return substr($str, 0, 5);
    }else{return $str;}
}
echo string('abcdefg')."<br/>";
echo "Для проверки: ".string('zyxwv')."<br/><br/>";

echo "Работа с str_replace<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: str_replace.
// 16. Дана строка '31.12.2013'. Замените все точки на дефисы.
$str = '31.12.2013';
echo str_replace('.', '-', $str); echo "<br/>";
// 17. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
$str = 'aabbbcc';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str); echo "<br/>";
//18. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
$str = '1a2b3c4b5d6e7f8g9h0';
echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str); echo "<br/><br/>";

echo "Работа с strtr<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: strtr.
// 19. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
// Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
$str = 'aabbbcc';
echo "Первый способ: ". strtr($str, ['a'=>1, 'b'=>2, 'c'=>3]). "<br/>";
echo "Второй способ: ". strtr($str, 'abc', '123'). "<br/><br/>";

echo "Работа с substr_replace<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: substr_replace.
// 20. Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
$str = '1a2b3c4b5d6e7f8g9h0';
echo substr_replace($str, '!!!!!', 3, 5); echo "<br/><br/>";

echo "Работа с strpos, strrpos<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: strpos, strrpos.
// 21. Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
$str = 'abc abc abc';
echo strpos($str, 'b'); echo "<br/>";
// 22. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
$str = 'abc abc abc';
echo strrpos($str, 'b'); echo "<br/>";
// 23. Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.
$str = 'abc abc abc';
echo strrpos(substr($str, 0, 3), 'b'); echo "<br/>";
// 24. Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, ' ', 4); echo "<br/>";
// 25. Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
function twopoint($str){
    if (strpos($str, '..')) return "Да <br/>";
    else return "Нет<br/>";
}
echo twopoint('Sa..zia');
echo "Для проверки: ".twopoint('Sazia');
// 26. Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
$str = 'https://github.com/James0251/mycribsPHP';
if (strpos($str, 'http://') === 0){echo "Да<br/><br/>";}else{echo "Нет<br/><br/>";}

echo "Работа с explode, implode<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: explode, implode.
// 26. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str = 'html css php';
$arr = explode(' ', $str);
print_r($arr); echo "<br/>";
// 27. Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
$arr = ['html', 'css', 'php'];
echo implode(' ', $arr); echo "<br/>";
// 28. В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
$date = '2013-12-31';
$arr = explode('-', $date);
$revers = $arr[2].".".$arr[1].".".$arr[0];
echo "$revers <br/><br/>";

echo "Работа с str_split<br/>";
//Для решения задач данного блока вам понадобятся следующие функции: str_split.
//Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
$str = '1234567890';
$arr = str_split($str, 2);
print_r($arr); echo "<br/>";
//Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
$str = '123456789';
$arr = str_split($str, 1);
print_r($arr); echo "<br/>";
//Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.
$str = '1234567890';
$arr = str_split($str, 2);
echo implode('-', $arr);


