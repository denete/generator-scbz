	<footer>

		<div class="footer-menu clearfix">
	    	<ul class="col-xs-6 col-sm-12 footer-ie-ul-fix">
	    		<?php include fileFromCommon('topnav') ?>
	    	</ul>
	    	<ul class="col-xs-6 col-sm-12 footer-ie-ul-fix">
	    		<?php include fileFromCommon('othernav') ?>
	    	</ul>
		</div>

		<div class="clearfix visible-xs">
			<a target="_blank" href="<?php echo $globe->get('lottery-url'); ?>">
				<img id="logo-footer" class="img-responsive center-block"
					src="<?php echoAppURL() ?>/assets/images/logo-ny.png"
					alt="<?php $globe->get('lottery-name') ?>"
				>
			</a>
		</div>
	</footer>