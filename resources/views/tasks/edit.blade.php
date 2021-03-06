@extends('layouts.app')

@section('content')
    <?php $user = Auth::user(); ?>
    <h2>{{ $user->name }}さんのタスク変更ページ</h2>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::model($task, ["route" => ["tasks.update", $task->id], "method" => "put"]) !!}
            
            <div class="form-group>"
            {!! Form::label("content", "タスク:") !!}
            {!! Form::text("content", null, ["class" => "form-control"]) !!}
            </div>
            <div class="form-group">
            {!! Form::label("status", "ステータス:") !!}
            {!! Form::text("status", null, ["class" => "form-control"]) !!}
            </div>
            {!! Form::submit("変更") !!}
        
        {!! Form::close() !!}
        </div>
    </div>
    
@endsection