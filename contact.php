<?php

// 1. connect to DB - mysql - mysqli - PDO
$dbc = new mysqli('sql102.b6b.ir', 'b6bi_27935628', 'reza1379', 'b6bi_27935628_reza1'); // mysqli_connect
// 2. create insert query
//$sql = "INSERT INTO message(title, body)
//		VALUES('my title', 'متن پیام')";
$sql = "INSERT INTO message(title, body)
		VALUES('{$_POST['title']}', '{$_POST['body']}')";
//echo $sql . '<br>';
// 3. execute query
$result = $dbc -> query( $sql ); // mysqli_query
// 4. close connection
$dbc -> close(); //mysqli_close

echo 'پیام با موفقیت ثبت شد';
?>