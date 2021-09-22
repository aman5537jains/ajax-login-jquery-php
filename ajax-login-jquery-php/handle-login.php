<?php 
include "./config/init.php";  // include database connection

header('Content-Type: application/json; charset=utf-8');   // send response in json format

if(isset($_POST)){   //check is form submited
  if(isset($_POST['email']) && isset($_POST['password'])){  //check is form contain email and pasword
    if($_POST['email']==""){  // check empty validation
      echo json_encode(["status"=>false,"msg"=>"Email is required"]);
    }
    else if($_POST['password']==""){ // check empty validation
      echo json_encode(["status"=>false,"msg"=>"Password is required"]);
    }
    else{  // if validation pass then execute mysql query

      $email      = $_POST['email'];
      $password   = $_POST['password'];
      $stmt       = $mysqli_conn->prepare("select * from users where email=? limit 1"); // prepare the statement before execute for security 

      if($stmt){
        
        $stmt->bind_param("s", $email);  // binding variable for safe execution
        $stmt->execute();
        $result =  $stmt->get_result();
     
        if ($result->num_rows > 0) {   // check is result exist
          // output data of each row
          $row=$result->fetch_assoc();
          
          if(md5($password)==$row['password']){  //cross checking of password for better security
            //handle session
            $_SESSION["login_user"] = $row;
            echo json_encode(["status"=>true,"msg"=>"Login successfull."]);
          
          }
          else{
            echo json_encode(["status"=>false,"msg"=>"Invalid credentials"]);
          }
        }
        else{
          echo json_encode(["status"=>false,"msg"=>"Invalid credentials"]);
        }
      }
      else{
        $error = $mysqli_conn->errno . ' ' . $mysqli_conn->error;
        echo json_encode(["status"=>false,"msg"=>$error]);
      }

    }


    
  }
}





