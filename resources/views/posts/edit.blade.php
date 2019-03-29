@extends('layouts.app')

@section('content')
<br><br><br>

<h3>Edit Posts</h3>

{!! Form::open(['action'=>['PostsController@update',$post->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('make','Make')}}
        {{Form::text('make',$post->make,['class' =>'form-control', 'placeholder' => 'Make'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('model','Model')}}
        {{Form::text('model',$post->make,['class' =>'form-control', 'placeholder' => 'Model'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('price','Price')}}
        {{Form::text('price',$post->price,['class' =>'form-control', 'placeholder' => 'Price'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('mileage','Mileage')}}
        {{Form::text('mileage',$post->mileage,['class' =>'form-control', 'placeholder' => 'Mileage'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('registration','Registration')}}
        {{Form::text('registration',$post->registration,['class' =>'form-control', 'placeholder' => 'Registration'])}}

</div>

<div class="form-group mx-sm-3 mb-2">
                {{Form::label('item_type','Item Type')}}
                {{Form::text('item_type',$post->item_type,['class' =>'form-control', 'placeholder' => 'Item Type'])}}
        
</div>

<div class="form-group mx-sm-3 mb-2">
                {{Form::label('fuel_type','Fuel Type')}}
                {{Form::text('fuel_type',$post->fuel_type,['class' =>'form-control', 'placeholder' => 'Fuel Type'])}}
        
</div>

<div class="form-group mx-sm-3 mb-2">
        {{Form::label('transmission','Transmission')}}
        {{Form::text('transmission',$post->transmission,['class' =>'form-control', 'placeholder' => 'Transmission'])}}

</div> 
<div class="form-group mx-sm-3 mb-2">
                {{Form::label('description','Description')}}
                {{Form::text('description',$post->description,['class' =>'form-control', 'placeholder' => 'Description'])}}
        
</div>                                       


<div class="form-group">
                {{Form::file('cover_image')}}
</div>

{{Form::hidden('_method','PUT')}}

<div class="form-group mx-sm-3 mb-2">
{{Form::submit('submit',['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection