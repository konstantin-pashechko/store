<?php
class AdminController
{
	private $uri;
	function __construct($params)
	{
		$this->uri = $params;
	}
	public function router()
	{
		if($this->uri[1]){
			$action = $this->uri[1];
			if(method_exists($this, $action)){
				$this->$action($this->uri[2]);
			}
			return true;
		}
		$this->index();
	}

	private function dump($var)
	{
		echo '<pre>';
		var_dump($var);
		die;
	}

	private function index()
	{
		require_once(ROOT.'/backend/view/index.php');
	}

	private function session()
	{
		if($_POST['data']['ses'] == 'edit'){
			$_SESSION['edit'] = 'edit';
			echo $_SESSION['edit'];
		} else {
			unset($_SESSION['edit']);
			echo $_SESSION['edit'];
		}
	}

	private function update()
	{
		if(isset($_POST['submit'])){
			$ext = explode('.',$_FILES['file']['name'])[1];
			if($ext!=='csv' && $ext!=='htm'){echo '<div style="margin:35vh auto; width:300px;"><p style="color:red; font-weight:bold;">НЕДОПУСТИМЫЙ ТИП ФАЙЛА!</p><p><a href="/admin/">НАЗАД</a></p></div>';die;}
			if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
				move_uploaded_file($_FILES["file"]["tmp_name"], ROOT . "/tmp/file.$ext");
				$this->dateLog();
			}
		}
		require_once(ROOT.'/backend/view/index.php');
	}

	private function dateLog(){
		$file = ROOT . '/tmp/datelog.php';
		$date = date('d / m H:i');
		file_put_contents ( $file , $date );
		return true;
	}
	public function edit($table=false){
		if($_POST['update']){
			$this->model->updateRow($_POST,$table);
		}
		if($_POST['delete']){
			$this->model->deleteRow($_POST['id'],$table);
		}		
		if(!$table){
			$tables = $this->model->getTables();
			require_once(ROOT.'/backend/view/edit.php');
		} else {
			$rows = $this->model->getRows($table);
			$fields = $this->model->getFields($table);
			require_once(ROOT.'/backend/view/edit.php');
		}
	}
}
