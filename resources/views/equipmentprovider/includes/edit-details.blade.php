<div class="card">
    <div>

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
    <div class="card-header bg-secondary  text-white">Edit Details</div>
    <div class="card-body">
        <form method="POST" action="/eprovider/update">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name}}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                <div class="col-md-6">
                    <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ Auth::user()->eqp->area}}" required autocomplete="area" autofocus>

                    @error('area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row">
                <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                <div class="col-md-6">
                    <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{Auth::user()->eqp->contact}}" required autocomplete="contact" autofocus>

                    @error('contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> 
            
            <div class="form-group row">
                <label for="ename" class="col-md-4 col-form-label text-md-right">{{ __('Equipments') }}</label>

                <div class="col-md-6">
                    <input id="ename" type="ename" class="form-control @error('email') is-invalid @enderror" name="ename" value="{{Auth::user()->eqp->ename}}" required autocomplete="ename">

                    @error('ename')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price per day') }}</label>

                <div class="col-md-6">
                    <input id="price" type="price" class="form-control @error('email') is-invalid @enderror" name="price" value="{{Auth::user()->eqp->price}}" required autocomplete="price">

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> 
        
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header bg-secondary text-white">Update Password</div>
    <div class="card-body">
        <form method="POST" action="/eprovider/updatePassword">
            @csrf
            @if(Session::has('current-password'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('current-password') }}</p>
                @endif

            <div class="form-group row">
                <label for="oldPassword" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                <div class="col-md-6">
                    <input id="oldPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="oldPassword" required autocomplete="oldPassword">
                </div>
            </div>
         
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

        
            
            <div class="form-group row">
                

                <div class="col-md-6">
                    <input id="user_type" type="hidden"  name="user_type" value="{{ __('eqp')}}" required autocomplete="user_type">

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>