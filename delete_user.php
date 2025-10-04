<?php
require_once __DIR__ . '/configs/session.php';
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $userModel->deleteUserById($id);//Delete existing user
}
echo "<script>
    localStorage.setItem('session_id', '".session_id()."');
    window.location.href = 'list_users.php?session_id=".session_id()."';
</script>";
exit;
?>