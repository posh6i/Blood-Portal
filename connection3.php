<?php
try{
  $con = new PDO("mysql:host=localhost;dbname=signup", "root", "", array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
   //servername,username,password and database name taken as the parameters.
        echo("Here: ");
  if(isset($_POST["signup"]))
  {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $email1 = $_POST['email1'];
        $pnum= $_POST['pnum'];
        $pnum1 = $_POST['pnum1'];
        $wnum = $_POST['wnum'];
        $blood = $_POST['blood'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $history = $_POST['history'];
        
        $statement = "INSERT INTO user (username,email,email1,pnum,pnum1,wnum,blood,age,date,history) VALUES (:username,:email,:email1,:pnum,:pnum1,:wnum,:blood,:age,:date,:history);";
        $insert = $con->prepare($statement);
        $insert->bindValue(':username' , $username);
        $insert->bindValue(':email' , $email);
        $insert->bindValue(':email1' , $email1);
        $insert->bindValue(':pnum' , $pnum);
        $insert->bindValue(':pnum1' , $pnum1);
        $insert->bindValue(':wnum' , $wnum);
        $insert->bindValue(':blood' , $blood);
        $insert->bindValue(':age' , $age);
        $insert->bindValue(':date' , $date);
        $insert->bindValue(':history' , $history);
        $insert->execute();
        
   }
 }
      
      catch(PDOException $e)
      {
        echo "Error" .$e->getMessage();
       }
      