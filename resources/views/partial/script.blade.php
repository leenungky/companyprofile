<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ elixir('js/plugins.js') }}"></script>
    <!-- Footer Scripts
    ============================================= -->
<script type="text/javascript" src="{{ elixir('js/functions.js') }}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
{{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5823e82fc2a9cb90"></script>  --}}
<script type="text/javascript" src="{{ elixir('js/validation.js') }}"></script>
<script type="text/javascript" src="js/numeric.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


<script type="text/javascript">

    jQuery(document).ready(function($) {
        
            @if(Session::has('flash_message'))
                $('#myModal').modal('toggle');
            @endif
        
          });

    function onGoto(idelement){
        $('html,body').animate({ scrollTop: $(idelement).offset().top-100 }, 'slow');
    }
</script>

