<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/acc-template-13.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<meta name="robots" content="index, follow" />-->
    <!-- InstanceBeginEditable name="doctitle" -->
    <meta name="description" content="Animal Care Center is a companion veterinary clinic located in Winchester, Tennessee. Please contact us for information about services or your pet’s needs." />
    <meta name="keywords" content="animal, acc, vet, veterinary, winchester, tennessee, franklin county, bowers, cat, dog, bird, pet, contact, phone, address, hours, facebook, email" />
    <title>Animal Care Center Veterinary Clinic: Contact Us</title>
    <!-- InstanceEndEditable -->
    	<?php include('includes/head-links.php'); ?>
    <!-- InstanceBeginEditable name="head" -->
    <script src="scripts/jquery.form.js" type="text/javascript"></script>
    <script type="text/javascript"> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#contact').ajaxForm(function() { 
                alert("Thank you for contacting ACC. We will respond as soon as possible."); 
            }); 
        }); 
    </script>
    <!-- InstanceEndEditable -->
  </head>
  
  <!-- InstanceBeginEditable name="bodytag" -->
  <body id="contact">
	<!-- InstanceEndEditable -->
    <div id="page">
    	<?php include('includes/header.php'); ?>
      <?php include('includes/slideshow.php'); ?>
      <!-- InstanceBeginEditable name="body" -->
			<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					fjs.parentNode.insertBefore(js, fjs);
	      }
				(document, 'script', 'facebook-jssdk'));
      </script>
      <div id="main">
      <div id="right-nav">
        	<div class="container">
          <h2>Hours of Operation</h2>
          <h3>Monday-Saturday:</h3>
          <p>8 a.m.-5 p.m.</p>
         	<h3>Thursday:</h3>
          <p>Closed: 12-1:30 p.m.</p>
          <h3>Emergencies</h3>
          <p>24-Hour Emergency Service available for our clients</p>
          </div>
          <div class="container">
            <div id="contact_form">
            	<?php include('contact-form.php'); ?>
              
            </div>  
          </div>
        </div>
        <div id="left-content">
          <hr class="clear" />
          <h1>Contact Us</h1>
          <h2>Address</h2>
					<p><a href="http://goo.gl/maps/6HQg1" onclick="window.open(this.href,'_blank');return false;">1626 Sharp Springs Road<br />
          	Winchester, TN 37398</a></p>
          <h2>Phone</h2>
          <p>931.967.6345</p>
          <h2>E-mail addresses</h2>
          <p>Primary Office Address &ndash; <a href="mailto:accvets@gmail.com">accvets@gmail.com</a><br />
            Appointments &ndash; <a href="mailto:vicky@gmail.com">vicky@accvets.net</a><br />
            Boarding Facilities &ndash; <a href="mailto:accvets@gmail.com">accvets@gmail.com</a><br />
            Dental Health &ndash; <a href="mailto:accvets@gmail.com">accvets@gmail.com</a><br />
            Humane Society Volunteerism &ndash; <a href="mailto:amanda@gmail.com">amanda@accvets.net</a><br />
            Procedures, Blood Work, and General Health &ndash; <a href="mailto:accvets@gmail.com">accvets@gmail.com</a><br />
            Products &ndash; <a href="mailto:accvets@gmail.com">accvets@gmail.com</a></p>
          <h2>Find Us On Facebook</h2>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FAnimal-Care-Center-LLC%2F292916952155&amp;width=525&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:525px; height:590px;" allowTransparency="true"></iframe>					
        
      </div>
    	<!-- InstanceEndEditable -->
    </div> 
    <?php include('includes/footer.php'); ?>
  </body>
<!-- InstanceEnd --></html>
