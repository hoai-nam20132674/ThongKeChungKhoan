/** *************Init JS*********************
	Dùng cho toàn  trang
    TABLE OF CONTENTS
	---------------------------
	1.Ready function
	2.Load function
	3.Full height function
	4.doodle function
	5.Chat App function
	6.Resize function
 ** ***************************************/

 "use strict";
/*****Ready function start*****/
$(document).ready(function(){
	doodle();
	$('.preloader-it > .la-anim-1').addClass('la-animate');
});
/*****Ready function end*****/

$('[rel="tooltip"]').tooltip();
$('.select2').select2();
$('[data-toggle="popover"]').popover()

/*****Load function start*****/
$(window).load(function(){
	$(".preloader-it").delay(500).fadeOut("slow");
	/*Progress Bar Animation*/
	var progressAnim = $('.progress-anim');
	if( progressAnim.length > 0 ){
		for(var i = 0; i < progressAnim.length; i++){
			var $this = $(progressAnim[i]);
			$this.waypoint(function() {
			var progressBar = $(".progress-anim .progress-bar");
			for(var i = 0; i < progressBar.length; i++){
				$this = $(progressBar[i]);
				$this.css("width", $this.attr("aria-valuenow") + "%");
			}
			}, {
			  triggerOnce: true,
			  offset: 'bottom-in-view'
			});
		}
	}
});
/*****Load function* end*****/

/***** Full height function start *****/
var setHeightWidth = function () {
	var height = $(window).height();
	var width = $(window).width();
	$('.full-height').css('height', (height));
	$('.page-wrapper').css('min-height', (height));

	/*Right Sidebar Scroll Start*/
	if(width<=1007){
		$('#chat_list_scroll').css('height', (height - 270));
		$('.fixed-sidebar-right .chat-content').css('height', (height - 279));
		$('.fixed-sidebar-right .set-height-wrap').css('height', (height - 219));

	}
	else {
		$('#chat_list_scroll').css('height', (height - 204));
		$('.fixed-sidebar-right .chat-content').css('height', (height - 213));
		$('.fixed-sidebar-right .set-height-wrap').css('height', (height - 153));
	}
	/*Right Sidebar Scroll End*/

	/*Vertical Tab Height Cal Start*/
	var verticalTab = $(".vertical-tab");
	if( verticalTab.length > 0 ){
		for(var i = 0; i < verticalTab.length; i++){
			var $this =$(verticalTab[i]);
			$this.find('ul.nav').css(
			  'min-height', ''
			);
			$this.find('.tab-content').css(
			  'min-height', ''
			);
			height = $this.find('ul.ver-nav-tab').height();
			$this.find('ul.nav').css(
			  'min-height', height + 40
			);
			$this.find('.tab-content').css(
			  'min-height', height + 40
			);
		}
	}
	/*Vertical Tab Height Cal End*/
};
/***** Full height function end *****/

/***** doodle function start *****/
var $wrapper = $(".wrapper");
var doodle = function(){

	/*Counter Animation*/
	var counterAnim = $('.counter-anim');
	if( counterAnim.length > 0 ){
		counterAnim.counterUp({ delay: 10,
        time: 1000});
	}

	/*Tooltip*/
	if( $('[data-toggle="tooltip"]').length > 0 )
		$('[data-toggle="tooltip"]').tooltip();

	/*Popover*/
	if( $('[data-toggle="popover"]').length > 0 )
		$('[data-toggle="popover"]').popover()


	/*Sidebar Collapse Animation*/
	var sidebarNavCollapse = $('.fixed-sidebar-left .side-nav  li .collapse');
	var sidebarNavAnchor = '.fixed-sidebar-left .side-nav  li a';
	$(document).on("click",sidebarNavAnchor,function (e) {
		if ($(this).attr('aria-expanded') === "false")
				$(this).blur();
		$(sidebarNavCollapse).not($(this).parent().parent()).collapse('hide');
	});

	/*Panel Remove*/
	$(document).on('click', '.close-panel', function (e) {
		var effect = $(this).data('effect');
			$(this).closest('.panel')[effect]();
		return false;
	});

	/*Accordion js*/
		$(document).on('show.bs.collapse', '.panel-collapse', function (e) {
		$(this).siblings('.panel-heading').addClass('activestate');
	});

	$(document).on('hide.bs.collapse', '.panel-collapse', function (e) {
		$(this).siblings('.panel-heading').removeClass('activestate');
	});

	/*Sidebar Navigation*/
	$(document).on('click', '#toggle_nav_btn,#open_right_sidebar,#setting_panel_btn', function (e) {
		$(".dropdown.open > .dropdown-toggle").dropdown("toggle");
		return false;
	});
	$(document).on('click', '#toggle_nav_btn', function (e) {
		$wrapper.removeClass('open-right-sidebar open-setting-panel').toggleClass('slide-nav-toggle');
		return false;
	});

	$(document).on('click', '#open_right_sidebar', function (e) {
		$wrapper.toggleClass('open-right-sidebar').removeClass('open-setting-panel');
		return false;

	});

	$(document).on('click','.product-carousel .owl-nav',function(e){
		return false;
	});

	$(document).on('click', 'body', function (e) {
		if($(e.target).closest('.fixed-sidebar-right,.setting-panel').length > 0) {
			return;
		}
		$('body > .wrapper').removeClass('open-right-sidebar open-setting-panel');
		return;
	});

	$(document).on('show.bs.dropdown', '.nav.navbar-right.top-nav .dropdown', function (e) {
		$wrapper.removeClass('open-right-sidebar open-setting-panel');
		return;
	});

	$(document).on('click', '#setting_panel_btn', function (e) {
		$wrapper.toggleClass('open-setting-panel').removeClass('open-right-sidebar');
		return false;
	});
	$(document).on('click', '#toggle_mobile_nav', function (e) {
		$wrapper.toggleClass('mobile-nav-open').removeClass('open-right-sidebar');
		return;
	});


	$(document).on("mouseenter mouseleave",".wrapper > .fixed-sidebar-left", function(e) {
		if (e.type == "mouseenter") {
			$wrapper.addClass("sidebar-hover");
		}
		else {
			$wrapper.removeClass("sidebar-hover");
		}
		return false;
	});

	$(document).on("mouseenter mouseleave",".wrapper > .setting-panel", function(e) {
		if (e.type == "mouseenter") {
			$wrapper.addClass("no-transition");
		}
		else {
			$wrapper.removeClass("no-transition");
		}
		return false;
	});

	/*Todo*/
	var random = Math.random();
	$(document).on("keypress","#add_todo",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0))  {
				$('<li class="todo-item"><div class="checkbox checkbox-success"><input type="checkbox" id="checkbox'+random+'"/><label for="checkbox'+random+'">' + $('.new-todo input').val() + '</label></div></li><li><hr class="light-grey-hr"/></li>').insertAfter(".todo-list li:last-child");
				$('.new-todo input').val('');
		} else if(e.which == 13) {
			alert('Please type somthing!');
		}
		return;
	});

	/*Chat*/
	$(document).on("keypress","#input_msg_send",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0)) {
			$('<li class="self mb-10"><div class="self-msg-wrap"><div class="msg block pull-right">' + $(this).val() + '<div class="msg-per-detail mt-5"><span class="msg-time txt-grey">3:30 pm</span></div></div></div><div class="clearfix"></div></li>').insertAfter(".fixed-sidebar-right .chat-content  ul li:last-child");
			$(this).val('');
		} else if(e.which == 13) {
			alert('Please type somthing!');
		}
		return;
	});
	$(document).on("keypress","#input_msg_send_widget",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0)) {
			$('<li class="self mb-10"><div class="self-msg-wrap"><div class="msg block pull-right">' + $(this).val() + '<div class="msg-per-detail mt-5"><span class="msg-time txt-grey">3:30 pm</span></div></div></div><div class="clearfix"></div></li>').insertAfter(".chat-for-widgets .chat-content  ul li:last-child");
			$(this).val('');
		} else if(e.which == 13) {
			alert('Please type somthing!');
		}
		return;
	});
	$(document).on("keypress","#input_msg_send_chatapp",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0)) {
			$('<li class="self mb-10"><div class="self-msg-wrap"><div class="msg block pull-right">' + $(this).val() + '<div class="msg-per-detail mt-5"><span class="msg-time txt-grey">3:30 pm</span></div></div></div><div class="clearfix"></div></li>').insertAfter(".chat-for-widgets-1 .chat-content  ul li:last-child");
			$(this).val('');
		} else if(e.which == 13) {
			alert('Please type asomthing!');
		}
		return;
	});

	$(document).on("click",".fixed-sidebar-right .chat-cmplt-wrap .chat-data",function (e) {
		$(".fixed-sidebar-right .chat-cmplt-wrap").addClass('chat-box-slide');
		return false;
	});
	$(document).on("click",".fixed-sidebar-right #goto_back",function (e) {
		$(".fixed-sidebar-right .chat-cmplt-wrap").removeClass('chat-box-slide');
		return false;
	});

	/*Chat for Widgets*/
	$(document).on("click",".chat-for-widgets.chat-cmplt-wrap .chat-data",function (e) {
		$(".chat-for-widgets.chat-cmplt-wrap").addClass('chat-box-slide');
		return false;
	});
	$(document).on("click","#goto_back_widget",function (e) {
		$(".chat-for-widgets.chat-cmplt-wrap").removeClass('chat-box-slide');
		return false;
	});
	/*Horizontal Nav*/
	$(document).on("show.bs.collapse",".top-fixed-nav .fixed-sidebar-left .side-nav > li > ul",function (e) {
		e.preventDefault();
	});

	/*Slimscroll*/
	$('.nicescroll-bar').slimscroll({height:'100%',color: '#878787', disableFadeOut : true,borderRadius:0,size:'4px',alwaysVisible:false});
	$('.message-nicescroll-bar').slimscroll({height:'229px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.message-box-nicescroll-bar').slimscroll({height:'350px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.product-nicescroll-bar').slimscroll({height:'346px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.app-nicescroll-bar').slimscroll({height:'162px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.todo-box-nicescroll-bar').slimscroll({height:'310px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.users-nicescroll-bar').slimscroll({height:'370px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.users-chat-nicescroll-bar').slimscroll({height:'257px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.chatapp-nicescroll-bar').slimscroll({height:'543px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.chatapp-chat-nicescroll-bar').slimscroll({height:'483px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});

	/*Refresh Init Js*/
	var refreshMe = '.refresh';
	$(document).on("click",refreshMe,function (e) {
		var panelToRefresh = $(this).closest('.panel').find('.refresh-container');
		var dataToRefresh = $(this).closest('.panel').find('.panel-wrapper');
		var loadingAnim = panelToRefresh.find('.la-anim-1');
		panelToRefresh.show();
		setTimeout(function(){
			loadingAnim.addClass('la-animate');
		},100);
		function started(){} //function before timeout
		setTimeout(function(){
			function completed(){} //function after timeout
			panelToRefresh.fadeOut(800);
			setTimeout(function(){
				loadingAnim.removeClass('la-animate');
			},800);
		},1500);
		  return false;
	});

	/*Fullscreen Init Js*/
	$(document).on("click",".full-screen",function (e) {
		$(this).parents('.panel').toggleClass('fullscreen');
		$(window).trigger('resize');
		return false;
	});

	/*Nav Tab Responsive Js*/
	$(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function(e) {
		var $target = $(e.target);
		var $tabs = $target.closest('.nav-tabs-responsive');
		var $current = $target.closest('li');
		var $parent = $current.closest('li.dropdown');
			$current = $parent.length > 0 ? $parent : $current;
		var $next = $current.next();
		var $prev = $current.prev();
		$tabs.find('>li').removeClass('next prev');
		$prev.addClass('prev');
		$next.addClass('next');
		return;
	});
};
/***** doodle function end *****/

/***** Chat App function Start *****/
var chatAppTarget = $('.chat-for-widgets-1.chat-cmplt-wrap');
var chatApp = function() {
	$(document).on("click",".chat-for-widgets-1.chat-cmplt-wrap .chat-data",function (e) {
		var width = $(window).width();
		if(width<=1007) {
			chatAppTarget.addClass('chat-box-slide');
		}
		return false;
	});
	$(document).on("click","#goto_back_widget_1",function (e) {
		var width = $(window).width();
		if(width<=1007) {
			chatAppTarget.removeClass('chat-box-slide');
		}
		return false;
	});
};
/***** Chat App function End *****/

var boxLayout = function() {
	if((!$wrapper.hasClass("rtl-layout"))&&($wrapper.hasClass("box-layout")))
		$(".box-layout .fixed-sidebar-right").css({right: $wrapper.offset().left + 300});
		else if($wrapper.hasClass("box-layout rtl-layout"))
			$(".box-layout .fixed-sidebar-right").css({left: $wrapper.offset().left});
}
boxLayout();

/**Only For Setting Panel Start**/
var fixedHeader = function() {
	if($(".setting-panel #switch_3").is(":checked")) {
		$wrapper.addClass("scrollable-nav");
	} else {
		$wrapper.removeClass("scrollable-nav");
	}
};
fixedHeader();
$(document).on('change', '.setting-panel #switch_3', function () {
	fixedHeader();
	return false;
});

/*Theme Color Init*/
$(document).on('click', '.theme-option-wrap > li', function (e) {
	$(this).addClass('active-theme').siblings().removeClass('active-theme');
	$wrapper.removeClass (function (index, className) {
		return (className.match (/(^|\s)theme-\S+/g) || []).join(' ');
	}).addClass($(this).attr('id')+'-active');
	return false;
});

/*Primary Color Init*/
var primaryColor = 'input:radio[name="radio-primary-color"]';
if( $('input:radio[name="radio-primary-color"]').length > 0 ){
	$(primaryColor)[0].checked = true;
	$(document).on('click',primaryColor, function (e) {
		$wrapper.removeClass (function (index, className) {
			return (className.match (/(^|\s)pimary-color-\S+/g) || []).join(' ');
		}).addClass($(this).attr('id'));
		return;
	});
}

/*Reset Init*/
$(document).on('click', '#reset_setting', function (e) {
	$('.theme-option-wrap > li').removeClass('active-theme').first().addClass('active-theme');
	$wrapper.removeClass (function (index, className) {
		return (className.match (/(^|\s)theme-\S+/g) || []).join(' ');
	}).addClass('theme-1-active');
	if($(".setting-panel #switch_3").is(":checked"))
		$('.setting-panel .layout-switcher .switchery').trigger('click');
		$('#pimary-color-red').trigger('click');
	return false;
});


/*Switchery Init*/
var elems = Array.prototype.slice.call(document.querySelectorAll('.setting-panel .js-switch'));
$('.setting-panel .js-switch').each(function() {
	new Switchery($(this)[0], $(this).data());
});

/*Only For Setting Panel end*/

/***** Resize function start *****/
$(window).on("resize", function () {
	setHeightWidth();
	boxLayout();
	chatApp();
}).resize();
/***** Resize function end *****/


$('.confirmForm').on('click',function(e){
	e.preventDefault();
	var form = $(this).parents('form');
	swal({
	   title: "Bạn chắc chứ?",
	   type: "warning",
	   showCancelButton: true,
	   confirmButtonColor: "#DD6B55",
	   confirmButtonText: "OK",
	   closeOnConfirm: false,
	   showLoaderOnConfirm: true
	}, function(isConfirm){
	   if (isConfirm) form.submit();
	});
	});
	// xác nhận cho thẻ a
	$('.confirmHref').on('click',function(e){
	e.preventDefault();
	var href = $(this).attr('href');
	swal({
	title: "Bạn chắc chứ?",
	type: "warning",
	showCancelButton: true,
	confirmButtonColor: "#DD6B55",
	confirmButtonText: "OK",
	closeOnConfirm: false,
	showLoaderOnConfirm: true
	}, function(isConfirm){
	 if (isConfirm){
	    window.location.href = href;
	 }
	});
	});


// tuùy biến thêm
function gNoti(content) {
	$.toast({
		text : "<h5 style='color: #fff; margin-bottom: 10px;'>Thông báo</h5><p><small style='color: #fff'>" + content + "</small></p>",
		bgColor : '#469408',              // Background color for toast
		textColor : '#fff',            // text color
		allowToastClose : true,       // Show the close button or not
		hideAfter : 4000,              // `false` to make it sticky or time in miliseconds to hide after
		stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
		textAlign : 'left',            // Alignment of text i.e. left, right, center
		position : 'top-right'       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
	})
}
jQuery(document).ready(function($) {
	select2_ajax();
	function select2_ajax () {
		$('.select2-ajax').each(function( index ) {
			var _url         = $(this).data('url');
			var _type        = $(this).data('type');
			var _placeholder = $(this).attr('placeholder');
			var _num = 1;
			if (_type == 'user') {
			var _formatRepo          = formatRepo;
			var _formatRepoSelection = formatRepoSelection;
			}else if(_type == 'bank'){
			var _formatRepo          = formatRepoBank;
			var _formatRepoSelection = formatRepoSelectionBank;
			}else if(_type == 'order'){
			var _formatRepo          = formatRepoOrder;
			var _formatRepoSelection = formatRepoSelectionOrder;
			}else if(_type == 'shop'){
			var _formatRepo          = formatRepoShop;
			var _formatRepoSelection = formatRepoSelectionShop;
			} else if(_type == 'province'){
			var _formatRepo          = formatRepoProvince;
			var _formatRepoSelection = formatRepoSelectionProvince;
			} else if(_type == 'local'){
			var _formatRepo          = formatRepoProvinceLocal;
			var _formatRepoSelection = formatRepoSelectionProvinceLocal;
			_num = 0;
			}

			$(this).select2({
			ajax: {
			   url: _url,
			   dataType: 'json',
			   delay: 500,
			   cache : true,
			   data: function (params) {
			      if(_type == 'local') {
			         return {
			            q: params.term, // search term
			            page: params.page,
			            provinceid: $('.select2-province').val(),
			            districtid: $('.select2-district').val()
			         };
			      }
			      return {
			         q: params.term, // search term
			         page: params.page
			      };
			   },
			   processResults: function (data, params) {
			      params.page = params.page || 1;
			      console.log(data);
			      console.log(params);
			      return {
			         results: data.items,
			         pagination: {
			            more: (params.page * 10) < data.total_count
			         }
			      };
			   }
			},
			escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
			minimumInputLength: _num,
			templateResult: _formatRepo, // omitted for brevity, see the source of this page
			templateSelection: _formatRepoSelection, // omitted for brevity, see the source of this page
			placeholder: _placeholder,
			allowClear: true
			});
	 	});

		$(".select2-ajax-local").on("select2:open", function() {
		     $(".select2-search__field").attr("placeholder", "Tìm kiếm");
		});

	}

	function formatRepo (repo) {
	if (repo.loading) return repo.text;

	var markup = "<div class='select2-result-repository clearfix'>" +
	 "<div class='select2-result-repository__name'>" + repo.name + "</div>" +
	 "<div class='select2-result-repository__phone'>" + repo.phone + "</div>" +
	 "<div class='select2-result-repository__email'>" + repo.email + "</div>";
	return markup;
	}
	function formatRepoBank (repo) {
	if (repo.loading) return repo.text;

	var markup = "<div class='select2-result-repository clearfix'>" +
	 "<div class='select2-result-repository__name'>" + repo.name + "</div>" +
	 "<div class='select2-result-repository__phone'>" + repo.account + "</div>" +
	 "<div class='select2-result-repository__email'>" + repo.number + "</div>";
	return markup;
	}
	function formatRepoOrder (repo) {
	if (repo.loading) return repo.text;

	var markup = "<div class='select2-result-repository clearfix'>" +
	 "<div class='select2-result-repository__id'>" + repo.id + "</div>";
	return markup;
	}
	function formatRepoSelection (repo) {
	return repo.email || repo.text;
	}
	function formatRepoSelectionBank (repo) {
	return repo.name || repo.text;
	}
	function formatRepoSelectionOrder (repo) {
	return repo.id || repo.text;
	}

	function formatRepoShop (repo) {
	if (repo.loading) return repo.text;

	var markup = "<div class='select2-result-repository clearfix'>" +
	 "<div class='select2-result-repository__name'>" + repo.name + "</div>"
	return markup;
	}
	function formatRepoSelectionShop (repo) {
	return repo.name || repo.text;
	}
	function formatRepoProvince (repo) {
	if (repo.loading) return repo.text;

	var markup = "<div class='select2-result-repository clearfix'>" +
	 "<div class='select2-result-repository__name'>" + repo.id + " - " + repo.name + "</div>" +
	 "</div>";
	return markup;
	}
	function formatRepoSelectionProvince (repo) {
	return repo.name || repo.text;
	}

	$('.datepicker').datepicker({
		format: "dd-mm-yyyy",
		todayBtn: true,
		clearBtn: true,
		language: "vi",
		autoclose: true,
		todayHighlight: true
	});

	$('.datetimeselector').datetimepicker({
	  format: 'DD-MM-YYYY HH:mm:ss',
	  showTodayButton: true,
	  showClear: true,
	  dayViewHeaderFormat: 'DD-MM-YYYY HH:mm:ss',
	});

	$('.datetimeselector-en').datetimepicker({
	  format: 'YYYY-MM-DD HH:mm:ss',
	  showTodayButton: true,
	  showClear: true,
	  dayViewHeaderFormat: 'YYYY-MM-DD HH:mm:ss',
	});

    // Fix js của dropdown
    $('a.t-dropdown').on('click', function (event) {
    	event.stopPropagation();
	    $(this).parent().toggleClass("open");
	    console.log($(this).parent());
	});

	$('body').on('click', function (e) {
	    if (!$('a.t-dropdown').is(e.target) && $('a.t-dropdown').has(e.target).length === 0 && $('.open').has(e.target).length === 0) {
	        $('.dropdown').removeClass('open');
	    }
	});
	// End
	// xedit-able dùng chung
	$.fn.editable.defaults.mode = 'popup';

	$.each($('.x-editable1'), function(index, val) {
		if($(this).text() != '' && typeof $(this).text !== 'undefined') {
			var editText1 = $(this).text() + " <i class='ti-pencil'></i>";
		} else {
			editText1 = '<span style="color: #ccc !important;">Mời bạn nhập</span> <i class="ti-pencil"></i>';
		}
	    $(this).html(editText1);
	});

	$.each($('.x-editable1-select'), function(index, val) {
		var editText1 = $(this).text() + " <i class='ti-pencil'></i>";
	    $(this).html(editText1);
	});
});

$.fn.editable.defaults.params = function (params) {
    params._token = $("body").attr("data-token");
    return params;
};

function xEditable1(callback) {
	$('.x-editable1').editable({
		onblur : "submit",
	    ajaxOptions: {
	        type: 'POST',
	        dataType: 'JSON'
	    },
		emptytext: '<span style="color: #ccc !important;">Mời bạn nhập</span> <i class="ti-pencil"></i>',
	    title: 'Change value to',
	    type: 'text',
	    success: function(response, newValue) {
	    	if(typeof response.error !== 'undefined' && response.error == 1) {
	    		swal(response.message);
	    		return response.message;
	    	} else {
	    		if(typeof response.message !== 'undefined') 
		    		gNoti(response.message);
		    	if(typeof response.text !== 'undefined') 
		    		gNoti(response.text);
	    	}
	    }
	});
}

function xEditable1Select() {
	$('.x-editable1-select').editable({
		success: function(response) {
			gNoti(response.message);
		}
	});
}

$('.x-editable-reload-all').editable({
	ajaxOptions: {
	    type: 'POST',
	    dataType: 'JSON'
	},
	emptytext: '<span style="color: #ccc !important;">Mời bạn nhập</span> <i class="ti-pencil"></i>',
	title: 'Change value to',
	type: 'text',
	success: function(response, newValue) {
		if(typeof response.error !== 'undefined' && response.error == 1) {
			swal(response.message);
		} else {
			gNoti(response.message);
		}
		window.location.reload();
	}
});

function tConfirm(callback, message) {
	if(typeof message === 'undefined') {
		message = 'Bạn chắc chứ';
	}
    swal({
        title: 'Thông báo',
        text: message,
        type: "warning",
        html: true,
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "OK",
        cancelButtonText: "Cancel",
        showLoaderOnConfirm: true,
        closeOnConfirm: true
    }, function() {
        callback();
    });
}

//loading che màn hình
function tLoading() {
    var tail = "<div style='background: rgba(1, 1, 1, .2); position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 99939;' id='my_loading' class='my_loading'><a style=' position: absolute; top: 45%; left: 46%; z-index: 99999; color: #fff;'><i class='fa fa-spinner fa-spin fa-3x' aria-hidden='true'></i></a></div>";
    $('body').append(tail);
}
function rmLoading() {
    $('.my_loading').remove();
}


$('#disableEnter').on('keyup keypress', function(e) {
	var code = e.keyCode || e.which;
	if (code == 13) { 
		e.preventDefault();
		return false;
	}
});
var inputOption = {
    placeholder: '',
    digitsOptional: false,
    digits: 0,
    autoGroup: true,
    groupSeparator: ',',
    autoUnmask: true,
    removeMaskOnSubmit: true
};
jQuery(document).ready(function($) {
    $("input.money").inputmask('numeric', inputOption);
    $("input.money-decimal").inputmask('numeric', {
        placeholder: '',
        digitsOptional: false,
        digits: 2,
        autoGroup: true,
        groupSeparator: ',',
        autoUnmask: true,
        removeMaskOnSubmit: true
    });
});

function formatNumber (number, places, thousand, decimal) {
    number = number || 0
    places = !isNaN(places = Math.abs(places)) ? places : 2
    thousand = thousand || ','
    decimal = decimal || '.'
    var negative = number < 0 ? '-' : ''
    var i = parseInt(number = Math.abs(+number || 0).toFixed(places), 10) + ''
    var j = (j = i.length) > 3 ? j % 3 : 0
    return negative + (j ? i.substr(0, j) + thousand : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, '$1' + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : '')
}
function removeComma (number) {
    return number.replace(/,/g, '');
}

$(document).ajaxStop(function() {
	// $("a.btn-link").fancybox();
	
	/* Using custom settings */
	
	// $("a#inline").fancybox({
	// 	'hideOnContentClick': true
	// });

	/* Apply fancybox to multiple items */
	
	$("a.btn-fancy-box").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	200, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
});
