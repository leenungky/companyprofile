<!DOCTYPE html>
<html lang="en">@include("partial.head")
<head>
	@include("partial.head")
    </head>
    <body data-responsejs='{ "create": [ { "prop": "width", "breakpoints": [0, 320, 481, 641, 961, 1025, 1281, 1400] }]}'>
     @include("partial.top_menu")
<div class="inner-head  no-margin">
 <div class="container">
  <div class="col-lg-12">
   <h4 class="pull-left">about us</h4>
   <p class="pull-right pagination"><a href="/">home</a><span>></span><a href="">contact us</a></p>
 </div>
</div>
</div>
<!-- inner-head end -->
<div class="inner-page contact-us">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3022.3852459761515!2d-73.94527248628215!3d40.75355078539195!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1431156890216" width="100%" height="355" frameborder="0" style="border:0"></iframe>

 <div class="container">

   <div class="header-intro">
    <h2>Contact Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>

  </div>
  <div class="col-lg-12 contact content-header" id="pricing">
    <div class="col-md-6 no-padding-left">
      <h5>Contact Us:</h5>
      <p><i class="fa fa-map-marker"></i>4379 Sycamore Circle, Dallas, TX 75247</p>
      <p><i class="fa fa-envelope"></i>email@domain.com</p>
      <p><i class="fa fa-phone"></i>682-503-2772</p>
      <div class="contact-detail">
      <h5>Timing:</h5>
      <p>Monday - Saturday : <span>10 AM to 6 PM</span></p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="col-md-6">
    <input type="text" placeholder="Name">
    <input type="text" placeholder="E-Mail">
    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
    <button class="send">Send</button>
   </div>
  </div> 

</div>


<div class="footer">
 <div class="container">
  <div class="col-sm-2">
   <h5>Site Map</h5>
   <ul>
    <li><a href="">Home</a></li>
    <li><a href="">About Us</a></li>
    <li><a href="">Services</a></li>
    <li><a href="">Pricing</a></li>
    <li><a href="">Contact Us</a></li>
  </ul>
</div>
<div class="col-sm-4 col-md-3 twitter">
 <h5>Twitter Feed</h5>
 <ul>
  <li><i class="fa  fa-twitter"></i>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna erat volutpat. <span>http://uibrush.com</span></li>
  <li><i class="fa  fa-twitter"></i>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna erat volutpat. <span>http://uibrush.com</span></li>
</ul>
</div>
<div class="col-md-4 testimonial">
 <h5>Testimonial</h5>
 <ul>
  <li><i class="fa  fa-quote-left"></i>Lorem ipsum dolor sit amet,  adipiscing elit, sed 
   diam  nibh euismod tincidunt ut laoreet dolore magna erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  </li>

 </ul>
 <div class="t-image">
   <img src="img/testimonial.png">
   <h6>- Michael R. Hanke</h6><br>
   <p>ceo of sun</p>
 </div>
</div>
<div class="col-md-3 contact-footer">
  <div class="footer-form">
   <h5>Contact Us</h5>
   <form action="" method="post">
     <input type="text" placeholder="Name" name="name">
     <input type="text" placeholder="E-Mail" name="email">
     <textarea placeholder="Message" rows="3" name="message"></textarea>
     <input type="submit" class="submit-bt" value="Send">
   </form>
 </div>
</div>
</div>
</div>
<div class="copyright">
  <div class="container">
   <p>All Rights Reserved 2015 &copy; UIBrush.com</p>
 </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<script src="js/responsiveslides.min.js"></script> 
<script src="js/response.min.js"></script> 
<script>
  $('.collapse').on('shown.bs.collapse', function(){
   $(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
 }).on('hidden.bs.collapse', function(){
   $(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
 });
</script>
<script>

</script>
</body>
</html>