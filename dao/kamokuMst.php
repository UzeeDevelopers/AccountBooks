<?php
/**
 * Description of kamokuMst
 *
 * @author Sho
 */
class KamokuMst {
    
    public function getKamokuAll() {
        $sql =    "SELECT KAMOKU_CD, KAMOKU_NM "
                . "FROM   KAMOKU_MST "
                . "WHERE  VALIDATE_FLG = '0';";
        
        $conn = new UtilDB();
        $dbh = $conn->connectDB();
        // SQLの発行
        $stmt = $dbh->query($sql);
        
        return $stmt;
    }
}
