<div class="wrapper">
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="#">Nu<span>ngky</span></a> </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    @if ($action=="index")
                      <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    @else
                      <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    @endif
                    @if ($action=="about_us")
                      <li class="active"><a href="/about_us">About Us <span class="sr-only">(current)</span></a></li>
                    @else
                      <li ><a href="/about_us">About Us</a></li>
                    @endif
                    @if ($action=="product")
                      <li class="active"><a href="/product">Product <span class="sr-only">(current)</span></a></li>
                    @else
                      <li ><a href="/product">Product</a></li>
                    @endif                  
                    @if ($action=="pricing")
                      <li class="active"><a href="/pricing">Pricing <span class="sr-only">(current)</span></a></li>
                    @else
                      <li ><a href="/pricing">Pricing</a></li>
                    @endif 
                    @if ($action=="contact")
                      <li class="active"><a href="/contact">Contact Us <span class="sr-only">(current)</span></a></li>
                    @else
                      <li ><a href="/contact">Contact Us</a></li>
                    @endif                    
                    
                  </ul>
            </div>
            <!-- /.navbar-collapse --> 
        </div>
        <!-- /.container-fluid --> 
    </nav>
</div>
</div>