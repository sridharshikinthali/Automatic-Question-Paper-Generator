<?php
       require 'database.php';
	$nameErr=$passErr="";
        
     	session_start();
  	if(isset($_SESSION['name']))
           {
      		require 'login.php';
	   }
       else if( isset($_COOKIE["name"])) 
           {
               require 'login.php';
           }
         
	
?>
</html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<?php
   	if($_SERVER["REQUEST_METHOD"] == "POST") 
             {
               if (empty($_POST["name"])) 
                    	{
    				$nameErr = "Name is required";
 		    	}
               else if (empty($_POST["password"])) 
                   	{
                        	$passErr = "password is required";
                   	} 
               else
		   	{
          		  if(isset($_POST['login']))
			    {
	        	     	require 'login.php';
                            }
		   	} 
            }
?>
<body>
	<div class="header">
	<a href="/">Automatic Question Paper Generator</a>
	</div>

	<h1>Login</h1>
	<form  method="POST" action="index.php" autocomplete="off">
		
		<input type="text" placeholder="Enter your user name" name="name"> 
                 <span class="error">* <?php echo $nameErr;?></span> 
                <br><br>

		<input type="password" placeholder="Enter your password" name="password">
                  <span class="error">* <?php echo $passErr;?></span>
                <br><br>
              <button name="login">Log in</button>
         </form>
 </body>
</html>