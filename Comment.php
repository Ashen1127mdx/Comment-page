<?php
require './DbConnector.php';

class Com{
    private string $user;
    private string $com;
    
    
    public function __construct(string $user, string $com) {
        $this->user = $user;
        $this->com = $com;
        
    }

        public function postCom() {
        try{
            $db=new DbConnector();
            $conn=$db->getConnection();
          
            $sql="INSERT INTO com
                        (user, comment)
                        VALUES (?, ?)";
            $stmt=$conn->prepare($sql);
            $stmt->execute([
                $this->user,
                $this->com,
                
            ]);
            
            if($stmt){
                echo 'Comment post successful!';
            }else{
                echo 'Comment post failed!';
            }
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }


}
?>
