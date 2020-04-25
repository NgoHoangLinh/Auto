
<?php

    $nameCar = $_POST['name_car'];
    $year = $_POST['year'];
    $srcCar = $_POST['src_car']  ;

    echo "Полученные данные. <br/> Название машины: ".$nameCar." <br/> Год: ".$year."   <br/> Ссылка на картинку: ".$srcCar."";

    echo "<br/> <br/> Подключение к БД:";

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    try{
        $connection = new PDO("mysql:host=$servername; dbname=mercedes", $username, $password);
        echo "<br/> <br/> База данных подключена.";

    } catch(PDOException $e){
        echo "<br/> <br/> Ошибка подключения к базе данных".$e->getMessage();
    }

    $query = "INSERT INTO `cars`(`name`, `year`, `pic_url`) VALUES ('".$nameCar."','".$year."','".$srcCar."'); ";

    echo "<br/><br/>Создан запрос для базы данных : ". $query ;

    if ($connection->query($query) == TRUE){
    echo "Запрос передан успешно.";
    } else {
    echo "Ошибка запроса";
    }

    $connection = null;
    echo "<br/> <br/> Подключение к БД закрыто.";

    echo " <br/><a href='Admin.php'>Вернуться на страницу администратора</br>>";


/*INSERT INTO `cars`(`name`, `year`, `pic_url`) VALUES('', '', '');
*/

?>


