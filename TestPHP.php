
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta name="viewport", content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="Scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css" >
    <title>
        Клининговая фирма №1
    </title>
</head>

<body>
    Hello World!
    <br>

    <form method="POST">
        Готовы сделать заказ? :)
        <input name="name" autocomplete="off" value="Имя"/>
        <!-- <input type="tel"/>
        <input name="commentary" autocomplete="off"/> -->

        <input type="submit" value="Заказать!" name="name1"/>
        
        
    </form>
    <?php

    if(isset($_POST['name1']))
    {
        // $link = mysqli_connect("localhost", "root", "12345678", "ordersdatabase") 
        //     or die("Ошибка. Не удалось подключится к серверу!"); //. mysqli_error($link)); 

            $conn = mysqli_connect("localhost", "root", "", "cleaningorders");
  
            if ($conn->connect_error) {
              die("Ошибка: не удается подключиться... мразь... : " . $conn->connect_error);
            } 
          
            echo 'Подключение к базе данных...<br>';
          
            $query ="SELECT * FROM orderstable";
 
            $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn)); 
            if($result)
            {
                $rows = mysqli_num_rows($result); // количество полученных строк
                
                //echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);
                    //echo "<tr>";
                        for ($j = 0 ; $j < count($row) ; ++$j) 
                            echo "$row[$j] ";
                    //echo "</tr>";
                }
                //echo "</table>";
                
                // очищаем результат
                mysqli_free_result($result);
            }
            //echo $result;
            //$result = $conn->query("SELECT name FROM employee");
          
            //echo "Количество строк: $result->num_rows";
          
            //$result->close();
          
            $conn->close();

            

 //$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

// /* check connection */ 
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }

// printf("Host information: %s\n", $mysqli->host_info);
        // экранирования символов для mysql
        //$name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
        //$company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));

        // создание строки запроса
        //$query ="INSERT INTO tovars VALUES(NULL, '$name','$company')";
        //$query = "INSERT orderstable(FirstName, LastName, Phone, Price, Commentary, IsDelivered)
        //VALUES ('Хукумка', 'Крютченко', '88005553535', '300.0', 'Three hundred bucks', False);";

        // выполняем запрос
        // $result = false;//mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        // if($result)
        // {
        //     echo "Данные добавлены";
        // }
        // else
        // {
        //     echo "Фиаско";
        // }
        // // закрываем подключение
        // mysqli_close($link);
    }
    // else
    // {
    //     echo "Фиаско тут";
    // }
?> 
</body>


