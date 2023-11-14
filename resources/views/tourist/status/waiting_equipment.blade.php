@extends('layouts.free')

@section('content')
@include('includes.equipment_booking_head')


@if  ( $booking->book_flag == 0 && $booking->finiesd_flag == 0 )
    

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form"> 
						<h1 class="form-header">Please contact through the contact number </h1>
						
						
					</div>
				</div>
				<button class="btn btn-danger btn-xs" >
                                    <span class="glyphicon glyphicon-trash"> 
                                    <a href="/home" class="stretched-link" >Home</a></span></button>
			</div>
		</div>
	</div>

@elseif  ( $booking->book_flag == 1 && $booking->finiesd_flag == 0 )

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form"> 
						<h1 class="form-header">Booking confirmed </h1>
						<h3 class="form-header">Booked date : {{$booking->start_date}}</h3>
						<h3 class="form-header">End date : {{$booking->end_date}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

@elseif  ( $booking->book_flag == 2 && $booking->finiesd_flag == 2 )

<div id="booking" class="section">
	<div class="section-center">
		<div class="container">
			<div class="row">
				<div class="booking-form"> 
					<h1 class="form-header" style="color:red;">Sorry ! Equipment provider Reject your booking </h1>
					<h3 class="form-header">Try another equipment provider </h3>
					<div class="col-md-3">
									<div class="form-btn">
									<button class="btn btn-danger btn-xs" >
                                    <span class="glyphicon glyphicon-trash"> 
                                    <a href="/home" class="stretched-link" >Home</a></span></button>
									</div>
								</div>
				</div>										
			</div>
		</div>
	</div>
</div>

@elseif  ( $booking->book_flag == 1 && $booking->finiesd_flag == 1 )


	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Service Finished</h1>
						</div> 
						<a href="//feedbackmsg_equipment/{{$equipment->id}}" ><button class="submit-btn"><h4>Rate your service and tour</h4></button></a>						
					</div>
				</div>
			</div>
		</div>
	</div>

@endif




@endsection