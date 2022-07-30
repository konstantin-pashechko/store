<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Refresh" content="300"> --><!--Обновление страницы каждые 300 секунд-->
  <link rel="icon" href="/views/images/sklad-logo.png" type="image/.png">
  <link rel="stylesheet" href="/views/layouts/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/views/layouts/assets/css/iconfont.css">
  <link rel="stylesheet" href="/views/layouts/assets/css/color.css">
  <link rel="stylesheet" href="/views/layouts/assets/css/box.css">
  <link rel="stylesheet" href="/views/layouts/assets/css/inc-nav.css">
  <link rel="stylesheet" href="/views/layouts/assets/css/main.css">
  <link rel="stylesheet" href="/views/templates/<?php echo $view; ?>/assets/css/style.css">
  <title>&#9733; СКЛАД &#9733;</title>
</head>
<style>
  .btn-outline-secondary { color: #EEE; border-color:#E95B0C; }
</style>
<body>
  <header style="position: fixed; min-width: 100vw;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
      <a class="navbar-brand" href="/"><img src="/views/images/sklad-logo.png" width="25" alt=""> СКЛАД </a>

      <form class="form-inline" action="" method="post" autocomplete="off">
        <input class="form-control mr-sm-2" type="search" name="sku" placeholder="<?= $this->not_found; ?>" name="sku">
        <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0" style="color: #EEE; border-color:#E95B0C;">Search</button>
      </form>
      <?php if($this->pattern): ?>
        <p class="view my-2"><a href="/<?php echo $this->view; ?>"><?php echo $this->view; ?></a></p>
      <?php else: ?>
        <p class="view my-2"><?php echo $this->dateLog; ?></p>
      <?php endif; ?>  
      <?php if($_SESSION['edit']): ?>
        <p class="edit"><a href="#" onclick="session(false)">Выкл.редактирование</a></p>
      <?php endif; ?>
    </nav>
  </header>

  <div class="table-responsive container-fluid" style="margin-top: 75px !important;">
    <!--Подключение файла вида-->
    <?php require($filename); ?>
    <!--Подключение шторки навигации -->
    <?php //require(ROOT.'/views/inc/navbar.php'); ?>
    <?php require(ROOT.'/views/inc/navbar.php'); ?>
    <?php //require(ROOT.'/views/templates/site/index.php'); ?>
  </div>

  <script src="/views/layouts/assets/js/jquery-3.6.0.min.js"></script>
  <script src="/views/layouts/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/views/layouts/assets/js/transition.min.js"></script>

  <script class="menu">
    $('a[href="/<?php echo $this->view; ?>/"]').addClass('activelink');
    $('a[href="/<?php echo $this->view; ?>/"]').children().addClass('activelink');
    $('a[href="/<?php echo $this->view; ?>/"]').parent().parent().children(':first').addClass('activelink');
  </script>
  <!--Если происходит поиск, то найденный артикул выделяет красным-->
  <?php if($this->pattern): ?>
    <script class="search">
      $( ".sku:contains("+<?php echo $this->pattern; ?>+")" ).css( {'font-size':'140%','color':'red','text-decoration':'underline'} );
    </script>
  <?php endif; ?>
  <script src="/views/layouts/assets/js/main.js"></script>
  <!--Подключение взаимодействие с базой данных-->
  <?php if($_SESSION['edit']): ?>
    <script src="/views/layouts/assets/js/ajax.js"></script>
  <?php else: ?>
    <script src="/views/layouts/assets/js/price.js"></script>
    <script src="/views/layouts/assets/js/tmod.js"></script>
    <script src="/views/templates/<?php echo $view; ?>/assets/js/app.js"></script>
  <?php endif; ?>   
</body>

</html>