<?
include "goods.php";
class validationPrice{
	privat $model;

	  public function __construct()
    {
        $this->model = new Goods();
    }

    public function priceExtist($gid)
    {
    	(int)$gid = $gid;
		return($this->model->checkPrice($gid));
    }
    public function pricePriorityRange($gid)
    {
    	(int)$gid = $gid;
		return($this->model->checkPrice($gid));
    }
    public function pricePriorityLast($gid)
    {
    	(int)$gid = $gid;
		return($this->model->checkPrice($gid));
    }
}
?>