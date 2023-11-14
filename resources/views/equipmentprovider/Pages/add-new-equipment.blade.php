@extends('layouts.eqphomelayout')

@section('content')
@csrf


<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../../public/css/equipmentProvider.css">

<!-- Profile -->
<div class="profile-container">

  <div class="pt-5 pl-5">
    @include('equipmentprovider.includes.sidebar')
  </div>

  <div class="p-5">
      @include('equipmentprovider.includes.add-new-equipment')
  </div>

</div>

          
@endsection