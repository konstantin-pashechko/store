<?php

class Site extends Model
{
	public function index()
	{

	}

  public function get_htm()
  {
    $path = 'tmp/file.htm';
    //$path = 'tmp/2601.htm';
    $cont = file_get_contents($path);
      //echo '<pre>';var_dump($cont);die;
    $res = preg_match_all(
      //'~[0-9]{5}</TD>\r?\n<TD CLASS="[A-Z0-9]*">-?[0-9]+( )?,?[0-9]+,?[0-9]+~',
        '~[А-я0-9][А-я0-9][0-9 ][0-9][Е0-9]</TD>\r?\n<TD CLASS="[A-Z0-9]*">-?[0-9]+( )?,?[0-9]+,?[0-9]+~u',
      $cont, $out);
      //echo '<pre>';var_dump($out[0]);die;
    $result = [];
    foreach ($out[0] as $value) {

      $item = preg_split('~</TD>\r?\n?<TD CLASS="[A-Z0-9]*">~',$value);

if(array_key_exists("ая 4Е", $result)){ $item[0] = '_'.$item[0]; }
      //if(array_key_exists($item[0], $result)){ $item[0]= '_'.$item[0];}

      $result[$item[0]] = intval(preg_replace('~,~','.',preg_replace('~ ~', '',$item[1])));

    }
      //echo '<pre>';var_dump($result);die;
    return $result;
  }

  public function getList($table){
    //var_dump($table);die;

    /* Если главная страница */
    if($table=='SITE'){return false;} 

    /* Если не создана таблица в БД */
    // if(!$this->db->query("DESC `$table`")){ 
    //   return false;
    // }

    //$fields = $this->getFields($table);
    //echo '<pre>'; var_dump(in_array('status', $fields));die;
    $sql = "SELECT * FROM `products` WHERE `table` LIKE '$table%' ORDER BY `_order`, `param0`, `param1`, `param2`, `param3`, `param4`";

    $result = $this->db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result = $result->fetchAll();

        //echo '<pre>'; var_dump($result); die;
    return $result;
  }

  
  // public function order($table)
  // {
  //     $config = include(ROOT.'/views/templates/'.explode('_',$table)[0].'/assets/config.php');
  //     //var_dump($config['order']);die;
  //     if(explode('_',$table)[1]){
  //       return $config['order'][explode('_',$table)[1]];
  //     } else {
  //       return $config['order'];
  //     }
      

  //     $config = include(ROOT.'/views/templates/'.explode('_',$table)[0].'/assets/config.php');
  //     //var_dump($config['order']);die;
  //     return $config['order'][explode('_',$table)[1]];
      

  // }

  public function search($pattern)
  {
    $sql = "SELECT `table` FROM `products` WHERE 
    `sku1` like '$pattern' or 
    `sku2` like '$pattern' or 
    `sku3` like '$pattern' or 
    `sku4` like '$pattern' or 
    `sku5` like '$pattern' or 
    `sku6` like '$pattern' or 
    `sku7` like '$pattern' or 
    `sku8` like '$pattern' or 
    `sku9` like '$pattern' or 
    `sku10` like '$pattern'";

    $result = $this->query($sql);

    //var_dump($result);die;

    return $result[0]['table'];
  }  

  /*
  ** Методы, не участвующие в работе приложения
  */

  private function get_csv()
  {
    $list = $this->getCSV();

    foreach ($list as $value) {
      $result[$value[0]] = intval($value[1]);
    }

    return $result;
  } 

  public function upload()
  {
    $file = ROOT.'/tmp.php';
    $cont = file_get_contents($file);
   //echo '<pre>'; var_dump($cont); die;
    preg_match_all(
      // '~[^</tdrbody>\s]+~', 
      '~>.*<~',
      $cont, $out);
    //echo '<pre>'; var_dump($out[0]); die;
    $result = []; $i = 1;$count=1; $str = '';
    foreach ($out[0] as $value) {


      if($count > 9){$i++;$count=1;}


      //if($value==0){$value='';}

      $result[$i][$count] = substr($value,1,-1);//substr($value,1,-1);
      $count++;
    }
    //echo '<pre>'; print_r($result); die;

    $list = $this->getList($table);
    //echo'<pre>';var_dump($list);die;

    $id = 1819;
    foreach ($result as $value){

      $table = 'rele-promezhutochnoe';
      $name1 = trim($value[1]);
      $sku1 = trim($value[2]);
      $sku2 = trim($value[4]);
      $sku3 = trim($value[6]);


      $str .= "($id, '$name1', '$sku1', '$sku2', '$sku3','$table'),";
      $id++;
    }
    $str = trim($str,',');

    $sql = "INSERT INTO `products` (`id`,
    `name1`,
    `sku1`,
    `sku2`,
    `sku3`,
    `table`)
    VALUES $str"; 
    echo '<pre>'.$sql;die; 
    return $this->db->exec($sql);    
  }  

  public function update($table,$view){

    $sql = "UPDATE `products` SET `table` = '$view' WHERE `table` = '$table'";

    echo '<pre>'.$sql;die; 
    return $this->db->exec($sql);  
  } 
}  
