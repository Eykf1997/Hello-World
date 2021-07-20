<?php

require_once 'common.php';

class AccountDAO{




    public function retrieve($username){
        $connMgr = new ConnectionManager();      
        $pdo = $connMgr->getConnection();  

        $sql = 'select * from users where username =:username';
        
        $stmt = $pdo->prepare($sql); // PDOStatement
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()) {
            return new Account($row['userID'], 
									$row['username'],$row['password'],$row['email'],$row['name']);
        }
        $stmt->closeCursor();
        $pdo = null;
        return null;

        


    }
    public function authenticate($username,$password){
        $connMgr = new ConnectionManager();      
        $pdo = $connMgr->getConnection();  
        $result =False;
        $account = $this->retrieve($username);
        // No account with $username was found in Database.
        // Return false.
        if(!$account){
            return False;
        }

        if($account->getPassword() == $password){
            return True;
        }else{
            return False;
        }
    }

    public function getEmail($email){
        $connMgr = new ConnectionManager();      
        $pdo = $connMgr->getConnection();  

        $sql = 'select * from users where email =:email';
        
        $stmt = $pdo->prepare($sql); // PDOStatement
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        while($row = $stmt->fetch()) {
            return new Account($row['userID'], 
									$row['username'],$row['password'],$row['email'],$row['name']);
        }
        $stmt->closeCursor();
        $pdo = null;
        return null;
    }



    public function likeGIF($userID,$url,$title){
        $connMgr = new ConnectionManager();      
        $pdo = $connMgr->getConnection();  

        $sql = 'insert into gifs(userID, url, title)values (:userID, :url, :title)';
        
        $stmt = $pdo->prepare($sql); // PDOStatement
        $stmt->bindParam(':userID', $userID, PDO::PARAM_STR);
        $stmt->bindParam(':url', $url, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $isAddOK = $stmt->execute();
        $stmt->closeCursor();
        $pdo = null;
        
    }
}


?>