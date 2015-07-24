<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr"

xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:dc="http://purl.org/dc/terms/"
xmlns:foaf="http://xmlns.com/foaf/0.1/"
xmlns:og="http://ogp.me/ns#"
xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
xmlns:sioc="http://rdfs.org/sioc/ns#"
xmlns:sioct="http://rdfs.org/sioc/types#"
xmlns:skos="http://www.w3.org/2004/02/skos/core#"
xmlns:xsd="http://www.w3.org/2001/XMLSchema#">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>UDSM - Continuing Education Course Catalogue</title>
		
		<!-- cheki zipi za kufuta
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.basedaf9.css" rel="stylesheet">
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.menusdaf9.css" rel="stylesheet">
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.messagesdaf9.css" rel="stylesheet">
			<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.themedaf9.css" rel="stylesheet">
		<link href="<?php echo WEB_ROOT; ?>theme/udsm/modules/system/system.themedaf9.css" rel="stylesheet">-->
		<!--<style type="text/css" media="all">
			@import url("/theme/udsm/modules/system/system.basedaf9.css?ne7jek");
			@import url("theme/udsm/modules/system/system.menusdaf9.css?ne7jek");
			@import url("theme/udsm/modules/system/system.messagesdaf9.css?ne7jek");
			@import url("theme/udsm/modules/system/system.themedaf9.css?ne7jek");
			</style>
			<style type="text/css" media="all">@import url("theme/udsm/modules/field/theme/fielddaf9.css?ne7jek");</style>
			<style type="text/css" media="screen">@import url("theme/udsm/sites/all/modules/flexslider/assets/css/flexslider_imgdaf9.css?ne7jek");</style>
			<style type="text/css" media="all">
			@import url("theme/udsm/modules/node/nodedaf9.css?ne7jek");
			@import url("theme/udsm/modules/search/searchdaf9.css?ne7jek");
			@import url("theme/udsm/modules/user/userdaf9.css?ne7jek");
			@import url("theme/udsm/sites/all/modules/views/css/viewsdaf9.css?ne7jek");
			@import url("theme/udsm/sites/all/modules/ckeditor/css/ckeditordaf9.css?ne7jek");
			</style>
			<style type="text/css" media="all">
			@import url("theme/udsm/sites/all/modules/ctools/css/ctoolsdaf9.css?ne7jek");
		</style>-->
		<style type="text/css" media="screen">
			@import url("theme/udsm/sites/all/themes/udsm6/styledaf9.css?ne7jek");
		</style>
		<style type="text/css" media="all">
			@import url("theme/udsm/sites/all/themes/udsm6/style.responsivedaf9.css?ne7jek");
		</style>
		<script type="text/javascript" src="theme/udsm/sites/all/themes/udsm6/jquery1cc4.js?v=1.4.4"></script>
		<script type="text/javascript" src="theme/udsm/misc/jquery.once7839.js?v=1.2"></script>
		<script type="text/javascript" src="theme/udsm/misc/drupaldaf9.js?ne7jek"></script>
		<script type="text/javascript" src="theme/udsm/sites/all/themes/udsm6/scriptdaf9.js?ne7jek"></script>
		<script type="text/javascript" src="theme/udsm/sites/all/themes/udsm6/script.responsivedaf9.js?ne7jek"></script>
		
		<!-- Bootstrap core CSS -->
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				var t = $('#example').DataTable( {
					"columnDefs": [ {
						"searchable": false,
						"orderable": false,
						"targets": 1
					} ],
					"order": [[ 3, 'asc' ]]
				} );
				
				t.on( 'order.dt search.dt', function () {
					t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
						cell.innerHTML = i+1;
					} );
				} ).draw();
			} );
			
			/*$(document).ready(function() {
				var t = $('#example').DataTable( {
				"columnDefs": [ {
				"searchable": false,
				"orderable": false,
				"targets": 2
				} ],
				//vertical scroll
				"scrollY":        "400px",
				"scrollCollapse": true,
				//ordering start at column 2
				"order": [[ 2, 'asc' ]]
				} );
				
				t.on( 'order.dt search.dt', function () {
				t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				cell.innerHTML = i+1;
				} );
				} ).draw();
				} );
			*/
			/*$(document).ready(function() {
				$('#example').dataTable( {
				"pagingType": "full_numbers"
				} );
			} );*/
			/*$(document).ready(function() {
				$('#example').dataTable();
				} );
			*///scroll vertical
			/*$(document).ready(function() {
				$('#example').dataTable( {
				"scrollY":        "200px",
				"scrollCollapse": true,
				"paging":         false
				} );
				} );
			*/       
		</script>
		
		<!-- Custom styles for this template -->
		<!--<link href="<?php //echo WEB_ROOT; ?>css/offcanvas.css" rel="stylesheet">-->
		
		<?php
			//login confirmation
			//studconfirm_logged_in();
		?>
	</head>
	<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-125 node-type-page" >
		
		<div id="udsm6-main">
			<header class="udsm6-header">
				
				<div class="udsm6-shapes">
					
				</div>
				<div class="udsm6-headline">
					<a href="http://www.udsm.ac.tz" title = "University of Dar es salaam">University of Dar es Salaam</a><br />
				</div>  
				<div class="udsm6-slogan">
					<a href="index.html" title = "University of Dar es salaam">Centre Continuing Education || Course Catalogue</a>
				</div>  
				
			</header>
			<nav class="udsm6-nav">
				
				<div class="region region-navigation">
					<ul class=" udsm6-hmenu ">
						<li class="first leaf"><a href="http://www.udsm.ac.tz" title="">University Home</a></li>
						<li class="leaf"><a href="<?php echo WEB_ROOT; ?>" title="">Home</a></li>
						<li class="leaf"><a href="#" title="">Advertised Course</a></li>
						<li class="leaf"><a href="#" title="">Student Resources</a></li>
					</ul>
					
				</nav>
				<!--<body>
					<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
					<div class="container">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php //echo WEB_ROOT; ?>index.php">UDSM Continuing Education Course catalogue</a>
				</div>
				<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">View<b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="<?php //echo WEB_ROOT; ?>index.php?page=2">Profile</a></li>
				<li><a href="<?php //echo WEB_ROOT; ?>index.php?page=3">Record</a></li>
				
				</ul>
				<li class="dropdown">
				
				</li>
				<!--   <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="newenrollment.php">Reservation</a></li>
				
				
				</ul>  
				
				</li>
				<li class="dropdown">
				<a href="logout.php" >Logout</a>
				
				</li>
				
				<!--  <li><a href="#.php">New Enrolment</a></li> 
				
				</ul>  
				
				</li>
				<!--       <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Grade<b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="#.php">New Enrolment</a></li>
				
				</ul>  
				
				</li>-->
				<!--
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a href="#.php">New Enrolment</a></li>
					<li><a href="scheduleSubFilter.php">New Schedule</a></li>         
					</ul>  
					
				</li>-->
				
				<!--    <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a href="#">Reports</a></li>
					<li><a href="<?php //echo WEB_ROOT; ?>admin/modules/user/index.php">Manage User</a></li>
					<li><a href="#">Others</a></li>
					<li><a href="#">Logout</a></li>
					</ul>  
					</li> 
					
					
					</ul>
					
					</div><!--/.navbar-collapse
					</div><!-- /.nav-collapse
				</div><!-- /.container -->
				
				<div class="udsm6-sheet clearfix">
					<div class="udsm6-layout-wrapper">
						<div class="udsm6-content-layout">
							<div class="udsm6-content-layout-row">
								<div class="udsm6-layout-cell udsm6-content">
									
									
									
									<div class="region region-content">
										<div class="region region-content">
											<div class="block block-system" id="block-system-main">
												<div class="content">
													<div id="node-125" class="node node-page" about="/academic-units" typeof="foaf:Document">
														<article class="udsm6-post udsm6-article">
															<h1 class='udsm6-postheader'><span class='badge'><?php echo $title ; ?></span></h1>
															<div class="udsm6-postmetadataheader">
																
															</div>
															<div class="udsm6-postcontent udsm6-postcontent-0 clearfix"><div class="udsm6-article">
																<div class="field field-name-body field-type-text-with-summary field-label-hidden">
																	<div class="field-items">
																		<div class="field-item even" property="content:encoded">
																			
																			<?php require_once $content; ?>
																			
																		</div>
																	</div>
																</div> 
															</div>
															</div>
															
															
														</article>	</div>
												</div>
											</div>
										</div>
									</div>
									
									
								</div>
							</div>
						</div>
						</div><div id="banner6">  <div class="region region-banner6">
						<div class="block block-views" id="block-views-icon-banner-bottom-block">
						<div class="content">
						<div class="view view-icon-banner-bottom view-id-icon_banner_bottom view-display-id-block view-dom-id-ff076c391675192b53622befc584a614">
						
						</div></div>
						</div>
						</div>
						</div>
						</div>
						<footer class="udsm6-footer">
						<div class="udsm6-footer-inner">
						<a href="http://www.youtube.com/user/udsmTanzania" target="_blank"><img width="32" height="32" alt="" src="sites/all/themes/udsm6/images/youtube.png" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;"></a>&nbsp;<a href="http://www.facebook.com/udsm.alumni" target="_blank"><img width="32" height="32" alt="" src="sites/all/themes/udsm6/images/facebook.png" class="" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; "></a>&nbsp; &nbsp; &nbsp; &nbsp;
						<div id="copyright">  <div class="region region-copyright">
						<div class="block block-block" id="block-block-3">
						<div class="content">
						<p>Copyright © 2014. All Rights Reserved</p>
						<p>Copyright © 2014. All Rights Reserved</p>
						<p>Copyright © 2014. All Rights Reserved</p>
						<p>Copyright © 2014. All Rights Reserved</p>
						<p>Copyright © 2014. All Rights Reserved</p><br /><br />
						</div>
						</div>
						</div>
						</div></div>
						</footer>
						
						</div>
						
						
						</body>
						</html>
						
						<div class="container">
						
						<?php //check_message(); ?>
						<?php //require_once $content;?>
						
						<hr>
						<footer>
						<p align="center">&copy; University of Dar es Salaam - Continuing Education Course Catalogue <?php echo date('Y') ?></p>
						<!--      <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>-->
						<script src="<?php echo WEB_ROOT; ?>js/tooltip.js"></script>
						<!--     <script src="assets/js/jquery.js"></script>>-->
						<script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
						<script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
						<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
						<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
						
						<script type="text/javascript">
						$('.form_curdate').datetimepicker({
						language:  'en',
						weekStart: 1,
						todayBtn:  1,
						autoclose: 1,
						todayHighlight: 1,
						startView: 2,
						minView: 2,
						forceParse: 0
						});
						$('.form_bdatess').datetimepicker({
						language:  'en',
						weekStart: 1,
						todayBtn:  1,
						autoclose: 1,
						todayHighlight: 1,
						startView: 2,
						minView: 2,
						forceParse: 0
						});
						</script>
						<script>
						function checkall(selector)
						{
						if(document.getElementById('chkall').checked==true)
						{
						var chkelement=document.getElementsByName(selector);
						for(var i=0;i<chkelement.length;i++)
						{
						chkelement.item(i).checked=true;
						}
						}
						else
						{
						var chkelement=document.getElementsByName(selector);
						for(var i=0;i<chkelement.length;i++)
						{
						chkelement.item(i).checked=false;
						}
						}
						}
						function checkNumber(textBox){
						while (textBox.value.length > 0 && isNaN(textBox.value)) {
						textBox.value = textBox.value.substring(0, textBox.value.length - 1)
						}
						textBox.value = trim(textBox.value);
						}
						//
						function checkText(textBox)
						{
						var alphaExp = /^[a-zA-Z]+$/;
						while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
						textBox.value = textBox.value.substring(0, textBox.value.length - 1)
						}
						textBox.value = trim(textBox.value);
						}
						function calculate(){  
						
						var first = document.getElementById('first').value; 
						var second = document.getElementById('second').value; 
						var third = document.getElementById('third').value;  
						var fourth = document.getElementById('fourth').value;  
						
						var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
						document.getElementById('finalave').value = totalVal;
						document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
						}
						</script>     
						
						</footer>
						
						</div>
						<!--/.container-->
						</body>
						</html>																									