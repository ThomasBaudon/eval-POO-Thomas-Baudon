<?php 

    require_once('./Models/PdoManager.php');


       function playersAll()
        {
            $players = new PlayerManager;
            $getPlayers = $players->getPlayer();
            require_once('./Views/playerView.php');
        }

       function gameAll()
        {
            $games = new GameManager;
            $getGames = $games->getGame();
            require_once('./Views/gameView.php');
        }

       function gameAdd()
        {
            $games = new GameManager;
            $addGames = $games->addGame();
            require_once('./Views/gameView.php');
        }

       function contestAll()
        {
            $contests = new ContestManager;
            $getContests = $contests->getContest();
            // $getPlayerContests = $contests->getPlayerContest();
            // $getGameContests = $contests->getGameContest();
            require_once('./Views/contestView.php');
        }

       function playerContestAll()
        {
            $playerContests = new PlayerContestManager;
            // $getPlayerContests = $playerContests->getPlayerContest();
            require_once('./Views/contestView.php');
        }


?>