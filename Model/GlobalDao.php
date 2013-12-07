<?php

class GlobalDao {
    
    //=DBアクセス用パラメータ==========================================================
    // ローカルでは、ここは変更して使ってね！
    private $dsn = 'mysql:dbname=account_books;host=localhost;charset=utf8';
    private $user = 'apps';
    private $password = 'apps';
    //===========================================================================
    public  $dbh = null;      // DBハンドラー
    private  $trx = null;      // トランザクション
    
    // コンストラクタ
    public function __construct()
    {
        try{
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
            $this->trx = $this->dbh->beginTransaction();
        } catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
    }
    
    // 簡易SELECTクエリー
    public function simpleSelecter($sql)
    {
        return $this->dbh->query($sql);
    }
        
}
