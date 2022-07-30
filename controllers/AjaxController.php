<?php

class AjaxController
{
	public function index(){
		//print_r($_POST);die;
		if($_POST['data']['update']){
			//$table = str_replace('/','_',$_POST['data']['table']);
			$field = $_POST['data']['field'];
			$value = $_POST['data']['value'];
			$id = $_POST['data']['id'];
 //print_r($id,$field,$value);die; 
			$result = $this->model->updateOne($field, $value, $id);
			if($result){echo $result;}
		}
		if($_POST['data']['del']){
			//$table = str_replace('/','_',$_POST['data']['table']);
			$id = $_POST['data']['id'];

			$result = $this->model->deleteOne($id);

			if($result){ echo $id; }
		} 
		if($_POST['data']['add']){
			
			$table = $_POST['data']['table'];
			if(!$table){die;}
			$result = $this->model->createOne($table);
			echo $result;
		}

		if($_POST['data']['getprice']){
			$database = 'atn';
			$sku = $_POST['data']['sku'];
			$result = $this->model->getprice($database, $sku);
			echo $result;
		}
	}
}