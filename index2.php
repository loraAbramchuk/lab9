<?php
ini_set('display_errors','Off');
print_r($_FILES);
$out = '';
$out2 = '';


$db = mysqli_connect("localhost", "root", "") or die ("Невозможно подключиться к БД");
mysqli_select_db($db, "wall") or die ("Невозможно выбрать БД");
$page = file_get_contents("7-2-form.tpl");
$pageN = file_get_contents("7-2-form2.tpl");
$page1 = file_get_contents("7-2-comment.tpl");
$Name = isset($_POST['Name']) ? $_POST['Name'] : "";
$Message = isset($_POST['Message']) ? $_POST['Message'] : "";
$date = date('Y.m.d');
$tak = file_get_contents("7-2-1.tpl");
$Number = isset($_GET['Number']) ? $_GET['Number'] : 0;


if (strlen($Name) > 0 || strlen($Message) > 0) {
    $path = 'File/';
    $ext = array_pop(explode('.', $_FILES['ufile']['name'])); // расширение
    $new_name = time() . '.' . $ext; // новое имя с расширением
    $full_path = $path . $new_name;
  //  $path2 = 'C:\xampp\htdocs\File\\'.$new_name;
   // print_r($_POST);

    if ($_FILES['ufile']['error'] == 0) {
        if (move_uploaded_file($_FILES['ufile']['tmp_name'], $full_path)) {
            $p2 = "INSERT INTO `wall` (`Name`, `Date`, `Message`, `File`) VALUES ('$Name', '$date', '$Message', '$new_name')";
            $p1 = mysqli_query($db, $p2);
            echo $p2;
        }
    }


}
//print_r($new_name);
if (isset($_GET['DID']) && !empty($_GET['DID'])) {
    $sql3 = "SELECT `File` FROM `wall` WHERE `wall`.`Number` =" . (int)$_GET['DID'];

    $dda3 = mysqli_query($db, $sql3);
    $dda_info3 = mysqli_fetch_assoc($dda3);
    print_r($dda_info3);
    unlink("C:\\xampp\\htdocs\\File\\".$dda_info3['File']);
    $sql2 = "DELETE FROM `wall` WHERE `wall`.`Number` =" . (int)$_GET['DID'];
    $dda2 = mysqli_query($db, $sql2);
 //   $path2 = 'C:\xampp\htdocs\File\\'.$new_name;
  //  $ext2 = array_pop(explode('/', $dda_info['File'])); // name
//    $sql3 = "SELECT `File` FROM `wall` WHERE `wall`.`Number` =" . (int)$_GET['DID'];
//
//    $dda3 = mysqli_query($db, $sql3);
//    print_r($dda3);
//    $dda_info3 = mysqli_fetch_assoc($dda3);
 //   unlink("\\File\\".$dda_info3);
   // print_r();
}

$sql = "SELECT * FROM `wall` ORDER BY `Number` DESC";

$dda = mysqli_query($db, $sql);
$count = mysqli_affected_rows($db);


for ($i = 0; $i < $count; $i++) {
    $dda_info = mysqli_fetch_assoc($dda);
    //  $infoN .= '<a href ="?DID = $dda_info['Number']"> удалить запись </a>';
    $out .= "<font color='blue'><u>Имя пользователя - " . $dda_info['Name'] . "</u></font><font color='gray'>" .
        "</font></br>Тект сообщения - " . $dda_info['Message'] ."</br>Адресс файла - ".$dda_info['File'] . " <a href ='?DID=" . $dda_info['Number'] . "'>Удалить запись</a></br><hr/>";

  //  $out2 .= $dda_info['File'];
  //  print_r($out2);
}


$pageN = str_replace('{COMMENT}', $tak, $pageN);
$pageN = str_replace('{COMMENT3}', $out, $pageN);



echo $pageN;


?>



