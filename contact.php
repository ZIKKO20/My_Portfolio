<?php
if(isset($_POST['Submit'])){
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

if(empty($Name) || empty($Email) || empty($Subject) || empty($Message)){
  header('location:index.php?error');
} else{
  $to ="info@isaacrabiu.com";
  if(mail($to, $Subject,$Message,$Email)){
    header('location:index.php?success');
  }
}
//form not working

} else{
  header('location:index.php');
}

?>