<style>

#error{

    background:none;
    border:none;
    margin:0px;
    padding:0px;

}
 </style>



@include('layouts.script')
@include('layouts.style')
@include('layouts.header')
@include('layouts.specialblock') 
@include('layouts.scriptvalidationjquery')




<div class="col-lg-8 offset-3">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

</div>


 <!-- <div class="login-form-bg h-100" style="margin-left:200px">  -->
     <div class="container h-100">
            <!-- <div class="row justify-content-center h-100"> -->
                <div class="col-lg-4 " style="margin-left:325px">
                    <!-- <div class="form-input-content"> -->
                        <!-- <div class="card login-form mb-0"> -->
                            <!-- <div class="card-body pt-5"> -->

                <div style="margin:50px 0px 0px 0px"  class="card-header text-center bg-danger rounded-2 text-wrap">{{ __('Create restaurant') }}</div>

                    <div class="card-body "> 
                    <form method="POST" action="{{ route('restaurantstore')}}" style="margin-top:25px" id="myForm" class=" login-input " enctype="multipart/form-data">

                        @csrf

                            <div class="form-group">
                            <label for="delivery_service_type">Type</label>  <span style="color: red;">*</span>
                            <select class="form-control selectpicker" name="delivery_service_type" id="delivery_service_type">
                            <option>--Select--</option>
                            @foreach( $deliverytypes as $deliverytype)
                            <option value="{{$deliverytype->id}}">{{$deliverytype->service_type}}</option>
                            @endforeach
                            </select>   
                            </div>


                            <div class="form-group">
                            <label for="restaurant_name">Restaurant Name:</label> <span style="color: red;">*</span>
                            <input id="restaurant_name" type="text" class="form-control @error('title') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}"  placeholder="restaurant_name">                           
                            <!-- @error('restaurant_name')
                                <div id="error" class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <span id="restaurant_name_error" style="color: red;" class="error-message"></span>
                            </div>



                            <div class="form-group">
                            <label for="email">Email:</label> <span style="color: red;">*</span>
                            <input id="email" type="text" class="form-control @error('title') is-invalid @enderror"  name="email" value="{{ old('email') }}"  placeholder="email"> 
                            <!-- @error('email')
                                <div   id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <span id="email_error" style="color: red;" class="error-message"></span>
                            </div>
                            
                            
     
                            <div class="form-group">
                            <label for="mobile_number">Mobile Number:</label> <span style="color: red;">*</span>
                                <input id="mobile_number" type="text" maxlength="10" class="form-control @error('title') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}"  placeholder="mobile_number">
                                <!-- @error('mobile_number')
                                <div   id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <span id="mobile_number_error" style="color: red;" class="error-message"></span>
                            </div>



                            <div class="form-group">
                            <label for="secondary_mobile_number">Secondary Mobile Number:</label>
                              <input id="secondary_mobile_number" type="tel"  maxlength="10"  class="form-control @error('title') is-invalid @enderror" name="secondary_mobile_number" value="{{ old('secondary_mobile_number') }}"  placeholder="secondary_mobile_number"> 
                                <!-- @error('secondary_mobile_number')
                                <div   id="error" class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <span id="secondary_mobile_number_error" style="color: red;" class="error-message"></span>
                            </div>



                            <div class="form-group">
                            <label for="image">Select a image:</label> <span style="color: red;">*</span>
                                <input id="restaurant_logo" type="file" class="form-control @error('image') is-invalid @enderror" name="restaurant_logo"  placeholder="restaurant_logo	">  
                             <!-- @error('restaurant_logo')
                                <div  id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @if($errors->has('restaurant_logo'))
                            <div class="alert alert-danger">
                                {{ $errors->first('restaurant_logo') }}
                            </div>
                        @endif -->
                        <!-- <span id="imageError" ></span> -->
                        <span id="restaurant_logo_error" style="color: red;" class="error-message"></span>

                            </div>


                               
                            <div class="form-group">
                            <label for="restaurant_description">Restaurant Description:</label> <span style="color: red;">*</span>
                                <textarea id="restaurant_description" class="form-control @error('restaurant_description') is-invalid @enderror" name="restaurant_description" value="{{ old('restaurant_description') }}"  placeholder="Type Here">
                                </textarea>
                                <!-- @error('restaurant_description')
                                <div  id="error"  class="alert alert-danger">{{ $message }}</div>
                                @enderror -->
                                <span id="restaurant_description_error" style="color: red;" class="error-message"></span>
                            </div>
                       


                            <div class="form-group">
                            <label for="restaurant_website">Restaurant Website:</label>
                                <input id="restaurant_website" type="text" class="form-control @error('restaurant_website') is-invalid @enderror" name="restaurant_website" value="{{ old('restaurant_website') }}"  placeholder="restaurant_website">
                                <!-- @error('restaurant_website')
                                <div   id="error" class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <span id="restaurant_website_error" style="color: red;" class="error-message"></span>
                            </div>



                            <div class="form-group">
                            <label for="restaurant_address">Restaurant Address:</label> <span style="color: red;">*</span>
                                <input id="restaurant_address" type="text" class="form-control @error('restaurant_address') is-invalid @enderror" name="restaurant_address" value="{{ old('restaurant_address') }}"  placeholder="restaurant_address">  
                                <!-- @error('restaurant_address')
                                <div   id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <span id="restaurant_address_error" style="color: red;" class="error-message"></span>
                            </div>

                            
    
                            <div class="form-group">
                            <label for="gst_number">GST Number:</label> <span style="color: red;">*</span>
                                <input id="gst_number" type="text" class="form-control @error('gst_number') is-invalid @enderror" name="gst_number" value="{{ old('gst_number') }}"  placeholder="gst_number">
                                <!-- @error('gst_number')
                                <div  id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <span id="gst_number_error" style="color: red;" class="error-message"></span>
                            </div>



                            <div class="form-group">
                            <label for="status">Status:</label> <span style="color: red;">*</span>
                            <select class="form-control selectpicker" name="status" id="status">
                            <option>--Select--</option>
                            @foreach( $restaurantstatus as $status)
                            <option value="{{$status->status}}">{{$status->status}}</option>                     
                            @endforeach
                            </select>   
                            </div>

                            <br>  
                                <button type="submit" id="submitBtn" class="btn btn-primary login-form__btn submit">
                                    {{ __('Create ') }}
                                </button>

                                <a href="{{url('restaurant')}}" class="color:white">  <button type="button" class="btn btn-primary" >  {{ __('Back') }}
                                </button> </a>
                                <button type="button" class="btn btn-primary" style="margin-left:150px" id="clearButton">Clear</button>
                      <br><br>   <br><br>   <br><br>   <br><br>   <br><br>  
                    </form>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
</div>