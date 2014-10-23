<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/acc-template-13.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<meta name="robots" content="index, follow" />-->
    <!-- InstanceBeginEditable name="doctitle" -->
    <meta name="description" content="Animal Care Center is a companion veterinary clinic located in Winchester, Tennessee. Doctors George and Ashley Bowers care for cats, dogs and other pets." />
    <meta name="keywords" content="animal, acc, vet, veterinary, winchester, tennessee, franklin county, bowers, cat, dog, bird, pet" />
    <title>Animal Care Center Veterinary Clinic: Winchester, Tennessee</title>
    <!-- InstanceEndEditable -->
    	<?php include('includes/head-links.php'); ?>
    <!-- InstanceBeginEditable name="head" -->

    <!-- InstanceEndEditable -->
  </head>
  
  <!-- InstanceBeginEditable name="bodytag" -->
  <body id="home">
	<!-- InstanceEndEditable -->
    <div id="page">
    	<?php include('includes/header.php'); ?>
      <?php include('includes/slideshow.php'); ?>
      <!-- InstanceBeginEditable name="body" -->
      <div id="main">
        <div id="left-content">
          <hr class="clear" />
          <p class="center">
          	<a href="http://animalcarecenter.vetsourceweb.com/site/view/site/view/HomeDelivery.pml" onclick="window.open(this.href,'_blank');return false;">
            	<img src="images/home-delivery-rx.gif" alt="Home Delivery RX" class="shadow"/>
            </a>
          </p>
          <h1>Welcome To Animal Care Center</h1>
          <p><img src="images/clinic-front.jpg" alt="Animal Care Center Building" class="left shadow" />Doctors Ashley and George Bowers welcome you to the Animal Care Center Web site.</p>
          <p>We are a companion animal practice located in Winchester, Tennessee. Our team is dedicated to the health and wellbeing of your pets.</p>
          <p>This Web site is designed to provide you with information about the health of your companion animals, as well as the services we provide.</p>
          <p>A contemporary, two-doctor practice, ACC provides a full array of animal care services. We perform routine and emergency surgery, and we have a 24-hour emergency service for our clients. Our staff is very knowledgeable about flea and tick prevention, intestinal parasites and prevention, as well as heartworm disease and prevention.</p>
          <p>We accept new clients daily and would love to provide care and comfort for your pets. Give us a call and schedule an appointment. You and your pet will be so happy you did!</p>
          <h2>Hours of Operation</h2>
          <p>Monday-Saturday: 8 a.m.-5 p.m.<br />
             Closed Thursday: 12-1:30 p.m.<br />
             24-Hour Emergency Service available for our clients</p>
        </div>
        <div id="right-nav">
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">News</a></li>
              <li><a href="#tabs-2">Events</a></li>
              <li><a href="#tabs-3">Coupons</a></li>
            </ul>
            <div id="tabs-1">
              <?php include('news/open-for-lunch.php'); ?>
              <hr />
              <?php include('news/saturday-hours.php'); ?>
              <hr />
              <?php include('news/care-credit.php'); ?>
        	</div>
            <div id="tabs-2">
							<?php if (time() < strtotime("10/14/2014 5:30PM")): ?>
              <?php include('events/20141016-feral-cat.php'); ?>
											<?php else: ?>
              <p>There are no events scheduled at this time.</p>
											<?php endif; ?> 
              <?php /*?><hr />
              <?php include('events/20140327-expo.php'); ?>
              <hr />
              <?php include('events/20140401-feral-cat.php'); ?><?php */?>
           	</div>
           	<div id="tabs-3">
              <?php include('specials/2013-heartworm.php'); ?>
         	</div>
         	</div>
         	<div class="container">
            <h2 class="center">Support Animal Harbor</h2>
            <hr />
            <p class="center"><a href="networkforgood-donation" onclick="window.open(this.href,'_blank');return false;"><img src="images/network-for-good-logo.gif" alt="Network for Good" /></a><br />
            <a href="paypal-donation" onclick="window.open(this.href,'_blank');return false;"><img src="images/paypal-payment-logo106x55.png" alt="PayPal" /></a></p>
          </div>
        </div>
      </div>
    <!-- InstanceEndEditable -->
    </div> 
    <?php include('includes/footer.php'); ?>
  </body>
<!-- InstanceEnd --></html>
