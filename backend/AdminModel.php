<?php
class AdminModel extends Model
{
	
	public function upload()
	{
		$cont = file_get_contents('views/templates/teny/bloky-ten/index.php');
   //echo '<pre>'; var_dump($cont); die;
		preg_match_all(
			'~>.*<~', 
			$cont, $out);
		$result = []; $i = 1;$count=1; $str = '';
		foreach ($out[0] as $value) {
			if($count > 6){$i++;$count=1;continue;}
			$result[$i][$count] = substr($value,1,-1);
			$count++;
		}
    //echo '<pre>'; var_dump($result); die;
		$id = 1;
		foreach ($result as $value){
			$str .= "($id,'$value[1]','$value[2]','$value[3]','$value[4]','$value[5]','$value[6]'),";
			$id++;
		}
		$str = trim($str,',');
		$sql = "INSERT INTO `teny_bloky-ten` (`id`,`power`,`flange`,`length`,`material`,`manufacturer`,`sku`)
		VALUES $str";
          // echo '<pre>'.$sql;die; 
		return $this->db->exec($sql);    
	}
	public function create($array)
	{
		// echo '<pre>';
		// print_r($array);
		// die;

		$table = $array['submit'];
		$array['length'] = $array['length'].' '.$array['form'].' '.$array['gilza'];
		// echo '<pre>';
		// print_r($array['length']);
		// die;		
		unset($array['form'],$array['gilza']);
		foreach ($array as $key => $value) {
			if($key == 'submit'){continue;}
			$str .= $key.',';
			$str2 .= "'".$value."',";
		}
		$str = trim($str,',');
		$str2 = trim($str2,',');

		$sql = "INSERT INTO `$table` ($str) VALUES ($str2)";
		$res = $this->db->exec($sql);
		echo '<pre>';
		print_r($res);
		die;
	}
	/*
	* Выбираем все таблицы из БД
	*/
	public function getTables(){
		$alltables=$this->db->query("SHOW TABLES",PDO::FETCH_NUM);

		while($out=$alltables->fetch()){

			$result[] = $out[0];
		}
		return $result;
	}
	/*
	* Выбираем все строки из заданной таблицы
	*/
	public function getRows($table){

		$result = $this->selectAll($table);
		return $result;
	}

	public function updateRow($row,$table){
		//var_dump($row);die;
		foreach ($row as $key => $value){
			if(($key=='update')||($key=='id')){continue;}
			$str .= $key."='".$value."',";
		}
		$str = trim($str,',');
		$sql = "UPDATE `$table` SET $str WHERE id =".$row['id'];
		//echo $sql;die;
		$this->db->exec($sql);
	}
	public function deleteRow($id,$table){


	}
}

