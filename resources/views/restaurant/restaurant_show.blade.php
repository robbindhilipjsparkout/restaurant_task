
@include('layouts.script')
@include('layouts.style')
@include('layouts.header')
@include('layouts.spblock2')  
<!-- 
 <form action="{{ route('restaurantshow') }}" method="GET">
        <input type="text" name="search" placeholder="Search restaurants" value="{{ $search }}">
        <button type="submit">Search</button>
    </form>  -->



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

margin-left:45px;
margin-right:45px;
}
.custom{

    margin-top:-15px; 

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
                                    <table class="table table-bordered table-hover "id="myTable" >
                                        <thead class=>

        <tr>

        <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">Sno:</th>
        <!-- <th scope="col" class="text-center bg-danger rounded-2 text-wrap text-uppercase">service<br>type</th> -->
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
      <!-- <td>{{$restaurant->delivery_service_type}} -->
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
            <!-- <a href="{{route('restaurantupdate',$restaurant->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>   -->
          
            <i class="fa fa-pencil color-muted m-r-5" data-toggle="modal" data-target="#EdittaskModal{{$restaurant->id}}" style="cursor:pointer" ></i>

<!--model popup for Edit-->


<div class="modal fade" id="EdittaskModal{{$restaurant->id}}" tabindex="-1" role="dialog" aria-labelledby="EdittaskModalLabel" aria-hidden="true" >
    <div class="modal-dialog bg-danger custom" role="document">
        <!-- <div class="modal-content"> -->
            <div class="modal-header">
                <h5 class="modal-title" id="EdittaskModalLabel">Edit Restaurant </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
            <!-- <div class="modal-footer"> -->
         
                  <form action="{{route('restaurantupdate',$restaurant->id)}}" method="POST" id="update-text-form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                   
                                        <input id="restaurant_name" value="{{ $restaurant->restaurant_name }}" type="text" class="form-control @error('title') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" placeholder="restaurant_name">
                                        @error('restaurant_name')
                                        <div id="error" class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <br>

                                        <label for="image">Select an image:</label>
                                        <img src="{{asset('images/'. $restaurant->restaurant_logo)}}" width="100px" height="100px" class="rounded border"><br><br>
                                        <input id="restaurant_logo" type="file" class="form-control @error('image') is-invalid @enderror" name="restaurant_logo" placeholder="restaurant_logo">
                                        @error('restaurant_logo')
                                        <div id="error" class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <br>
                                        
                                        <textarea id="restaurant_description" class="form-control @error('restaurant_description') is-invalid @enderror" name="restaurant_description">{{$restaurant->restaurant_description}} </textarea>
                                        @error('restaurant_description')
                                        <div id="error" class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <br>

                                  
                                        <label for="status">Current Status:  {{$restaurant->status}}</label>
                                        <select class="form-control selectpicker" name="status" id="status">
                                       
                                        <option>--Select--</option>
                                        @foreach( $restaurantstatus as $status)
                                       <option value="{{$status->status}}">{{$status->status}}</option>                     
                                        @endforeach
                                        </select>
                                

                               <br><br>
                    <button type="submit" class="btn btn-danger" >Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </form>
                    
               </div>      
            </div> 
        </div>
    </div>
</div>




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


    {{$restaurants->appends(['search' => $search])->onEachSide(1)->links()}} 

    <a href="{{url('restaurant')}}" class="color:white">  <button type="button" class="btn btn-primary"  style="margin-bottom:50px">  {{ __('Back') }}
                                </button> </a>


                                </div>
                            </div>
                        </div>
                    </div>




                    <script>
$(document).ready(function() {
  $('#myTable').DataTable({
        paging: false,   // Enable pagination
        searching: true ,// Enable search/filtering
        scrollX: true,
        lengthChange : true, 
        ordering: true,
        sorting:true,
        info: true, // Show information about the table
     language: {
    //info: "Show _MENU_ entries", // Customize the information text
    infoEmpty: "No entries available", // Customize the empty table message
    search: "Search:", // Customize the search input label
    zeroRecords: "No matching records found", // Customize the no records found message
  }
    // More options...
  });
});


</script>


<!-- 
 <script>
    $(document).ready(function () {
    $('#myTable').DataTable();
});
    </script>  -->
    