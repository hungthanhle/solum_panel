<!doctype html>
<?php 
include('nil_admin_0.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Factory Power</title>
    <!-- CSS files -->
     <link href="../dist/css/tabler.css" rel="stylesheet"/>
    <link href="../dist/css/tabler-flags.css" rel="stylesheet"/>
    <link href="../dist/css/tabler-payments.css" rel="stylesheet"/>
    <link href="../dist/css/tabler-vendors.css" rel="stylesheet"/>
    <link href="../dist/css/demo.css" rel="stylesheet"/>
	<!--index_css new-->
	<link href="index_css.css" rel="stylesheet"/>
	<style>
	
	.element-box {
		height: 500px;
		width: 100%
	}	
	@media (min-width: 576px) {
		.element-box {
			height: 400px;
			width: 100%
		}	
	}

	@media (min-width: 768px) {
		.element-box {
			height: 450px;
			width: 100%
		}	
	}

	@media (min-width: 992px) { 
		.element-box {
			height: 470px;
			width: 100%
		}
	}

	@media (min-width: 1200px) {
		.element-box {
			height: 490px;
			width: 100%
		}
	}

	@media (min-width: 1600px) {
		.element-box {
			height: 600px;
			width: 100%
		}
	}
	@media (min-width: 1900px) {
		.element-box {
			height: 750px;
			width: 100%
		}
	}
	
	
	.highcharts-data-table table {
		font-family: Verdana, sans-serif;
		border-collapse: collapse;
		border: 1px solid #EBEBEB;
		margin: 10px auto;
		text-align: center;
		width: 100%;
		max-width: 500px;
	}
	.highcharts-data-table caption {
		padding: 1em 0;
		font-size: 1.2em;
		color: #555;
	}
	.highcharts-data-table th {
		font-weight: 600;
		padding: 0.5em;
	}
	.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
		padding: 0.5em;
	}
	.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
		background: #f8f8f8;
	}
	.highcharts-data-table tr:hover {
		background: #f1f7ff;
	}
	
	
	.tableFixHead { overflow-y: auto !important; height: 500px;}
	@media (min-width: 576px) {
		.tableFixHead { overflow-y: auto; height: 400px;}	
	}
	@media (min-width: 1200px) {
		.tableFixHead { overflow-y: auto; height: 550px;}	
	}
	@media (min-width: 1600px) {
		.tableFixHead { overflow-y: auto; height: 600px;}	
	}
	@media (min-width: 1900px) {
		.tableFixHead { overflow-y: auto; height: 750px;}	
	}
	
	</style>
	
	<script src="../js/highstock.js"></script>
	<script src="../js/data.js"></script>
	<script src="../js/exporting.js"></script>
	<script src="../js/export-data.js"></script>
  </head>
  <body class="antialiased">
    <div class="page">
		<div class="navbar-fixed-top ">
			<header class="navbar  navbar-expand-md navbar-light d-print-none">
				<div class="card-status-top bg-primary"></div>
				<div class="container-xl">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3" style="padding-top: 0px;padding-bottom: 0px;">
						<img src="../static/logo_img.jpg" style="min-width: 100px;max-width: 180px;" id="img_title">
					</h1>
					<div class="navbar-nav flex-row order-md-last">
						<div class="d-none d-xl-block ps-3">
							<a href="#" class=" nav-link text-reset d-flex " style="padding-top: 7px;padding-bottom: 0px;">
								<?php include('nil_title.php');?>
							</a>
						</div>
					</div>
				</div>
			</header>
			<div class="navbar-expand-md">
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div class="navbar navbar-expand-md navbar-dark bg-primary d-print-none">
						<div class="container-xl">
							<ul class="navbar-nav">
								<li class="nav-item ">
									<?php include('nil_overview.php');?>
								</li>
								<li class="nav-item">
									<?php include('nil_interface.php');?>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" role="button" aria-expanded="true">
										<span class="nav-link-icon d-md-none d-lg-inline-block">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect>
											</svg>
										</span>
										<span class="nav-link-title">
											Report
										</span>
									</a>
									<div class="dropdown-menu">     
										<?php include('nil_report.php');?>
									</div>
								</li>
								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" role="button" aria-expanded="true">
										<span class="nav-link-icon d-md-none d-lg-inline-block">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="4" width="6" height="5" rx="2"></rect><rect x="4" y="13" width="6" height="7" rx="2"></rect><rect x="14" y="4" width="6" height="7" rx="2"></rect><rect x="14" y="15" width="6" height="5" rx="2"></rect>
											</svg>
										</span>
										<span class="nav-link-title">
											Report Form
										</span>
									</a>
									<?php include('nil_report_form.php');?>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" role="button" aria-expanded="true">
										<span class="nav-link-icon d-md-none d-lg-inline-block">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
										</span>
										<span class="nav-link-title">
											Admin
										</span>
									</a>
									<div class="dropdown-menu">  
										<?php include('nil_admin.php');?>
									</div>
								</li>
							</ul>
							<div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
								<div class="input-icon">
									<div id="date_time" style="color: #ffffff"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="element-style content">
			<!--<div class="container-xl">-->
			<div id="snackbar">Loading Data ....</div>
			<div class="container-fluid mt-2">
				<div class="row mt-2 ">
					<div class="col-sm-12 col-lg-12 form-fieldset ml-2">
						<div class="card" style="min-height: 100%;">
							<div class="card-status-top bg-primary mb-3"></div>
							<div class="card-body">
								<div class="row">
									<div class="col-12 col-sm-4 ">
										<label class="form-label" style="color:#000000;">&nbsp;</label>
										<label class="form-selectgroup-item">
											<input type="checkbox" name="name" value="HTML" class="form-selectgroup-input " checked="" disabled="">
											<span class="form-selectgroup-label">ELECTRIC PANEL - Report by Day, Monthly</span>
										</label>
									</div>
									<div class="col-12 col-sm-3 ">
										<label class="form-label" style="color:#000000;">From Date</label>
										<div class="input-icon mb-2">
											<span class="input-icon-addon"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
											</span>
											<input class="form-control " placeholder="Select a date" id="datepicker-start-date" value="<?php echo date("Y-m-d", strtotime("-30 days")); ?>"/>
										</div>
									</div>
									<div class="col-12 col-sm-3">
										<label class="form-label" style="color:#000000;">To Date</label>
										<div class="input-icon">
											<span class="input-icon-addon"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
											</span>
											<input class="form-control" placeholder="Select a date" id="datepicker-end-date" value="<?php echo date("Y-m-d", strtotime("0 days")); ?>"/>
										</div>
									</div>
									<div class="col-12 col-sm-2 ">
										<label class="form-label" style="color:#000000;">&nbsp;</label>
										<a type="button" id = 'Click_Function' onclick='Click_Function();' class="btn btn-primary w-100">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="10" cy="10" r="7"></circle><line x1="21" y1="21" x2="15" y2="15"></line></svg>
											Search 
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-12 form-fieldset ml-2">
						<div class="card" style="min-height: 100%;">
							<div class="card-status-top bg-primary "></div>
							<div class="card-header" style="padding-top: 12px;padding-bottom: 2px;">
								<ul class="nav nav-pills card-header-pills">
									<li class="nav-item">
										<h3 class="card-title">Data Infomation</h3>
									</li>
									<li class="row nav-item ms-auto">
										<div class="col-auto">
											<a type="button" onclick="tableToExcel('order_data', 'REPORT')" class="nav-link" href="#">
												Download &nbsp
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path><polyline points="7 11 12 16 17 11"></polyline><line x1="12" y1="4" x2="12" y2="16"></line></svg>
											</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="row m-2 " id ="loading_data" >		
								<div id = 'order_data' class="table-responsive">
									<div class="tableFixHead" >
										<table class="table table-vcenter card-table " id="table_data">
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('nil_footer.php');?>
		</div>
	</div>
    <script src="../dist/js/tabler.js"></script>
	<script src="../static/js/time.js"></script>
	<!-- Libs JS -->
	<!--<script src="../dist/libs/nouislider/distribute/nouislider.min.js"></script>-->
	<!-- Chon time -->
	<script src="../dist/libs/litepicker/dist/litepicker.js"></script>
	<!-- <script src="../dist/libs/choices.js/public/assets/scripts/choices.js"></script>-->
    </body>
</html>
<!-- hàm thay đổi hình ảnh -->
<?php include('def_image_logo.php');?>


<script src="../static/js/jquery-3.2.1.min.js"></script>
<script>

// chon date time 
document.addEventListener("DOMContentLoaded", function () {
	window.Litepicker && (new Litepicker({
		element: document.getElementById('datepicker-start-date'),
		buttonText: {
			previousMonth: '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
			nextMonth: '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
		},
	 
	}));
});
// chon date time 

 //chon date time 
document.addEventListener("DOMContentLoaded", function () {
	window.Litepicker && (new Litepicker({
		element: document.getElementById('datepicker-end-date'),
		buttonText: {
			previousMonth: '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
			nextMonth: '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
		},
	
	})); 
});
//chon  date time 
</script>

<script>
function string_date(date) {
	var _y = date.substr(0, 4);
	var _m = date.substr(5, 2);
	var _d = date.substr(8, 2);
	var ymd = _y + _m + _d
	return ymd;
}

function Click_Function(){
	var start_date = string_date($('#datepicker-start-date').val());
	var end_date = string_date($('#datepicker-end-date').val());
	
	if(parseInt(end_date) >= parseInt(start_date))
	{
		var factory	= "SOLUM";
		var machine	= "ELECTRIC_PANEL";
		loading_data(factory,machine,start_date,end_date);
	}
	else{
		alert('Data error please choose again !! ');
	}
}

let currentRequest = null;
document.getElementById('Click_Function').click();
function loading_data(factory,machine,start_date,end_date)
{	
	if (currentRequest) {
        currentRequest.abort();
    }
	var x = document.getElementById("snackbar");
	x.className = "show";
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 20000);	
	
	document.getElementById("loading_data").className = "skeleton-image";
	currentRequest = $.ajax({
		type: "POST",
		url: "sql/06-01-report-data-monthly-panel.php",
		data: {act:'select',factory:factory,machine:machine,start_date:start_date,end_date:end_date},
		cache: false,
		success: function(data) {
			$('#table_data').html(data);
			document.getElementById("loading_data").className = "divide-y-4";	
			x.className = x.className.replace("show", "");
		}
	})
}

</script>
<script>
// Fix table head
function tableFixHead (e) {
    const el = e.target,
          sT = el.scrollTop;
    el.querySelectorAll("thead th").forEach(th => 
      th.style.transform = `translateY(${sT}px)`
    );
}
document.querySelectorAll(".tableFixHead").forEach(el => 
    el.addEventListener("scroll", tableFixHead)
);

document.querySelectorAll(".tableFixHead2").forEach(el => 
    el.addEventListener("scroll", tableFixHead)
);
</script>

<!-- __EXPORT_TO_EXCEL__-->
<script type="text/javascript">
    var tableToExcel = (function() {
        var uri = 'data:application/vnd.ms-excel;base64,',
            template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
            base64 = function(s) {
                return window.btoa(unescape(encodeURIComponent(s)))
            },
            format = function(s, c) {
                return s.replace(/{(\w+)}/g, function(m, p) {
                    return c[p];
                })
            }
        return function(table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {
                worksheet: name || 'Worksheet',
                table: table.innerHTML
            }
            var blob = new Blob([format(template, ctx)]);
            var blobURL = window.URL.createObjectURL(blob);

            if (ifIE()) {
                csvData = table.innerHTML;
                if (window.navigator.msSaveBlob) {
                    var blob = new Blob([format(template, ctx)], {
                        type: "text/html"
                    });
                    navigator.msSaveBlob(blob, '' + name + '.xls');
                }
            } else
                window.location.href = uri + base64(format(template, ctx))
        }
    })()

    function ifIE() {
        var isIE11 = navigator.userAgent.indexOf(".NET CLR") > -1;
        var isIE11orLess = isIE11 || navigator.appVersion.indexOf("MSIE") != -1;
        return isIE11orLess;
    }
</script>
