<?php
/**
 * Description of kamokuMst
 *
 * @author Sho
 */
class kamokuMst {
    
    public function getKamokuAll() {
        $sql =    "SELECT * "
                . "FROM   KAMOKU_MST "
                . "WHERE  VALIDATE_FLG = '0';";
        
        $conn = new utilDB();
        $dbh = $conn->connectDB();
        // SQLの発行
        $stmt = $dbh->query($sql);
        
        return $stmt;
    }
}
