<?php
/**
 * Description of UtilDB
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
    private  $dbh = null;
    private  $trx = null;




    // DB接続
    public function connectDB() {
        try{
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
            $this->trx = $this->dbh->beginTransaction();
        } catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
        return $this->dbh;
    }
    
    // DB切断
    public function closeDB() {
        $this->dbh = null;
    }
    
    public function selecter($sql) {
        $dbh = $this->connectDB();
        $stmt = $dbh->query($sql);
        
        $this->closeDB();
        return $stmt;
    }
    
    public function preparePDO($sql, $args) {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare($sql, $args);
        
        return $stmt;
    }
    
    public function commitPDO() {
        $this->dbh->commit();
    }
}
