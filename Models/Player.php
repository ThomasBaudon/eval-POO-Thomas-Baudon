<?php 

    class Player{

        /* SETTER - GETTER ID */
        public function setId($id)
        {
            $this->id = (int)$id;
        }

        public function getId()
        {
            return $this->id;
        }

        /* SETTER - GETTER Pseudo */
        public function setPseudo($pseudo)
        {
            $this->pseudo = $pseudo;
        }

        public function getPseudo()
        {
            return $this->Pseudo;
        }

        /* SETTER - GETTER MAIL */
        public function setEmail($email)
        {
                $this->email = $email;
        }

        public function getEmail()
        {
            return $this->email;
        }



    }


?>