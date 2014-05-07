
<?php
$host="localhost"; // Host name 
$username="migros_db_user"; // Mysql username 
$password="Migros123DB"; // Mysql password 
$db_name="migros_db"; // Database name 
$tbl_name="idea"; // Table name

// Connect to server and select databse.
mysql_connect($host, $username, $password)or die("cannot connect"); 
mysql_select_db($db_name)or die("cannot select DB");

$sql ='SELECT id, title, content, user_id, created_on FROM '.$tbl_name.' WHERE status = 1';

$result=mysql_query($sql);

$response = array();

if($result){
	$response['estado'] = 'ok';
	while($row = mysql_fetch_assoc($result)){
		//print_r($row);

		$response['ideas'][$row['id']] = array('id'=>$row['id'], 'title'=>utf8_encode($row['title']), 'content'=>utf8_encode($row['content']), 'user_id'=>$row['user_id'], 'created_on'=>$row['created_on']);
	}
}else{
	$response['estado'] = 'error';
}

//print_r($response);

$result = json_encode($response);
echo $_GET['jsoncallback'] . '(' . $result . ');';
 
/* Define los valores que seran evaluados, en este ejemplo son valores estaticos,
en una verdadera aplicacion generalmente son dinamicos a partir de una base de datos */
 

 
?>