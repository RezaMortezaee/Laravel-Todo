@if(count($errors) > 0)
@foreach($errors as $error)

<div class="badge badge-danger">
    {{$error}}
</div>

@endforeach @endif

@if(session('success')) 
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif