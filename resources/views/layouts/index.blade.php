
<!--Template Name: FoodEque
File Name: index.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">

    <head>
      
       <!-- style start-->

       @include('layouts.style')

       <!-- style ends-->

    </head>

    <body>


        <!--header start--->

        @include('layouts.header')  

        <!--header end--->


        <!--header start--->

        @include('layouts.carousel')  

        <!--header end--->


        <div>
        <main class="py-4">
            @yield('content')
        </main>
        </div> 


        <!--special block- start--->

        @include('layouts.specialblock')  
        
        <!--special block- end--->


            <!-- service block start-->

            @include('layouts.service')

            <!-- service block end -->



        <!--contact us start-->
        

        <!--contact us end-->


        <!--footer start-->
        
        @include('layouts.footer')

         <!--footer end-->




        <!--back to top start--->
      
        @include('layouts.backtotop')

        <!---back to top end--->





            <!--script starts-->


            @include('layouts.script')


            <!-- script ends-->

    </body>
</html>
