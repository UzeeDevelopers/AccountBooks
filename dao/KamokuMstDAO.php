<?php
/**
 * Description of kamokuMstDAO
 *
 * @author Sho
 */
//require_once './util/UtilDB.php';

class KamokuMstDAO {
        
    public function selectKamokuAll() {
        $sql =    "SELECT KAMOKU_CD, KAMOKU_NM "
                . "FROM   KAMOKU_MST "
                . "WHERE  VALIDATE_FLG = '0';";
        
        $db = new UtilDB();
        return $db->selecter($sql);
    }
    
    public function selectNameByCode($kamoku_cd) {
        $sql =    "SELECT KAMOKU_NM "
                . "FROM   KAMOKU_MST "
                . "WHERE  KAMOKU_CD    = ? "
                . "AND    VALIDATE_FLG = '0'";
        
        $db = new UtilDB();
        return $db->preparePDO($sql, $kamoku_cd);
    }
}
