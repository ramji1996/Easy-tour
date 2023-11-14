
@extends('layouts.defaulthome')
   
@section('content')

@include('includes.user_home.tourist_home_nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    <p class="text-center lead">You are logged in !!!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header">Please enter the area !</div>

<form action="/search_page" method="get">
							@csrf  

							<div class="row">
                            
                                 <div class="col-md-6">
									<div class="form-group">
										<input type="search" name="search" class="for-control">
                                                                                 
									</div>
								</div>

							
								<div class="col-md-3">
									<div class="form-btn">
                                        <button type="submit" class="submit-btn">
                                            
											Search
					
                                        </button>	
									</div>
								</div>
                                								 	                              
							</div>
                    </form>

                    </div></div></div>


@include('includes.user_home.profile_container')
    <h1> </h1>
   
@endsection
