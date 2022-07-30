<?php

class Ajax extends Model
{
	public function updateOne($field, $value, $id)
	{
		$sql = "UPDATE `products` SET `$field`='".$value."' WHERE `id`=".$id;
		//print_r($sql);die;
		return $this->exec($sql);
	}

	public function queryOne($field, $id)
	{
		$sql = "SELECT `$field` FROM `products` WHERE `id`=".$id;
		$res = ($this->query($sql));
		return (array_values($res[0]))[0];
	}

	public function createOne($table){

		$sql = "INSERT INTO `products` (`id`, `param1`, `param2`, `param3`, `param4`, `param5`, `param6`, `param7`, `param8`, `param0`, `name1`, `sku1`, `name2`, `sku2`, `name3`, `sku3`, `name4`, `sku4`, `name5`, `sku5`, `name6`, `sku6`, `name7`, `sku7`, `name8`, `sku8`, `name9`, `sku9`, `name10`, `sku10`, `table`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$table')";
		$count = $this->exec($sql);

		if($count){
			return $count;
		} else {
			return false;
		}
	}

	public function deleteOne($id)
	{
		//echo $id;die;
		$sql = "DELETE FROM `products` WHERE `id`=".$id;
		return $this->exec($sql); 
	}

	public function getprice($database, $sku){
		$db = $this->getModel('atn');
		$sql = "SELECT `price` FROM `product` WHERE `sku`=".$sku;
		$res = $db->query($sql);
		echo $res[0]['price'];die;
	}
}
