<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * HighLiukReversiTutorial implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * highliukreversitutorial.view.php
 *
 * This is your "view" file.
 *
 * The method "build_page" below is called each time the game interface is displayed to a player, ie:
 * _ when the game starts
 * _ when a player refreshes the game page (F5)
 *
 * "build_page" method allows you to dynamically modify the HTML generated for the game interface. In
 * particular, you can set here the values of variables elements defined in highliukreversitutorial_highliukreversitutorial.tpl (elements
 * like {MY_VARIABLE_ELEMENT}), and insert HTML block elements (also defined in your HTML template file)
 *
 * Note: if the HTML of your game interface is always the same, you don't have to place anything here.
 *
 */

require_once APP_BASE_PATH . 'view/common/game.view.php';

class view_highliukreversitutorial_highliukreversitutorial extends game_view
{
    /**
     * The game table
     *
     * @var Table
     */
    public $game;

    /**
     * The game page
     *
     * @var Page
     */
    public $page;

    /**
     * The game name
     *
     * @var string
     */
    const GAME_NAME = 'highliukreversitutorial';

    protected function getGameName()
    {
        return self::GAME_NAME;
    }

    function build_page($viewArgs)
    {
        // Get players & players number
        $players = $this->game->loadPlayersBasicInfos();
        $players_nbr = count($players);

        // Add the game tiles (transparent images) to the page
        $this->page->begin_block(
            self::GAME_NAME . '_' . self::GAME_NAME,
            'square'
        );

        $hor_scale = 64.8;
        $ver_scale = 64.4;

        for ($x = 1; $x <= 8; $x++) {
            for ($y = 1; $y <= 8; $y++) {
                $this->page->insert_block('square', [
                    'X' => $x,
                    'Y' => $y,
                    'LEFT' => round(($x - 1) * $hor_scale + 10),
                    'TOP' => round(($y - 1) * $ver_scale + 7),
                ]);
            }
        }

        /*********** Place your code below:  ************/

        /*
        
        // Examples: set the value of some element defined in your tpl file like this: {MY_VARIABLE_ELEMENT}

        // Display a specific number / string
        $this->tpl['MY_VARIABLE_ELEMENT'] = $number_to_display;

        // Display a string to be translated in all languages: 
        $this->tpl['MY_VARIABLE_ELEMENT'] = self::_("A string to be translated");

        // Display some HTML content of your own:
        $this->tpl['MY_VARIABLE_ELEMENT'] = self::raw( $some_html_code );
        
        */

        /*
        
        // Example: display a specific HTML block for each player in this game.
        // (note: the block is defined in your .tpl file like this:
        //      <!-- BEGIN myblock --> 
        //          ... my HTML code ...
        //      <!-- END myblock --> 
        

        $this->page->begin_block( "highliukreversitutorial_highliukreversitutorial", "myblock" );
        foreach( $players as $player )
        {
            $this->page->insert_block( "myblock", array( 
                                                    "PLAYER_NAME" => $player['player_name'],
                                                    "SOME_VARIABLE" => $some_value
                                                    ...
                                                     ) );
        }
        
        */

        /*********** Do not change anything below this line  ************/
    }
}