<b><h3>На LIMIT</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: LIMIT.</p>
<p>Из таблицы workers достаньте первые 6 записей.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM workers WHERE id > 0 LIMIT 6";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Из таблицы workers достаньте записи со вторую, 3 штуки.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM workers WHERE id > 0 LIMIT 1, 3";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<b><h3>На ORDER BY</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: ORDER BY,LIMIT.</p>
<p>Из таблицы workers достаньте всех работников и отсортируйте их по возрастаниюзарплаты.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM workers WHERE id > 0 ORDER BY salary";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Из таблицы workers достаньте всех работников и отсортируйте их по убываниюзарплаты.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM workers WHERE id > 0 ORDER BY salary DESC";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Из таблицы workers достаньте работников со второго по шестого и отсортируйте их по возрастанию возраста.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM workers WHERE id > 0 ORDER BY age LIMIT 1, 5 ";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<b><h3>На COUNT</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие функции SQL: COUNT.</p>
<p>В таблице workers подсчитайте всех работников.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT COUNT(*) as count FROM workers WHERE id > 0";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>В таблице workers подсчитайте всех работников c зарплатой 300$.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT COUNT(*) as count FROM workers WHERE salary = 300";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<b><h3>На LIKE</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: LIKE.</p>
<p>Создайте таблицу pages:</p>
<p>В таблице pages найти строки, в которых фамилия автора заканчивается на "ов".</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM pages WHERE athor LIKE '%ов'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>В таблице pages найти строки, в которых есть слово "элемент" (искать только по колонке article).</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM pages WHERE article LIKE '%элемент%'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>В таблице workers найти строки, в которых возраст работника начинается с числа 3, а далее идет только одна цифра.</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM workers WHERE age LIKE '3_'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>В таблице workers найти строки, в которых имя работника заканчивается на "я".</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name)
or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM workers WHERE name LIKE '%я'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>