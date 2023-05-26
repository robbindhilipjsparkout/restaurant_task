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
                    <form method="POST" action="{{ route('restaurantstore')}}" style="margin-top:25px"  class=" login-input " enctype="multipart/form-data">

                        @csrf

                            <div class="form-group">
                            <label for="delivery_service_type">Type</label>
                            <select class="form-control selectpicker" name="delivery_service_type" id="delivery_service_type">
                            <option>--Select--</option>
                            @foreach( $deliverytypes as $deliverytype)
                            <option value="{{$deliverytype->id}}">{{$deliverytype->service_type}}</option>
                            @endforeach
                            </select>   
                            </div>


                            <div class="form-group">
                            <input id="restaurant_name" type="text" class="form-control @error('title') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}"  placeholder="restaurant_name">                           
                            @error('restaurant_name')
                                <div id="error" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>



                            <div class="form-group">
                            <input id="email" type="email" class="form-control @error('title') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="email"> 
                            @error('email')
                                <div   id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            </div>
                            
     
                            <div class="form-group">
                                <input id="mobile_number" type="tel" maxlength="10" class="form-control @error('title') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}"  placeholder="mobile_number">
                                @error('mobile_number')
                                <div   id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>



                            <div class="form-group">
                                <input id="secondary_mobile_number" type="tel"  maxlength="10"  class="form-control @error('title') is-invalid @enderror" name="secondary_mobile_number" value="{{ old('secondary_mobile_number') }}"  placeholder="secondary_mobile_number">
                                @error('secondary_mobile_number')
                                <div   id="error" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>



                            <div class="form-group">
                            <label for="image">Select a image:</label>
                                <input id="restaurant_logo" type="file" class="form-control @error('image') is-invalid @enderror" name="restaurant_logo"  placeholder="restaurant_logo	">  
                                @error('restaurant_logo')
                                <div  id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>


                               
                            <div class="form-group">
                                <textarea id="restaurant_description" class="form-control @error('restaurant_description') is-invalid @enderror" name="restaurant_description" value="{{ old('restaurant_description') }}"  placeholder="Type Here">
                                </textarea>
                                @error('restaurant_description')
                                <div  id="error"  class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                       


                            <div class="form-group">
                                <input id="restaurant_website" type="text" class="form-control @error('restaurant_website') is-invalid @enderror" name="restaurant_website" value="{{ old('restaurant_website') }}"  placeholder="restaurant_website">
                                @error('restaurant_website')
                                <div   id="error" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>



                            <div class="form-group">
                                <input id="restaurant_address" type="text" class="form-control @error('restaurant_address') is-invalid @enderror" name="restaurant_address" value="{{ old('restaurant_address') }}"  placeholder="restaurant_address">  
                                @error('restaurant_address')
                                <div   id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>

                            
    
                            <div class="form-group">
                                <input id="gst_number" type="text" class="form-control @error('gst_number') is-invalid @enderror" name="gst_number" value="{{ old('gst_number') }}"  placeholder="gst_number">
                                @error('gst_number')
                                <div  id="error"  class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>



                            <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control selectpicker" name="status" id="status">
                            <option>--Select--</option>
                            @foreach( $restaurantstatus as $status)
                            <option value="{{$status->status}}">{{$status->status}}</option>                     
                            @endforeach
                            </select>   
                            </div>


                                <button type="submit" class="btn login-form__btn submit ">
                                    {{ __('Create ') }}
                                </button><br><br>

                                <a href="{{url('restaurant')}}" class="color:white">  <button type="button" class="btn btn-primary" style="margin-bottom:100px" >  {{ __('Back') }}
                                </button> </a>
                      
                    </form>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>

