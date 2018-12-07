@extends ('admin.layout')
@section ('content')
    <h2>СТРАНИЦА РЕДАКТИРОВАНИЯ</h2>
    {{--{!! Form::open(['url' => 'foo/bar']) !!}--}}
    <?php  echo Form::model($fact, ['route' => ['facts.update', $fact->id], 'method' => 'PUT'])?>
    <div class="row">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-hover" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th class="th-sm">ID
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Title
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>

                <th class="th-sm">ID_author
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Pub_date
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Link_content
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">img_news
                </th>
                <th class="th-sm">Button
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> {{ $fact->id }}</td>
                <td><?php  echo Form::text('title', $fact->title); ?></td>
                <td><?php  echo Form::text('id_author', $fact->id_author); ?></td>
                <td><?php  echo Form::text('pub_date', $fact->pub_date); ?></td>
                <td><?php  echo Form::text('link_content', $fact->link_content); ?></td>
                <td><?php  echo Form::file('image');?>
                </td>
                <td>
                    <?php echo Form::submit('Изменить', ['class' => 'btn btn-success btn-block']); ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php  echo Form::textarea('content_update', $fact->content); ?>
    {{-- <textarea name="content_update" cols="100" rows="20"> {{ $fact->content }} </textarea>--}}

    {!! Form::close() !!}

@endsection
