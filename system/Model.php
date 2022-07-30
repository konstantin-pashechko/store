<?php

class Model
{ 
    public $db; // (object) объект PDO для работы с базой данных
    public $url; // (string) ссылка на XML-файл с товарами на PROM.UA

    function __construct($config)
    {
        $params = include (ROOT.'/config/'.$config.'_db.php');
        if(!$params){
            $params = include (ROOT.'/config/site_db.php');
        }

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set names utf8");
        $this->db = $db;
    }

    protected function getModel($model){
        return new Model($model);
    }    

    protected function getCSV()
    {
        if(isset($_POST['submit'])){
         if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
             move_uploaded_file($_FILES["file"]["tmp_name"], ROOT . "/tmp/file.csv");
         }
        } 

        if (file_exists(ROOT.'/tmp/file.csv')){
            $file = ROOT.'/tmp/file.csv';
                //получаем массив из файла CSV
            if (($handle = fopen($file, "r")) !== FALSE) {
            
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    //if($data[2]){
                        $list[]=$data;
                    //}
                }
            }
            fclose($handle);
            //echo '<pre>';var_dump($list);die;
            return $list;
        }
    }

    public function selectAll($table, $fields='*')
    {
        $sql = 'SELECT '.$fields.' FROM `'.$table.'`'; 

        $result = $this->db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result = $result->fetchAll();

        return $result;
    }

        public function selectItem($table, $fields='*')
    {
        $sql = 'SELECT '.$fields.' FROM '.$table; 
        $result = $this->db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result = $result->fetch();
        return $result;
    }

    public function getFields($table)
    {
        $sql = 'DESCRIBE `'.$table.'`';
        //echo $sql;die;
        $result = $this->db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $list = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $list[$i] = $row['Field'];
            $i++;
        }        
        return $list;
    }   

    public function query($sql)
    {
        $result = $this->db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $result->fetch()){
            $res[] = $row;
        }
        return $res;
    }

    protected function exec($sql) 
    {
        return $this->db->exec($sql);
    }
}