<?php
	#bootstrap app
	require_once '../app/init.php';
	require_once fileFromHere('passthru-check');

	#set page variables
	$pg_name  = 'Enter Now';
?>

		<div class="container-fluid">
		    <?php if (Help::isGameOver( $globe->get('game-over-test') )) : ?>

		        <h3 class="text-center">This game is over</h3>
		        <br>
				<div class="alert alert-success text-center">
					<b>Thank you for playing!</b>
				</div>

		        <img class="img-responsive" style="margin:auto"
		        	src="<?php echoAppURL() ?>/assets/images/thankyou.jpg"
		        	alt="This game is over - Thank you for playing!"
		        >
		    <?php else: ?>

		    	<p>xxxxx</p>

				<?php include_once fileFromCommon('entry'); ?>

				<div id="popTicket" style="display:none; cursor:default">
					<h4 class="text-center">TICKET NUMBER</h4>
					<img class="img-responsive center-block"
						src="<?php echoAppURL() ?>/assets/images/ticketnumber.png"
					>
				</div>
				<div id="popEntry" style="display:none; cursor:default">
					<h4 class="text-center">ENTRY NUMBER</h4>
					<img class="img-responsive center-block"
						src="<?php echoAppURL() ?>/assets/images/entrynumber.png"
					>
				</div>
		    <?php endif; ?>

			<h3 class="text-center">YOUR ENTRIES</h3>
			<p class="text-center">Entries are locked in at the time they are submitted and cannot be deleted</p>
			<?php include_once fileFromCommon('entries') ?>
		</div>