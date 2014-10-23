    <script src="scripts/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.js" type="text/javascript"></script>
    <script src="scripts/craftyslide.js" type="text/javascript"></script>
    <script src="scripts/jMenu.jquery.js" type="text/javascript"></script>
    <script src="scripts/jquery.jplayer.min.js" type="text/javascript"></script>
		<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
    <link href="scripts/jquery-ui-1.10.2.custom/css/humanity/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="styles/styles.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="styles/petfinder.css" rel="stylesheet" type="text/css" media="all" />
    <link href="styles/print.css" rel="stylesheet" type="text/css" media="print" />
    <link href="styles/craftyslide.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="styles/jMenu.jquery.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="styles/jPlayer/jplayer.blue.monday.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    
    <script type="text/javascript">
      $(document).ready(function(e) {
				$(function(e) {
        	$("#tabs").tabs();
					$("#accordion").accordion({
						collapsible: true,
						heightStyle: "content"
					});
      	});
  			$("#slideshow").craftyslide({
					'width': 880,
					'height': 260,
					'pagination': false,
					'fadetime': 400,
					'delay': 6000
				});
				$("#jMenu").jMenu({
				  openClick : false,
				  ulWidth : 'auto',
				  effects : {
						effectSpeedOpen : 150,
						effectSpeedClose : 150,
						effectTypeOpen : 'slide',
						effectTypeClose : 'hide',
						effectOpen : 'linear',
						effectClose : 'linear'
				  },
				  TimeBeforeOpening : 100,
				  TimeBeforeClosing : 11,
				  animatedText : false,
				  paddingLeft: 1
				});
				var mybodyid = $('body').attr('id');
				var mynavid = '#nav-' + mybodyid;
				$(mynavid).attr('id','iamhere');
			});
			$("#jp-microchip").jPlayer( {
				swfPath: "/scripts/jPlayer"
			});
			$("#jp-illness").jPlayer( {
				swfPath: "/scripts/jPlayer"
			});
			$("#jp-spay").jPlayer( {
				swfPath: "/scripts/jPlayer"
			});
		</script>

		<script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-317646-10']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>