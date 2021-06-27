<?php 
	require_once "DBManager.class.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク7</title>
</head>
<body>

<?php

$dbmanager = DBManager::getInstance();
echo $dbmanager->getId();
echo"<hr/>";

$dbmanager = DBManager::getInstance();
echo $dbmanager->getId();

?>

</body>
</html>
