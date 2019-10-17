<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        td {
            font: 16px "Times New Roman";
            text-align: center;
        }
        .text {
            font-weight: bold;
        }
    </style>
</head>
<body>
<table border = "1" width="800" height="100" align="centr" cellpadding="0">
  <tr>
    <td><b>id</b></td>
    <td><b>name</b></td>
    <td><b>age</b></td>
    <td><b>salary</b></td>
  </tr>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'test';
$link = mysqli_connect($host, $user, $password, $dbName)
or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'uf8'");
$query = "SELECT * FROM workers WHERE id>0";
$result = mysqli_query($link, $query)
or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$result = '';
foreach ($data as $item) {
    $result .= '<td>' . $item['id'] . '</td>';
    $result .= '<td>' . $item['name'] . '</td>';
    $result .= '<td>' . $item['age'] . '</td>';
    $result .= '<td>' . $item['salary'] . '</td>';
    echo '<tr>' . $result . '</tr>';
    $result = '';
}
?>
</table>
</body>
</html>