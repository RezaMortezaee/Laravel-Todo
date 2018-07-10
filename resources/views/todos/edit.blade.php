@extends('layouts.app')
<hr>
<hr>
<hr> 
@section('content')
<div class="btn btn-outline-primary">
<a href="/todo/{{$todo->id}}">Go Back</a>
</div>
<h1>Edit Todo</h1>
{!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'PATCH']) !!} 
    {{ Form::bsText('text',$todo->text) }} 
    {{ Form::bsTextArea('body',$todo->body) }} 
    {{ Form::bsText('due',$todo->due) }} 
    {{ Form::hidden('_method','PUT') }} 
    {{ Form::bsSubmit('submit',['class'=> 'btn btn-primary']) }} 
{!! Form::close()!!}
@endsection