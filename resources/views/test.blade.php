

<div class="col-lg-5" id="session">

@if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif

</div>

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
</tr>        
    @endforeach

    </tbody>
    </table>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">   
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >  
    
<script>
     
$(document).ready(function() {
  $('#myTable').DataTable({
        paging: true,
        scrollX: true,
        lengthChange : true,
        searching: true,
        ordering: true
      });
});

</script>