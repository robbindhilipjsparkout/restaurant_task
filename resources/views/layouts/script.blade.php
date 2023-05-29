 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/counterup.min.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script> 
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>



<script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
        <script>
            $(function () {
                $('.pop').on('click', function () {
                    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                    $('#imagemodal').modal('show');
                });
            });
        </script>