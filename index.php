<?php

$host = 'localhost';
$username = 'root';
$password = 'root';

$con = mysqli_connect($host, $username, $password);

if (!$con) die('数据库连接失败');
mysqli_select_db($con, 'dev_marathon');
$rows = mysqli_query($con,"show tables");

mysqli_fetch_array($rows);

