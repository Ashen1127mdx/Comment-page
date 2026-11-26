<?php
require './DbConnector.php';

class Com{
    private string $user;
    private string $com;
    
    
    public function __construct(string $user, string $com) {
        $this->user = $user;
        $this->com = $com;
        
    }

    


}
?>
