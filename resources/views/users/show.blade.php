@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @if (Auth::id() == $user->id)
                {!! Form::open(['route' => 'tasks.store']) !!}
                    <div class="form-group">
                        <p>ステータス</p>
                        {!! Form::text('status', old('status'), ['class' => 'form-control', 'rows' => '2']) !!}
                        <p>コンテンツ</p>
                        {!! Form::text('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}<br>
                        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            @endif
            @if (count($tasks) > 0)
                @include('tasks.tasks', ['tasks' => $tasks])
            @endif
        </div>
    </div>
@endsection