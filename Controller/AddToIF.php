<?php
require '../Model/GlInterfaceDao.php';

$dbh = new GlInterfaceDao();
$flg = $dbh->insertIF(array(
//                        $_POST[account_id],
    '99999',
    date('Y/m/d'),
    date('Y/m/d',  strtotime($_POST['trx_date'])),
    $_POST['kamoku'],
    $_POST['amount']));

header("Location: ../index.php");
exit();