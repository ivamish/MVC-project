<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'crud-project' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>
<body cz-shortcut-listen="true">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold text-center" href="#">CRUD <span class="fw-normal fs-6 d-block mt-0 text-white-50">приложение</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Задачи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/projects">Проекты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/users">Пользователи</a>
                    </li>
                </ul>

                <ul class="navbar-nav my-2 my-lg-0" style="margin-left: auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Вход</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>