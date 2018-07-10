@extends('layouts.app')

<hr><hr><hr>
@section('content')

<div class="btn btn-outline-primary">
    <a href="#">Go Back</a>
</div>
<h1>
    <a href="/todo/{{$todo->id}}">
       {{$todo->text}}
    </a>
</h1>
<div class="badge badge-danger">
        {{$todo->due}}
</div>
<hr>
<p>{{$todo->body}}</p>
<br><br>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
{!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'float-sm-left']) !!} 
{{ Form::hidden('_method','DELETE') }} 
{{ Form::bsSubmit('Delete',['class'=> 'btn btn-danger']) }} 
{!! Form::close()!!}
@endsection