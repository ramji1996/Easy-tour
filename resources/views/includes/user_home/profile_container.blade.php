 <!-- *********************************************************************************************************************  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
hr.style13 {
	height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #8c8b8b inset;
}
hr.style14 { 
  border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
}
</style>
 
 <br>
 <hr class="style13">


<br>

<div class="container mt-3">
<h1 class="text-center">Rated Tours</h1><br><br>
   <div class="row">     
   @foreach ($feedback as $key =>$value)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
               <p class="text-center lead"><strong>{{ $value->Start}} </strong> </p>
               <p class="text-left lead">Experience : {{ $value->End}}</p>
               <p class="text-left lead">Mode of travel : {{ $value->Travelmode}}</p>
               <p class="text-left lead">Rate out of 5 : {{ $value->RateTour}}</p>

               
                    <p class="text-center" > <h6 > <a href="#top";><img src="/images/arr.png" ></a> </h6></p>
            </div>
            @endforeach          
   </div>     
   <div class="row">     
   @foreach ($feedbackg as $key =>$value)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
               <p class="text-center lead"><strong>{{ $value->Start}} </strong> </p>
               <p class="text-left lead">Experience : {{ $value->End}}</p>
               <p class="text-left lead">Mode of travel : {{ $value->Travelmode}}</p>
               <p class="text-left lead">Rate out of 5 : {{ $value->RateTour}}</p>

               
                    <p class="text-center" > <h6 > <a href="#top";><img src="/images/arr.png" ></a> </h6></p>
            </div>
            @endforeach          
   </div>     

</div> 


<br>
<hr class="style13">

<!-- *********************************************************************************************************************  -->   
<br>    
<div class="container mt-3">
<h1 class="text-center">Drivers</h1><br><br>
    <div class="row">     
    @foreach ($driver as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong> </p>
                <img src="images/driver/{{ $value->image_path}}" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>
                <p class="text-left lead">{{ $value->v_brand}}</p>

                <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                     <a href="{{route('drivers.show',$value->id)}}" class="btn btn-primary">Book now</a>
                <p class="text-center" > <h6 > <a href="#top";><img src="/images/arr.png" ></a> </h6></p>
             </div>
             @endforeach          
    </div>     
</div> 
 <!-- *********************************************************************************************************************  -->       
 <br>
 <hr class="style13">


 <br>       
<div class="container mt-3">
<h1 class="text-center">Guides</h1><br><br>
    <div class="row">     
    @foreach ($guide as $key =>$value)
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
                     <p class="text-center" > <h6 > <a href="#top";><img src="/images/arr.png" ></a> </h6></p>
             </div>
             @endforeach          
    </div>     
</div> 

<!-- *********************************************************************************************************************  -->       
<br>
 <hr class="style13">


 <br>

<div class="container mt-3">
<h1 class="text-center">Equipment Providers</h1><br><br>
    <div class="row">     
    @foreach ($eqp as $key =>$value)
             <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <p class="text-center lead"><strong>{{ $value->name}} </strong> </p>
                <img src="images/eqp/{{ $value->image_path}}" class="mx-auto d-block image-fluid" alt="" width="251" height="161">
                <br>

                <p class="text-left lead">{{ $value->area}}</p>
                <p class="text-left lead">{{ $value->ename}}</p>

                <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span> 
                     <a href="{{route('equipment.show',$value->id)}}" class="btn btn-primary">View more</a>
                     <p class="text-center" > <h6 > <a href="#top";><img src="/images/arr.png" ></a> </h6></p>
             </div>
             @endforeach          
    </div>     
</div> 
<br><br><br>

<!-- *********************************************************************************************************************  -->       

<br><br><br>

<!-- *********************************************************************************************************************  -->       



