<?php
    $points  = Help::getCurrentDrawPoints();
    $entries = Help::getEntries();
?>
<p class="text-center">
    <strong>Your Total Tickets Entered: <?php echo count($entries) ?: 0 ?></strong>
</p>
<p class="text-center">
    <strong>Your Total Entries Awarded: <?php echo $points ?: 0 ?></strong>
</p>
<table class="table styled-table entries-table">
    <thead>
        <tr>
            <th>Ticket Information</th>
            <th>Date &amp; Time</th>
            <th>Entries Awarded</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($entries)): ?>
            <?php foreach ($entries as $entry): ?>
            <tr>
                <td data-title="Ticket Information"><?php echo $entry->tickets[0] ?></td>
                <td data-title="Date &amp; Time">
                    <?php echo $lottery->date(DATE_DISPLAY_FORMAT,strtotime($entry->entry_date)) ?>
                    <?php if (false && $game->allow_delete && $entry->canDelete($current_draw_start,$current_draw_end,$lottery)) : ?>
                        <a href="delete.php?entry_id=<?php echo $entry->getId() ?>" onclick="return confirm('Are you sure that you want to delete this entry?');">Delete</a>
                    <?php endif; ?>
                </td>
                <td data-title="Entries Awarded"><?php echo $entry->points; ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
        <tr>
            <td data-title="Entries" colspan="4"><em>No entries submitted.</em></td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
