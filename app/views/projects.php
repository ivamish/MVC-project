<?php view('layouts.header', ['title' => 'Проекты']); ?>

    <main class="py-5">
        <div class="container">
            <h1 class="display-5 mb-4">Список проектов</h1>
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить проект</button>
            <div class="table-responsive mt-4">
                <table class="table">
                    <thead class="thead-dark table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Лого</th>
                        <th scope="col">Название</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>logo</td>
                        <td>Паршивый irogex</td>
                        <td>
                            <button class="btn btn-warning">Редачить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>logo</td>
                        <td>Паршивый irogex</td>
                        <td>
                            <button class="btn btn-warning">Редачить</button>
                            <button class="btn btn-danger">Удалить</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>logo</td>
                        <td>Паршивый irogex</td>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Добавить проект</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body d-flex flex-column gap-3">
                        <input class="form-control" type="text" placeholder="Название" aria-label="default input example">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Логотип</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php view('layouts.footer'); ?>