<?php require_once("inc/init.php"); ?>
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard</h1>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">Rs.47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm txt-color-green">
					1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
		</ul>
	</div>
</div>
<!-- widget grid -->
<section id="widget-grid" class="">

	<!-- row -->
	<div class="row">
		<article class="col-sm-12">
			<!-- new widget -->
			<div class="jarviswidget" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header class="bg-color-blueLight">
					<span class="widget-icon "> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
					<h2>Analytics </h2>

					<ul class="nav nav-tabs pull-right in" id="myTab">
						<li class="active">
							<a data-toggle="tab" href="#s1"><i class="fa fa-clock-o"></i> <span class="hidden-mobile hidden-tablet">Live Stats</span></a>
						</li>

						<li>
							<a data-toggle="tab" href="#s2"><i class="fa fa-shopping-cart"></i> <span class="hidden-mobile hidden-tablet">Total Sales</span></a>
						</li>

						<li>
							<a data-toggle="tab" href="#s3"><i class="fa fa-dollar"></i> <span class="hidden-mobile hidden-tablet">Revenue</span></a>
						</li>
					</ul>

				</header>

				<!-- widget div-->
				<div class="no-padding">
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">

						test
					</div>
					<!-- end widget edit box -->

					<div class="widget-body">
						<!-- content -->
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade active in padding-10 no-padding-bottom" id="s1">
								<div class="row no-space">
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
										<span class="demo-liveupdate-1"> <span class="onoffswitch-title">Live switch</span> <span class="onoffswitch">
												<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="start_interval">
												<label class="onoffswitch-label" for="start_interval"> 
													<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
													<span class="onoffswitch-switch"></span> </label> </span> </span>
										<div id="updating-chart" class="chart-large txt-color-blue"></div>

									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 show-stats">

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> My Tasks <span class="pull-right">130/200</span> </span>
												<div class="progress">
													<div class="progress-bar bg-color-blueDark" style="width: 65%;"></div>
												</div> </div>
											<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> Transfered <span class="pull-right">440 GB</span> </span>
												<div class="progress">
													<div class="progress-bar bg-color-blue" style="width: 34%;"></div>
												</div> </div>
											<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> Bugs Squashed<span class="pull-right">77%</span> </span>
												<div class="progress">
													<div class="progress-bar bg-color-blue" style="width: 77%;"></div>
												</div> </div>
											<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> User Testing <span class="pull-right">7 Days</span> </span>
												<div class="progress">
													<div class="progress-bar bg-color-greenLight" style="width: 84%;"></div>
												</div> </div>

											<span class="show-stat-buttons"> <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Generate PDF</a> </span> <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Report a bug</a> </span> </span>

										</div>

									</div>
								</div>

								<div class="show-stat-microcharts">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

										<div class="easy-pie-chart txt-color-orangeDark" data-percent="33" data-pie-size="50">
											<span class="percent percent-sign">35</span>
										</div>
										<span class="easy-pie-title"> Server Load <i class="fa fa-caret-up icon-color-bad"></i> </span>
										<ul class="smaller-stat hidden-sm pull-right">
											<li>
												<span class="label bg-color-greenLight"><i class="fa fa-caret-up"></i> 97%</span>
											</li>
											<li>
												<span class="label bg-color-blueLight"><i class="fa fa-caret-down"></i> 44%</span>
											</li>
										</ul>
										<div class="sparkline txt-color-greenLight hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
											130, 187, 250, 257, 200, 210, 300, 270, 363, 247, 270, 363, 247
										</div>
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<div class="easy-pie-chart txt-color-greenLight" data-percent="78.9" data-pie-size="50">
											<span class="percent percent-sign">78.9 </span>
										</div>
										<span class="easy-pie-title"> Disk Space <i class="fa fa-caret-down icon-color-good"></i></span>
										<ul class="smaller-stat hidden-sm pull-right">
											<li>
												<span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 76%</span>
											</li>
											<li>
												<span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 3%</span>
											</li>
										</ul>
										<div class="sparkline txt-color-blue hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
											257, 200, 210, 300, 270, 363, 130, 187, 250, 247, 270, 363, 247
										</div>
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<div class="easy-pie-chart txt-color-blue" data-percent="23" data-pie-size="50">
											<span class="percent percent-sign">23 </span>
										</div>
										<span class="easy-pie-title"> Transfered <i class="fa fa-caret-up icon-color-good"></i></span>
										<ul class="smaller-stat hidden-sm pull-right">
											<li>
												<span class="label bg-color-darken">10GB</span>
											</li>
											<li>
												<span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 10%</span>
											</li>
										</ul>
										<div class="sparkline txt-color-darken hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
											200, 210, 363, 247, 300, 270, 130, 187, 250, 257, 363, 247, 270
										</div>
									</div>
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<div class="easy-pie-chart txt-color-darken" data-percent="36" data-pie-size="50">
											<span class="percent degree-sign">36 <i class="fa fa-caret-up"></i></span>
										</div>
										<span class="easy-pie-title"> Temperature <i class="fa fa-caret-down icon-color-good"></i></span>
										<ul class="smaller-stat hidden-sm pull-right">
											<li>
												<span class="label bg-color-red"><i class="fa fa-caret-up"></i> 124</span>
											</li>
											<li>
												<span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 40 F</span>
											</li>
										</ul>
										<div class="sparkline txt-color-red hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
											2700, 3631, 2471, 2700, 3631, 2471, 1300, 1877, 2500, 2577, 2000, 2100, 3000
										</div>
									</div>
								</div>

							</div>
							<!-- end s1 tab pane -->

							<div class="tab-pane fade" id="s2">
								<div class="widget-body-toolbar bg-color-white">

									<form class="form-inline" role="form">

										<div class="form-group">
											<label class="sr-only" for="s123">Show From</label>
											<input type="email" class="form-control input-sm" id="s123" placeholder="Show From">
										</div>
										<div class="form-group">
											<input type="email" class="form-control input-sm" id="s124" placeholder="To">
										</div>

										<div class="btn-group hidden-phone pull-right">
											<a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
												</li>
												<li>
													<a href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
												</li>
											</ul>
										</div>

									</form>

								</div>
								<div class="padding-10">
									<div id="statsChart" class="chart-large has-legend-unique"></div>
								</div>

							</div>
							<!-- end s2 tab pane -->

							<div class="tab-pane fade" id="s3">

								<div class="widget-body-toolbar bg-color-white smart-form" id="rev-toggles">

									<div class="inline-group">

										<label for="gra-0" class="checkbox">
											<input type="checkbox" name="gra-0" id="gra-0" checked="checked">
											<i></i> Target </label>
										<label for="gra-1" class="checkbox">
											<input type="checkbox" name="gra-1" id="gra-1" checked="checked">
											<i></i> Actual </label>
										<label for="gra-2" class="checkbox">
											<input type="checkbox" name="gra-2" id="gra-2" checked="checked">
											<i></i> Signups </label>
									</div>

									<div class="btn-group hidden-phone pull-right">
										<a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
											</li>
											<li>
												<a href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
											</li>
										</ul>
									</div>

								</div>

								<div class="padding-10">
									<div id="flotcontainer" class="chart-large has-legend-unique"></div>
								</div>
							</div>
							<!-- end s3 tab pane -->
						</div>

						<!-- end content -->
					</div>

				</div>
				<!-- end widget div -->
			</div>
		</article>
	</div>
</section>
<!-- end widget grid -->

<script type="text/javascript">
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	 var flot_updating_chart, flot_statsChart, flot_multigraph, calendar;

	pageSetUp();
	
	/*
	 * PAGE RELATED SCRIPTS
	 */

	// pagefunction
	
	var pagefunction = function() {
			
		$(".js-status-update a").click(function () {
		    var selText = $(this).text();
		    var $this = $(this);
		    $this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
		    $this.parents('.dropdown-menu').find('li').removeClass('active');
		    $this.parent().addClass('active');
		});
		
		/*
		 * TODO: add a way to add more todo's to list
		 */
		
		// initialize sortable
		
	    $("#sortable1, #sortable2").sortable({
	        handle: '.handle',
	        connectWith: ".todo",
	        update: countTasks
	    }).disableSelection();
		
		
		// check and uncheck
		$('.todo .checkbox > input[type="checkbox"]').click(function () {
		    var $this = $(this).parent().parent().parent();
		
		    if ($(this).prop('checked')) {
		        $this.addClass("complete");
		
		        // remove this if you want to undo a check list once checked
		        //$(this).attr("disabled", true);
		        $(this).parent().hide();
		
		        // once clicked - add class, copy to memory then remove and add to sortable3
		        $this.slideUp(500, function () {
		            $this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
		            $this.remove();
		            countTasks();
		        });
		    } else {
		        // insert undo code here...
		    }
		
		})
		// count tasks
		function countTasks() {
		
		    $('.todo-group-title').each(function () {
		        var $this = $(this);
		        $this.find(".num-of-tasks").text($this.next().find("li").size());
		    });
		
		}
		
		/*
		 * RUN PAGE GRAPHS
		 */

		// load all flot plugins
		loadScript("js/plugin/flot/jquery.flot.cust.min.js", function(){
			loadScript("js/plugin/flot/jquery.flot.resize.min.js", function(){
				loadScript("js/plugin/flot/jquery.flot.time.min.js", function(){
					loadScript("js/plugin/flot/jquery.flot.tooltip.min.js", generatePageGraphs);
				});
			});
		});

		
		function generatePageGraphs() {
		
		    /* TAB 1: UPDATING CHART */
		    // For the demo we use generated data, but normally it would be coming from the server
		
		    var data = [],
		        totalPoints = 200,
		        $UpdatingChartColors = $("#updating-chart").css('color');
		
		    function getRandomData() {
		        if (data.length > 0)
		            data = data.slice(1);
		
		        // do a random walk
		        while (data.length < totalPoints) {
		            var prev = data.length > 0 ? data[data.length - 1] : 50;
		            var y = prev + Math.random() * 10 - 5;
		            if (y < 0)
		                y = 0;
		            if (y > 100)
		                y = 100;
		            data.push(y);
		        }
		
		        // zip the generated y values with the x values
		        var res = [];
		        for (var i = 0; i < data.length; ++i)
		            res.push([i, data[i]])
		        return res;
		    }
		
		    // setup control widget
		    var updateInterval = 1500;
		    $("#updating-chart").val(updateInterval).change(function () {
		
		        var v = $(this).val();
		        if (v && !isNaN(+v)) {
		            updateInterval = +v;
		            $(this).val("" + updateInterval);
		        }
		
		    });
		
		    // setup plot
		    var options = {
		        yaxis: {
		            min: 0,
		            max: 100
		        },
		        xaxis: {
		            min: 0,
		            max: 100
		        },
		        colors: [$UpdatingChartColors],
		        series: {
		            lines: {
		                lineWidth: 1,
		                fill: true,
		                fillColor: {
		                    colors: [{
		                        opacity: 0.4
		                    }, {
		                        opacity: 0
		                    }]
		                },
		                steps: false
		
		            }
		        }
		    };
		
		    flot_updating_chart = $.plot($("#updating-chart"), [getRandomData()], options);
		
		    /* live switch */
		    $('input[type="checkbox"]#start_interval').click(function () {
		        if ($(this).prop('checked')) {
		            $on = true;
		            updateInterval = 1500;
		            update();
		        } else {
		            clearInterval(updateInterval);
		            $on = false;
		        }
		    });
		
		    function update() {

				try {
			        if ($on == true) {
			            flot_updating_chart.setData([getRandomData()]);
			            flot_updating_chart.draw();
			            setTimeout(update, updateInterval);
			
			        } else {
			            clearInterval(updateInterval)
			        }
				}
				catch(err) {
				    clearInterval(updateInterval);
				}
		
		    }
		
		    var $on = false;
		
		    /*end updating chart*/
		
		    /* TAB 2: Social Network  */
		
		    $(function () {
		        // jQuery Flot Chart
		        var twitter = [
		            [1, 27],
		            [2, 34],
		            [3, 51],
		            [4, 48],
		            [5, 55],
		            [6, 65],
		            [7, 61],
		            [8, 70],
		            [9, 65],
		            [10, 75],
		            [11, 57],
		            [12, 59],
		            [13, 62]
		        ],
		            facebook = [
		                [1, 25],
		                [2, 31],
		                [3, 45],
		                [4, 37],
		                [5, 38],
		                [6, 40],
		                [7, 47],
		                [8, 55],
		                [9, 43],
		                [10, 50],
		                [11, 47],
		                [12, 39],
		                [13, 47]
		            ],
		            data = [{
		                label: "Twitter",
		                data: twitter,
		                lines: {
		                    show: true,
		                    lineWidth: 1,
		                    fill: true,
		                    fillColor: {
		                        colors: [{
		                            opacity: 0.1
		                        }, {
		                            opacity: 0.13
		                        }]
		                    }
		                },
		                points: {
		                    show: true
		                }
		            }, {
		                label: "Facebook",
		                data: facebook,
		                lines: {
		                    show: true,
		                    lineWidth: 1,
		                    fill: true,
		                    fillColor: {
		                        colors: [{
		                            opacity: 0.1
		                        }, {
		                            opacity: 0.13
		                        }]
		                    }
		                },
		                points: {
		                    show: true
		                }
		            }];
		
		        var options = {
		            grid: {
		                hoverable: true
		            },
		            colors: ["#568A89", "#3276B1"],
		            tooltip: true,
		            tooltipOpts: {
		                //content : "Value <b>$x</b> Value <span>$y</span>",
		                defaultTheme: false
		            },
		            xaxis: {
		                ticks: [
		                    [1, "JAN"],
		                    [2, "FEB"],
		                    [3, "MAR"],
		                    [4, "APR"],
		                    [5, "MAY"],
		                    [6, "JUN"],
		                    [7, "JUL"],
		                    [8, "AUG"],
		                    [9, "SEP"],
		                    [10, "OCT"],
		                    [11, "NOV"],
		                    [12, "DEC"],
		                    [13, "JAN+1"]
		                ]
		            },
		            yaxes: {
		
		            }
		        };
		
		        flot_statsChart = $.plot($("#statsChart"), data, options);
		    });
		
		    // END TAB 2
		
		    // TAB THREE GRAPH //
		    /* TAB 3: Revenew  */
		
		    $(function () {
		
		        var trgt = [
		            [1354586000000, 153],
		            [1364587000000, 658],
		            [1374588000000, 198],
		            [1384589000000, 663],
		            [1394590000000, 801],
		            [1404591000000, 1080],
		            [1414592000000, 353],
		            [1424593000000, 749],
		            [1434594000000, 523],
		            [1444595000000, 258],
		            [1454596000000, 688],
		            [1464597000000, 364]
		        ],
		            prft = [
		                [1354586000000, 53],
		                [1364587000000, 65],
		                [1374588000000, 98],
		                [1384589000000, 83],
		                [1394590000000, 980],
		                [1404591000000, 808],
		                [1414592000000, 720],
		                [1424593000000, 674],
		                [1434594000000, 23],
		                [1444595000000, 79],
		                [1454596000000, 88],
		                [1464597000000, 36]
		            ],
		            sgnups = [
		                [1354586000000, 647],
		                [1364587000000, 435],
		                [1374588000000, 784],
		                [1384589000000, 346],
		                [1394590000000, 487],
		                [1404591000000, 463],
		                [1414592000000, 479],
		                [1424593000000, 236],
		                [1434594000000, 843],
		                [1444595000000, 657],
		                [1454596000000, 241],
		                [1464597000000, 341]
		            ],
		            toggles = $("#rev-toggles"),
		            target = $("#flotcontainer");
		
		        var data = [{
		            label: "Target Profit",
		            data: trgt,
		            bars: {
		                show: true,
		                align: "center",
		                barWidth: 30 * 30 * 60 * 1000 * 80
		            }
		        }, {
		            label: "Actual Profit",
		            data: prft,
		            color: '#3276B1',
		            lines: {
		                show: true,
		                lineWidth: 3
		            },
		            points: {
		                show: true
		            }
		        }, {
		            label: "Actual Signups",
		            data: sgnups,
		            color: '#71843F',
		            lines: {
		                show: true,
		                lineWidth: 1
		            },
		            points: {
		                show: true
		            }
		        }]
		
		        var options = {
		            grid: {
		                hoverable: true
		            },
		            tooltip: true,
		            tooltipOpts: {
		                //content: '%x - %y',
		                //dateFormat: '%b %y',
		                defaultTheme: false
		            },
		            xaxis: {
		                mode: "time"
		            },
		            yaxes: {
		                tickFormatter: function (val, axis) {
		                    return "$" + val;
		                },
		                max: 1200
		            }
		
		        };
		
		        flot_multigraph = null;
		
		        function plotNow() {
		            var d = [];
		            toggles.find(':checkbox').each(function () {
		                if ($(this).is(':checked')) {
		                    d.push(data[$(this).attr("name").substr(4, 1)]);
		                }
		            });
		            if (d.length > 0) {
		                if (flot_multigraph) {
		                    flot_multigraph.setData(d);
		                    flot_multigraph.draw();
		                } else {
		                    flot_multigraph = $.plot(target, d, options);
		                }
		            }
		
		        };
		
		        toggles.find(':checkbox').on('change', function () {
		            plotNow();
		        });

		        plotNow()
		
		    });
		
		}
		
		/*
		 * VECTOR MAP
		 */
		
		data_array = {
		    "US": 4977,
		    "AU": 4873,
		    "IN": 3671,
		    "BR": 2476,
		    "TR": 1476,
		    "CN": 146,
		    "CA": 134,
		    "BD": 100
		};
		
		// Load Map dependency 1 then call for dependency 2 and then run renderVectorMap function
		loadScript("js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js", function(){
			loadScript("js/plugin/vectormap/jquery-jvectormap-world-mill-en.js", renderVectorMap);
		});
		

		
	};
	
	// end pagefunction

	// destroy generated instances 
	// pagedestroy is called automatically before loading a new page
	// only usable in AJAX version!

	var pagedestroy = function(){
		
		// destroy calendar
		calendar.fullCalendar('destroy');
		calendar = null;

		//destroy flots
		flot_updating_chart.shutdown();  
		flot_updating_chart=null;
		flot_statsChart.shutdown(); 
		flot_statsChart = null;

		flot_multigraph.shutdown(); 
		flot_multigraph = null;

		// destroy vector map objects
		$('#vector-map').find('*').addBack().off().remove();

		// destroy todo
		$("#sortable1, #sortable2").sortable("destroy");
		$('.todo .checkbox > input[type="checkbox"]').off();

		// destroy misc events
		$("#rev-toggles").find(':checkbox').off();
		$('#chat-container').find('*').addBack().off().remove();

		// debug msg
		if (debugState){
			root.console.log("✔ Calendar, Flot Charts, Vector map, misc events destroyed");
		} 

	}

	// end destroy
	
	// run pagefunction on load
	pagefunction();
	
	
</script>
