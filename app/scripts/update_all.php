#!/usr/bin/php
<?php
use \app\conf\App;
use \app\models\Database;
use \app\inc\Util;

header("Content-type: text/plain");
include_once("../conf/App.php");
new \app\conf\App();
Database::setDb("esbjerg");
$conn = new \app\inc\Model();
$sql = "SELECT * FROM kommuneplan18.kpplandk2";
$result = $conn->execQuery($sql);
echo $conn->PDOerror[0];
$count = 0;
$search = new \app\models\Search();

while ($row = $conn->fetchRow($result)) {
    $res = $search->go($row["enrid"]);

    print_r($res);

}