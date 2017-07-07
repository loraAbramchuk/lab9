<?php
/**
 * Created by PhpStorm.
 * User: Lora
 * Date: 08.07.2017
 * Time: 0:13
 */
$db = mysqli_connect("localhost", "root", "") or die ("Невозможно подключиться к БД");
mysqli_select_db($db, "wall") or die ("Невозможно выбрать БД");
$out = "";
$out2 = "";
$sql = "SELECT `Name`, `R1`, `R2` FROM `wall2` WHERE `wall2`.`R2` = 0";


$dda = mysqli_query($db, $sql);
$count = mysqli_affected_rows($db);
//$sql3 = "SELECT `File` FROM `wall` WHERE `wall`.`Number` =" . (int)$_GET['DID'];
for ($i = 0; $i < $count; $i++) {
    $dda_info = mysqli_fetch_assoc($dda);
    $out .= " <a href ='?DID=" . $dda_info['R1'] ."'>".$dda_info['Name']."</a></br>";
    if ($_GET['DID'] == 1) {
        $sql = "SELECT `Name`, `R1`, `R2` FROM `wall2` WHERE `wall2`.`R1` = 1 && `wall2`.`R2` = 1 || `wall2`.`R1` = 1 && `wall2`.`R2` = 2";
        $dda = mysqli_query($db, $sql);
        $count = mysqli_affected_rows($db);
        for ($i = 0; $i < $count; $i++) {
            $dda_info = mysqli_fetch_assoc($dda);
            $out2 .= " <a href='#'>".$dda_info['Name']."</a></br>";




        }
    }

    if ($_GET['DID'] == 3) {
        $sql = "SELECT `Name`, `R1`, `R2` FROM `wall2` WHERE `wall2`.`R1` = 3 && `wall2`.`R2` = 1 || `wall2`.`R1` = 3 && `wall2`.`R2` = 2";
        $dda = mysqli_query($db, $sql);
        $count = mysqli_affected_rows($db);
        for ($i = 0; $i < $count; $i++) {
            $dda_info = mysqli_fetch_assoc($dda);
            $out2 .= " <a href='#'>".$dda_info['Name']."</a></br>";

        }
    }



}
echo $out.$out2;