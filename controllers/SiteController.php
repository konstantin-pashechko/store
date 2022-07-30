<?php

class SiteController extends Controller
{
  public $data;
  public $dateLog;
  public $pattern;
  public $list;
  public $not_found;
  public $nav;
  public $call;
  public function actionIndex()
  {
    /*
    ** Блок для поиска страницы по артикулу
    */
    if($_POST){
      $pattern = $_POST['sku'];
    }

    if($pattern){
      /*
      ** Поиск по файловой системе
      */
      $path = $this->search($pattern);

      /*
      ** Поиск по базе данных
      */
      if($path == false ){ 
        $path = $this->model->search($pattern);
        $path = explode('_',$path)[0];
      }
      /*
      ** Обработка результата поиска
      */
      if(!empty($path)){              
        $this->view = $path;
        $this->pattern = $pattern;
        $_SESSION['view'] = $this->view;
      } else {
        $this->not_found = $pattern.' not found';
        $this->view = $_SESSION['view'];
      }
    }
    //echo $this->model->update('batareyky','batareyky_tab1');die;
    //echo $this->model->upload();die;

/*
** Получение данных из БД
** 
*/

$data = $this->model->getList($this->view);
foreach($data as $value){
  if (strpos($value['table'], '_') !== false){
    $this->data[explode('_',$value['table'])[1]][] = $value;
  } else {
    $this->data[] = $value;
  }
}

//$this->dump($this->data);
/*
* Получаем данные остатков на складе из файла импорта 
*/
$this->list = $this->model->get_htm();
    /*
    ** создаем путь для файла с навигацией со вкладками в последней родительской дирректории
    */
    $this->nav = ROOT.'/views/templates/'.substr($this->view,0,strrpos($this->view, '/')).'/nav.php';

    /*
    * Задаем свойству dateLog значение, записанное во временном файле даты последнего обновления таблиц
    */
    $this->dateLog = file_get_contents(ROOT . '/tmp/datelog.php');

    if(file_exists (ROOT.'/views/templates/'.$this->view.'/index.php')){
      $_SESSION['view'] = $this->view;
      $this->render($this->view);
    }

  }
  /*
  ** Методы, вызываемые при поиске
  */
  /*
  ** Поочередно подключает все файлы видов, и по регулярному выражению ищет соответствие
  ** возвращает путь к первому файлу, в котором есть паттерн
  */
  public function search($pattern){
    $item = '/*';
    $paths = $this->getViewsPaths($item);
    
    foreach ($paths as $path) {
      $cont = file_get_contents($path);
      preg_match('~get\('.$pattern.'\)~', $cont, $res);
      if($res){ 
        $explodes = explode('/',$path);
        unset($explodes[0],$explodes[1]);
        array_pop($explodes); 
        return implode($explodes,'/');
      }
    }
    return false;
  }
  /*
  **Рекурсивная функция, возвращает все пути к существующим видам
  */
  private function getViewsPaths($item, $result = []){

    $files = glob('views/templates'.$item.'/*.php');

    if(!empty($files)){

      $result = array_merge($result, $files);

      $result = $this->getViewsPaths($item.'/*', $result);
    }
    return $result; 
  }

  /*
  ** Метод, возвращает остаток товара по ключу (артикулу) из массива this->list
  */
  public function get($item = false)
  {
    $item = trim($item);
    
    if(!$this->list[$item]){ return 0; }

    if($this->list[$item] < 0){
      echo '<span style="color:red;">'.$this->list[$item].'</span>';
    } else {
      echo trim($this->list[$item]);
    }
  }  
  /*
  ** Изменяет вхождение строки на паттерн, указанный в файле ..assets/config.php, находящийся в папке текущего вида
  */
  public function replace($str)
  {
    $config = include(ROOT.'/views/templates/'.$this->view.'/assets/replace.php');
    // var_dump($config);
    return str_replace($config['search'],$config['replace'],$str);
  }  
  public function net($param)
  {
    if($param){
      return '';
    }
    return 'net1';
  }

  public function nav(){
    if(include $this->nav){
      return true;
    }
    return false;
  }
  public function grid($light, $dark, $bg){
    return $bg ? $dark : $light;
  }
}
