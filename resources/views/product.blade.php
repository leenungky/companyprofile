<!DOCTYPE html>
<html lang="en">
<head>
@include("partial.head")

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>
    <body data-responsejs='{ "create": [ { "prop": "width", "breakpoints": [0, 320, 481, 641, 961, 1025, 1281, 1400] }]}'>
     @include("partial.top_menu")
<div class="inner-head">
 <div class="container">
  <div class="col-lg-12">
   <h4 class="pull-left">product</h4>
   <p class="pull-right pagination"><a href="/">home</a><span>></span><a href="">product</a></p>
 </div>
</div>
</div>
<!-- inner-head end -->
<div class="inner-page services">
 <div class="container">
  <div class="">
   <div class="col-md-6 no-padding-left">
    <img src="img/about_us.jpg">
  </div>
  <div class="col-md-6">
    <h2>Our Product</h2>
    <p>
     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <br /><br />

     Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil facer possim assum.<br /><br />

     Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus lectorum.
   </p>
 </div>
 <div class="clearfix"></div>
</div>
<div class="our-services">

    <div class="col-md-4">
     <i class="service-icon service-two"></i>
     <h3>HRM Application</h3>

     <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euimod tincidunt ut laoreet dolore magna aliquam 
      erat volutpat.</p>
    </div>
    <div class="col-md-4">
     <i class="service-icon service-three"></i>
     <h3>Inventory Application</h3>

     <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euimod tincidunt ut laoreet dolore magna aliquam 
      erat volutpat.</p>
    </div>
    <div class="col-md-4">
     <i class="service-icon service-four"></i>
     <h3>Delivery Application</h3>

     <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euimod tincidunt ut laoreet dolore magna aliquam
      erat volutpat.</p>
    </div>
    
    
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="testimonial main">
          <div class="container">
            <div class="cd-testimonials-wrapper cd-container">
              <ul class="cd-testimonials">
                <li>
                  <img src="img/testimonial1.jpg" alt="Author image">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore <br/>
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                    <div class="cd-author">
                      <span>Wanda Martin </span>
                      <p> &nbsp;- founder of web design</p>
                    </div>
                  </li>

                  <li>
                    <img src="img/testimonial1.jpg" alt="Author image">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore <br/>
                      magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                      <div class="cd-author">
                        <span>Wanda Martin </span>
                        <p> &nbsp;- founder of web design</p>
                      </div>
                    </li>

                    <li>
                      <img src="img/testimonial1.jpg" alt="Author image">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore <br/>
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                        <div class="cd-author">
                          <span>Wanda Martin </span>
                          <p> &nbsp;- founder of web design</p>
                        </div>
                      </li>
                    </ul> <!-- cd-testimonials -->


                  </div> <!-- cd-testimonials-wrapper -->

                </div>
              </div>

            </div>
          </div>


          <div class="container recent-works">
            <div class="header-intro">
              <h2>Recent Works</h2>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              <div class="works-container">

                <div class="controls">

                  <button class="filter" data-filter="all">All</button>
                  <button class="filter" data-filter=".category-1">Web Design</button>
                  <button class="filter" data-filter=".category-2">Video</button>
                  <button class="filter" data-filter=".category-3">Audio</button>
                  <button class="filter" data-filter=".category-4">App</button>

                </div>
                <div id="Container" >
                  <div class="mix category-1 col-sm-3" data-myorder="1">
                    <div class="portfolio-img-wrap">
                      <img src="img/work1.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div>
                 </div>
                 <div class="mix category-1 col-sm-3" data-myorder="2"><div class="portfolio-img-wrap">
                      <img src="img/work2.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div></div>
                 <div class="mix category-3 col-sm-3" data-myorder="3"><div class="portfolio-img-wrap">
                      <img src="img/work3.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div></div>
                 <div class="mix category-2 col-sm-3" data-myorder="4"><div class="portfolio-img-wrap">
                      <img src="img/work4.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div></div>
                 <div class="mix category-1 col-sm-3" data-myorder="5"><div class="portfolio-img-wrap">
                      <img src="img/work5.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div></div>
                 <div class="mix category-4 col-sm-3" data-myorder="6"><div class="portfolio-img-wrap">
                      <img src="img/work6.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div></div>
                 <div class="mix category-3 col-sm-3" data-myorder="7"><div class="portfolio-img-wrap">
                      <img src="img/work7.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div></div>
                 <div class="mix category-2 col-sm-3" data-myorder="8"><div class="portfolio-img-wrap">
                      <img src="img/work8.jpg" />
                      <div class="caption-container">
                       <div class="portfolio-caption">
                         <h5>Project Name</h5>
                       </div>
                     </div>
                    </div></div>

                 <div class="clearfix"></div>
               </div>
             </div>
           </div>
         </div>
       </div>
    @include("partial.footer")
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.mixitup.js"></script> 
<script>
  $('.collapse').on('shown.bs.collapse', function(){
   $(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
 }).on('hidden.bs.collapse', function(){
   $(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
 });
</script>
<script>

  $('.cd-testimonials-wrapper').flexslider({
  //declare the slider items
  selector: ".cd-testimonials > li",
  animation: "slide",
  //do not add navigation for paging control of each slide
  controlNav: false,
  slideshow: false,
  //Allow height of the slider to animate smoothly in horizontal mode
  smoothHeight: true,
  start: function(){
    $('.cd-testimonials').children('li').css({
      'opacity': 1,
      'position': 'relative'
    });
  }
});
</script>
<script>
  $(function(){

  // Instantiate MixItUp:

  $('#Container').mixItUp();

});
</script>
</body>
</html>