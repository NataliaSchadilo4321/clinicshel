<?php
header('Location: \submit.php');
  // print_r($_POST);
  $email=$_POST['email'];
  $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
      $likar=$_POST['likar'];
        $workdays=$_POST['workdays'];
              $error = "";
              if(trim($email)=="")
              $error='Enter a email';
              if(trim($first_name)=="")
            $error='Enter a name';
            if(trim($last_name)=="")
          $error='Enter a last_name';
          if(trim($likar)=="")
        $error='Enter a doctor';
      if(trim($workdays)=="")
        $error='Enter a days';
        {
  echo $error;
  exit;
}
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text\plain;charset=utf-8\r\n";
mail('nataliaschadilo@gmail.com',$email, $first_name, $last_name, $likar, $workdays);
?>
  