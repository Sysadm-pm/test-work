<??>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products Ltd.</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <link href="/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

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
                           
                         <form method="POST" id="formEdit" action="actionProduct.php" enctype=multipart/form-data>  
                            <div class="tab-content">
                            	 
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-1 control-label">Название:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="Название продукта" name="title" value="<?=$data['product']["title"];?>"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-1 control-label">Цена:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="1600.00р" name="mainPrice" value=""></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-1 control-label">Артикул:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="№ 00000" name="art"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-1 control-label">Описание:</label>
                                                <div class="col-sm-10">
                                                     <textarea name="description" id="description" class="summernote form-control" ></textarea>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-1 control-label">Категория:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="..." name="category"></div>
                                            </div>
                                           <div class="form-group"><label class="col-sm-2 control-label">Тэги:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="Quantity" name="tags"></div>
                                            </div>
                                         <!--     <div class="form-group"><label class="col-sm-2 control-label">Minimum quantity:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="2"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Sort order:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="0"></div>
                                            </div> -->
											<div>
											<a href="index.php" class="btn btn-info" >Назад</a>
											<button class="btn btn-success pull-right" type="submit">Создать</button>
											</div>
                   				</fieldset>
					</form>

                    </div>
                </div>

                                
                              
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>

<!-- SUMMERNOTE -->
<script src="/js/plugins/summernote/summernote.min.js"></script>

<!-- Data picker -->
<script src="/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<script src="/js/plugins/jasny/jasny-bootstrap.min.js"></script>


<script>
 
        $('.summernote').summernote();

        $('.input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

   
</script>

</body>

</html>
