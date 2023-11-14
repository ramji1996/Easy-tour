@extends('layouts.free')

@section('content')
@include('includes.driver_booking_head')

<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h2>Rate The Service And The Tour </h2>
						</div>
						
						<form action="/booking_form/feedback_driver" method="post">
                       
						
							@csrf 	


							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Rate the service {{$driver->id}}</span> 
										<select class="form-control" name="rate" required>
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
					    					<option>5</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								

                                <div class="col-md-8">
                                  <div class="form-group">
                                     <span class="form-label">Discription</span>
							           <textarea class="form-control" rows="5" id="comment"  name="comment"></textarea> 
                                  </div>
                                </div>
								<input id="driver_id" name="driver_id" class="form-control" type='hidden' value= "{{$driver->id}}" >

						<div class="col-md-8">
                                  <div class="form-group">
                                     <span class="form-label">Tour Start and Destination</span>
							           <textarea class="form-control" rows="5" id="Start"  name="Start"></textarea> 
                                  </div>
                                </div>
								<input id="driver_id" name="driver_id" class="form-control" type='hidden' value= "{{$driver->id}}" >

								<div class="col-md-8">
                                  <div class="form-group">
                                     <span class="form-label">How You Enjoyed</span>
							           <textarea class="form-control" rows="5" id="End"  name="End"></textarea> 
                                  </div>
                                </div>
								<input id="driver_id" name="driver_id" class="form-control" type='hidden' value= "{{$driver->id}}" >


								<div class="col-md-8">
                                  <div class="form-group">
                                     <span class="form-label">Mode of travel</span>
							           <textarea class="form-control" rows="5" id="Travelmode"  name="Travelmode"></textarea> 
                                  </div>
                                </div>
								<input id="driver_id" name="driver_id" class="form-control" type='hidden' value= "{{$driver->id}}" >


						<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Rate The Tour</span> 
										<select class="form-control" name="RateTour" required>
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
					    					<option>5</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-btn">
                                        <button type="submit" class="submit-btn">
                                            Submit
                                        </button>	
										<button class="btn btn-danger btn-xs" >
                                    <span class="glyphicon glyphicon-trash"> 
                                    <a href="/home" class="stretched-link" >Home</a></span></button>
										
									</div>
								</div>


                    

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

   
@endsection