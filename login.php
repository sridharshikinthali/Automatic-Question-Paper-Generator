<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
   require 'database.php';
   if(isset($_SESSION['name']))
     	{
      		$username=test_input($_SESSION['name']);
      		$password=test_input($_SESSION['password']);
     	}
  else if( isset($_COOKIE["name"])) 
           {
             $username=test_input($_COOKIE['name']);
      	     $result=$conn->query("SELECT * FROM users WHERE u_name='$username' ");
             $user=$result->fetch_assoc();
             $password=test_input($user['u_pass']);
                 
           }
  else
 	{
 		$username=test_input($conn->escape_string($_POST['name']));
 		$password=test_input($conn->escape_string($_POST['password']));
	}
  $result=$conn->query("SELECT * FROM users WHERE u_name='$username' ");
  if($result->num_rows==0)
        {
     		 $_SESSION['message']="user does not exist";
    		 echo "user dont exist";
        }
  else
        {
    	       $user=$result->fetch_assoc();
               if ($password==test_input($user['u_pass']))
                      {
                           setcookie("name",$user['u_name'], time()+3600, "/","", 0);
                           $_SESSION['name']=test_input($user['u_name']);
                           $_SESSION['password']=test_input($user['u_pass']);
                           $_SESSION['type']=test_input($user['u_type']);
                        if($_SESSION['type']==1)
                            {
                                    header("location:admin.php");
                            }
                        else if($_SESSION['type']==2)
                            {
                                    header("location:Hod.php");
                            }
                         else if($_SESSION['type']==3)
                            {
                                    header("location:faculty.php");
                            }
                         else
                            {
                                    header("location:student.php");
                            }
                                       
                       }
              else
                 {
             		echo "password incorrect";
       		 }   
  	}
?>