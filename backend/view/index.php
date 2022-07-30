<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/backend/view/assets/css/style.css">
	<title>&#9733; АДМИН &#9733;</title>
</head>
<body>
    <div class="form">
        <form action="/admin/update/" method="post" enctype="multipart/form-data">
          <div class="forceColor"></div>
          <div class="topbar">
            <div class="spanColor"></div>
            <input type="file" class="input" name="file" autocomplete="on"/>
        </div>
        <input type="submit" name="submit" id="submit" class="submit" value="Загрузить">
        <form/>
    </div> 
<!--     <div class="edit b-red">
        <a href="/admin/edit/">
            Изменить таблицу
        </a>
    </div>  -->

    <script src="/backend/view/app.js"></script>
</body>
</html>
