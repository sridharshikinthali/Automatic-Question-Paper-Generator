<html>
<body>
<?php
     session_start();
     if(!isset($_SESSION['name']))
            {
         	 echo "<script>window.location='index.php';</script>";
            }      	
      else if($_SESSION['type']==2)
             {
                   header("location:Hod.php");
             }
      else if($_SESSION['type']==3)
             {
                    header("location:faculty.php");
              }
       else if($_SESSION['type']==4)
              {
                     header("location:student.php");
              }
      else
              {
      		    print_r($_SESSION['name']);
      		    echo " hello this is admin";
              }
 ?>
<br><br>
       <a href="logout.php">logout</a>
       </body>
       </html>