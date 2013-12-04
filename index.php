<?php
class init {
    public function loadClass() {
        $classes = array(
            './util/UtilDB.php',
            './dao/KamokuMstDAO.php'
        );
        foreach ($classes as $class) {
            require_once $class;
        }
    }
}

$init = new init;
$init->loadClass();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
        <title>家計簿</title>
    </head>
    <body>
        <div class="header">
            <h1>Uzee ACCOUNT BOOKS</h1>
        </div><!-- end header -->
        
        <div class="navbar">
            
        </div><!-- end navbar -->
        
        <div class="content">
            <form action="./control/AddToIF.php" method="post">
                <table>
                    <tr><td>項目を選択</td></tr>
                    <?php
                        $dao = new KamokuMstDAO();
                        $stmt = $dao->selectKamokuAll();
                        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr><td><input type="radio" name="kamoku" value="<?=$row['KAMOKU_CD']; ?>" /><?= $row["KAMOKU_NM"]; ?></td></tr>
                    <?php } ?>
                    <tr><td>日付</td><td><input type="date" name="trx_date" /></td></tr>
                    <tr><td>金額</td><td><input type="number" name="amount" /></td></tr>
                    <tr><td><input type="submit" value="記帳" /></td></tr>
                </table>
            </form>
        </div><!-- end content -->
        
        <div class="footer">
            copyright all rights reserved UzeeDevelopers org.
        </div><!-- end footer -->
    </body>
</html>
