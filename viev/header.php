<?php

header('Content-Type: text/html; charset=utf-8')    ;   // устанавливаем заголовки для кирилицы (utf-8)
ini_set('error_reporting', E_ALL)                   ;   
ini_set('display_errors', 1)                        ;
ini_set('display_startup_errors', 1)                ;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Mega CRM</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/viev/css/style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/viev/js/my.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#"  data-toggle="modal" data-target=".addUserModal">Добавить сотрудника</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  data-toggle="modal" data-target=".filterUserModal" href="#">Фильтр</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Скачать</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Выйти</a>
                </li>
            </ul>
        </div>
    </div>
</div>