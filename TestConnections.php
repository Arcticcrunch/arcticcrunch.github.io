<?php
    // Подключение к базе данных
    $DBHost = "localhost";                   // Адрес сервера
    $DBUser = 'root';                        // имя пользователя
    $DBRootPassword = '12345678';            // пароль
    $DBTable = "orderstdatabase";              // Имя таблицы


    function ConnectToDataBase($DBHost, $DBUser, $DBRootPassword, $DBTable)
    {
        // подключаемся к серверу
        $link = mysqli_connect($DBHost, $DBUser, $DBRootPassword, $DBTable) 
            or die("Ошибка " . mysqli_error($link));
        
        // выполняем операции с базой данных
        $query ="SELECT * FROM ". $DBTable. " ORDER BY ID DESC LIMIT 1";

        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
            echo "Выполнение запроса прошло успешно <br>";
            
        }
        // закрываем подключение
        mysqli_close($link);

        //return $query;
    }

    function TryConnect()
    {
        ConnectToDataBase("localhost", 'root', '34qPCDf38!hf9zq', "orderstable");
    }

    //require_once 'connection.php'; // подключаем скрипт
 

?>





<?php

    if(isset($_POST['name1']))
    {
        $link = mysqli_connect("localhost", 'root', '34qPCDf38!hf9zq', "orderstable") 
            or die("Ошибка " . mysqli_error($link)); 

        // экранирования символов для mysql
        $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
        $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));

        // создание строки запроса
        //$query ="INSERT INTO tovars VALUES(NULL, '$name','$company')";
        $query = "INSERT orderstable(FirstName, LastName, Phone, Price, Commentary, IsDelivered)
        VALUES ('Хукумка', 'Крютченко', 88005553535, '300.0', 'Three hundred bucks', False);";

        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
            echo "<span style='color:blue;'>Данные добавлены</span>";
        }
        else
        {
            echo "Фиаско";
        }
        // закрываем подключение
        mysqli_close($link);
    }
    else
    {
        echo "Фиаско тут";
    }
?> 