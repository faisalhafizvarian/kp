<?
session_start();

include 'koneksi.php';

$username=  $_POST['username'];
$password=  $_POST['password'];
$password= md5($password);

$sql = $pdo->prepare("SELECT * FROM login WHERE username:a and password:b");

$sql->bindParam(':a',$username);
$sql->bindParam(':b',$password);
$sql->execute();

$data = $sql->fetch();

if(!empty($data)){
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    header ("location:index.php");

    setcookie("message","delete",time()-1);

    header("location:index.php");
}
else{
setcookie("message", "maaf nama pengguna atau kata sandi salah", time()+3600);

    header("location:login.php");
}
?>