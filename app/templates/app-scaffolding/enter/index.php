<?php
	#bootstrap app
	require_once '../app/init.php';
	require_once fileFromHere('passthru-check');

	#set page variables
	$pg_name  = 'Enter Now';
    $body_class = 'enter';
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
                    <?php if (Help::isGameOver( $globe->get('game-over-test') )) : ?>
                        <h2 class="text-center">Thank You For Playing!</h2>
                        <h4 class="text-center">The entry period for this promotion has concluded.</h4>
                        <hr />
                    <?php else: ?>
                        <?php include_once fileFromCommon('entry'); ?>
                    <?php endif; ?>

                    <h4 class="text-center">TICKETS ENTERED AND ENTRIES AWARDED:</h4>
                    <p class="text-center">All entries are locked in at the time they are submitted and cannot be deleted.</p>
                    <?php include_once fileFromCommon('entries') ?>
                </div>
            </div>
        </div>
        <?php include_once fileFromCommon('footer') ?>
    </div>
    <?php include_once fileFromCommon('foot') ?>
</body>
</html>
