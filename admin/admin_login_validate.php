<?php

	require(get_include_path()."Projects\aiub project\Controllers\AdminController.php");
	$admincontrol = new AdminController();
   if(!empty($_POST["unameOremail"]) || !empty($_POST["pass"]))
   {
   		$unameOremail = $_POST["unameOremail"];
   		$pass = $_POST["pass"];
   		if($admincontrol->checkAdmin($unameOremail , $pass  , "username") || $admincontrol->checkAdmin($unameOremail , $pass , "email"))
   		{
   			$row = $admincontrol->getQueryResult();
        $admincontrol->log_in($row["username"] , $row["user_id"] , " http://localhost:<?php echo  {$_SERVER["SERVER_PORT"]};?>/Projects/aiub%20project/admin/admin_panel.php");
   		}
   		else
      {
        echo "<h1><a href = 'http://localhost:<?php echo  {$_SERVER["SERVER_PORT"]};?>/Projects/aiub%20project/admin/ogin.php'>Invalid Admin</a></h1>";
      }
   }
   else
      echo "<h1><a href = 'http://localhost:<?php echo  {$_SERVER["SERVER_PORT"]};?>/Projects/aiub%20projectadmin/login.php'>Write Something</a></h1>";



?>
