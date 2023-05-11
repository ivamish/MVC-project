<?php view('layouts.header', ['title' => 'Главная страница']); ?>

    <main class="py-5">
        <div class="container">
            <h1 class="display-5 text-capitalize mb-4">Список задач</h1>
            <button class="btn btn-primary">Добавить задачу</button>
            <div class="table-responsive mt-4">
                <table class="table">
                    <thead class="text-white bg-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Проект</th>
                        <th scope="col">Задача</th>
                        <th scope="col">Пользователь</th>
                        <th scope="col">Время</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>1</th>
                        <td>
                            Какой-то паршивый сайт
                        </td>
                        <td>
                            Перебить хедер
                        </td>
                        <td>
                            Ivamish
                        </td>
                        <td>
                            12.30 - 15.30
                        </td>
                        <td>
                            <button class="btn btn-warning">Редачить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>
                            Какой-то паршивый сайт
                        </td>
                        <td>
                            Перебить хедер
                        </td>
                        <td>
                            Ivamish
                        </td>
                        <td>
                            12.30 - 15.30
                        </td>
                        <td>
                            <button class="btn btn-warning">Редачить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>
                            Какой-то паршивый сайт
                        </td>
                        <td>
                            Перебить хедер
                        </td>
                        <td>
                            Ivamish
                        </td>
                        <td>
                            12.30 - 15.30
                        </td>
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