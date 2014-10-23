<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/acc-template-13.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<meta name="robots" content="index, follow" />-->
    <!-- InstanceBeginEditable name="doctitle" -->
    <meta name="description" content="Animal Care Center is a companion veterinary clinic located in Winchester, Tennessee. Meet our friends and find Humane Society pets for adoption." />
    <title>Animal Care Center Veterinary Clinic: Friends</title>
    <!-- InstanceEndEditable -->
    	<?php include('includes/head-links.php'); ?>
    <!-- InstanceBeginEditable name="head" -->
                <style type="text/css">
                .clearfix:after {
                        content: ".";
                        display: block;
                        clear: both;
                        visibility: hidden;
                        line-height: 0;
                        height: 0;
                }
                 
                .clearfix {
                        display: inline-block;
                }
                 
                html[xmlns] .clearfix {
                        display: block;
                }
                 
                * html .clearfix {
                        height: 1%;
                }
                </style>
                //<script type="text/javascript">
//                
//                var currentOffset = 0;
//                
//                function getPets()
//                {
//                        $("#loader").css(
//                        {
//                                "background-image":"url(images/ajax-loader.gif)",
//                                width:"220px",
//                                height:"19px"
//                        });
//                        $("#btnMore").hide();
//                        $("#loader").show();
//                        var url = "/scripts/";
//                        var data = {offset:currentOffset};
//                        $.getJSON(url, data, function(resp)
//                        {
//                                currentOffset = parseInt(resp.petfinder.lastOffset.$t, 10);
//                                var pets = resp.petfinder.pets.pet;
//                                $(pets).each(function(i, item)
//                                {
//                                        $("#pets").append(formatPet(item));                             
//                                });                     
//                                
//                                $("#loader").hide();
//                                $("#btnMore").show();
//                        }, "json");
//                }
//                
//                function formatPet(pet)
//                {
//                        var div = $("<div class='clearfix'></div>");
//                        var name = pet.name.$t;
//                        $(div).append("<strong>"+name+"</strong> <br />");
//                        var desc = $("<div class='clearfix'>"+pet.description.$t+"</div>");
//                        if(pet.media.photos && pet.media.photos.photo.length > 0)
//                        {
//                                var img = $("<img />")
//                                .attr("src", pet.media.photos.photo[0].$t)
//                                .attr("alt", name)
//                                .attr("align", "left")
//                                .css({
//                                        border:"solid 2px gainsboro",
//                                        padding:"3px",
//                                        margin:"5px",
//                                        width:"200px"
//                                });
//                                $(desc).prepend(img);
//                        }
//                        $("a", desc).attr("target", "_blank");
//                        $(div).append(desc).append("<hr />").css({padding: "4px", margin:"3px"});
//                        return div;
//                }
//                
//                $(document).ready(function()
//                {
//                        getPets();
//                        $("#btnMore").click(function()
//                        {
//                                getPets();                      
//                        });
//                });
//                
//                </script> 
    <!-- InstanceEndEditable -->
  </head>
  
  <!-- InstanceBeginEditable name="bodytag" -->
  <body id="adopt">
	<!-- InstanceEndEditable -->
    <div id="page">
    	<?php include('includes/header.php'); ?>
      <?php include('includes/slideshow.php'); ?>
      <!-- InstanceBeginEditable name="body" -->
      <div id="main">
        <div id="full-content">
          <hr class="clear" />
          <h1>Our Friends</h1>
          <p>The following are lists of pets that are currently in need of a forever-family around Franklin County.</p>
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Animal Harbor</a></li>
              <li><a href="#tabs-2">Animal Control</a></li>
              <!--<li><a href="#tabs-3">Animal Care Center</a></li>-->
            </ul>
            <div id="tabs-1">
              <h2>Franklin County Humane Society's Animal Harbor</h2>
							<!--<noscript>Javascript is required.</noscript>
                <div class="clearfix" id="pets"></div>
                <div id="loader" style="width: 220px; height: 19px; line-height: 19px; vertical-align: middle; text-align: center;">
                        Loading...
                </div>
                <input id="btnMore" type="button" value="View More" />
            -->
            <p style="text-align:center"><iframe style="width: 700px; height: 900px; margin: 0;" src="http://fpm.petfinder.com/petlist/petlist.cgi?shelter=TN122&status=A&age=&limit=50&offset=0&animal=&title=&style=17&ref=B33fTgOMzb0HWGS" width="700px" height="900px" hspace="0" vspace="0"  frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" bordercolor="#000000"></iframe></p>
            </div>
            <div id="tabs-2">
              <h2>Franklin County Animal Control</h2>
							<p style="text-align:center"><iframe style="width: 700px; height: 900px; margin: 0;" src="http://fpm.petfinder.com/petlist/petlist.cgi?shelter=TN482&status=A&age=&limit=50&offset=0&animal=&title=&style=17&ref=sMdMl03v0giLUzj" width="700px" height="900px" hspace="0" vspace="0"  frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" bordercolor="#000000"></iframe></p>
            </div>
            <!---<div id="tabs-3">
              <h2>Animal Care Center</h2>

            </div>--->
          </div>
        </div>
      </div>
    	<!-- InstanceEndEditable -->
    </div> 
    <?php include('includes/footer.php'); ?>
  </body>
<!-- InstanceEnd --></html>
