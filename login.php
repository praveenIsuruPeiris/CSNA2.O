<?php
$title = "Login Page";
include "./includes/header.php";


function user_authenticate($username, $password) {

    return ($username === 'name' && $password === 'Password');
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['text1']) && isset($_POST['password'])) {
        $username = $_POST['text1'];
        $password = $_POST['password'];
        $user = user_authenticate($username, $password);

        if ($user) {
            $_SESSION['user'] = $username;
            redirect("./index.php");
            exit;
        } else {
            setMessage("Login Failed");
        }
    }
}
?>
<style>
    .error{
        color:yellow;
    }
</style>
<div class="content-grid">
			<div class="text-center icon">
				<span class="fa fa-futbol-o"></span>

			</div>
			<div class="content-bottom">
				<form action="#" method="post">
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="content-input-field">
							<input name="text1" id="text1" type="text" value="" placeholder="Username" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="content-input-field">
							<input name="password" id="myInput" type="Password" placeholder="Password">
						</div>
					</div>
					<div class="content-input-field">
                    <button type="submit" class="btn">Login</button>
					</div>
                    <h1 class="error"><?php echo getMessage();?></h1>
					<ul class="list-login">
						<li class="switch-slide">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
								keep Logged in
							</label>
						</li>
						<li>
							<a href="forgot.php" class="text-right">forgot password?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
					<ul class="list-login-bottom">
						<li class="">
							<a href="registeracc.php" class="">Create Account</a>
						</li>
						<li class="">
							<a href="needhelp.php" class="text-right">Need Help?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
				</form>
			</div>
		</div>
<?php
include "./includes/footer.php";
?>    