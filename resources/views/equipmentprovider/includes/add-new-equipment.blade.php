<div class="card mt-1">
    <div class="card-header d-flex justify-content-between align-items-center bg-secondary text-white">
    Add New Equipment
    </div>
    <div class="card-body">
        <form method="POST" action="/eprovider/equipment">
        @csrf
            <div class="login-form">
                <div class="row">

                    <div class="col-md-12 col-12 mb--20">
                        <label for="name">Equipment Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="col-md-12 mt-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control @error('email') is-invalid @enderror"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mt-3">
                    <label for="costpd">Rent Per Day</label>
                        <input id="costpd" type="text" class="form-control @error('costpd') is-invalid @enderror" name="costpd" value="{{ old('costpd') }}" required autocomplete="costpd" autofocus>
                        @error('costpd')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="image">Image Upload</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-success">Add Equipment</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>