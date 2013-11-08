<?php
class init {
    public function loadClass() {
        $classes = array(
            './utilDB.php',
            './kamokuMst.php'
        );
        require_once $classes;
    }
}

$init = new init;
$init->loadClass();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $kamoku = new kamokuMst;
        $stmt = $kamoku->getKamokuAll();
        
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
        ?>
        <a><?php $row["kamoku_nm"]; ?></a>
        <?php
        }
        ?>
    </body>
</html>
