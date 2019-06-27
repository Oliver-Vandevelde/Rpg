<?php
    class Personnage{
        private $_id;
        private $_nom;
        private $_forcePerso;
        private $_vie;
        private $_niveau;
        private $_experience;

        // Hydrate basique
        // public function hydrate(array $donnees){
        //     if (isset($donnees['id'])){
        //         $this->setId($donnees['id']);
        //     }if (isset($donnees['nom'])){
        //         $this->setNom($donnees['nom']);
        //     }if (isset($donnees['forcePerso'])){
        //         $this-setForcePerso($donnees['forcePerso']);
        //     }if (isset($donnees['vie'])){
        //         $this-setVie($donnees['vie']);
        //     }if (isset($donnees['niveau'])){
        //         $this-setNiveau($donnees['niveau']);
        //     }if (isset($donnees['experience'])){
        //         $this-setExperience($donnees['experience']);
        //     }
        // }

        public function hydrate(array $donnees){
            foreach ($donnees as $key => $value){
                $method = 'set'.ucfirst($key);
                if (method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }
        //Appelle a la function hydrate via un constructeur
        public function __construct(array $donnees){
            $this->hydrate($donnees);
        }

        //getters
        public function id(){ return $this->_id; }
        public function nom(){ return $this->_nom; }
        public function forcePerso(){ return $this->_forcePerso; }
        public function vie(){ return $this->_vie; }
        public function niveau(){ return $this->_niveau; }
        public function experience(){ return $this->_experience; }

        //setters
        public function setId($id){
            $id =(int) $id;// transformer en nombre entier
            if($id > 0){
                $this->_id = $id;
            }
        }
        public function setNom($nom){
            if(is_string($nom)){//verifier que c'est bien une chaine de caractere
                $this->_nom = $nom;
            }
        }
        public function setForcePerso($forcePerso){
            $forcePerso = (int)$forcePerso;
            if($forcePerso>= 1 && $forcePerso<=100){
                $this->_forcePerso = $forcePerso;
            }
        }
        public function setVie($vie){
            $vie = (int)$vie;
            if($vie >= 0 && $vie <=100){
                $this->_vie = $vie;
            }
        }
        public function setNiveau($niveau){
            $niveau = (int)$niveau;
            if($niveau >= 1 && $niveau <= 50){
                $this->_niveau = $niveau;
            }
        }
        public function setExperience($experience){
            $experience = (int)$experience;
            if($experience >= 0 && $experience < 100){
                $this->_experience = $experience;
            }
        }
    }