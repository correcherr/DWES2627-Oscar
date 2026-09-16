<?php
$users = array("oscar" => "1234", "pepe" => "1234");
if (in_array($_POST['user'], $users) && $_POST['password'] == array_search($_POST['user'], $users)) {
    header('Location:ok.php');

} else {
    header('Location:ko.php');

}
echo $_POST['user'] . '' . $_POST['password'] . '';
?>