<b><h3>На SELECT</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: SELECT, WHERE.</p>
<p>Выбрать работника с id = 3.</p>
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

$query = "SELECT * FROM workers WHERE id = 3";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);
var_dump($user);
?>
<p>Выбрать работников с зарплатой 1000$.</p>
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

$query = "SELECT * FROM workers WHERE salary = 1000";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать работников в возрасте 23 года.</p>
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

$query = "SELECT * FROM workers WHERE age = 23";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать работников с зарплатой более 400$.</p>
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

$query = "SELECT * FROM workers WHERE salary > 400";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать работников с зарплатой равной или большей 500$.</p>
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

$query = "SELECT * FROM workers WHERE salary >= 500";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать работников с зарплатой НЕ равной 500$.</p>
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

$query = "SELECT * FROM workers WHERE salary != 500";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать работников с зарплатой равной или меньшей 900$.</p>
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

$query = "SELECT * FROM workers WHERE salary <= 900";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Узнайте зарплату и возраст Васи.</p>
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

$query = "SELECT * FROM workers WHERE name = 'Вася'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);
var_dump($user);
?>
<b><h3>На OR и AND</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: SELECT, WHERE, OR, AND.</p>
<p>Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).</p>
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

$query = "SELECT * FROM workers WHERE age > 25 AND age <= 28";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать работника Петю.</p>
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

$query = "SELECT * FROM workers WHERE name = 'Петя'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);
var_dump($user);
?>
<p>Выбрать работников Петю и Васю.</p>
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

$query = "SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать всех, кроме работника Петя.</p>
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

$query = "SELECT * FROM workers WHERE name != 'Петя'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.</p>
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

$query = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.</p>
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

$query = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR (salary = 1000)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.</p>
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

$query = "SELECT * FROM workers WHERE (age > 23 AND age < 27) OR (salary > 400 AND salary < 1000)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<p>Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.</p>
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

$query = "SELECT * FROM workers WHERE (age = 27 OR salary != 400)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);
?>
<b><h3>На INSERT</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: INSERT.</p>
<p>Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.</p>
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

$query = "INSERT INTO workers SET name = 'Никита', age = 26, salary = 300";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.</p>
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

$query = "INSERT INTO workers (name, age, salary) VALUES ('Светлана', 0, 1200)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.</p>
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

$query = "INSERT INTO workers (name, age, salary) VALUES ('Ярослав', 30, 1200), ('Петр', 31, 1000)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<b><h3>На DELETE</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: DELETE.</p>
<p>Удалите работника с id=7.</p>
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

$query = "DELETE FROM workers WHERE id = 7";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Удалите Колю.</p>
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

$query = "DELETE FROM workers WHERE name = 'Коля'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Удалите всех работников, у которых возраст 23 года.</p>
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

$query = "DELETE FROM workers WHERE age = 23";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<b><h3>Верните таблицу workers в исходное состояние.</h3></b>
<b><h3>На UPDATE</h3></b>
<p>Для решения задач данного блока вам понадобятся следующие SQL команды: UPDATE.</p>
<p>Поставьте Васе зарплату в 200$.</p>
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

$query = "UPDATE workers SET salary = 200 WHERE name = 'Вася'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Работнику с id=4 поставьте возраст 35 лет.</p>
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

$query = "UPDATE workers SET age = 35 WHERE id = 4";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Всем, у кого зарплата 500$ сделайте ее 700$.</p>
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

$query = "UPDATE workers SET salary = 700 WHERE salary = 500";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.</p>
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

$query = "UPDATE workers SET age = 23 WHERE id > 2 AND id =< 5";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>
<p>Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.</p>
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

$query = "UPDATE workers SET name = 'Женя', salary = 900 WHERE name = 'Вася'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>