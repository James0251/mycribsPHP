<?php
//$json = json_decode(file_get_contents("file.json"), true);
//$name = $json['fio'];
//$age = $json['age'];
//$url = $json['vk_url'];
//?>
<!--<p>Пользователь: --><?//=$name?><!--</p>-->
<!--<p>Возраст: --><?//=$age?><!--</p>-->
<!--<p>Сайт: --><?//=$url?><!--</p>-->
<?php
//Создаем массив с данными
$info = [
    "name" => "Костя",
    "lname" => "Тестов",
    "contacts" => [
        "phone" => "12345678",
        "mail" => "mail@mail.to",
        "skype" => "kost1999",
        "site" => "www.site.to",
    ],
];
// преобразовываем его в json вид
$json = json_encode($info, JSON_UNESCAPED_UNICODE);
// создаем новый файл
$file = fopen('new.json', 'w');
// и записываем туда данные
$write = fwrite($file,$json);
// проверяем успешность выполнения операции
if($write) echo "Данные успешно записаны!<br>";
else echo "Не удалось записать данные!<br>";
//закрываем файл
fclose($file);
?>