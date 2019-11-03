<!doctype html>
<html>
<head>
	<script src="{SERVER_BASE_URL}/static/js/jquery-3.4.1.min.js" ></script>
  	<script src="{SERVER_BASE_URL}/static/js/popper.min.js"></script>
  		<link rel="stylesheet" href="{SERVER_BASE_URL}/static/css/bootstrap.min.css">
	<script src="{SERVER_BASE_URL}/static/js/bootstrap.min.js"></script>


	<link href="{SERVER_BASE_URL}/static/css/bootstrap-glyphicons.min.css?5" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{SERVER_BASE_URL}/static/css/flags.css" />


	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/sorttable.js?2"></script>
	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/table-head.js?2"></script>
	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/bootbox.min.js?2"></script>
	<script type="text/javascript" src="{SERVER_BASE_URL}/static/js/clipboard.min.js?4"></script>

	<link rel="shortcut icon" href="files/img/favicon.ico" />
	<link rel="icon" type="image/png" sizes="32x32" href="files/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="files/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="files/img/favicon-16x16.png">


	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
	<meta name="referrer" content="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<title>OluxShop</title>
	<script type="text/javascript">
		function ajaxinfo() {
			$.ajax({
				type: 'GET',
				url: 'ajaxinfo.html?x=1364d4v2t2-' + Math.random(),
				timeout: 10000,

				success: function (data) {
					if (data != '01') {
						var data = JSON.parse(data);
						for (var prop in data) {
							$("#" + prop).html(data[prop]).show();
						}
					} else {
						window.location = "logout.html";
					}
				}
			});

		}
		setInterval(function () {ajaxinfo()}, 60000);
		var cntrlIsPressed = false;	
		$(document).keydown(function(event){
		    if(event.which=="17")
		        cntrlIsPressed = true;
		    else 
		    	cntrlIsPressed = false;
		});

		$(document).keyup(function(){
		    cntrlIsPressed = false;
		});

	/*
		function pageDiv(n, t, u, x) {


			if (cntrlIsPressed) {
				var win = window.open(u, '_blank');
  				win.focus();
				return false;
			}
			if (x == 1) {
				ajaxinfo();
			}
			var obj = {
				Title: t,
				Url: u
			};
			 if (("/" + obj.Url) != location.pathname) {
				if (x != 1) {
					history.pushState(obj, obj.Title, obj.Url);
				} else {
					history.replaceState(obj, obj.Title, obj.Url);
				}
				}
			

			
			document.title = obj.Title;
			$("#mainDiv").html('<div id="mydiv"><img src="{SERVER_BASE_URL}/static/img/load2.gif" class="ajax-loader"></div>').show();
			$.ajax({
				type: 'GET',
				url: 'divPage' + n + '.html?x=' + Math.random(),
				success: function (data) {
					$("#mainDiv").html(data).show();
					var newTableObject = document.getElementById('table');
					if (newTableObject){
						sorttable.makeSortable(newTableObject);
						$(".sticky-header").floatThead({
							top: 60
						});
					}
					if (x == 0) {
						ajaxinfo();
					}
				}
			});
			if (typeof stopCheckBTC === 'function') {
				var a = stopCheckBTC();
			}

		}
*/
		$(window).on("popstate", function (e) {
			//location.replace(document.location);

		});

		$(window).on('load', function () {
	
			//pageDiv(1,'RDP - OluxShop','rdp.html', 1);
			//new ClipboardJS('.copyit');
			var clipboard = new ClipboardJS('.copyit');
			clipboard.on('success', function (e) {
				setTooltip(e.trigger, 'Copied!');
				hideTooltip(e.trigger);
				e.clearSelection();
			});

		});

		function setTooltip(btn, message) {
			$(btn).tooltip('hide')
				.attr('data-original-title', message)
				.tooltip('show');
		}

		function hideTooltip(btn) {
			setTimeout(function () {
				$(btn).tooltip('hide');
			}, 1000);
		}
		function openitem(order,code){
		  $("#myModalLabel").text('Order #'+order);
		  $("#modelbody").html('');
		  $('#myModal').modal('show');
		  $.ajax({
		    type:       'GET',
		    url:        'showOrder'+order+'-'+code+'.html',
		    success:    function(data)
		    {
		        $("#modelbody").html(data);
		    }});

		}
	</script>
		<style type="text/css">
			.dropdown:hover>.dropdown-menu {
  				display: block;
  				margin:0rem;
			}
			.dropdown > .dropdown-toggle:active {
   				pointer-events: none;
			}
			#mydiv  {
				height: 600px;
				position: relative;
			}
			.ajax-loader {
				position: absolute;
				left: 0;
				top: 0;
				right: 0;
				bottom: 0;
				margin: auto; /* presto! */
			}
			body {
    			padding-top:75px;
			}
			table.floatThead-table {
			    border-top: none;
			    border-bottom: none;
			    background-color: #fff;
			    cursor: pointer;
			}
			table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
			    content: " \25BE" 
			}
		</style>
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-primary  fixed-top">
		<a class="navbar-brand d-none d-lg-block" href="/index" ><span class="glyphicon glyphicon-fire"></span> <span> Olux Shop</span></a>
		<a class="navbar-brand d-block d-lg-none" href="/index" ><span class="glyphicon glyphicon-fire"></span> <span></span></a>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
			 	<ul class="navbar-nav">
			 		<li class="nav-item dropdown">
			 			<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="hosts" role="button"><i class="fas fa-server"></i> Hosts  <span class="caret"></span></a>
			 			<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="hosts" role="button"><i class="fas fa-server"></i><span class="caret"></span></a>
			 				<div class="dropdown-menu" aria-labelledby="hosts">
			 					<a class="dropdown-item" href="/rdp" onclick="pageDiv(1,'RDP - OluxShop','rdp.html',0); return false;"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-light" id="rdp"></span></a>
			 					<a class="dropdown-item" href="/ssh" onclick="pageDiv(2,'Root SSH/WHM - OluxShop','ssh.html',0); return false;"><i class="fas fa-terminal fa-fw"></i> SSH(VPS) <span class="badge badge-light" id="ssh"></span></a>
			 					<a class="dropdown-item" href="/cPanel" onclick="pageDiv(3,'cPanel - OluxShop','cPanel.html',0); return false;"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-light" id="cpanel"></span></a>
			 					<a class="dropdown-item" href="/shell" onclick="pageDiv(4,'Shell - OluxShop','shell.html',0); return false;"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-light" id="shell"></span></a>
			 				</div>
			 		</li>
			 		<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="mail"><i class="fas fa-mail-bulk"></i> Send <span class="caret"></span></a>
						<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="mail"><i class="fas fa-mail-bulk"></i><span class="caret"></span></a>

			 				<div class="dropdown-menu" aria-labelledby="send">
			 					<a class="dropdown-item" href="/mailer" onclick="pageDiv(5,'PHP Mailer - OluxShop','mailer.html',0); return false;"><i class="fas fa-leaf fa-fw"></i> PHP Mailers <span class="badge badge-light" id="mailer"></span></a>
			 					<a class="dropdown-item" href="/smtp" onclick="pageDiv(6,'SMTP - OluxShop','smtp.html',0); return false;"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-light" id="smtp"></span></a>
			 				</div>						
					</li>
			 		<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="maillist"><i class="fas fa-address-book"></i></i> Leads <span class="caret"></span></a>
						<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="maillist"><i class="fas fa-address-book"></i></i><span class="caret"></span></a>

			 				<div class="dropdown-menu" aria-labelledby="maillist">
			 					<a class="dropdown-item" href="/leads" onclick="pageDiv(7,'Leads - OluxShop','leads.html',0); return false;"><i class="fas fa-at fa-fw"></i> Leads <span class="badge badge-light" id="leads"></span></a>
			 				</div>						
					</li>
			 	</ul>
			 	<ul  class="navbar-nav ml-auto">
					<li class="nav-item" >
						<a href="seller" id="seller"></a>
					</li>
			 		<li class="nav-item dropdown">
			 			<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="mytickets" role="button"><i class="fas fa-inbox"></i> Tickets <span id="alltickets"></span> <span class="caret"></span></a>
			 			<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="mytickets" role="button"><i class="fas fa-inbox"></i><span id="alltickets"></span> <span class="caret"></span></a>
			 				<div class="dropdown-menu" aria-labelledby="mytickets">
			 					<a class="dropdown-item" href="/oluxclone/support/tickets" onclick="pageDiv(9,'Tickets - OluxShop','tickets.html',0); return false;"><i class="fas fa-comments fa-fw"></i> Tickets <span id="tickets"></span></a>
			 					<a class="dropdown-item" href="/oluxclone/support/reports" onclick="pageDiv(10,'Reports - OluxShop','reports.html',0); return false;"><i class="fas fa-flag fa-fw"></i> Reports <span  id="reports"></span></a>
			 				</div>

			 		</li>
					<li class="nav-item" >
													<a  class="btn btn-outline-info" href="addBalance.html" onclick="pageDiv(11,'Add Balance - OluxShop','addBalance.html',0); return false;"><span id="balance"></span> <i class="fas fa-plus-circle"></i></a>
											</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-none d-md-block" data-toggle="dropdown" href="#" id="account" role="button"><i class="fas fa-user"></i> My Account<span class="caret"></span></a>
						<a class="nav-link dropdown-toggle d-block d-md-none" data-toggle="dropdown" href="#" id="account" role="button"><i class="fas fa-user"></i><span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="account">
								<a class="dropdown-item" href="setting.html" onclick="pageDiv(12,'Setting - OluxShop','setting.html',0); return false;"><i class="fas fa-user-cog fa-fw"></i> Setting</a>
								<a class="dropdown-item" href="/oluxclone/account/orders" onclick="pageDiv(13,'Orders - OluxShop','orders.html',0); return false;"><i class="fas fa-shopping-cart fa-fw"></i> My Orders</a>
								<a class="dropdown-item"  href="addBalance.html" onclick="pageDiv(11,'Add Balance - OluxShop','addBalance.html',0); return false;"><i class="fas fa-dollar-sign fa-fw"></i> Add Balance</a>
								<a class="dropdown-item" href="logout.html" ><i class="fas fa-sign-out-alt fa-fw"></i> Logout</a>
							</div>
					</li>			 		
			 		
			 	</ul>
					

			 </div>

	</nav>
	<div class="container">
	  