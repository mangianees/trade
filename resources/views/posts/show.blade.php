@extends('layouts.app')
@section('content')


<a href="/posts" class="btn btn-light">Go Back</a>

<div class="container" id="ProductDescription">
  <div class="navfont">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
       
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
            @if(Auth::guest())
                  <a href="/posts/{{$post->id}}" class="btn btn-primary">View</a>
             @endif
                </div>
                
        {{-- </div> --}}

              @if(!Auth::guest())
              @if(Auth::user()->id == $post->user_id)
                
              <div class="container">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>                 
                {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST','class' => 'float-top float-right'])!!}

                

                  {{Form::hidden('_method','DELETE')}}
                  {{Form::submit('Delete',['class'=> 'btn btn-danger float-top float-right'])}}
                
                  {!!Form::close()!!}
                </div>
                  @endif
                @endif
            
        

        </div>
      </div>
    </div>
  </div>
    



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

        </div>
        </div>
      </div>

    </div>
</div>
</div>

@endsection
