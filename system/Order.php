<?php 
/*
** Выражение помещается в вид перед выводом массива
** <?php $this->data['example'] = (new Order(['field1','field2']))->run($this->data['example']) ?>
** field1 и field2 - поля, по которым нужно отсортировать массив $this->data['example']
*/
class Order
{
	public $array;
	public $param;

	function __construct($params, $param = 'int'){
		$this->array = $params;
		$this->param = $param;
	}

	public function run($data)
	{
		if (isset($this->array[0])){ // Если массив не ассоциативный
			usort($data, array($this, 'cmp'));

		} else { // Иначе, массив ассоциативный
			usort($data, array($this, '_cmp'));
		}
		
		return($data);
	}
/*
** Метод для массива типа ['param2','param1']
*/
	public function cmp($a, $b)
	{
		if($this->param == 'int'){
			foreach ($this->array as $value){
				if(+$a[$value] == +$b[$value]){continue;}
				if(+$a[$value] > +$b[$value]){$res = 1;}
				if(+$a[$value] < +$b[$value]){$res = -1;}
				break;
			}			
		} elseif($this->param == 'str') {
			foreach ($this->array as $value){
				if($a[$value] == $b[$value]){continue;}
				if($a[$value] > $b[$value]){$res = 1;}
				if($a[$value] < $b[$value]){$res = -1;}
				break;
			}			
		}

		return $res;
	}
/*
** Метод для массива типа ['param2'=>'asc','param1'=>'desc']
*/
	public function _cmp($a, $b)
	{
		foreach ($this->array as $key => $value){
			if($a[$key] == $b[$key]){continue;}
			if($a[$key] > $b[$key]){$res = 1;}
			if($a[$key] < $b[$key]){$res = -1;}
			if($value == 'desc'){ $res = -$res; }
			break;
		}
		return $res;
	}
}