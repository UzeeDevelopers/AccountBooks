<?php
class init {
    public function loadClass() {
        $classes = array(
            './utilDB.php',
            './kamokuMst.php'
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
        <title></title>
    </head>
    <body>
        <?php
        $kamoku = new kamokuMst;
        $stmt = $kamoku->getKamokuAll();
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
        ?>
        <a><?php echo $row["KAMOKU_NM"]; ?></a>
        <?php
        }
        ?>
    </body>
</html>
