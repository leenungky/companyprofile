<!DOCTYPE html>
<html lang="en">
<head>
	@include("partial.head")

  </head>
  <body data-responsejs='{ "create": [ { "prop": "width", "breakpoints": [0, 320, 481, 641, 961, 1025, 1281, 1400] }]}'>
  	@include("partial.top_menu")
  		<div class="inner-head">
  			<div class="container">
  				<div class="col-lg-12">
  					<h4 class="pull-left">about us</h4>
  					<p class="pull-right pagination"><a href="/">home</a><span>></span><a href="">pricing</a></p>
  				</div>
  			</div>
  		</div>
  		<!-- inner-head end -->
  		<div class="inner-page about-us">
  			

  				<div class="container">
  					<div class="header-intro">
  						<h2>Pricing</h2>
  						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>

  					</div>
  					<div class="col-lg-12 pricing content-header" id="pricing">
          <div class="col-md-4 first">
          <div class="price-container">
            <h4>Standard</h4>
            <div class="price">
              <div class="price-text">
                <span class="symbol">$</span>
                <p class="number">9.99</p>
                <p style="color: #333333;font-size: 14px;padding: 14px 5px 0 5px;">/</p>
                <p style=" font-size: 14px;     padding-top: 13px;">Per Month</p>
              </div>

              <div class="clearfix"></div>

            </div>
             <ul>
                <li><span>1</span> Domain</li>
                <li><span>20 GB</span> Storage</li>
                <li><span>100 GB</span> Bandwidth</li>
                <li><span>99.9%</span> Uptime</li>
                <li><span>24x7</span> Support</li>
              </ul>
              <a href="" class="buy">Buy Now</a>
              </div>
              <div class="clearfix"></div>
          </div>
          <div class="col-md-4 popular">
          <div class="price-container">
            <h4>Silver</h4>
            <div class="price">
              <div class="price-text">
                <span class="symbol">$</span>
                <p class="number">19.99</p>
                <p style="color: #333333;font-size: 14px;padding: 14px 5px 0 5px;">/</p>
                <p style=" font-size: 14px;     padding-top: 13px;">Per Month</p>
              </div>
              <div class="clearfix"></div>

            </div>
             <ul>
                <li><span>5</span> Domain</li>
                <li><span>40 GB</span> Storage</li>
                <li><span>200 GB</span> Bandwidth</li>
                <li><span>99.9%</span> Uptime</li>
                <li><span>24x7</span> Support</li>
              </ul>
              <a href="" class="buy">Buy Now</a>
              </div>
              <div class="clearfix"></div>
          </div>
          <div class="col-md-4">
          <div class="price-container">
            <h4>Gold</h4>
            <div class="price">
              <div class="price-text">
                <span class="symbol">$</span>
                <p class="number">39.99</p>
                <p style="color: #333333;font-size: 14px;padding: 14px 5px 0 5px;">/</p>
                <p style=" font-size: 14px;     padding-top: 13px;">Per Month</p>
              </div>
             
              <div class="clearfix"></div>

            </div>
             <ul>
                <li><span>10</span> Domain</li>
                <li><span>100 GB</span> Storage</li>
                <li><span>Unlimited</span> Bandwidth</li>
                <li><span>100%</span> Uptime</li>
                <li><span>24x7</span> Support</li>
              </ul>
              <a href="" class="buy">Buy Now</a>
              </div>
              <div class="clearfix"></div>
          </div>
        </div> 
  			
  		</div>


  		@include("partial.footer")
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