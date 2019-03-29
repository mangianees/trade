@extends('layouts.app')


@section('content')

index of posts
    @if(count($posts)>0)
        @foreach ($posts as $post)   

        <div class="shadow-lg p-3 mb-5 bg-white rounded">

                <div class="container navfont" id="product">

                    {{--<h3>{{$post->user->name}}</h3>--}}
                    <div class="d-flex flex-wrap">
                            
                                <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">

                                    <img class="card-img-top" src="/storage/cover_images/{{$post->image_path}}">

                                            <div class="card-body">

                                                    <h5 class="card-title"><b>{{$post->make}}</b></h5>
                                                    <table class="table">
                                                            <tr>
                                                                    <th>
                                                                        Model                                                    
                                                                    </th>
                                                                    <td>
                                                                            {{$post->model}}
                                                                    </td>
                                                                </tr>
                                                            <tr>
                                                                <th>
                                                                    Fuel                                                    
                                                                </th>
                                                                <td>
                                                                        {{$post->fuel_type}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Transmission
                                                                </th>
                                                                <td>
                                                                        {{$post->transmission}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                    <th>
                                                                        Mileage
                                                                    </th>
                                                                    <td>
                                                                            {{$post->mileage}}
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                
                                                
                                                <a href="/posts/{{$post->id}}" class="btn btn-primary">View</a>
                                                
                                            

                                            </div>
                                </div>
                            
                            
                                    {{-- <div class="card shadow-lg bg-white rounded">                                     --}}
                                        
        
                                                    {{-- <div class="card-body"> --}}

                                                            <div class="d-flex flex-wrap">

                                                                <div>
                                                        
                                                                    <table class="table">
                                                                            <tr>
                                                                                    <th>
                                                                                        Model                                                    
                                                                                    </th>
                                                                                    <td>
                                                                                            {{$post->model}}
                                                                                    </td>
                                                                                </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Fuel                                                    
                                                                                </th>
                                                                                <td>
                                                                                        {{$post->fuel_type}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Transmission
                                                                                </th>
                                                                                <td>
                                                                                        {{$post->transmission}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                    <th>
                                                                                        Mileage
                                                                                    </th>
                                                                                    <td>
                                                                                            {{$post->mileage}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th>
                                                                                            Model                                                    
                                                                                        </th>
                                                                                        <td>
                                                                                                {{$post->model}}
                                                                                        </td>
                                                                                    </tr>
                                                                                <tr>
                                                                                    <th>
                                                                                        Fuel                                                    
                                                                                    </th>
                                                                                    <td>
                                                                                            {{$post->fuel_type}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>
                                                                                        Transmission
                                                                                    </th>
                                                                                    <td>
                                                                                            {{$post->transmission}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <th>
                                                                                            Mileage
                                                                                        </th>
                                                                                        <td>
                                                                                                {{$post->mileage}}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                            <th>
                                                                                                Model                                                    
                                                                                            </th>
                                                                                            <td>
                                                                                                    {{$post->model}}
                                                                                            </td>
                                                                                        </tr>   
                                                                                        <tr>
                                                                                                <th>
                                                                                                    Mileage
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->mileage}}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                    <th>
                                                                                                        Model                                                    
                                                                                                    </th>
                                                                                                    <td>
                                                                                                            {{$post->model}}
                                                                                                    </td>
                                                                                                </tr>                                                                         
                                                                            </table>
                                                                        </div>

                                                                        <div>
                                                                                <table class="table">
                                                                                        <tr>
                                                                                                <th>
                                                                                                    Model                                                    
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->model}}
                                                                                                </td>
                                                                                            </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Fuel                                                    
                                                                                            </th>
                                                                                            <td>
                                                                                                    {{$post->fuel_type}}
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Transmission
                                                                                            </th>
                                                                                            <td>
                                                                                                    {{$post->transmission}}
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>
                                                                                                    Mileage
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->mileage}}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                    <th>
                                                                                                        Model                                                    
                                                                                                    </th>
                                                                                                    <td>
                                                                                                            {{$post->model}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <tr>
                                                                                                <th>
                                                                                                    Fuel                                                    
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->fuel_type}}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>
                                                                                                    Transmission
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->transmission}}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                    <th>
                                                                                                        Mileage
                                                                                                    </th>
                                                                                                    <td>
                                                                                                            {{$post->mileage}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                        <th>
                                                                                                            Model                                                    
                                                                                                        </th>
                                                                                                        <td>
                                                                                                                {{$post->model}}
                                                                                                        </td>
                                                                                                    </tr>        
                                                                                                    <tr>
                                                                                                            <th>
                                                                                                                Mileage
                                                                                                            </th>
                                                                                                            <td>
                                                                                                                    {{$post->mileage}}
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>
                                                                                                                    Model                                                    
                                                                                                                </th>
                                                                                                                <td>
                                                                                                                        {{$post->model}}
                                                                                                                </td>
                                                                                                            </tr>                                                                    
                                                                                        </table>

                                                                        </div>
                                                                        <div>
                                                                                <table class="table">
                                                                                        <tr>
                                                                                                <th>
                                                                                                    Model                                                    
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->model}}
                                                                                                </td>
                                                                                            </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Fuel                                                    
                                                                                            </th>
                                                                                            <td>
                                                                                                    {{$post->fuel_type}}
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>
                                                                                                Transmission
                                                                                            </th>
                                                                                            <td>
                                                                                                    {{$post->transmission}}
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                                <th>
                                                                                                    Mileage
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->mileage}}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                    <th>
                                                                                                        Model                                                    
                                                                                                    </th>
                                                                                                    <td>
                                                                                                            {{$post->model}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <tr>
                                                                                                <th>
                                                                                                    Fuel                                                    
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->fuel_type}}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>
                                                                                                    Transmission
                                                                                                </th>
                                                                                                <td>
                                                                                                        {{$post->transmission}}
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                    <th>
                                                                                                        Mileage
                                                                                                    </th>
                                                                                                    <td>
                                                                                                            {{$post->mileage}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                        <th>
                                                                                                            Model                                                    
                                                                                                        </th>
                                                                                                        <td>
                                                                                                                {{$post->model}}
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                            <th>
                                                                                                                Mileage
                                                                                                            </th>
                                                                                                            <td>
                                                                                                                    {{$post->mileage}}
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th>
                                                                                                                    Model                                                    
                                                                                                                </th>
                                                                                                                <td>
                                                                                                                        {{$post->model}}
                                                                                                                </td>
                                                                                                            </tr>     
                                                                                        </table>

                                                                        </div>

                                                                        

                                                                            
                                                                        {{-- </div> --}}
                                                    {{-- </div> --}}
                                        
                                    </div>
                                
                       </div>
                    </div>

                    <div class="col"> here we are</div>
                </div>
            
            </div>
        </div>
        </div>
    @endforeach
    {{$posts->links()}}
    @else
    <p>No Posts Founds</p>
    @endif

@endsection