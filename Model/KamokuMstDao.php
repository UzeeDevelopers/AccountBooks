<?php
require 'GlobalDao.php';

class KamokuMstDAO {
        
    public function selectKamokuAll() {
        $sql =    "SELECT KAMOKU_CD, KAMOKU_NM "
                . "FROM   KAMOKU_MST "
                . "WHERE  VALIDATE_FLG = '0';";
        
        $dbh = new GlobalDao();
        return $dbh->simpleSelecter($sql);
    }
    
    public function selectNameByCode($kamoku_cd) {
        $sql =    "SELECT KAMOKU_NM "
                . "FROM   KAMOKU_MST "
                . "WHERE  KAMOKU_CD    = ? "
                . "AND    VALIDATE_FLG = '0';";
        
        $dbh = new GlobalDao();
        return $dbh->prepare($sql, $kamoku_cd);
    }
}
