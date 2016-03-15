<?php

if(isset($_POST['login']) && empty($_POST['login'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];
   $username = stripcslashes($username);
   $password = stripcslashes($password);
  
   $query = $conn->prepare("SELECT username FROM accounts WHERE username=:username AND password=:password");
   $query->bindParam(':username',$username,PDO::PARAM_STR);
   $query->bindParam(':password',$password,PDO::PARAM_STR);
   $query->execute();

   $results = $query->rowCount();

   if($results == 1) {
      $_SESSION["login_user"]=$username;
      // echo $_SESSION["login_user"];
      $results_info = $query->fetch();
      print_r ($results_info);
      json_encode($results_info);

      echo "<br/> ayy lmao. Connection established.";
   } else {
      echo "wroooong";
      
   }

}

?>