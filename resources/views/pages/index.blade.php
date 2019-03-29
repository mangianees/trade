@extends('layouts.app')

@section('content')

<div class="backcolor">

<div id="heading">
    <h1>Trade Everything</h1>
        <p>This is trial Here You can Sale and Purchase Cars, Cellphones and Home Appliances</p>
</div>
</div>

@if(count($posts)>0)
    @foreach ($posts as $post)

    @endforeach
@endif


                    <div class="row">
                            <div class="col">
                                    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                      <div class="carousel-item active">
                                                        <img class="d-block w-100" src="/storage/cover_images/11_1553777563.jpg" alt="First slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block w-100" src="/storage/cover_images/Aspark-Owl-5_1553644523.jpg" alt="Second slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        {{-- <img class="d-block w-100" src="/storage/cover_images/{{$post->image_path}}" alt="Third slide"> --}}
                                                        <img class="d-block w-100" src="/storage/cover_images/this pic_1553777626.jpg" alt="Third slide">            
                                                        
                                                    
                                                    </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Next</span>
                                                    </a>
                                                  </div>        
                                        </div>
                    
                            </div>
                            <div class="col">
                                    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                      <div class="carousel-item active">
                                                        <img class="d-block w-100" src="/storage/cover_images/1.jpg" alt="First slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block w-100" src="/storage/cover_images/2.jpg" alt="Second slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        {{-- <img class="d-block w-100" src="/storage/cover_images/{{$post->image_path}}" alt="Third slide"> --}}
                                                        <img class="d-block w-100" src="/storage/cover_images/3.jpg" alt="Third slide">            
                                                        
                                                    
                                                    </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Next</span>
                                                    </a>
                                                  </div>        
                                        </div>
                    
                            </div>
                            <div class="col">
                                    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                      <div class="carousel-item active">
                                                        <img class="d-block w-100" src="/storage/cover_images/31.jpg" alt="First slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block w-100" src="/storage/cover_images/32.jpg" alt="Second slide">
                                                      </div>
                                                      <div class="carousel-item">
                                                        {{-- <img class="d-block w-100" src="/storage/cover_images/{{$post->image_path}}" alt="Third slide"> --}}
                                                        <img class="d-block w-100" src="/storage/cover_images/33.jpg" alt="Third slide">            
                                                        
                                                    
                                                    </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Next</span>
                                                    </a>
                                                  </div>        
                                        </div>
                    
                            </div>
                          </div>




<div class="card shadow-lg p-3 mb-5 bg-white rounded navfont backcolor">
<div class="container" id="ProductDescription">
    <h3 class="googlefont">Search</h3>
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row">
                <div class="col">
                    <label for="Make">Make</label>
                    <select class="form-control">
                    <option>Select</option>
                    <option>Honda</option>
                    <option>Toyota</option>
                    <option>Mercedese</option>
                    <option>BMW</option>
                    <option>Vauxhall</option>
                    <option>Ford</option>
                    </select>
                    <label for="Model">Model</label>
                    <select class="form-control">
                            <option>Select</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                    </select>
                    <label for="PriceRange">Price Range</label>
                    <select class="form-control">
                            <option>Select</option>
                            <option>$50,000 to $60,000</option>
                            <option>$40,000 to $50,000</option>
                            <option>$30,000 to $40,000</option>
                            <option>$20,000 to $30,000</option>
                            <option>$10,000 to $20,000</option>
                            <option>$1,000 to $10,000</option>
                            <option>$200 to $1,000</option>

                    </select>
                </div>

                <div class="col">
                        <label for="Transmission">Transmission</label>
                        <select class="form-control">
                        <option>Select</option>
                        <option>Automatic</option>
                        <option>Manual</option>
                        </select>
                        <label for="FuelType">Fuel Type</label>
                        <select class="form-control">
                                <option>Select</option>
                                <option>Diesel</option>
                                <option>Petrol</option>
                        </select>
                        <label for="Mileage">Mileage</label>
                        <select class="form-control">
                                <option>Select</option>
                                <option>150,000 to 200,000</option>
                                <option>100,000 to 150,000</option>
                                <option>50,000 to 100,000</option>
                                <option>25,000 to 50,000</option>
                                <option>New to 25,000</option>
                                <option>New</option>

                        </select>
                    </div>

                <br>
                
            </div>
            <br>
            <div class="container">
                    <button type="button" class="btn btn-dark float-right" style="margin:5px;">Search</button>
            </div>
            <div class="container">
                    <button type="button" class="btn btn-dark float-right" style="margin:5px;">Cancel</button>
            </div>
            <br>    <br> 
            <div>
                    
            </div>
            
        </div>
        
    </div>
        
</div>

   
@endsection