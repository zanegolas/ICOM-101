<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "for lack of a better page"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "for lack of a better page"); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta property="og:image" content="<?php echo htmlspecialchars(($seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20200727132110" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20200727132110" rel="stylesheet" type="text/css" id="wb-site-stylesheet" />
	<link href="css/common.css?ts=1596019713" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1596019713" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />

	<ga-code/>

	<script type="text/javascript">
	window.useTrailingSlashes = true;
</script>

	

	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body class="site <?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php if (isset($wbLandingPage) && $wbLandingPage) echo ' data-landing-page="'.$wbLandingPage.'"'; ?>><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element wb-menu wb-menu-mobile wb-menu-hidden"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"></ul><div class="clearfix"></div></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance1" class="wb_element">
	<style>
		#wb_element_instance1_countdown_timer {
		    width: 100%;
		    height: 100%;
			font-family: 'Press Start 2P',Arial,display;
			font-size: 16.666666666667px;
			color: #ffffff;
			text-align: center;
			line-height: 100%;
			display: flex;
			justify-content: space-around;
			align-items: center;
			flex-wrap: wrap;
			 font-style: normal; 
			 font-weight: normal; 
			 text-decoration: none; 
	   	}
		@media all and (max-width: 320px) {
			#wb_element_instance1_countdown_timer {
				font-size: px;
			}
			#wb_element_instance1_countdown_timer .dlmtr {
				display: none;
			}
		}
		#wb_element_instance1_countdown_timer .dlmtr {
			display: inline-block;
			position: relative;
	    }
		#wb_element_instance1_countdown_timer .numblock {
			display: inline-block;
			position: relative;
			vertical-align: middle;
	    }
		#wb_element_instance1_countdown_timer .numblock .num {
	    	position: absolute;
	   		display: block;
			top: 0;
			left: 50%;
		    transform: translateX(-50%);
	    }
		#wb_element_instance1_countdown_timer .numblock .plchldr {
			color: transparent !important;
			opacity: 0;
			 font-style: normal; 
			 font-weight: normal; 
			 text-decoration: none; 
	    }
		#wb_element_instance1_countdown_timer .numblock:after {
			font-family: Helvetica,Arial,sans-serif;
			font-size: 12px;
			color: #ffffff;
			text-transform: capitalize;
			text-align: center;
			line-height: 100%;
			position: absolute;
				bottom: -15px;
			left: 50%;
			transform: translateX(-50%);
			 font-style: normal; 
			 font-weight: normal; 
			 text-decoration: none; 
		}
		#wb_element_instance1_countdown_timer .numblock.days:after {
			content: "days";
	    }
		#wb_element_instance1_countdown_timer .numblock.hours:after {
			content: "hours";
		}
		#wb_element_instance1_countdown_timer .numblock.mins:after {
			content: "minutes";
		}
		#wb_element_instance1_countdown_timer .numblock.secs:after {
			content: "seconds";
		}
		#wb_element_instance1_wb_caption {
		    width: 100%;
		    height: 100%;
			background-color: transparent !important;
			display: flex;
		    justify-content: center;
			align-items: center;
	    }
		#wb_element_instance1_wb_caption:before {
			content: "";
			display: inline-block;
			vertical-align: middle;
			height: auto;
		}
	</style><div class="wb_caption smaller" id="wb_element_instance1_wb_caption">
		<div id="wb_element_instance1_countdown_timer">
			<div class="numblock days"><span class="plchldr">8</span><span class="num"></span></div>
			<div class="dlmtr">:</div>
			<div class="numblock hours"><span class="plchldr">88</span><span class="num"></span></div>
			<div class="dlmtr">:</div>
			<div class="numblock mins"><span class="plchldr">88</span><span class="num"></span></div>
			<div class="dlmtr">:</div>
			<div class="numblock secs"><span class="plchldr">88</span><span class="num"></span></div>
		</div>
	</div>

<script type="text/javascript">
	var countDown_wb_element_instance1 = {
		start: function() {
			this.countDownBlock = $("#wb_element_instance1_countdown_timer");
			this.textAfterBlock = $("#wb_element_instance1_countdown_text_after");
			this.daysBlock = this.countDownBlock.find(".days .num");
			this.hoursBlock = this.countDownBlock.find(".hours .num");
			this.minsBlock = this.countDownBlock.find(".mins .num");
			this.secsBlock = this.countDownBlock.find(".secs .num");

			var timerDate = new Date(1616248800000);
			var currDate = new Date();

			var diff = timerDate.getTime() - currDate.getTime();
			this.diffDays = Math.floor(diff / (1000 * 60 * 60 * 24));
			diff = diff - 1000 * 60 * 60 * 24 * this.diffDays;
			this.diffHours = Math.floor(diff / (1000 * 60 * 60));
			diff = diff - 1000 * 60 * 60 * this.diffHours;
			this.diffMins = Math.floor(diff / (1000 * 60));
			diff = diff - 1000 * 60 * this.diffMins;
			this.diffSecs = Math.floor(diff / 1000);

			if (this.diffDays < 0 || this.diffHours < 0 || this.diffMins < 0 || this.diffSecs < 0
				|| (this.diffDays === 0 && this.diffHours === 0 && this.diffMins === 0 && this.diffSecs === 0))
			{
				if (window.countDownInterval_wb_element_instance1) clearInterval(window.countDownInterval_wb_element_instance1);
				this.daysBlock.text("0");
				this.hoursBlock.text("00");
				this.minsBlock.text("00");
				this.secsBlock.text("00");
			}
			else {
				this.daysBlock.text(this.diffDays);
				this.countDownBlock.find('.days .plchldr').text(this.diffDays);
				this.hoursBlock.text(this.pad(this.diffHours));
				this.minsBlock.text(this.pad(this.diffMins));
				this.secsBlock.text(this.pad(this.diffSecs));
				this.countDownBlock.show();
				this.textAfterBlock.hide();
				
				var self = this;
				if (window.countDownInterval_wb_element_instance1) clearInterval(window.countDownInterval_wb_element_instance1);
				window.countDownInterval_wb_element_instance1 = setInterval(function () {
					var ended = self.tick();
					if (ended) {
						clearInterval(window.countDownInterval_wb_element_instance1);
					};
					self.daysBlock.text(self.diffDays);
					self.hoursBlock.text(self.pad(self.diffHours));
					self.minsBlock.text(self.pad(self.diffMins));
					self.secsBlock.text(self.pad(self.diffSecs));
				}, 1000);
			}
		},
		pad: function(val) {
			if (("" + val).length === 1) {
				return '0' + val;
			}
			return val;
		},
		tick: function() {
			if (this.diffDays === 0 && this.diffHours === 0 && this.diffMins === 0 && this.diffSecs === 0) {
				return true;
			}
			else {
				if (this.diffSecs > 0) {
					this.diffSecs--;
				} else {
					this.diffSecs = 59;
					if (this.diffMins > 0) {
						this.diffMins--;
					} else {
						this.diffMins = 59;
						if (this.diffHours > 0) {
							this.diffHours--;
						} else {
							this.diffHours = 23;
							if (this.diffDays > 0) {
								this.diffDays--;
							}
						}
					}
				}
			}
			return false;
		}
	};
	countDown_wb_element_instance1.start();
	var cBlock = $('#wb_element_instance1_countdown_timer');
	var isAutoLayout = $('#wb_element_instance1').hasClass('wb-cs-elem');
	var height = parseInt('30');
	var getBlockHeight = function() {
		if (isAutoLayout) {
			return height / 1000 * $(window).width();
		} else {
			return cBlock.outerHeight();
		}
	};
	$(window).resize(function () {
		var h = getBlockHeight();
		cBlock.css('fontSize', (h/1.8)+'px');
	});
	$(window).resize();
</script></div><div id="wb_element_instance2" class="wb_element"><a class="wb_button" href="https://mailchi.mp/f5dae28bebb6/spam-list"><span>Steal My Identity</span></a></div><div id="wb_element_instance3" class="wb_element wb_element_picture" title=""><img alt="gallery/Root Logo2" src="gallery_gen/6adccfa15aea22b1549c08e1ec721403_1011x1004.png"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 80px;"><div id="wb_element_instance4" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
