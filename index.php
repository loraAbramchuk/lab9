<?php


$out = '';


$db = mysqli_connect("localhost", "root", "") or die ("Невозможно подключиться к БД");
mysqli_select_db($db, "wall") or die ("Невозможно выбрать БД");
$page = file_get_contents("7-2-form.tpl");
$page1 = file_get_contents("7-2-comment.tpl");
$Name = isset($_POST['Name']) ? $_POST['Name'] : "";
$Message = isset($_POST['Message']) ? $_POST['Message'] : "";
$date = date('Y.m.d');
$tak = file_get_contents("7-2-1.tpl");
$Number = isset($_GET['Number']) ? $_GET['Number'] : 0;


if (strlen($Name) > 0 || strlen($Message) > 0) {
    $path = 'Image/';
    $ext = array_pop(explode('.', $_FILES['ufile']['name'])); // расширение
    $new_name = time() . '.' . $ext; // новое имя с расширением
    $full_path = $path . $new_name;
    print_r($_POST);

    if ($_FILES['ufile']['error'] == 0) {
        if (move_uploaded_file($_FILES['ufile']['tmp_name'], $full_path)) {
            $p2 = "INSERT INTO `wall` (`Name`, `Date`, `Message`, `Image`) VALUES ('$Name', '$date', '$Message', '$full_path')";
            $p1 = mysqli_query($db, $p2);
        }
    }


}

if (isset($_GET['DID']) && !empty($_GET['DID'])) {
    $sql2 = "DELETE FROM `wall` WHERE `wall`.`Number` =" . (int)$_GET['DID'];
    $dda2 = mysqli_query($db, $sql2);
  //  print_r(mysqli_affected_rows($dda2));
}

$sql = "SELECT * FROM `wall` ORDER BY `Number` DESC";
$dda = mysqli_query($db, $sql);
$count = mysqli_affected_rows($db);


for ($i = 0; $i < $count; $i++) {
    $dda_info = mysqli_fetch_assoc($dda);
    //  $infoN .= '<a href ="?DID = $dda_info['Number']"> удалить запись </a>';
    $out .= "<font color='blue'><u>" . $dda_info['Name'] . "</u></font> <font color='gray'>" . $dda_info['Date'] .
        "</font></br>" . $dda_info['Message'] . "<img src=" . $dda_info['Image'] . " width='100px'; height='100px'>" . " <a href ='?DID=" . $dda_info['Number'] . "'>Удалить запись</a></br><hr/>";


}
$page = str_replace('{COMMENT3}', $out, $page);

//print_r ($_FILES['ufile']);




$page = str_replace('{COMMENT}', $tak, $page);

/*
if(!empty($_GET['DID'])){
    $sql2 =   SELECT `Number` FROM `wall`;
     $dda2 = mysqli_query($db, $sql2);
     print_r($dda2);
}
*/

echo $page;


?>
