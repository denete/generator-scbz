<?php if ($form->checkErrorMsg()) : ?>
    <div class="alert alert-<?php echo $success ? 'success' : 'danger' ?> text-center" role="alert">
        <?php echo $form->getErrorMsg() ?>
    </div>
<?php endif; ?>
<p class="text-center">
    <strong>Entry Page for </strong> <?php echo $player->getValue('first_name').' '.$player->getValue('last_name'); ?>
</p>

<div id="entry-top" class="entry-form text-center">
    <?php echo $form->beginForm() ?>
    <p><a href="<?php echoAppURL() ?>/howtoplay#promotop">Click here</a> to learn how to enter</p>
    <?php if ( $fromMDINativeShell !== false ): ?>
        <div id="outerScan">
            <a id="scanner" class="btn btn-primary btn-large btn-block">SCAN</a>
            <a role="button" href="#findCodeModal" data-toggle="modal" class="btn btn-primary btn-large btn-block">Locate Barcode</a>
        </div>
    <?php endif; ?>
    <div class="form-cluster">
        <label for="ticket1_1_1">ENTRY CODE - see <a href="#findEntryNumberModal" data-toggle="modal">example</a></label>
        <ul id="code-entry" class="inline text-center">
            <li><?php echo $game->tf(1,1,1); ?></li>
            <li><?php echo $game->tf(1,1,2); ?></li>
            <li><?php echo $game->tf(1,1,3); ?></li>
            <li><?php echo $game->tf(1,1,4); ?></li>
            <li><?php echo $game->tf(1,1,5); ?></li>
        </ul>
        <p class="text-left important">Note: The Official Entry Code will display in all capital letters and will NOT include any vowels (A, E, I, O, or U). Any digit that appears to be the letter "O" is, in fact, a zero (0).</p>
    </div>
    <?php if ($show_terms): ?>
        <div class="form-cluster text-left">
            <label for="terms_check1" class="terms-check">
            <?php echo $form->create_checkbox('terms_check1',$terms_check1); ?>I certify that I am not an employee of, or family member living in the same household as an employee of, the Pennsylvania Lottery, MARC Advertising, Scientific Games International Inc., MDI Entertainment, LLC or agents of the preceding.</label>
        </div>
    <?php endif; ?>
    <div class="form-cluster">
        <input id="entry-submit" type="submit" name="submit" value="SUBMIT ENTRY" class="btn btn-primary btn-lg" />
    </div>
    <?php echo $form->create_hidden('entry_method', '') ?>
    <?php echo $form->create_hidden('form_submitted', 1) ?>
    <p>
        <a href="<?php echoAppURL() ?>/faqs#faq-error-messages">Click here</a> for more information about error messages.
    </p>
    <?php echo $form->endForm() ?>
</div>

<div class="modal hide" id="findEntryNumberModal" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="text-center modal-title">Sample Ticket</h4>
    </div>
    <div class="modal-body">
        <img src="<?php echoAppURL() ?>/assets/images/ticket.jpg" alt="Ticket image showing the Official Entry Code location"  class="img-responsive center-block ticket-img" />
    </div>
</div>
<div class="modal hide" id="findCodeModal" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="text-center modal-title">Locate Barcode</h4>
    </div>
    <div class="modal-body">
        <img src="<?php echoAppURL() ?>/assets/images/barcode.jpg" alt="Ticket image showing the barcode location" class="img-responsive center-block ticket-img" />
    </div>
    <div class="modal-footer text-center">
        <a id="modalScanBtn" class="btn btn-primary" data-dismiss="modal">SCAN</a>
    </div>
</div>