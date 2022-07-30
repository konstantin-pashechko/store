<?php

class Controller
{
	public $tables; // (array) массив с видами ($this->view), которые имеют более одной таблицы
	//public $view; // string
	//public $model; // object
/*
** Для вывода параметров в подключаемый вид
** $params - массив с параметрами
** $view - имя папки с подключаемый видом index.php
*/
	function __construct(){
		$this->tables = include (ROOT.'/config/tables.php');
	}
	protected function render($view, $params = null)
	{
		if(count($params)>1){
			foreach ($params as $key => $param){
				${$key} = $param;
			}
		} else {
			${key($params)} = $params[key($params)];
		}

			$filename = ROOT.'/views/templates/'.$view.'/index.php';
			
//$this->dump($filename);
		//$content = file_get_contents($filename);
		require_once(ROOT.'/views/layouts/main.php');
	}

	protected function map($items, $func){
		$results = [];

		foreach ($items as $item) {
			$results[] = $func($item);
		}
		return $results;
	}

	protected static function filter($items, $func){
		$results = [];

		foreach ($items as $item) {
			if($func($item)){
				$results[] = $item;
			}
		}
		return $results;
	}

	protected function exist($arr, $mass){
		foreach ($arr as $key => $arritem) {
			if($mass[$key]){
				unset($arr[$key]);
			}
		}

		$res = $this->map($arr, function($item){
			return $item['product_id'];
		});
		return $res;
	}


	protected function match($arr, $mass){
		foreach ($arr as $key => $arritem) {
			if(!$mass[$key]){
				unset($arr[$key]);
			}  else {
				if($arritem['sku'] == $mass[$key]['sku'] && $arritem['name'] == $mass[$key]['name']){
					unset($arr[$key]);
				}
			}
		}
		$res = $this->map($arr, function($item){
			return $item['product_id'];
		});
		return $res;
	}

	protected function dump($arr)
	{
		echo '<pre style="font-size:120%;">';
		var_dump($arr);
		die;
	}

	protected function writeLogs($product_id)
	{
    	$filename = ROOT.'/tmp/product.log';
    	$data = $product_id.' ('.date("F j, Y").')'."\n";
    	file_put_contents($filename, $data, FILE_APPEND);
	}

	protected function isAuth()
	{
        if (!empty($_SESSION['auth'])) {
            die;
        }
	}

}
