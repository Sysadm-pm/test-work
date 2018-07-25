<?
include "goods.php";
//include "index.php"
//echo $_GET["id"]."<br>";
$g = new Goods;
$data = $g->getById($_GET["id"]);
$data['product'] = $data['0'];
//var_dump($data["description"]);
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
      <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Product edit</h2>
                
          </div>

  	<div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Продукт</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3"> Расписание цен</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-4"> График</a></li>
                            </ul>
                         <form method="POST" id="formEdit">  
                            <div class="tab-content">
                            	 
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset class="form-horizontal">
                                        	<input type="hidden" class="form-control" placeholder="Product name" value="<?=$_GET["id"]?>" name="id">
                                            <div class="form-group"><label class="col-sm-2 control-label">Name:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="Product name" name="name" value="<?=$data['product']["title"];?>"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Price:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="$160.00" name="price" value="<?=$data['product']["mainPrice"];?>"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                                <div class="col-sm-10">
                                                     <textarea name="description" id="description" class="summernote form-control" ><?=$data['product']["description"];?></textarea>                                                        
                                                </div>
                                            </div>
                           
                                            <div class="form-group"><label class="col-sm-2 control-label">ID:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="543"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Model:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Location:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="location"></div>
                                            </div>
                                  
                                            
                                            <div class="form-group"><label class="col-sm-2 control-label">Quantity:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="Quantity"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Minimum quantity:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="2"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Sort order:</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="0"></div>
                                            </div>

<button class="btn btn-white pull-rigth" type="submit"> Succes</button>

                                        </fieldset>
</form>

                                    </div>
                                </div>
<? 
$data['PricePeriod'] = $g->getPricePeriod($_GET["id"]);
//$data;
?>
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-stripped table-bordered">

                                                <thead>
                                                <tr>
                                                    <th align="center" style="width: 30px;">
                                                    	#ID
                                                    </th>
                                                    <th>
                                                        Discount
                                                    </th>
                                                    <th style="width: 20%">
                                                        Date start
                                                    </th>
                                                    <th style="width: 20%">
                                                        Date end
                                                    </th>
                                                    <th style="width: 100px;">
                                                        Actions
                                                    </th>

                                                		<tr style="background: #b8cbf8;">
    		                                            	<td align="center">
			                                                </td>
		                                                   
		                                                    <td>
		                                                        <input id="addRangePrice" type="number" class="form-control" name="price" placeholder="Цена" value="">
		                                                    </td>
		                                                    <td>
		                                                        <div class="input-group date">
		                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="addStartDate" type="text" data-mask="9999-99-99" name="startDate" class="form-control" value="">
		                                                        </div>
		                                                    </td>
		                                                    <td>
		                                                        <div class="input-group date">
		                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="addEndDate" type="text" data-mask="9999-99-99" name="endDate" class="form-control" value="">
		                                                        </div>
		                                                    </td>
		                                                    <td align="center">
		                                                        <a class="btn btn-block btn-success" href="#" onclick="callAction('add','<?=$_GET["id"]?>')"><i class="fa fa-plus-circle"></i></a>
		                                                    </td>
	                                                                    
                                                		</tr>
                                                </thead>
                                                <tbody>
 													
                                                	
                                                                               	
                                                	
                                                <?foreach ($data['PricePeriod'] as $value) {
                                                	
                                                     ?>                                       
                                                <tr id="element_<?=$value['ppid']?>">
                                                	 
                                                   <td align="center">
                                                        <?=$value['ppid']?>
                                                    </td>
                                                   
                                                    <td>
                                                        <input id="price_<?=$value['ppid']?>" type="text" class="form-control" name="price" placeholder="Цена" value="<?=$value['price']?>">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="startDate_<?=$value['ppid']?>" type="text" data-mask="9999-99-99" name="startDate" class="form-control" value="<?=substr($value['startDate'], 0, 10)?>">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="endDate_<?=$value['ppid']?>" type="text" data-mask="9999-99-99" name="endDate" class="form-control" value="<?=substr($value['endDate'], 0, 10)?>">
                                                        </div>
                                                    </td>
                                                    <td align="center">
                                                        <a class="btn btn-white" onclick="callAction('delete','<?=$value['ppid']?>')"><i class="fa fa-trash"></i> </a>
                                                        <a class="btn btn-white" onclick="callAction('edit','<?=$value['ppid']?>')"><i class="fa fa-refresh"></i> </a>
                                                    </td>
                                                	
                                                </tr>
                                             <? } ?>  

                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                          
                                        </div>

                                    </div>
                                </div>
                            
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
 		function callAction(action,id) {
		         var queryString;
		            switch(action) {
		            	case "add":
		                    queryString = 'action='+action+'&id='+ id +'&addRangePrice='+ $("#addRangePrice").val()+'&addStartDate='+ $("#addStartDate").val()+ '&addEndDate='+$("#addEndDate").val();
		                    break;
		                case "edit":
                            queryString = 'action='+action+'&id='+ id +'&gid=<?=$_GET["id"]?>&price='+ $("#price_"+id).val()+'&startDate='+ $("#startDate_"+id).val()+ '&endDate='+$("#endDate_"+id).val();
		                    break;
		                case "delete":
		                    queryString = 'action='+action+'&id='+ id;
		                    break;
		            	}
            jQuery.ajax({
                url: "actionProduct.php",
                data:queryString,
                type: "POST",
                success:function(data){
                    switch(action) {
                        case "add":
                            //console.log(queryString);
                            setTimeout(function() {$("tbody").prepend(data);}, 100);
                            break;
                        case "edit":
                            //setTimeout(function() {$('#element_'+id).html(data);}, 100);

                            break;
                        case "delete":
                            setTimeout(function() {$('#element_'+id).fadeOut();}, 100);
                            break;
                    }
                    $("#loaderIcon").hide();
                },
                error:function (){}
            });
        }


    $(document).ready(function(){
		$('form').submit(function () {
		            var formID = $(this).attr('id'); // Получение ID формы
		            //var formAction = this.action; // Получение action формы
		            var formNm = $('#' + formID);
		            console.log(formAction);
		            $.ajax({
		                type: 'POST',
		                url: 'productEdit.php', // Обработчик формы отправки
		                data: formNm.serialize(),
		                success: function (data) {
		                	console.log(formAction);
		                    // Вывод текста результата отправки в текущей форме
		                   // $(formNm).html(data);
		                }
		            });
		            return false;
		        });


        $('.summernote').summernote();

        $('.input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

    });
</script>

</body>

</html>
