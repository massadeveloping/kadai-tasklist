@extends('layouts.app')

@section('content')

    <h1>新規タスク設定ページ</h1>
    
    {!! Form::model($task, ["route" => "tasks.store"]) !!}
        
        {!! Form::label("status", "ステータス:") !!}
        {!! Form::text("status") !!}
        
        {!! Form::label("content", "タスク:") !!}
        {!! Form::text("content") !!}
        
        {!! Form::submit("設定") !!}
        
    {!! Form::close() !!}

@endsection