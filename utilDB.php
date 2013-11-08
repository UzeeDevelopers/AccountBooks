<?php
/**
 * Description of utilDB
 *
 * @author Sho
 */
class utilDB {
    
    private $dsn = 'mysql:dbname=account_books;host=localhost';
    private $user = 'root';
    private $password = 'apps';

    
    // DB接続
    public function connectDB() {
        try{
            $dbh = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
        return $dbh;
    }
    
    // DB切断
    public function closeDB($dbh) {
        $dbh = null;
    }
}
