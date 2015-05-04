<?php
	#bootstrap app
	require_once '../app/init.php';
	require_once fileFromStateCommon('code/users/login.php');

	#set page variables
	$pg_name  = 'Log In';
?>

		<div class="container-fluid">
		    <p>
		        To submit entries for the <?php echo $globe->get('game-name') ?> Second Chance Promotion,
		        you must first create an account by clicking on <b>Create Account</b> and providing the
		        required information.
		    </p>
		    <p>If you have an account set up already, simply type in your e-mail address and password in the fields below:</p>

			<?php include_once fileFromCommon('login') ?>
		</div>