<?php
   /*
    * Inizializzazione di una classe Settings di impostazione per definire le variabili di collegamento al DB
  */  
   class Settings{
       
        /**
  * @author sanvi <sanvi.simo@gmail.com>
  */

    private $settings;

    function getSettings(){
       
        $this->settings['host'] = "localhost";
        $this->settings['user'] = "tuo_user";
        $this->settings['pass'] = "tua_password";
        $this->settings['database'] = "tuo db";
      return $this->settings;
    }
   }
?>
