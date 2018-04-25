<?php

// this is expample of singelton method
class singelton {

    private static $instance = false; // boolean here
    private  static  $hp = 10; // player hp

    private function __construct() { // set contructor to private!!!
        // call  public functions
            $this->playerHp(); // call public function 
           
    }

    public static function getInstance() { // create static function 

            if(!static::$instance) {  // if false

                    static::$instance = new singelton(); // create new instance here 

            }

            return static::$instance;  // return to function                

    }

    public function playerHp() {  // player function
      
      if(static::$hp == 10){ // if player have 10 hp
        
        echo "player is alive"; // print out

      }

       
    }

}
// Then, instead of creating an object, you call a static method of singelton class:
$db = singelton::getInstance();
//Notice the private constructor and $instance variable inside a class.
?>

