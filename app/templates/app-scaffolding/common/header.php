	<header>
		<div class="navbar navbar-default visible-xs" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echoAppURL() ?>/">
				<img id="logo-header" class="img-responsive center-block"
					src="<?php echoAppURL() ?>/assets/images/logo-game.png"
					alt="<?php echo $globe->get('game-title') ?>"
				></a>
			</div>
	        <div class="navbar-offcanvas offcanvas">
	        	<ul class="nav navbar-nav">
					<?php include fileFromCommon('topnav') ?>
	        	</ul>

	        	<form id="welcome" class="navbar-form text-center">
	        		<?php include fileFromCommon('welcome') ?>
	        	</form>
	        </div>
	    </div>

		<div id="header-desktop" class="hidden-xs clearfix">
			<div class="col-sm-9">
				<a target="_blank" href="<?php echo $globe->get('lottery-url'); ?>">
					<img class="img-responsive header-desktop-logo-lottery"
						src="<?php echoAppURL() ?>/assets/images/logo-ny.png"
						alt="<?php echo $globe->get('lottery-name') ?>"
					>
				</a>
				<a href="<?php echoAppURL() ?>/">
					<img class="img-responsive header-desktop-logo-game"
					src="<?php echoAppURL() ?>/assets/images/logo-wwf.png"
					alt="<?php echo $globe->get('game-title') ?>"
					>
				</a>
			</div>

			<div id="welcome-desktop" class="col-sm-3">
				<?php include fileFromCommon('welcome') ?>
			</div>
		</div>

    	<div id="navbar-desktop" class="hidden-xs">
        	<ul>
        		<?php include fileFromCommon('topnav') ?>
        	</ul>
		</div>
	</header>