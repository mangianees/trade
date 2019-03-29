@extends('layouts.app')


@section('content')
<br><br><br>

<h3>Create Posts</h3>

{!! Form::open(['action'=>'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('make','Make')}}
        {{Form::text('make','',['class' =>'form-control', 'placeholder' => 'Make'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('model','Model')}}
        {{Form::text('model','',['class' =>'form-control', 'placeholder' => 'Model'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('price','Price')}}
        {{Form::text('price','',['class' =>'form-control', 'placeholder' => 'Price'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('mileage','Mileage')}}
        {{Form::text('mileage','',['class' =>'form-control', 'placeholder' => 'Mileage'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('registration','Registration')}}
        {{Form::text('registration','',['class' =>'form-control', 'placeholder' => 'Registration'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
                {{Form::label('item_type','Item Type')}}
                {{Form::text('item_type','',['class' =>'form-control', 'placeholder' => 'Item Type'])}}
        
</div>

<div class="form-group mx-sm-3 mb-2">
                {{Form::label('fuel_type','Fuel Type')}}
                {{Form::text('fuel_type','',['class' =>'form-control', 'placeholder' => 'Fuel Type'])}}
        
</div>

<div class="form-group mx-sm-3 mb-2">
                {{Form::label('transmission','Transmission')}}
                {{Form::text('transmission','',['class' =>'form-control', 'placeholder' => 'Transmission'])}}
        
</div>

<div class="form-group mx-sm-3 mb-2">
                {{Form::label('description','Description')}}
                {{Form::text('description','',['class' =>'form-control', 'placeholder' => 'Description'])}}
        
        </div>


<div class="form-group">
        {{Form::file('cover_image')}}
</div>


<div class="form-group mx-sm-3 mb-2">
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection