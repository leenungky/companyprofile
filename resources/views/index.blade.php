<!DOCTYPE html>
<html lang="en">
<head>
@include("partial.head")
</head>
  <body data-responsejs='{ "create": [ { "prop": "width", "breakpoints": [0, 320, 481, 641, 961, 1025, 1281, 1400] }]}'>
    @include("partial.top_menu")
<div class="slider">
  <div class="rslides_container">
    <ul class="rslides">
      <li> <img src="img/slider_medium.jpg" data-min-width-1400="img/slider.jpg" alt="">
        <div class="container">
          <div class="caption">
            <h1>we provide</h1>
            <h1><span>easy</span></h1>
            <h1>Digital Application</h1>
        </div>
    </div>
</li>
<li> <img src="img/slider1_medium.jpg" data-min-width-1400="img/slider1.jpg" alt="">
    <div class="container">
      <div class="caption">
        <h1>we provide</h1>
        <h1><span>easy</span></h1>
        <h1>Digital Application</h1>
    </div>
</div>
</li>
</ul>
</div>
</div>
<!-- slider end -->
<div class="container">
  <div class="our-services">
       <div class="header-intro">
        <h2>our product</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
        </div>
    <div class="col-md-4">
      <i class="service-icon service-one"></i>
        <h3>HRM APPLICATION</h3>
        
        <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euimod tincidunt ut laoreet dolore magna aliquam <br />
            erat volutpat.</p>
        </div>
        <div class="col-md-4">
           <i class="service-icon service-two"></i>
           <h3>INVENTORY APPLICATION</h3>

           <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euimod tincidunt ut laoreet dolore magna aliquam <br />
            erat volutpat.</p>
        </div>
        <div class="col-md-4">
           <i class="service-icon service-three"></i>
           <h3>DELIVERY APPLICATION</h3>

           <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euimod tincidunt ut laoreet dolore magna aliquam <br />
            erat volutpat.</p>
        </div>
        
    </div>
</div>
<!-- services end -->
<div class="promo">
  <div class="container">
       <p>Lorem ipsum dolor sit amet, <span>consectetuer adipiscing elit</span></p>
       <a href="" class="line-btn">Get Started</a>
   </div>
</div>
<!-- promo end -->
<div class="container">
    <div class="our-works">
        <div class="header-intro">
            <h2>our Works</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
        </div>
        <div class="col-sm-4">
        <div class="portfolio-img-wrap">
          <img src="img/portfolio1.jpg">
          <div class="caption-container">
           <div class="portfolio-caption">
               <h5>Project Name</h5>
               <p>- &nbsp; Category</p>
           </div>
       </div>
       </div>
   </div>
   <div class="col-sm-4">
   <div class="portfolio-img-wrap">
      <img src="img/portfolio2.jpg">
      <div class="caption-container">
       <div class="portfolio-caption">
           <h5>Project Name</h5>
           <p>- &nbsp; Category</p>
       </div>
   </div>
   </div>
</div>

<div class="col-sm-4">
<div class="portfolio-img-wrap">
  <img src="img/portfolio3.jpg">
  <div class="caption-container">
   <div class="portfolio-caption">
       <h5>Project Name</h5>
       <p>- &nbsp; Category</p>
   </div>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="portfolio-img-wrap">
  <img src="img/portfolio4.jpg">
  <div class="caption-container">
   <div class="portfolio-caption">
       <h5>Project Name</h5>
       <p>- &nbsp; Category</p>
   </div>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="portfolio-img-wrap">
  <img src="img/portfolio5.jpg">
  
  <div class="caption-container">
   <div class="portfolio-caption">
       <h5>Project Name</h5>
       <p>- &nbsp; Category</p>
   </div>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="portfolio-img-wrap">
  <img src="img/portfolio6.jpg">
  <div class="caption-container">
   <div class="portfolio-caption">
       <h5>Project Name</h5>
       <p>- &nbsp; Category</p>
   </div>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="portfolio-img-wrap">
  <img src="img/portfolio7.jpg">
  <div class="caption-container">
   <div class="portfolio-caption">
       <h5>Project Name</h5>
       <p>- &nbsp; Category</p>
   </div>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="portfolio-img-wrap">
  <img src="img/portfolio8.jpg">
  <div class="caption-container">
   <div class="portfolio-caption">
       <h5>Project Name</h5>
       <p>- &nbsp; Category</p>
   </div>
</div>
</div>
</div>
<div class="clearfix"></div>

</div>
</div>
<!-- works end -->
@include("partial.footer")

<script>
  $(function() {
    $(".rslides").responsiveSlides();
});
</script>
</body>
</html>