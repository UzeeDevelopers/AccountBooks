<?php
class init {
    public function loadClass() {
        $classes = array(
            './Model/KamokuMstDao.php',
            './Model/GlInterfaceDao.php'
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
        <!--<link rel="stylesheet" type="text/css" href="index_style.css" media="all">-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <title>家計簿</title>
    </head>
    <body>
        <div class="navbar navbar-inverse " role="navigation">
             <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Uzee Developers</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Account Books</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div><!--/ navbar -->
        
        <div class="container">
            <div class="col-lg-6">
                <form action="./Controller/AddToIF.php" method="post" role="form">
                    <div class="form-group">
                        <?php
                            $dbh = new KamokuMstDao();
                            $stmt = $dbh->selectKamokuAll();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="kamoku" value="<?=$row['KAMOKU_CD']; ?>" /><?= $row["KAMOKU_NM"]; ?>
                            </label>
                        </div>
                    <?php } ?>
                    </div>

                    <div class="form-group">
                        <label for="trx_date">日付</label>
                        <div class="col-xs-4">
                            <input type="date" name="trx_date" id="trx_date" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount">金額</label>
                        <div class="col-xs-4">
                            <input type="number" name="amount" id="amount" class="form-control"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">記帳</button>
                </form>
            </div><!-- end form -->
            
            <div class="col-lg-6">
                <table class="table">
                    <thead>
                        <tr><th>日付</th><th>科目名</th><th>金額</th></tr>
                    </thead>
                    <tbody>
                        <?php
                            $dao = new GlInterfaceDao();
                            $stmt = $dao->selectByUserId('99999');
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr><td><?=$row['REG_DATE']; ?></td>
                            <td><?=$row['KAMOKU_NM']; ?></td>
                            <td align="right"><?=$row['AMOUNT']; ?></td></tr>
                        <?php        
                            }
                        ?>
                    </tbody>

                </table>
            </div><!-- end list -->
            
            <div class="footer">
                &copy;UzeeDevelopers 2013
            </div><!-- end footer -->
        </div><!-- end content -->
        
        
    </body>
</html>
