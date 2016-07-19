<?php
/* Домашнее задание после урока №3

 1. Сделать таблицу с книгами как на паре, но подкрасить каждую вторую строку в светло-серый*/

//исходные данные
$books = array(

    $book_1 = array(
        'title' => 'Три мушкетера',
        'author' => 'Александр Дюма',
        'year' => '1991',
        'price' => 35
    ),

    $book_2 = array(
        'title' => 'Легенда об Уленшпигеле',
        'author' => 'Шарль де Костер',
        'year' => '1983',
        'price' => 24
    ),

    $book_3 = array(
        'title' => 'От двух до пяти',
        'author' => 'Корней Чуковский',
        'year' => '1988',
        'price' => 5
    )
);

?>
<style>
    td, th, div
    {
        padding: 5px;
    }
    .odd
    {
        background-color: lightgray;
    }
    h3
    {
        background-color: aliceblue;
        border-bottom: 1px solid grey;
        border-top: 1px solid grey;
        padding: 10px 5px;
    }
</style>
<a href="#question1">Вопрос №1 - как сделать так, чтобы не выводился Notice до заполнения формы</a>
<h3>Задание: cделать таблицу с книгами как на паре, но подкрасить каждую вторую строку в светло-серый</h3>
<table>
    <tr class="odd">
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>PRICE</th>
    </tr>
<?php

$i = 0;

foreach ($books as $book) {
    $result = (($i % 2) == 1) ?  ' class=\'odd\' ' : ' ';
    echo '<tr'.$result.'>';
    echo '<td>'.$book['title'].'</td>';
    echo '<td>'.$book['author'].'</td>';
    echo '<td>'.$book['price'].'</td></tr>';
    $i++;
}

?>
</table>

<!---------------------------------------------------------------------------------------------------------------------->

<?php
/* Задание
   2. Создать массив из названий 5 стран мира. Вывести массив на экран при помощи print_r внутри тегов <pre></pre> */

$countries = array("Франция", "Германия", "Греция", "Словакия", "Бельгия"); ?>

<h3> Задание: создать массив из названий 5 стран мира. Вывести массив на экран при помощи print_r внутри тегов PRE</h3>

<pre> 
<?php 
	print_r($countries); 
	unset($countries);
?> 
</pre>

<!---------------------------------------------------------------------------------------------------------------------->

<?php
/* Задание
   3. Создать ассоциативный массив из 5 элементов, в котором ключи - это названия стран, а значения элементов - это столицы стран. Вывести массив на экран*/

$countries_array_assoc = array("Франция" => "Париж", "Германия" => "Берлин", "Греция" => "Афины", "Словакия" => "Братислава", "Бельгия" => "Брюссель"); ?>

<h3> Задание: создать ассоциативный массив из 5 элементов, в котором ключи - это названия стран, а значения элементов - это столицы стран. Вывести массив на экран</h3>

<pre> <?php print_r($countries_array_assoc); ?> </pre>

<!---------------------------------------------------------------------------------------------------------------------->

<?php
/* Задание
   4. Определить константы, которые соответствуют названиям нескольких стран мира. Используя эти константы, сформировать массив из соответствующих значений*/

define('COUNTRY_1', 'Франция');
define('COUNTRY_2', "Германия");
define("COUNTRY_3", "Греция");
define("COUNTRY_4", "Бельгия");
$countries_const = array(COUNTRY_1, COUNTRY_2, COUNTRY_3, COUNTRY_4); ?>

<h3> Задание: определить константы, которые соответствуют названиям нескольких стран мира. Используя эти константы, сформировать массив из соответствующих значений</h3>

<pre> <?php print_r($countries_const); ?> </pre>
<!---------------------------------------------------------------------------------------------------------------------->
<?php
/* Задание
   5. Создать скрипт, который бы вывел на экран значение переменной $$$$$hello. Значение может быть любым.*/

$hello = "world";
$world = "planet";
$planet = "universe";
$universe = "galaxy";
$galaxy ="Hello Universe";
?>

<h3> Задание: cоздать скрипт, который бы вывел на экран значение переменной $$$$$hello. Значение может быть любым.</h3>

<pre> <?php echo $$$$$hello; ?> </pre>

<!---------------------------------------------------------------------------------------------------------------------->

<?php
/* Задание
   5. Создать форму, которая содержит поля name, email, phone. Задать скрипт, который выведет на экран отправленные данные - $_POST или $_GET (в зависимости от свойств формы)*/
?>

<h3> Задание: создать форму, которая содержит поля name, email, phone. Задать скрипт, который выведет на экран отправленные данные - $_POST или $_GET (в зависимости от свойств формы)</h3>
<a name="question1"></a>
<form action="index.php" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr><td colspan="2"><input type="submit"></td></tr>
    </table>
</form>

<?php echo "Имя:     ".$_POST['name']."<br>";
      echo "E-mail:  ".$_POST['email']."<br>";
      echo "Телефон: ".$_POST['phone'];
?>
<!---------------------------------------------------------------------------------------------------------------------->

<h3> Задание: cоздать форму с полями username, email, message. Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран.</h3>
<a name="question1"></a>
<form action="index.php" method="GET">
    <table>
        <tr>
            <td>User name</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea name="message"></textarea></td>
        </tr>
        <tr><td colspan="2"><input type="submit"></td></tr>
    </table>
</form>

<?php 
	if ($_GET != NULL)
	{
	echo $str = serialize($_GET);
	}
?>

<!---------------------------------------------------------------------------------------------------------------------->

<h3> Задание: вычислить количество секунд в году и присвоить это значение переменной. Вычислить остаток от деления этого значения на 2</h3>
<?php

$second_in_year = 365 * 24 * 60 * 60;
$second_in_leap_year = 366 * 24 * 60 * 60;

echo "Секунд в году $second_in_year <br>";
echo "Деления секунд в году на 2 дает остаток - " . $modulo = $second_in_year % 2 . "<br>";
echo "<br>Секунд в высокосном году $second_in_leap_year <br>";
echo "Деления секунд в году на 2 дает остаток - " . $modulo = $second_in_leap_year % 2;

?>