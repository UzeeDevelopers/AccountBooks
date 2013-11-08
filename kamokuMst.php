<?php
/**
 * Description of kamokuMst
 *
 * @author Sho
 */
class kamokuMst {
    
    public function getKamokuAll() {
        $sql =    "SELECT kamoku_cd,"
                . "       kamoku_nm"
                . "FROM   kamoku_mst"
                . "WHERE  validate_flg = '0';";
        
        $conn = new utilDB();
        $dbh = $conn->connectDB();
        
        // SQLの発行
        $stmt = $dbh->query($sql);
        
        return $stmt;
    }
}
