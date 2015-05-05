<?php
    $game_id = $_REQUEST['gameid'];
    $draw_id = $_REQUEST['drawid'];

    $winners = Help::getDrawingWinners($game_id, $draw_id); //show all prize levels
    $draw_date = date('Y-m-d', strtotime($draw_id));
    $draw_number = Help::getDrawNumber($game->drawings, $draw_date);
    $disp_draw_date = date('F d, Y', strtotime($draw_id));
?>

<?php if(count($winners)): ?>
    <div class="text-center">
        <h3>Drawing Date - <?php echo $disp_draw_date ?></h3>
        <p><a href="winners.php">Click here</a> to go back to winners page</p>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Winner</th>
                <th>Location</th>
                <th>Prize</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($winners as $winner) : ?>
                <tr>
                    <td data-title="Winner">
                        <?php echo $winner['first_name'] . " " . $winner['last_name'] ?>
                    </td>
                    <td data-title="Location">
                        <?php echo $winner['city'] ?>, <?php echo $winner['state'] ?>
                    </td>
                    <td data-title="Prize">
                        <?php echo $winner['prize'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <div class="alert alert-info">
        There are currently no drawing winners for the draw you selected.
    </div>
<?php endif; ?>
