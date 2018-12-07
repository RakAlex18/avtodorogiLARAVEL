@extends ('admin.layout')
@section ('content')
<div class=" registrUser">
    <form action="" method="post" class="container-fluid form-horizontal" role="form">
        <div class="form-row">
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="title" class="control-label sr-only">title</label>
                <div class="col-12 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            TITLE
                        </div>
                    </div>
                    <input type="text" name="title" id="title" placeholder="название новости" class="form-control"
                           autofocus>
                </div>
            </div>
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="link_content" class="control-label sr-only">Ссылка на источник</label>
                <div class="col-12 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            link_content
                        </div>
                    </div>
                    <input type="text" name="link_content" id="link_content" placeholder="Ссылка на источник"
                           class="form-control"
                           autofocus>
                </div>
            </div>
            <div class="form-group col-12 mt-3 mb-3">
                <label for="content" class="col-sm-12 control-label sr-only">content</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            CONTENT
                        </div>
                    </div>

                    <textarea name="content" id="" cols="" rows="" placeholder="содержание новости" class="form-control"
                              autofocus></textarea>
                </div>
            </div>
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="id_author" class="control-label sr-only">ID_AUTHOR</label>
                <div class="col-12 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            id_author
                        </div>
                    </div>

                    <select name="id_author" id="id_author" class="form-control" autofocus>
                        <option value="1">1</option>

                        <option value="1">2</option>

                    </select>
                </div>
            </div>
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="pub_date" class="control-label sr-only">pub_date</label>
                <div class="col-12 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            pub_date
                        </div>
                    </div>
                    <input type="date" name="pub_date" id="pub_date" placeholder="Дата публикации"
                           class="form-control"
                           autofocus>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-auto">
                <input type="submit" name="create" class="btn btn-primary btn-block" value="Создать новость">
            </div>
        </div>

    </form> <!-- /form -->
    <br>
    <a class="btn btn-success btn-block" href="">Вернуться назад</a>

</div>
@endsection