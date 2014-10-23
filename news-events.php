<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/acc-template-13.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<meta name="robots" content="index, follow" />-->
    <!-- InstanceBeginEditable name="doctitle" -->
    <meta name="description" content="Animal Care Center is a companion veterinary clinic located in Winchester, Tennessee. Access news about the clinic, upcoming events, coupons, and specials." />
    <title>Animal Care Center Veterinary Clinic: News, Events, Coupons and Specials</title>
    <!-- InstanceEndEditable -->
    	<?php include('includes/head-links.php'); ?>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
  </head>
  
  <!-- InstanceBeginEditable name="bodytag" -->
  <body id="news">
	<!-- InstanceEndEditable -->
    <div id="page">
    	<?php include('includes/header.php'); ?>
      <?php include('includes/slideshow.php'); ?>
      <!-- InstanceBeginEditable name="body" -->
      <div id="main">
        <div id="full-content">
          <hr class="clear" />
          <h1>News and Events</h1>
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">News</a></li>
              <li><a href="#tabs-2">Events</a></li>
              <li><a href="#tabs-3">Coupons/Specials</a></li>
            </ul>
            <div id="tabs-1">
              <h2>News</h2>
                <div id="accordion" class="full-sub">
 		             	<?php include('news/20130312-expo.php'); ?>
              		<?php include('news/20121116-party-paws.php'); ?>
              		<?php include('news/20120925-donation.php'); ?>
              		<?php include('news/20120629-assistance.php'); ?>
              		<?php include('news/20120629-adopt.php'); ?>
                  <?php include('news/20120406-party-paws.php'); ?>
                  <?php include('news/20111115-party-paws.php'); ?>
                  <?php include('news/20111104-party-paws.php'); ?>
                  <?php include('news/20110415-expo.php'); ?>
                  <?php include('news/20110408-benefit.php'); ?>
                  <?php include('news/20110405-party-paws.php'); ?>
                  <?php include('news/20110315-rabies.php'); ?>
                  <?php include('news/20110315-feral-cat.php'); ?>
                  <?php include('news/20101214-gift.php'); ?>
                  <?php include('news/20101116-pictures.php'); ?>
                 	<?php include('news/20101029-party-paws.php'); ?>
                  <?php include('news/20101012-feral.php'); ?>
                  <?php include('news/20100917-rabies.php'); ?>
                  <?php include('news/20100723-greeters.php'); ?>
                </div>
            </div>
            <div id="tabs-2">
              <h2>Events</h2>
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
              <h2>Coupons and Specials</h2>
              <?php include('specials/2013-heartworm.php'); ?>
            </div>
          </div>
        </div>
      </div>
    	<!-- InstanceEndEditable -->
    </div> 
    <?php include('includes/footer.php'); ?>
  </body>
<!-- InstanceEnd --></html>
