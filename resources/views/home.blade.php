@extends('layouts.app')

@section('content')

<div class="container">
        <div class="navfont">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Advertisement</a>
                    
                    <div class="float-right">
                    You are logged in!
                    </div>   
                    
                </div>

                @if(count($posts)>0)
                <div class="container justify-content">

                        <table class="table">
                            <tr class="card-header">
                                <th>Make</th>
                                <th>Registration No</th>
                                <th class="float-right">Action</th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                            <td>{{$post->make}}</td>
                            <td>{{$post->registration}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-right">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST','class' => 'float-top'])!!}

                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                  
                                    {!!Form::close()!!}
                            </td>
    
                            </tr>
                                
                            @endforeach
    
                        </table>
                    @else
                    
                    <h3 class="container">You didnt published advertisement</h3>

                    @endif
                    </div>

            </div>
            
        </div>
        
    </div>

</div>    
</div>
@endsection
