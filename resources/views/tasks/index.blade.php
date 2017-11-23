@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    <?php $user = Auth::user(); ?>
    <h2>{{ $user->name }}さんの投稿者idは{{ $user->id }}です</h2>
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>投稿者id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route("tasks.show", $task->user_id, ["id" => $task->id]) !!}</td>
                    <!--<td>{!! link_to_route("tasks.show", $task->id, ["id" => $task->id]) !!}</td>--!>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route("tasks.create", "新規タスクの設定", null, ["class" => "btn btn-primary"]) !!}
@endsection