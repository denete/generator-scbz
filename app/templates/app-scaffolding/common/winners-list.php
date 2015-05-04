<?php
    $game_id = $_REQUEST['gameid'];
    $draw_id = $_REQUEST['drawid'];

    $winners        = Help::getDrawingWinners($game_id, $draw_id); //show all prize levels
    $draw_date      = date('Y-m-d', strtotime($draw_id));
    $draw_number    = Help::getDrawNumber($game->drawings, $draw_date);
    $disp_draw_date = date('F d, Y', strtotime($draw_id));
?>

<?php if (empty($winners)): ?>
    <div class="alert alert-info">
        <b>There are currently no drawing winners for the draw you selected</b>
    </div>
<?php else : ?>
    <div class="text-center">
        <h3>Drawing Date - <?php echo $disp_draw_date ?></h3>
        <p><a href="winners.php">Click here</a> to go back to winners page</p>
    </div>

    <table id="table-panelled" class="table table-stripped table-bordered">
    <thead>
        <tr>
            <th>winners</th>
            <th>location</th>
            <th>prizes</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 0;
            foreach ($winners as $winner) :
                $i++;
        ?>
        <tr>
            <td data-title="winners">
                <?php echo $winner['first_name'] . " " . $winner['last_name'] ?>
            </td>
            <td data-title="location"><?php echo $winner['city'] ?>, <?php echo $winner['state'] ?></td>
            <td data-title="prizes"><?php echo $winner['prize'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
<?php endif; ?>
