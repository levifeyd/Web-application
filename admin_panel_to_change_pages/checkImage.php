<?php
function checkImage() {
    if (isset($_POST["save"])) { // если нажали на кнопку Save
        $list = ['.php', '.zip', '.js', '.html']; // запишем список недопустимых расширений(js ->могут быть скрытые файлы)
        foreach ($list as $item) { // в цикле смотреим и ф-цией pregmatch которая ищет соответствия в шаблоне
            // // ищем соответсвия в массиве с файлом
            if (preg_match("/$item$/", $_FILES['im']['name'])) exit("Расширение файла не подходит");
        }
        // вычисляем размер tmp_ времменное имя файла с которым он был сохранен на сервере
        if (empty($_FILES['im']['tmp_name'])) {
            exit ("Пожалуйста загрузите файл.");
        } else {
            $type = getimagesize($_FILES['im']['tmp_name']);
            if ($type && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
                if ($_FILES['im']['name'] < 1024 * 1000) { // проверяем размер загружамемого файла
                    $upload = '../img/' . $_FILES['im']['name']; // файл будет нахоидтся по этому адресу
                    //далее пермещаем файл в папку(upload)
                    if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл загружен";
                    else echo "Ошибка при загрузке файла.";
                } else exit("Размер файла превышен.");
            } else exit("Тип файла не подходит.");
        }
    }
}

