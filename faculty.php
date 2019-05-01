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
      else if($_SESSION['type']==1)
             {
                    header("location:admin.php");
              }
       else if($_SESSION['type']==4)
              {
                     header("location:student.php");
              }
      else
              {
      		    print_r($_SESSION['name']);
      		    echo " hello this is faculty";
              }
 ?>
<br><br>
       <a href="logout.php">logout</a>
       </body>
       </html>