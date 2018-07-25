<?php

include "db.class.php";

class Goods extends DB
{
	protected $model;
	
	public function __construct()
    {
        
        $this->model = new DB;

    }
	
	
	public function getList($visible = false)
    {
        $sql = "SELECT * FROM goods WHERE 1";

        if($visible)
        {
            $sql .=" AND status = visible";
        }
        return $this->model->query($sql);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM goods WHERE id={$id}";

        return $this->model->query($sql);
    }
    public function getPricePeriod($gid)
    {
        $sql = "SELECT `ppid`,`startDate`,`endDate`,`diffDate`,`price` FROM pricePeriod WHERE gid = {$gid} order by ppid desc";

        return $this->model->query($sql);
    }
    public function getPricePeriodByID($ppid)
    {
        $sql = "SELECT `ppid`,`startDate`,`endDate`,`diffDate`,`price` FROM pricePeriod WHERE ppid = {$ppid} order by ppid desc";

        return $this->model->query($sql);
    }
    public function checkPrice($gid)
    {
        $sql = "SELECT * FROM pricePeriod WHERE startDate < NOW() and endDate > NOW() and gid = {$gid}";

        return $this->model->query($sql);
    }
     public function getPrice($gid,$priority = null)
    {
    	(int)$gid = $gid;
		if($priority == 'interval'){
			$order = "diffDate";
		}elseif ($priority == 'last') {
			$order = "ppid DESC ";
		}else{$order = "ppid DESC ";}
    	
    	//$sql = "SELECT `ppid`,`startDate`,`endDate`,`diffDate`,`price` FROM pricePeriod WHERE startDate < NOW() and endDate + INTERVAL 1 DAY >= NOW() and gid = {$gid} ORDER BY {$order} DESC LIMIT 1";
		$sql = "SELECT `price` FROM pricePeriod WHERE startDate < NOW() and endDate + INTERVAL 1 DAY >= NOW() and gid = {$gid} ORDER BY {$order} LIMIT 1";
        
//echo $sql;
        $result = end($this->model->query($sql));
        
		
		if (!$result){
			$sql = "SELECT `mainPrice` FROM goods WHERE id={$gid}";
			$result = end(end($this->model->query($sql)));
			//var_dump($result);
			return $result;
		}else{$result = current($result); return $result;}


        
    }
 	public function addPricePeriod($data)
    {

		(int)$gid = $this->model->escape($data['id']);
		
		$startDate = str_replace(" ","",$this->model->escape($data['addStartDate']));
		$endDate = str_replace(" ","",$this->model->escape($data['addEndDate']));
		$price = str_replace(" ","",$this->model->escape($data['addRangePrice']));

        $sql = "INSERT INTO pricePeriod SET
            gid = '{$gid}',
			startDate = '{$startDate}',
			endDate = '{$endDate}',
			diffDate = TIMESTAMPDIFF(SECOND ,'{$startDate}','{$endDate}'),
			price = '{$price}'
            ";

        return $this->model->query($sql);
          
    }
    public function editPricePeriod($data)
    {

		$ppid = $this->model->escape($data['id']);
		$gid = $this->model->escape($data['gid']);
		$startDate = $this->model->escape($data['startDate']);
		$endDate = $this->model->escape($data['endDate']);
		$price = $this->model->escape($data['price']);



        $sql = "UPDATE pricePeriod SET
            gid = '{$gid}',
			startDate = '{$startDate}',
			endDate = '{$endDate}',
			diffDate = TIMESTAMPDIFF(SECOND ,'{$startDate}','{$endDate}'),
			price = '{$price}'
			WHERE ppid = {$ppid}
            ";

        return $this->model->query($sql);
    }
    public function ppDelete($ppid)
    {
        $sql = "Delete FROM pricePeriod WHERE  ppid = {$ppid}";

        return $this->model->query($sql);
    }


}