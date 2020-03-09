<?php 
    $json_linedata = include ('line-data.php');
?>
<!DOCTYPE html>
<html>
   <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="img/ico/favicon.png">

        <!-- CSS -->
        <!-- Bootstrap & FontAwesome & Entypo CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/font-entypo.css" rel="stylesheet" type="text/css">    

        <!-- Fonts CSS -->
        <link href="css/fonts.css"  rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    

        <!-- Theme CSS -->
        <link href="css/theme.min.css" rel="stylesheet" type="text/css">
        <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css --> 
        
        <!-- Calender -->   
        <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css">
        <link href="plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css">
        
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 
        
        <!-- Custome Style -->
        <link rel="stylesheet" href="css/custom-style.css">
        
        <!-- Head SCRIPTS -->
        <script type="text/javascript" src="js/modernizr.js"></script> 
        <script type="text/javascript" src="js/mobile-detect.min.js"></script> 
        <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script>     
    </head>      

    <body id="charts" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="charts "  data-smooth-scrolling="1">     
        <div class="vd_body">
        <!-- Header Start -->
        <header class="header-1" id="header">
        <div class="vd_top-menu-wrapper">
            <div class="container ">
                <div class="vd_top-nav vd_nav-width  ">
                    <div class="vd_panel-header">
          	            <div class="logo">
            	            <a href="index.php"><img alt="logo" src="img/logo.png"></a>
                        </div>
                        <!-- logo -->
                        <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
                            <span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
	                            <i class="fa fa-bars"></i>
                            </span>
                                		                    
                            <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
                                    <i class="fa fa-ellipsis-v"></i>
                            </span> 
                        </div>
                        <div class="vd_panel-menu left-pos visible-sm visible-xs">
                            <span class="menu" data-action="toggle-navbar-left">
                                <i class="fa fa-ellipsis-v"></i>
                            </span>                    
                        </div>
                        <div class="vd_panel-menu visible-sm visible-xs">
                            <span class="menu visible-xs" data-action="submenu">
                                <i class="fa fa-bars"></i>
                            </span>        

                            <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                                <i class="fa fa-comments"></i>
                            </span>                   
                        </div><!-- vd_panel-menu -->
                    </div><!-- vd_panel-header -->
                </div>    
                <div class="vd_container">
          	        <div class="row">
            	        <div class="col-sm-5 col-xs-12">
            		        <div class="vd_menu-search">
                                <form id="search-box" method="post" action="#">
                                    <input type="text" name="search" class="vd_menu-search-text width-40" placeholder="Search">
                                    <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
                                </form>
                            </div>
                        </div>
                    <div class="col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    <div class="vd_mega-menu pull-right">
                    <ul class="mega-ul">
                    <li id="top-menu-2" class="one-icon mega-li"> 
                        <a href="index.php" class="mega-link" data-action="click-trigger">
    	                    <span class="mega-icon"><i class="fa fa-envelope"></i></span> 
                            <span class="badge vd_bg-red">10</span>
		                </a>
                    <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target">
                    <div class="child-menu">  
                        <div class="title">Messages
                            <div class="vd_panel-menu">
                                <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                <i class="fa fa-cog"></i>
                                </span>                      
                            </div>
                        </div>                 
		            <div class="content-list content-image">
           	        <div  data-rel="scroll">	
                    <ul class="list-wrapper pd-lr-10">
                    <li> 
                        <div class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                        <div class="menu-text"> Do you play or follow any sports?
                            <div class="menu-info">
                                <span class="menu-date">12 Minutes Ago </span>     
                                <span class="menu-action">
                                    <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                    </span>                                     
                                </span>                                
                            </div>
                        </div> 
                    </li>     
                    </ul>
                    </div>
                    <div class="closing text-center" style="">
                        <a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
                    </div>                                                                   </div>                              
                    </div> <!-- child-menu -->                      
                    </div>   <!-- vd_mega-menu-content --> 
                    </li>    
                    <li id="top-menu-profile" class="profile mega-li"> 
                        <a href="#" class="mega-link"  data-action="click-trigger"> 
                            <span  class="mega-image"><img src="img/avatar/avatar.jpg" alt="example image" /></span>
                            <span class="mega-name">
                                Caroline <i class="fa fa-caret-down fa-fw"></i> 
                            </span>
                        </a> 
                        <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                            <div class="child-menu"> 
                                <div class="content-list content-menu">
                                    <ul class="list-wrapper pd-lr-10">
                                        <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>              
                                    </ul>
                                </div> 
                            </div> 
                        </div>     
                    </li>               
                    </ul><!-- Head menu search form ends -->                         
                    </div>
                    </div>
                    </div>
                    </div>
                  </div>
                </div><!-- container --> 
            </div><!-- vd_primary-menu-wrapper --> 
        </header>
        <!-- Header Ends --> 
        
        <div class="content">
            <div class="container">
                <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
                        <div class="navbar-menu clearfix">
                            <h3 class="menu-title hide-nav-medium hide-nav-small">UI Features</h3>
                            <div class="vd_menu">
                                <ul>
                                   <li>
                                        <a href="tpo-office1.html" data-action="click-trigger">
                                            <span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
                                            <span class="menu-text">Dashboard</span>  
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#" data-action="click-trigger" data-toggle="modal" data-target="#myModal">
                                            <span class="menu-icon"><i class="fa fa-calendar"> </i></span> 
                                            <span class="menu-text">Events</span>  
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="tpo-office1.html" data-action="click-trigger">
                                            <span class="menu-icon"><i class="fa fa-asterisk" aria-hidden="true"></i></span> 
                                            <span class="menu-text">Criteria Section</span>  
                                        </a>
                                    </li>  
                                    <li>
                                        <a href="tpo-office-share-files.html" data-action="click-trigger">
                                            <span class="menu-icon"><i class="fa fa-share-alt"> </i></span> 
                                            <span class="menu-text">Shared Files</span>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-action="click-trigger" data-toggle="modal" data-target="#myModal">
                                            <span class="menu-icon"><i class="fa fa-plus"> </i></span> 
                                            <span class="menu-text">Add Company</span>  
                                        </a>
                                    </li> 
                                </ul>
                            </div>             
                        </div>
                    </div> 
                <!-- Middle Content Start -->
                <div class="vd_content-wrapper">
                    <div class="vd_container">
                        <div class="vd_content clearfix">
        	                <div class="vd_head-section clearfix">
                                <div class="vd_panel-header">               
                                <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
                                <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                                <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                                <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
                                </div>
                                </div>                            
                            </div><!-- vd_head-section -->
            
                            <div class="vd_title-section clearfix">
                                <div class="vd_panel-header no-subtitle">
                                    <h1>Dashboard</h1>
                                </div>
                            </div><!-- vd_title-section -->
                   
                            <div class="vd_content-section clearfix">
                               <!-- Cards -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
                                        <div class="vd_status-widget widget" style="background-color: #e75480">
                                            <div class="vd_panel-menu">
                                                <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="fa fa-refresh"></i> </div>
                                            </div><!-- vd_panel-menu -->                                
                                            <a class="panel-body" href="#">
                                                <div class="clearfix">
                                                    <span class="menu-icon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <span class="menu-value">
                                                        85
                                                    </span>  
                                                </div>   
                                                <div class="menu-text clearfix">
                                                    Total Recruiters
                                                </div>
                                            </a>
                                        </div>                
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
                                        <div class="vd_status-widget widget" style="background-color: #49D095">
                                            <div class="vd_panel-menu">
                                              <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="fa fa-refresh"></i> </div>
                                            </div><!-- vd_panel-menu --> 

                                            <a class="panel-body" href="#">                         
                                                <div class="clearfix">
                                                    <span class="menu-icon">
                                                        <i class="fa fa-graduation-cap"></i>
                                                    </span>
                                                    <span class="menu-value">
                                                        89 &#37;
                                                    </span>  
                                                </div>   
                                                <div class="menu-text clearfix">
                                                    Students Placed
                                                </div>  
                                             </a>
                                        </div>                
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
                                        <div class="vd_status-widget vd_bg-blue widget">
                                            <div class="vd_panel-menu">
                                              <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="fa fa-refresh"></i> </div>
                                            </div><!-- vd_panel-menu --> 

                                            <a class="panel-body"  href="#">                            
                                                <div class="clearfix">
                                                    <span class="menu-icon">
                                                        <i class="fa fa-plus"></i>
                                                    </span>
                                                    <span class="menu-value">
                                                        120K
                                                    </span>  
                                                </div>   
                                                <div class="menu-text clearfix">
                                                    Highest CTC
                                                </div>
                                            </a>                                               
                                        </div> 
                                  </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
                                        <div class="vd_status-widget vd_bg-yellow widget">
                                            <div class="vd_panel-menu">
                                              <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="fa fa-refresh"></i> </div>
                                            </div><!-- vd_panel-menu --> 

                                            <a class="panel-body"  href="#">                             
                                                <div class="clearfix">
                                                    <span class="menu-icon">
                                                        <i class="fa fa-minus"></i>
                                                    </span>
                                                    <span class="menu-value">
                                                        50K 
                                                    </span>  
                                                </div>   
                                                <div class="menu-text clearfix">
                                                    Average CTC
                                                </div>  
                                            </a>                                                 
                                        </div>                
                                    </div>
                                </div><hr> 
                                <div class="row">
                                    <h4><center>Student Placements - Branch Wise</center></h4><br>
                                    <select name="" id="selector_id">
                                        <option value="2019" selected>2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                    </select><br><br><br>
                                    <div id="piechart" style="width: 100%; height: 400px;"></div><hr>
                                    <h4><center>Student Placements - Month Wise</center></h4><br> 
                                    <div id="linechart" style="width: 100%; height: 500px;"></div>    
                                </div> 
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel widget light-widget panel-bd-top">
                                          <div class="panel-body">
                                            <div id="calendar" class="mgtp-10"> </div>
                                          </div>
                                        </div>
                                    </div><!-- col-sm-9-->
                                </div><!-- row --> 
                            </div><!-- .vd_content-section -->                                
                        </div><!-- .vd_content --> 
                    </div><!-- .vd_container --> 
                </div><!-- .vd_content-wrapper --> 
                <!-- Middle Content End --> 
            </div><!-- .container --> 
        </div><!-- .content -->
    </div><!-- .vd_body END  -->
    
    <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

    <!-- Javascript  --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
    <script type="text/javascript" src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/caroufredsel.js"></script> 
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="plugins/breakpoints/breakpoints.js"></script><!-- Resizable Screen --> 
    <script type="text/javascript" src="js/theme.js"></script>
    
    <!-- Line and Pie Charts -->
    <script src="charts-js/core.js"></script>
    <script src="charts-js/charts.js"></script>
    <script src="charts-js/material.js"></script>
    <script src="charts-js/animated.js"></script>
      
    <!-- PieChart Creation script -->
    
    <!-- Multiple PieChart -->
    <script>
        $(document).ready(function (e) {
            $('#selector_id').on('change', function() {
                ajax_function ($(this).val());
            });
        });    
    </script>
    <script>
        function ajax_function (year){
            
            url = 'http://localhost/cpp-master/pie-data.php';
            
            $.ajax ({
                url : url,
                type: "POST",
                async: true,
                dataType: "JSON",
                data: {year: year},
                beforeSend: function() {},
                success: function (data, textStatus, jqXHR) {
                    show_graph (data);
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        }    
        ajax_function ('2019');
    </script>
    
    <script>
        function show_graph (json_piedata) {
             am4core.ready(function() {
                // Themes begin
                am4core.useTheme(am4themes_material);
                am4core.useTheme(am4themes_animated);
                // Themes end

                var chart = am4core.create("piechart", am4charts.PieChart3D);
                chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                chart.legend = new am4charts.Legend();

                chart.data = json_piedata;

                var series = chart.series.push(new am4charts.PieSeries3D());
                series.dataFields.value = "total_number";
                series.dataFields.category = "branch_name";

            }); // end am4core.ready()        
        }
       
    </script>
    
    <!-- LineChart Creation script -->
    <script>
        am4core.ready(function() {
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            var chart = am4core.create("linechart", am4charts.XYChart);
            chart.data = <?=$json_linedata?>;

            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.dataFields.category = "total_month";
            categoryAxis.renderer.minGridDistance = 60;
            categoryAxis.renderer.inversed = true;
            categoryAxis.renderer.grid.template.disabled = true;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            valueAxis.extraMax = 0.1;
            valueAxis.rangeChangeEasing = am4core.ease.linear;
            valueAxis.rangeChangeDuration = 1500;

            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.categoryX = "total_month";
            series.dataFields.valueY = "total_stud";
            series.tooltipText = "{valueY.value}"
            series.columns.template.strokeOpacity = 0;
            series.columns.template.column.cornerRadiusTopRight = 10;
            series.columns.template.column.cornerRadiusTopLeft = 10;
            series.interpolationDuration = 1000;
            series.interpolationEasing = am4core.ease.linear;
            var labelBullet = series.bullets.push(new am4charts.LabelBullet());
            labelBullet.label.verticalCenter = "bottom";
            labelBullet.label.dy = -10;
            labelBullet.label.text = "{values.valueY.workingValue.formatNumber('#.')}";

            chart.zoomOutButton.disabled = true;

            // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
            series.columns.template.adapter.add("fill", function (fill, target) {
             return chart.colors.getIndex(target.dataItem.index);
            });

            setInterval(function () {
             am4core.array.each(chart.data, function (item) {
               item.visits += Math.round(Math.random() * 200 - 100);
               item.visits = Math.abs(item.visits);
             })
             chart.invalidateRawData();
            }, 2000)

            categoryAxis.sortBySeries = series;

        }); // end am4core.ready()
    </script>
    
    <!-- Calendar -->
    <script type="text/javascript" src='plugins/moment/moment.min.js'></script>
    <script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
    <script type="text/javascript" src='plugins/fullcalendar/fullcalendar.min.js'></script>
    <script type="text/javascript" src='plugins/fullcalendar/crude-operation.js'></script>
    </body>
</html>