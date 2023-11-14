@extends('layouts.without_footer')

@section('content')
@csrf
@include('includes.user_home.tourist_home_nav')

<div class="container mt-3">
<p class="text-Left lead" style="font-size:160%">Drivers </p>
    <div class="row">     
    @foreach ($profile2 as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong> </p>
                <img src="images/driver/{{ $value->image_path}}" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>

                <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                     <a href="{{route('drivers.show',$value->id)}}" class="btn btn-primary">Book now</a>
                <p class="text-center" > </p>
             </div>
             @endforeach          
    </div>     
</div> 

 <!-- ************************************************** GUIDES PROFILES  ****************************************************************  -->       
 <br>
 <hr class="style13">
 <br>   

<div class="container mt-3">
<p class="text-Left lead" style="font-size:160%">Guides </p>
    <div class="row">     
    @foreach ($profile1 as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong></p>
                <img src="images/guide/{{ $value->image_path}}" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>
                      <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                     <a href="{{route('guides.show',$value->id)}}" class="btn btn-primary">Book now</a>
                <p class="text-center" > </p>
             </div>
             @endforeach          
    </div>     
</div> 

<!-- *************************************************  EQUIPMENT PROVIDERS PROFILES*************************************************************  -->       


@endsection
