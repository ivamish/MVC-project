<?php view('layouts.header', ['title' => 'Пользователи']); ?>

    <main class="py-5">
        <div class="container">
            <h1 class="display-5 mb-4">Список пользователей</h1>
            <button class="btn btn-secondary">Добавить пользователя</button>
            <div class="table-responsive mt-4">
                <table class="table">
                    <thead class="thead-dark table-secondary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ник</th>
                        <th scope="col">ФИО</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ivamish</td>
                        <td>Иванов Михаил Владимирович</td>
                        <td>
                            <button class="btn btn-warning">Редачить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>ivamish</td>
                        <td>Иванов Михаил Владимирович</td>
                        <td>
                            <button class="btn btn-warning">Редачить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>ivamish</td>
                        <td>Иванов Михаил Владимирович</td>
                        <td>
                            <button class="btn btn-warning">Редачить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php view('layouts.footer'); ?>