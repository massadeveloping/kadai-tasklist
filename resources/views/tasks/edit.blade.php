@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id  }} のタスク変更ページ</h1>
    
    {!! Form::model($task, ["route" => ["tasks.update", $task->id], "method" => "put"]) !!}
        
        {!! Form::label("status", "ステータス:") !!}
        {!! Form::text("status") !!}
        
        {!! Form::label("content", "タスク:") !!}
        {!! Form::text("content") !!}
        
        {!! Form::submit("変更") !!}
    
    {!! Form::close() !!}
    
@endsection