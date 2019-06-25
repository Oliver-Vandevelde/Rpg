<?php
    class personnage{
        //Creation des stats de base du personnage
        private $_vie;
        private $_experience;
        private $_degatArme;
        private $_force;
        private $_armure;
        private $_resistance;
        //Creation constructeur et set les stats
        public function __construct($force, $degatArme, $armure, $resistance){
            $this->setForce($force);
            $this->setArmure($armure);
            $this->setDegatArme($degatArme);
            $this->setResistance($resistance);
            $this->_vie = 100;
            $this->_experience = 0;
        }
        //Modification Experience
        public function experience(){
            return $this->_experience;
        }
        //Modification Vie
        public function vie(){
            return $this->_vie;
        }
        //Modification degat de l'arme
        public function degatArme(){
            return $this->_degatArme;
        }
        //Modification de l'armure
        public function armure(){
            return $this->_armure;
        }
        //Modification de la resistance
        public function resistance(){
            return $this->_resistance;
        }
        //Modification de la force
        public function force(){
            return $this->_force;
        }
        //Modification du gain Xp
        public function gagnerXp(){
            $this->_experience++;
        }
        //Fonction d'attaque
        public function frapper(personnage $PersoAFrapper){
            $PersoAFrapper->_vie -= $this->_force;
        }
        //Set la Force de base
        public function setForce($force){
            if(!is_int($force)){//Nombre seulement
                trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
                return;
            }if($force > 100){//Inferieur a 100
                trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                return;
            }
            $this->_force = $force;
        }
        //Set la resistance de base
        public function setResistance($resistance){
            if(!is_int($resistance)){
                trigger_error('La resistance d\'un personnage doit être un nombre entier', E_USER_WARNING);
                return;
            }if($resistance > 100){
                trigger_error('La resistance d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                return;
            }
            $this->_resistance = $resistance;
        }
        //Set les degat de l'arme de base
        public function setDegatArme($degatArme){
            if(!is_int($degatArme)){
                trigger_error('La degatArme d\'un personnage doit être un nombre entier', E_USER_WARNING);
                return;
            }if($degatArme > 100){
                trigger_error('La degatArme d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                return;
            }
            $this->_degatArme = $degatArme;
        }
        //Set l'armure de base
        public function setArmure($armure){
            if(!is_int($armure)){
                trigger_error('L\'armure d\'un personnage doit être un nombre entier', E_USER_WARNING);
                return;
            }
            if($armure > 100){
                trigger_error('L\'armure d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                return;
            }
            $this->_armure = $armure;
        }
    }
?>