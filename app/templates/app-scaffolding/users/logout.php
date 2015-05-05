<?php
	#bootstrap app
	require_once '../app/init.php';
    Help::logout();

	#set page variables
	$pg_name  = 'Log Out';
    $body_class = 'logout';
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
                    <div class="alert alert-success text-center">
                        <strong>You've been sucessfully logged out!</strong>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once fileFromCommon('footer') ?>
    </div>
    <?php include_once fileFromCommon('foot') ?>
</body>
</html>
