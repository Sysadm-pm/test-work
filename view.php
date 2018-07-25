<?
include "goods.php";
$g = new Goods;
$data = $g->getById($_GET["id"]);
$data['product'] = $data['0'];
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products Ltd.</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">



</head>

<body>

<div id="wrapper">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Product edit</h2>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight ecommerce">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="tabs-container">

                        <div class="tab-content">

                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">

                                    <fieldset class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-1 control-label">ID:</label>
                                            <div class="col-sm-10"><?=$_GET["id"]?></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-1 control-label">Название:</label>
                                            <div class="col-sm-10"><?=$data['product']["title"];?></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-1 control-label">Цена:</label>
                                            <div class="col-sm-10"><?=$data['product']["mainPrice"];?>р.</div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-1 control-label">Артикул:</label>
                                            <div class="col-sm-10"><?=$data['product']["art"];?></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-1 control-label">Описание:</label>
                                            <div class="col-sm-10">
                                               <?=$data['product']["description"];?>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-1 control-label">Категория:</label>
                                            <div class="col-sm-10"><?=$data['product']["category"];?></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-1 control-label">Тэги:</label>
                                            <div class="col-sm-10"><?=$data['product']["tags"];?></div>
                                        </div>
                                        <div>
                                            <a href="index.php" class="btn btn-info" >Назад</a>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
         </div>
    </div>
</div>



</body>

</html>
