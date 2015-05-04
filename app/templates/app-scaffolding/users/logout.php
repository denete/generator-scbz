<?php
	#bootstrap app
	require_once '../app/init.php';
    Help::logout();

	#set page variables
	$pg_name  = 'Log Out';
?>

		<div class="container-fluid">

			<div class="alert alert-success text-center">
				<b>You've been sucessfully logged out!</b>
			</div>

		</div>
