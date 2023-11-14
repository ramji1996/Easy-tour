@extends('layouts.partials.front')
@section('heading',"Create Addvertisement")
@section('content')

@if (count($errors)>0)
               <div class="alert alert-danger">
               <ul>
               @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
               @endforeach
               </ul>
               </div>
          @endif

          @if(session('message'))
          <div class="alert alert-sucess">
          {{session('message')}}
          </div>
          @endif

<form method="POST" class="form-vertical" role="form" action="{{ route('thread.store') }} ">
                        @csrf
				  <div class="form-group">
				    <label for="InputSubject">Heading</label>
				    <input type="text" class="form-control" id="InputSubject" name="subject" aria-describedby="subHelp" placeholder="Enter subject" value="{{old('subject')}}">
				    <small id="subHelp" class="form-text text-muted"></small>
				  </div>
          <div class="form-group row">
                            <label for="type" class="col-md-6 col-form-label text-md-left">{{ __('Catogery') }}</label>

                            <div class="col-md-12">
                            <select id="inputid" class="form-control" name="type">
                                        <option selected>Apartments</option>
                                        <option>Vehicles</option>
                                        <option>Equipments</option>
                                        <option>Others</option>
                                    </select>
                            </div>
           </div>

				  <div class="form-group">
				    <label for="inputthread">Description</label>
				    <input type="textarea" class="form-control" id="inputthread" name="thread" aria-describedby="emailHelp" placeholder="Enter thread" value="{{old('thread')}}">
				    <small id="threadHelp" class="form-text text-muted"></small>
				  </div>
				  
                    <button type="submit" class="btn btn-primary"  >Create</button>
                    <br><br><br><br><br><br><br><br><br>
				</form>


@endsection