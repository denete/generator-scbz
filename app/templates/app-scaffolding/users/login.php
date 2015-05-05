<?php
	#bootstrap app
	require_once '../app/init.php';
	require_once fileFromStateCommon('code/users/login.php');

	#set page variables
	$pg_name  = 'Log In';
    $body_class = 'login';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include_once fileFromCommon('head') ?>
</head>
<body class="<?php echo $body_class; ?>">
    <div class="container-fluid">
        <?php include_once fileFromCommon('header') ?>
        <div class="row-fluid">
            <div class="span12">
                <div class="scbz-content-area">
                    <p>To submit entries for the <?php echo $globe->get('game-name') ?> Second Chance Promotion, you must first create an account by clicking on <b>Create Account</b> and providing the required information.</p>
                    <p>If you have an account set up already, simply type in your e-mail address and password in the fields below:</p>
                    <?php include_once fileFromCommon('login') ?>
                </div>
            </div>
        </div>
        <?php include_once fileFromCommon('footer') ?>
    </div>
    <?php include_once fileFromCommon('foot') ?>
</body>
</html>
