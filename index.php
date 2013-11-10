<?php
class init {
    public function loadClass() {
        $classes = array(
            './util//utilDB.php',
            './dao/kamokuMst.php'
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
            <form action="X" method="post">
                <table>
                    <tr><td>項目を選択</td></tr>
                    <?php
                        $kamoku = new KamokuMst;
                         $stmt = $kamoku->getKamokuAll();
                        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr><td><input type="radio" name="kamoku" value="<?=$row['KAMOKU_CD']; ?>" /><?= $row["KAMOKU_NM"]; ?></td></tr>
                    <?php } ?>
                    <tr><td>日付</td><td><input type="date" neme="date" value="YYYY/MM/DD"></td></tr>
                    <tr><td><input type="submit" value="記帳" /></td></tr>
                </table>
            </form>
        </div><!-- end content -->
        
        <div class="footer">
            copyright all right reserved UzeeDevelopers org.
        </div><!-- end footer -->
    </body>
</html>
