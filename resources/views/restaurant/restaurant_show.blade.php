
@include('layouts.script')
@include('layouts.style')
@include('layouts.header')
@include('layouts.spblock2')  




<head>
    <style>
        h4,#create{

            display: inline-block;

        }

.text{

    float: right;
}
#session{

    margin-left:370px;
    /* padding-right:250px; */
}
#tb{

margin-left:50px;
margin-right:50px;
}




        </style>
        </head>

<br>
<br>

<div class="col-lg-5" id="session">

@if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif

</div>



<br>
<br>
                    <div>
                        <div class="card col-offset-8" >
                            <div class="card-body ">
                            <!-- <div class="follow_container"> -->
                        <div class="col-md-12">

                               <!-- <h4 class="card-title ">{{ __('Restaurants') }}</h4>
                               <div class="text" id="create">
                              <a href="{{url('restaurant')}}"><button type="button" class="btn btn-primary "> {{ __('Restaurants') }} </button></a>
                            </div> -->
                               <div class="table-responsive" id="tb">
                                    <table class="table table-bordered table-hover ">
                                        <thead class=>

        <tr>

        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">Sno:</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">restaurant<br>name</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">email</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">mobile<br>number</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">secondary<br>mobile number</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">restaurant<br>logo</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">restaurant<br>description</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">restaurant<br>website</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">restaurant<br>address</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">gst<br>number</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">status</th>
        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">Action</th>
     

        </tr>
        </thead>

       <tbody>


    @foreach($restaurants as $restaurant)
        <tr>
        <td>{{$restaurant->id}}</td>
        <td>{{$restaurant->restaurant_name}}</td>
        <td>{{$restaurant->email}}</td> 
        <td>{{$restaurant->mobile_number}}</td>
        <td>{{$restaurant->secondary_mobile_number}}</td>
        <td><img src="{{asset('images/'. $restaurant->restaurant_logo)}}" width='75px'  height='75px'></td> 
        <td>{{$restaurant->restaurant_description}}</td>  
        <td>{{$restaurant->restaurant_website}}</td>  
        <td>{{$restaurant->restaurant_address}}</td>  
        <td>{{$restaurant->gst_number}}</td> 
        <td>{{$restaurant->status}}</td>  
    

        <td><span>
            <a href="{{route('restaurantedit',$restaurant->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a> 

            <br><br>

<i class="fa fa-close color-danger" data-toggle="modal" data-target="#deleteUserModal{{$restaurant->id}}" style="cursor:pointer"></i>

<!--model popup for delete-->
 <div class="modal fade" id="deleteUserModal{{$restaurant->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
<div class="modal-dialog  bg-danger " role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    Are you sure you want to delete this user?
</div>
<div class="modal-footer">
<br><br>
    <form action="{{route('restaurantdelete',$restaurant->id)}}" method="post">
        @csrf
     @method('DELETE')
        <button type="submit" class="btn btn-danger" >Delete</button>
    </form>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
  
</div>
</div>
</div>
</div>

</span>
</td>   
</tr>        
    @endforeach

    </tbody>
    </table>

    <a href="{{url('restaurant')}}" class="color:white">  <button type="button" class="btn btn-primary"  style="margin-bottom:100px">  {{ __('Back') }}
                                </button> </a>

                                </div>
                            </div>
                        </div>
                    </div>



