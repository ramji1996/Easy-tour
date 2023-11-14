@extends('layouts.defaulthome')

@section('content')
@csrf
@include('includes.user_home.tourist_home_nav')

<br><br><br><br><br>
<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="images/tourist/{{ $user->image_path}}" name="aboutme" width="300" height="300" class="img-circle"></a>
       <br><br>
        <h3>{{ $user->name}}        </h3>
        <h3>{{ $user->email}}        </h3>
        <h3>{{ $user->contact}}        </h3>
        <em></em>
		   </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="images/tourist/{{$user->image_path}}" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"> {{ $user->name}}</h3>
                    <hr>
                    <span><strong>Country: </strong></span>
                    <span class="label label-warning">{{ $user->country}}</span>                      
                    </center>
                    <hr>
                    <center>
                    <span><strong>E-mail:  </strong></span>
                    <span class="label label-warning">{{ $user->email}}</span>
                    </center>
                    <hr>
                    <center>
                    <span><strong>Mobile:  </strong></span>
                    <span class="label label-warning">{{ $user->contact}}</span>
                    </center>
                </div>
               
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------------------------------------------------------------->
<br> <br>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<h5 id="tourist"> Guide booking</h5>
<div class="card">
<table class="table table-hover shopping-cart-wrap"> 
<thead class="text-muted">
<tr>
  <th scope="col"></th>
  <th scope="col" width="120"></th>
  <th scope="col" width="120"></th>
  <th scope="col" width="200" class="text-right"></th>
</tr>
</thead>
<tbody>
@foreach ($g_book as $key =>$value)
<tr>
	<td>
<figure class="media">
	<div class="img-wrap"><img src="/images/user.png" class="img-thumbnail img-sm"  width="40" height="40"></div>
	<td>
    <dl class="param param-inline small">
		  <dt>Guide Id: </dt>
		  <dd>{{ $value->guide_id}}</dd>
		</dl>
    </td>
</figure> 
	</td>
    <td>
    <dl class="param param-inline small">
		  <dt>Start date: </dt>
		  <dd>{{ $value->start_date}}</dd>
		</dl>
    </td>

	<td> 
    <dl class="param param-inline small">
		  <dt>End date:</dt>
		  <dd>{{ $value->end_date}}</dd>
		</dl>
	</td>

    <td>
    <dl class="param param-inline small">
		  <dt>Tourist :</dt>
		  <dd>{{ $value->nop}}</dd>
		</dl>
    
    </td>

	<td> 
    <dl class="param param-inline small">
        <dt>Tourist place :</dt>
		<dd>{{ $value->district}}</dd>
        </dl>
	</td>

    <td class="text-right">  
    @if  ( $value->book_flag == 0 && $value->finiesd_flag == 0 )
    <button type="button" class="btn btn-warning">Pending</button>
    @elseif  ( $value->book_flag == 1 && $value->finiesd_flag == 0 )
    <button type="button" class="btn btn-primary">Confirmed</button>
    @elseif  ( $value->book_flag == 1 && $value->finiesd_flag == 1 )
    <button type="button" class="btn btn-success">Finished</button>
    @elseif  ( $value->book_flag == 2 )
    <button type="button" class="btn btn-danger">Rejected</button>
    @endif
	</td>
</tr>
@endforeach   
</tbody>
</table>
</div> <!-- card.// -->

</div> 
<!--container end.//------------------------------------------------------------------------------------------------------->
<br> <br>
<div class="container">
<h5 id="tourist"> Driver booking</h5>
<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col"></th>
  <th scope="col" width="120"></th>
  <th scope="col" width="120"></th>
  <th scope="col" width="200" class="text-right"></th>
</tr>
</thead>
<tbody>
@foreach ($d_book as $key =>$value)
<tr>
	<td>
<figure class="media">
	<div class="img-wrap"><img src="/images/user.png" class="img-thumbnail img-sm"  width="40" height="40"></div>
	<td>
    <dl class="param param-inline small">
		  <dt>Driver Id: </dt>
		  <dd>{{ $value->driver_id}}</dd>
		</dl>
    </td>
</figure> 
	</td>
    <td>
    <dl class="param param-inline small">
		  <dt>Date: </dt>
		  <dd>{{ $value->date}}</dd>
		</dl>
    </td>

	<td> 
    <dl class="param param-inline small">
		  <dt>Time:</dt>
		  <dd>{{ $value->time}}</dd>
		</dl>
	</td>

    <td>
    <dl class="param param-inline small">
		  <dt>From :</dt>
		  <dd>{{ $value->from}}</dd>
		</dl>
    
    </td>

	<td> 
    <dl class="param param-inline small">
        <dt>To :</dt>
		<dd>{{ $value->to}}</dd>
        </dl>
	</td>
	
    <td class="text-right">  
    @if  ( $value->book_flag == 0 && $value->finiesd_flag == 0 )
    <button type="button" class="btn btn-warning">Pending</button>
    @elseif  ( $value->book_flag == 1 && $value->finiesd_flag == 0 )
    <button type="button" class="btn btn-primary">Confirmed</button>
    @elseif  ( $value->book_flag == 1 && $value->finiesd_flag == 1 )
    <button type="button" class="btn btn-success">Finished</button>
    @elseif  ( $value->book_flag == 2 )
    <button type="button" class="btn btn-danger">Rejected</button>
    @endif
	</td>

</tr>
@endforeach   
</tbody>
</table>
</div> <!-- card.// -->

</div>
<!-- ----------------------------------------------------------------------------------------------------------------------- -->
<br> <br>
<div class="container">
<h5 id="tourist"> Equipment booking</h5>
<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col"></th>
  <th scope="col" width="120"></th>
  <th scope="col" width="120"></th>
  <th scope="col" width="200" class="text-right"></th>
</tr>
</thead>
<tbody>
@foreach ($e_book as $key =>$value)
<tr>
	<td>
<figure class="media">
	<div class="img-wrap"><img src="/images/user.png" class="img-thumbnail img-sm"  width="40" height="40"></div>
	<td> 
    <dl class="param param-inline small">
		  <dt>Equipment Id: </dt>
		  <dd>{{ $value->equipment_id}}</dd>
		</dl>
    </td> <td></td> 
</figure> 
	</td>
    <td>
    <dl class="param param-inline small">
		  <dt>Start date: </dt>
		  <dd>{{ $value->start_date}}</dd>
		</dl>
    </td>

	<td> 
    <dl class="param param-inline small">
		  <dt>End date:</dt>
		  <dd>{{ $value->end_date}}</dd>
		</dl>
	</td>
    <td> 
    <dl class="param param-inline small">
		  <dt>Specification:</dt>
		  <dd>{{ $value->note}}</dd>
		</dl>
	</td>
    <td class="text-right">  
    @if  ( $value->book_flag == 0 && $value->finiesd_flag == 0 )
    <button type="button" class="btn btn-warning">Pending</button>
    @elseif  ( $value->book_flag == 1 && $value->finiesd_flag == 0 )
    <button type="button" class="btn btn-primary">Confirmed</button>
    @elseif  ( $value->book_flag == 1 && $value->finiesd_flag == 1 )
    <button type="button" class="btn btn-success">Finished</button>
    @elseif  ( $value->book_flag == 2 )
    <button type="button" class="btn btn-danger">Rejected</button>
    @endif
	</td>
</tr>
@endforeach   
</tbody>
</table>
</div> <!-- card.// -->

</div> 

<br><br><br>

@endsection