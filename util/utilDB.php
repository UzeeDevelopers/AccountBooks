<?php
/**
 * Description of utilDB
 *
 * @author Sho
 */
class UtilDB {
    //========================================
    // ローカルでは、ここは変更して使ってね！
    private $dsn = 'mysql:dbname=account_books;host=localhost;charset=utf8';
    private $user = 'apps';
    private $password = 'apps';
    //========================================

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
