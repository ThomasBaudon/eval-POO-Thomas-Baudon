<?php 

    require_once('Pdo.php');   



    /* PLAYERS */
    class PlayerManager extends Manager
    {
        public function getPlayer()
        {
            $bdd = $this->connexion();
            $req = $bdd->query("SELECT * FROM player");
            // $membre = $req->fetch(PDO::FETCH_ASSOC);
            return $req;
        }
    }


    /* GAME */
    class GameManager extends Manager
    {
        public function getGame()
        {
            $bdd = $this->connexion();
            $req = $bdd->query("SELECT * FROM game");
            // $membre = $req->fetch(PDO::FETCH_ASSOC);
            return $req;
        }

        public function addGame(){
            $bdd = $this->connexion();
            $add = $bdd->query("INSERT INTO game (title, min_players, max_players) VALUES ('$_POST[title]', '$_POST[minPlayer]', '$_POST[maxPlayer]' )");
            return $add;
        }
    }

    /* CONTEST */
    class ContestManager extends Manager
    {
        public function getContest()
        {
            $bdd = $this->connexion();
            $req = $bdd->query("SELECT * FROM contest, game, player WHERE contest.game_id = game.id AND contest.winner_id = player.id  ORDER BY start_date desc");
            return $req;
        }

        public function getPlayerContest()
        {
            $bdd = $this->connexion();
            $reqPlayer = $bdd->query("SELECT *  FROM contest c LEFT JOIN player p");
            return $reqPlayer;
        }

        public function getGameContest()
        {
            $bdd = $this->connexion();
            $reqGame = $bdd->query("SELECT game_id, title FROM contest c LEFT JOIN game g WHERE c.game_id = g.id");
            return $reqGame;
        }
    }

    /* PLAYER CONTEST */
    class PlayerContestManager extends Manager
    {
        public function getPlayerContest()
        {
            $bdd = $this->connexion();
            $req = $bdd->query("SELECT * FROM player_contest");
            return $req;
        }
    }

?>