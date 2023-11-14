@extends('layouts.eqphomelayout')

@section('content')
@csrf


<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../../public/css/equipmentProvider.css">

<!-- Profile -->
<div class="profile-container">
  <div class="pt-5 pl-5">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/images/tent.jpg" alt="Card image cap">
      <div class="card-body">
      <h3>{{Auth::user()->name}}</h3>
      <p>{{Auth::user()->eqp->email}}</p>
      <p>{{Auth::user()->eqp->contact}}</p>
      <p></p>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  <div class="p-5">
    <div>
    

    <div class="card mt-1">
      <div class="card-header d-flex justify-content-between align-items-center">
        Equipments
        <button type="button" class="btn btn-primary btn-md">Add New Equipment</button>

      </div>
      <div class="card-body">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://images.pexels.com/photos/45241/tent-camp-night-star-45241.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Tent</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link btn btn-success">Update</a>
          <a href="#" class="card-link btn btn-danger">Remove</a>
        </div>
</div>
      </div>
    </div>

    </div>
  </div>
</div>

          
@endsection