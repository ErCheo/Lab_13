<?php
echo "<h2>" . 'Задание 1' . "</h2>";
if (!empty($_GET['city1'])) {
    $city = $_GET['city1'];
    echo 'Ваш город: ' . $city;
}
?>
<form action="" method="get">
    Город: <input type="text" name="city1"><br>
    <input type="submit">
</form>


<?php
echo "<h2>" . 'Задание 2' . "</h2>";
if (!empty($_GET['city2'])) {
    $city = strip_tags($_GET['city2']);
    echo 'Ваш город: ' . $city;
}
?>
<form action="" method="get">
    Город: <input type="text" name="city2"><br>
    <input type="submit">
</form>


<?php
echo "<h2>" . 'Задание 3' . "</h2>";
if (isset($_POST['city3'])) {
    if (!empty($_POST['city3'])) {
        $city = strip_tags($_POST['city3']);
        echo 'Ваш город: ' . $city;
    } else {
        echo 'Город не был указан';
    }
} else {
?>
    <form action="" method="post">
        Город: <input type="text" name="city3"> <br>
        <input type="submit">
    </form>
<?php
} ?>


<?php
echo "<h2>" . 'Задание 4' . "</h2>";
if (!empty($_GET['name1'])) {
    $name = strip_tags($_GET['name1']);
    echo 'Привет, ' . $name;
}
?>
<form action="" method="get">
    Имя: <input type="text" name="name1"><br>
    <input type="submit">
</form>


<?php
echo "<h2>" . 'Задание 5' . "</h2>";
if (!empty($_GET['name2']) & isset($_GET['age1']) & !empty($_GET['message'])) {
    $name = strip_tags($_GET['name2']);
    $age = strip_tags($_GET['age1']);
    $message = strip_tags($_GET['message']);
    echo 'Имя: ' . $name . "</br>";
    echo 'Возраст: ' . $age . "</br>";
    echo 'Соосбщение: ' . $message . "</br>";
}
?>
<form action="" method="get">
    Имя: <input type="text" name="name2"><br>
    Возраст: <input type="text" name="age1"><br>
    Введите сообщение: <textarea name="message" rows="5" cols="50"> </textarea> <br>
    <input type="submit">
</form>


<?php
echo "<h2>" . 'Задание 6' . "</h2>";
if (!isset($_POST['age2'])) {
?>
    <form action="" method="POST">
        Возраст: <input type="text" name="age2"> <br>
        <input type="submit">
    </form>
<?php
} else {
?>
<?php
    if (isset($_POST['age2'])) {
        $age = strip_tags($_POST['age2']);
        echo 'Возраст: ' . $age;
    }
} ?>


<?php
echo "<h2>" . 'Задание 7' . "</h2>";
if (!empty($_GET['login']) & !empty($_GET['password'])) {
    $login = "user_123";
    $pass = "123456789";
    $formLogin = trim($_GET['login']);
    $formPassword = trim($_GET['password']);
    if ($login == $formLogin & $pass == $formPassword) {
        echo 'Доступ разрешён';
    } else {
        echo 'Доступ запрещён';
    }
}
?>
<form action="" method="get">
    Логин: <input type="text" name="login"> <br>
    Пароль: <input type="password" name="password"> <br>
    <input type="submit">
</form>


<?php
echo "<h2>" . 'Задание 8' . "</h2>";
if (!empty($_GET['name8'])) {
    $name = strip_tags($_GET['name8']);
    echo 'Привет, ' . $name;
}
?>
<form action="" method="get">
    Имя: <input type="text" name="name8" value="<?php if (isset($_GET['name8'])) echo $_GET['name8']; ?>"> <br>
    <input type="submit">
</form>


<?php
echo "<h2>" . 'Задание 9' . "</h2>";
if (!empty($_GET['name9']) & !empty($_GET['message9'])) {
    $name = strip_tags($_GET['name9']);
    $message = strip_tags($_GET['message9']);
    echo 'Имя: ' . $name . "</br>";
    echo 'Соосбщение: ' . $message . "</br>";
}
?>
<form action="" method="get">
    Имя: <input type="text" name="name9" value=" <?php if (isset($_GET['name9'])) echo $_GET['name9']; ?>"><br>
    Введите сообщение: <textarea name="message9" rows="5" cols="50">
    <?php if (isset($_GET['message9'])) echo $_GET['message9']; ?>
    </textarea> <br>
    <input type="submit">
</form>


<?php
echo "<h2>" . 'Задание 10' . "</h2>";
$string = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a.{1}b/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 11' . "</h2>";
$string = 'aba aca aea abba adca abea';
preg_match_all('/a.{2}a/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 12' . "</h2>";
$string1 = 'aba aca aea abba adca abea';
preg_match_all('/ab.{1}a/i', $string1, $array1);
echo '<pre>';
var_dump($array1);
echo '</pre>';

$string2 = 'aa aba abba abbba abca abea';
preg_match_all('/ab+a/i', $string2, $array2);
echo '<pre>';
var_dump($array2);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 13' . "</h2>";
$string = 'aa aba abba abbba abca abea';
preg_match_all('/ab*a/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 14' . "</h2>";
$string = 'aa aba abba abbba abca abea';
preg_match_all('/ab{0,1}a/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 15' . "</h2>";
$string = 'ab abab abab abababab abea';
preg_match_all('/(ab)+/i', $string, $array);
echo '<pre>';
var_dump($array[0]);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 16' . "</h2>";
$string = 'a.a aba aea';
preg_match_all('/a\.a/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 17' . "</h2>";
$string = '2+3 223 2223';
preg_match_all('/2\+3/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 18' . "</h2>";
$string = '23 2+3 2++3 2+++3 345 567';
preg_match_all('/2\++3/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 19' . "</h2>";
$string = '23 2+3 2++3 2+++3 445 677';
preg_match_all('/2\+*3/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 20' . "</h2>";
$string = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
preg_match_all('/\*q+\+/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 21' . "</h2>";
$string = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
preg_match_all('/\*q*\+/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>


<?php
echo "<h2>" . 'Задание 22' . "</h2>";
$string = 'aba accca azzza wwwwa';
preg_match_all('/a[^a]+a/i', $string, $array);
echo '<pre>';
var_dump($array);
echo '</pre>';
?>