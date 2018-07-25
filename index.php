<?php
include "goods.php";

$g = new Goods;
//var_dump($g->getList());
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Products Ltd.</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body>
<div id="wrapper">

<div id="" class="gray-bg">
      
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Школьная форма</h2>
              <a href="addProduct.php" class="btn btn-info">Добавить продукт</a>
	<a href=".?sortTo=last" class="btn btn-xs btn-outline btn-warning">Выборка цен по последнему интервалу</a>
<a href="?sortTo=interval" class="btn btn-xs btn-outline btn-warning">Выборка цен по короткому интервалу</a>


            </div>

            <div class="col-lg-2">

            </div>

        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            
						<? $count = 0; 
						foreach($g->getList() as $row){ 
						if ($count == 0){echo '<div class="row">';}	
						//var_dump($row['title']);
						?>
						<div class="col-md-4">
                    			<div class="ibox">
                        			<div class="ibox-content product-box">
                            			<div class="product-imitation"> 
											[image]
                            			</div>
			 							<div class="product-desc">
			                                <span class="product-price">
			                                    <?=$g->getPrice($row['id'],$_GET['sortTo'])?> <i class="fa
fa-rub"></i>
			                                </span>
			                                <small class="text-muted"><?=$row['category']?></small>
			                                <a href="view.php?id=<?=$row['id']?>" class="product-name"><?=$row['title']?> </a>
			                                <div class="small m-t-xs">
			                                    <?$row['description']?>
			                                </div>
			                                <div class="m-t text-righ">

			                                    <a href="" class="btn btn-xs btn-outline btn-danger">Удалить <i class="fa fa-trash-o"></i> </a>
			                                    <div class="pull-right">
			                                    	<a href="edit.php?id=<?=$row['id']?>" class="btn btn-xs btn-outline btn-success">Редактировать <i class="fa
fa-pencil-square"></i> </a>
			                                	</div>
			                                </div>
			                            </div>



					   		           </div>
		                        </div>
		                    </div>
		               
		                <?
		                //echo $count;
		                $count++;
		                if ($count == 3){echo '</div>';$count = 0;}
						} 
						
						?>
</div>


}?>
</body>
</html>
