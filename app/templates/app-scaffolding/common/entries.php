<?php
    $points  = Help::getCurrentDrawPoints();
    $entries = Help::getEntries();
?>

    <p class="text-center">
        <b>Your Total Entries Awarded: <?php echo $points ?: 0 ?></b>
    </p>
    <table id="table-panelled" class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>entry information</th>
                <th>date &amp; time</th>
            </tr>
        </thead>

        <tbody>
            <?php if (count($entries)): ?>
                <?php foreach ($entries as $entry): ?>
                <tr>
                    <td data-title="entry"><?php echo $entry->tickets[0] ?></td>
                    <td data-title="date">
                        <?php echo $lottery->date(DATE_DISPLAY_FORMAT, strtotime($entry->entry_date)) ?>
                        <?php if (false && $game->allow_delete && $entry->canDelete($current_draw_start,$current_draw_end,$lottery)) : ?>
                            <a href="delete.php?entry_id=<?php echo $entry->getId() ?>" onclick="return confirm('Are you sure that you want to delete this entry?');">
                                delete
                            </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="3"><em>No entries submitted.</em></td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>