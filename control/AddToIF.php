<?php
/**
 * Description of AddToIF
 *
 * @author Sho
 */

require '../dao/GLInterfaceDAO.php';
require '../util/UtilDB.php';

$dao = new GlInterfaceDAO();
$flg = $dao->insertIF(array(
//                        $_POST[account_id],
    '99999',
    date('Y/m/d'),
    date('Y/m/d',  strtotime($_POST['trx_date'])),
    $_POST['kamoku'],
    $_POST['amount']));

header("Location: ../index.php");
exit();