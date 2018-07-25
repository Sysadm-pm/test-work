<?
include "goods.php";
$data = new Goods();
if (!$_POST['action'])
{
//echo "Hi";
	$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';
header("Location: http://$host$uri/$extra");
}
if ($_POST['action']){

	//var_dump($_POST);
	if ($_POST['action'] == 'add'){
        $last_id = $data->addPricePeriod($_POST);
        $ppData= $data->getPricePeriodByID($last_id);
        $ppData = $ppData['0'];
        //var_dump($last_id);
		  ?>       <tr id="element_<?=$ppData['ppid']?>">
                                                <td align="center">
                                                       <?=$ppData['ppid']?>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="price" placeholder="??" value="<?=$ppData['price']?>">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="9999-99-99" name="startDate" class="form-control" value="<?=$ppData['startDate']?>">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="9999-99-99" name="endDate" class="form-control" value="<?=$ppData['endDate']?>">
                                                        </div>
                                                    </td>
                                                    <td align="center">
                                                        <a class="btn btn-white" onclick="callAction('delete','<?=$ppData['ppid']?>')"><i class="fa fa-trash"></i> </a>
                                                        <a class="btn btn-white" onclick="callAction('edit','<?=$ppData['ppid']?>')"><i class="fa fa-refresh"></i> </a>
                                                    </td>
                                                </tr>
        <?
	}

    if ($_POST['action'] == 'edit') {
    $result = $data->editPricePeriod($_POST);
        //var_dump($result);
    } ?>
       <!-- <tr id="element_<?=$ppData['ppid']?>">
            <td align="center">
                <?=$ppData['ppid']?>
            </td>
            <td>
                <input type="text" class="form-control" name="price" placeholder="$10.00" value="<?=$ppData['price']?>">
            </td>
            <td>
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="9999-99-99" name="startDate" class="form-control" value="<?=$ppData['startDate']?>">
                </div>
            </td>
            <td>
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" data-mask="9999-99-99" name="endDate" class="form-control" value="<?=$ppData['endDate']?>">
                </div>
            </td>
            <td align="center">
                <a class="btn btn-white" onclick="callAction('delete','<?=$ppData['ppid']?>')"><i class="fa fa-trash"></i> </a>
                <a class="btn btn-white" onclick="callAction('edit','<?=$value['ppid']?>')"><i class="fa fa-refresh"></i> </a>
            </td>
        </tr>-->
        <?
    //}
    if ($_POST['action'] == 'delete'){
        $data->ppDelete($_POST['id']);
    }
}
?>