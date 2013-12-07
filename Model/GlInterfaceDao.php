<?php

require 'GlobalDao.php';

class GlInterfaceDao {
    public function insertIF($args) {
        $sql =    "INSERT  INTO  GL_INTERFACE("
                . "    USER_ID,"
                . "    REG_DATE,"
                . "    TRX_DATE,"
                . "    KAMOKU_CD,"
                . "    AMOUNT) "
                . "VALUES ("
                . "    :id,"
                . "    :reg_date,"
                . "    :trx_date,"
                . "    :kamoku_cd,"
                . "    :amount);";
                
        $dao = new GlobalDao();
        try {
            $stmt = $dao->dbh->prepare($sql);
            $stmt->bindParam(':id',$args[0], PDO::PARAM_STR);
            $stmt->bindParam(':reg_date',$args[1], PDO::PARAM_STR);
            $stmt->bindParam(':trx_date',$args[2], PDO::PARAM_STR);
            $stmt->bindParam(':kamoku_cd',$args[3], PDO::PARAM_STR);
            $stmt->bindValue(':amount',$args[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            $dao->dbh->rollbak();
            print('[GL_INTERFACE]INSERT ERROR');
            die();
        }
        
        $dao->dbh->commit();
    }
}

?>