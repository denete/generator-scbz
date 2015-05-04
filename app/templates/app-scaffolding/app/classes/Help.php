<?php
##page help class
class Help
{
    ##app helpers (winners, drawings, entries, points)
        #display link to draw results page listing winners
        public static function displayDrawLink($draw_number, $link_page='winners-list.php')
        {
            $uploaded_draws = DrawResults::GetSummaryById(DB_NAME, GAME_ID);
            $draw_number_disp = $draw_number;
            $draw_number--;

            if (($draw_number < count($uploaded_draws)) && ($uploaded_draws[$draw_number]['results_approved'] != 0)) {
                $game_id = $uploaded_draws[$draw_number]['game_id'];
                $draw_date = $uploaded_draws[$draw_number]['draw_date'];
                if (count($uploaded_draws) == 1)
                    return "<a href=\"{$link_page}?gameid={$game_id}&drawid={$draw_date}\">Click here</a> to view Winners<br>";
                else
                    return "<a href=\"{$link_page}?gameid={$game_id}&drawid={$draw_date}\">Click here</a> to view Drawing {$draw_number_disp} Winners<br>";
            } else {
                return "";
            }
        }

        #get an array with drawing winners
        public static function getDrawingWinners($game_id, $draw_id, $include_prize_levels=array(), $exclude_prize_levels=array())
        {
            $lottery = new Lottery(LOTTERY_ID);
            $winners = DrawResults::GetDrawResults($game_id, $draw_id, $include_prize_levels, $exclude_prize_levels, $lottery->getLotteryDatabase());

            return $winners;
        }

        #get draw number
        public static function getDrawNumber($drawings, $draw_date)
        {
            $draw_number = 0;

            foreach ($drawings as $draw) {
                $draw_number += 1;
                $drawing_date = explode('^', $draw);

                if ($drawing_date[2] == $draw_date)
                    break;
            }

            return $draw_number;
        }

        #get entries
        public static function getEntries()
        {
            $entry_selector = new Entries(GAME_ID);
            $player_id = self::player()->id;

            $filters = array("player_id = '$player_id'");
            $entry_selector->setFilterClause($filters);

            $sorts = array('entry_date' => 'DESC', 'id' => 'DESC');
            $entry_selector->setSort($sorts);

            $game = self::game();
            $query_options = $game->getEntriesOptions();
            $query_options['history_only'] = true;

            $entries = $entry_selector->getList($query_options);

            if (is_a($game, 'MonopolyGame'))
                $entries = MonopolyGame::formatEntriesAwards($entries);

            return $entries;
        }

        #get drawing points
        public static function getDrawPoints()
        {
            if (self::isLoggedIn()) {
                $draw_points = array();
                $draw_entries = array();

                $lottery  = new Lottery(LOTTERY_ID);
                $game     = new Game(DB_NAME, self::getTopDirectory());
                $player   = UserAuth::getInstance()->getPlayer();

                $now      = $lottery->date("Y-m-d H:i:s");
                $draw_num = 1;

                foreach ($game->drawings as $drawing) {
                    $chances = 0;
                    list($start,$end,$draw_date) = preg_split("/\^/", $drawing);
                    if ($start > $now) {
                        break;
                    }
                    $start = $lottery->date_shift($start);
                    $end = $lottery->date_shift($end);

                    $entry_selector = new Entries($game->getId());
                    $filters = array();
                    $filters = array(   " player_id = '$player->id' ",
                                        " entry_date BETWEEN '$start' AND '$end' ");
                    $entry_selector->setFilterClause($filters);
                    if (!$chances = $entry_selector->getGamePoints()) {
                        $chances = 0;
                    }

                    //if SUM of points=0 THEN add individual entries
                    if ( $chances == 0 && !GameFactory::isMonopolyJackpot($game->game_directory)) {
                        if (!$chances = $entry_selector->getEntriesCountForGameForPlayer()) {
                            $chances = 0;
                        }
                    }

                    $draw_points{$draw_num} = $chances;
                    $draw_entries{$draw_num} = $entry_selector->getEntriesCountForGameForPlayer();

                    $draw_num++;
                }

                return $draw_points;
            }

            return array();
        }

        #get drawing points for current draw
        public static function getCurrentDrawPoints()
        {
            $points      = self::getDrawPoints();
            $draw_count  = count($points);
            $draw_points = $points[$draw_count];

            return (int) $draw_points;
        }

    ##access helpers
        public static function logout()
        {
            UserAuth::getInstance()->logout();
        }

        public static function isLoggedIn()
        {
            return UserAuth::getInstance()->isLoggedIn();
        }

        public static function player()
        {
            if (self::isLoggedIn())
                return UserAuth::getInstance()->getPlayer();
        }

        public static function game()
        {
            return GameFactory::getGame(DB_NAME, self::getTopDirectory());
        }

        public static function isGameOver($test=false)
        {
            if ($test == 'false') #check to see if 'false' was passed as a string erroneously
                $test = false;

            if ($test)
                return true;

            if (self::game()->isTicketEntryOpen())
                return false;

            return true;
        }

    ##general helpers
        #dump pretty readable variable, array, or object to screen
        public static function d($dump, $kill=false, $bgcolor='#ffc0cb', $textcolor='#000')
        {
            echo "<div style='border:2px solid #000; background:$bgcolor; color:$textcolor; margin:5px; padding:5px;'>";

            if (is_array($dump) || is_object($dump)) {
                echo '<pre>';
                var_dump($dump);
                echo '</pre>';
            } else {
                echo($dump);
            }
            echo "</div>";

            if ($kill)  exit();
        }

        #display errors
        public static function displayErrors($force=false)
        {
            if (!LIVE || $force) {
                @ini_set('log_errors','On'); // enable or disable php error logging (use 'On' or 'Off')
                @ini_set('display_errors','On'); // enable or disable public display of errors (use 'On' or 'Off')
            }
        }

        #get top directory
        public static function getTopDirectory() {
            $filename_array = explode('/', $_SERVER['SCRIPT_NAME']);

            if (count($filename_array) > 2)
                return $filename_array[1];  //grab the first directory name eg. /{GRABTHIS}/prizes.php
            else
                return '';
        }

        #strip filename extension (of 2 to 4 charaters)
        public static function stripFilenameExtension($filename)
        {
            //return preg_replace('/.[^.]*$/', '', $filename);
            return preg_replace('/\\.[^.\\s]{2,4}$/', '', $filename);
        }

        #check for https (secure connection)
        public static function isSecure() {
            if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')
                return true;

            return false;
        }

        #get IP
        public static function getIP() {
            $answer = !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
            return $answer;
        }

        #get referrer
        public static function getReferrer() {
            $answer = !empty($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : null;
            return $answer;
        }

        #get access info
        public static function getAccessInfo() {
            $system  = new DetectBrowser();

            $info  = '[IP: ' . self::getIP() . '] ';
            $info .= '[Referrer: ' . self::getReferrer() . '] ';
            $info .= '[Browser: ' . $system->getBrowser() . ' / ' . $system->getVersion() . '] ';
            $info .= '[OS: ' . $system->getPlatform() . '] ';

            return $info;
        }
}
