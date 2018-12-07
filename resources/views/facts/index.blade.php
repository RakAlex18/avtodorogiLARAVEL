@extends ('admin.layout')
@section ('content')
    <br>
    <a class="btn btn-success btn-block" href="{{route('facts.create')}}">Создать новость</a>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-hover"
                   cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th class="th-sm">ID
                        <!--<i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                    <th class="th-sm">Title
                        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                    <th class="th-sm">Content
                        <!--<i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                    <th class="th-sm">ID_author
                        <!--<i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                    <th class="th-sm">Pub_date
                        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                    <th class="th-sm">Link_content
                        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                    <th class="th-sm">img_news
                        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                    <th class="th-sm">Button
                        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($facts as $fact)
                    <tr>
                        <td>{{ $fact->id }}</td>
                        <td>{{ $fact->title }}</td>

                        <td>{{ $fact->content }}</td>
                        <td>{{ $fact->id_author }}</td>
                        <td>{{ $fact->pub_date }}</td>
                        <td>{{ $fact->link_content }}/td>
                        <td>
                            <img src="img/news/{{ $fact->img_news }}" alt="" width="100%">
                        </td>
                        <td>
                            <a class="btn btn-success btn-block" href="{{route('facts.edit', [$fact->id])}}">Редактировать</a>
                            {{--<input type="submit" formaction="{{route('facts.destroy'), [$fact->id] }}"
                                   value="Удалить"
                                   class="btn btn-warning btn-block">--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>
@endsection