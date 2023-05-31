

@include('layouts.style')
@include('layouts.header')

    <div class="row justify-content-center h-100">
        <div class="col-lg-8 offset-lg-2">
            <div class="form-input-content">
                <div class="card login-form mb-0">
                    <div class="card-body pt-5">
                        <div class="bg-light p-4 rounded">
                            <h1>Update Restaurant</h1>
                            <div class="lead"></div>

                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif

                            <div class="container mt-4">
                                <form method="POST" action="{{ route('restaurantupdate', $restaurants->id) }}" id="myForm" class=" login-input " enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <input id="restaurant_name" value="{{ $restaurants->restaurant_name }}" type="text" class="form-control @error('title') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" placeholder="restaurant_name">
                                        <!-- @error('restaurant_name')
                                        <div id="error" class="alert alert-danger">{{ $message }}</div>
                                        @enderror -->
                                        <span id="restaurant_name_error" style="color: red;" class="error-message"></span> 
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Select an image:</label>
                                        <img src="{{asset('images/'. $restaurants->restaurant_logo)}}" width="100px" height="100px" class="rounded border"><br><br>
                                        <input id="restaurant_logo" type="file" class="form-control @error('image') is-invalid @enderror" name="restaurant_logo" placeholder="restaurant_logo">
                                        <!-- @error('restaurant_logo')
                                        <div id="error" class="alert alert-danger">{{ $message }}</div>
                                        @enderror -->
                                        <span id="imageError" ></span>
                                         <span id="restaurant_logo_error" style="color: red;" class="error-message"></span>

                                    </div>

                                    <div class="form-group">
                                        <textarea id="restaurant_description" class="form-control @error('restaurant_description') is-invalid @enderror" name="restaurant_description" value="{{ old('restaurant_description') }}" placeholder="Type Here"></textarea>
                                        <!-- @error('restaurant_description')
                                        <div id="error" class="alert alert-danger">{{ $message }}</div>
                                        @enderror -->
                                        <span id="restaurant_description_error" style="color: red;" class="error-message"></span>

                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status:</label>
                                        <select class="form-control selectpicker" name="status" id="status">
                                            <option>--Select--</option>
                                            @foreach( $restaurantstatus as $status)
                                      <option value="{{$status->id}}">{{$status->status}}</option>                     
                                       @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" id="submitBtn" class="btn btn-primary login-form__btn submit">Update Restaurant</button>

                                    <a href="{{url('restaurant')}}" class="color:white">
                                        <button type="button" class="btn btn-primary">
                                            {{ __('Back') }}
                                        </button>
                                    </a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.script')

@include('layouts.scriptvalidationjquery')

 