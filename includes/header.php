<?php
    if(session_id() == "")
	{	
		session_start();	
	}

    ob_start();
    require("./includes/constants.php");
    require("./includes/db.php");
    require("./includes/functions.php");    
    flashMessage();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title><?php echo $title ?></title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="CNSA Official setTimeout">
    
   
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
   
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">



</head>

<body>

<section class="main">
	<div class="layer">
		
		<div class="bottom-grid">
			<div class="logo">
				<h1 style="color: white;"> <a href="index.php" style="color: white;"><span class="fa fa-futbol-o"></span></a> CNSA</h1>

			</div>
			<div class="links">
				<ul class="links-unordered-list">
				<?php if(isset($_SESSION['user'])): ?>
            
                        <li class="active">
                            <a href="logout.php" class="">Logout</a>
                        </li>
                    <?php else: ?>
                        
                        <li class="active">
                            <a href="login.php" class="">Login</a>
                        </li>
					<?php endif; ?>
					<li class="">
						<a href="index.php" class="">Home</a>
					</li>
					<li class="">
						<a href="select-register.php" class="">Register</a>
					</li>
					<li class="">
						<a href="contact.php" class="">Contact</a>
					</li>
					<li class="">
						<a href="details.php" class="">Details</a>
					</li>
				</ul>
			</div>
		</div>