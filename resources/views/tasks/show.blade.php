@extends('layouts.app')

@section('content')
    <?php $user = Auth::user(); ?>
    <h2>{{ $user->name }}さんのタスク詳細ページ</h2>
    <table class="table table-bordered">
        <tr>
            <th>タスクid</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    {!! link_to_route("tasks.edit", "このタスクを編集", ["id" => $task->id], ["class" => "btn btn-default"]) !!}
    
    {!! Form::model($task, ["route" => ["tasks.destroy", $task->id], "method" => "delete"]) !!}
        {!! Form::submit("削除", ["class" => "btn btn-danger"]) !!}
    {!! Form::close() !!}

@endsection