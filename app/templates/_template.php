<?php
    #bootstrap app
    require_once 'app/init.php';

    #set page variables
    $pg_name  = 'Template';

?>
<!DOCTYPE html>
<html>
<head>
    <?php include_once fileFromCommon('head') ?>
</head>
<body class="<?php current_season() ?>">
    <?php include_once fileFromCommon('header') ?>
    <div class="container-fluid">
        <?php include_once fileFromCommon('header') ?>
        <div class="row-fluid">
            <div class="span12">
                <div class="scbz-content-area">
                </div>
            </div>
        </div>
        <?php include_once fileFromCommon('footer') ?>
    </div>
    <?php include_once fileFromCommon('footer') ?>
    <?php include_once fileFromCommon('foot') ?>
</body>
</html>