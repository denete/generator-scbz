<script src="<?php echoAppURL() ?>/assets/scripts.min.js"></script>

<?php if (LIVE): #add google analytics?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo $globe->get("game-analytics-code") ?>', 'auto');
        ga('send', 'pageview');
    </script>
<?php endif; ?>

<?php if (!LIVE && LOC): #add livereload snippet ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.6.4.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
<?php endif; ?>
