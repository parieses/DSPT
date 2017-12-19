/**
 * 鍟嗗鍚庡彴鍩虹js鏂囦欢
 */
;(function(ecjia, $) {
	ecjia.merchant = {
			
		init : function() {
	        $('html').addClass('loadding').find('.main_content').css('opacity',1);
	        setTimeout(function(){
	        	$('html').removeClass('pjaxLoadding-busy loadding').find('.main_content').css('transition','all 0 ease 0');
	        }, 500);

            /* 璁剧疆ajax鎻愪氦榛樿椤� */ 
            ecjia.merchant.set_ajax_submit_option();

            /* 璁剧疆鎻愮ず鎻掍欢 */
            ecjia.merchant.set_sticky();

			/* 鏂板鍏ㄥ眬璺宠浆鎻愮ず鏂规硶 */
			ecjia.merchant.alert_go();

			/* to top */
			$().UItoTop({inDelay:200,outDelay:200,scrollSpeed: 500});

			$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
			
			ecjia.merchant.search();
		},
		
		/* ecjia merchant涓嬶紝榛樿鐨刼ption鍙傛暟 */
		defaultOptions : {
			validate : {
				onkeyup: false,
				errorPlacement: function(error, element) {
					error.appendTo( element.closest("div.controls") );
				},
				highlight: function(element) {
					$(element).closest("div.form-group").addClass("error f_error");
					var thisStep = $(element).closest('form').prev('ul').find('.current-step');
					thisStep.addClass('error-image');
				},
				unhighlight: function(element) {
					$(element).closest("div.form-group").removeClass("error f_error");
					if (!$(element).closest('form').find('div.error').length) {
						var thisStep = $(element).closest('form').prev('ul').find('.current-step');
						thisStep.removeClass('error-image');
					};
				}
			}
		},

        set_ajax_submit_option : function() {
            $.ajaxSettings.error = function(data) {
              var info = admin_lang.request_failed + data.status + admin_lang.error_msg + data.statusText;
                ecjia.merchant.showmessage({state: 'error', message:info});
            };
        },

        /**
         * 璁剧疆ECJia鍚庡彴鐜鏀寔鏂规硶
         */
        set_sticky : function() {
            if (!ecjia.merchant.sticky && $.fn.sticky) 
            	ecjia.merchant.sticky = function(note, options, callback) { 
            	return $.fn.sticky(note, options, callback);
            };
        },

		/**
		 * 璺宠浆鎻愮ず鏂规硶
		 */
		alert_go : function() {
			$('a[data-toggle="alertgo"]').on('click', function(e) {
				e.preventDefault();
				var $this = $(this),
				message = $this.attr('data-message') || admin_lang.confirm_jump,
				href 	= $this.attr('href') || '#';
				smoke.confirm(message, function(e){
					e && ecjia.pjax(href);
				}, {ok:admin_lang.ok, cancel:admin_lang.cancel});
			});
		},

		/**
		 * 灞曠ず淇℃伅锛屾垚鍔熷拰澶辫触銆�
		 */
		showmessage : function(options) {
			var defaults = {
				message		: false,												/* message 鎻愮ず淇℃伅 */
				state		: 'success',											/* state 淇℃伅鐘舵€� */
				links		: false,												/* links 閾炬帴瀵硅薄 */
				close		: true,													/* close 鏄惁鍙互鍏抽棴 */
				$areaobj	: $('.breadcrumb') || $('.main_content'),				/* $areaobj 鏄剧ず鎻愮ず淇℃伅鐨勫湴鏂� */
				areaobj		: $('.breadcrumb') ? '.breadcrumb' : '.main_content',	/* areaobj 鏄剧ず鎻愮ず淇℃伅鐨勫湴鏂圭殑鍚嶇О */
				pjaxurl		: '',													/* pjax鍒锋柊椤甸潰鍚庢樉绀簃essage鐨勬椂鍊欎紶閫掔殑pjaxURL鍙傛暟 */
				close_self	: 5000,													/* 鑷姩鍏抽棴鎻愮ず鍐呭 */
			};

			var options = $.extend({}, defaults, options);

			var tmp = '<p>';

			if (!options.message) {
				options.message = (options.state == 'error') ? admin_lang.fail : admin_lang.success;
			}

			options.state = (options.state == 'error')? 'alert-danger': 'alert-success';

			if (options.links) {
				for (var i = 0; i < options.links.length; i++) {
					tmp += '<a class="data-pjax m_r15 ecjiafc-34495e" href="' + options.links[i].href + '">' + options.links[i].text + '</a>';
				}
				tmp += '</p>';
				options.message = '<p>' + options.message + '</p>' + tmp;
			}
			var _close = options.close ? '<a class="close" data-dismiss="alert">脳</a>' : '';

			var alert_obj = $('<div class="staticalert alert alert-dismissable ' + options.state + ' ui_showmessage">' + _close + options.message + '</div>');
			
			options.close_self >= 1000 && !options.links && window.setTimeout(function() {alert_obj.remove();}, options.close_self);

			options.pjaxurl &&  ecjia.pjax(options.pjaxurl,function() { $(options.areaobj).after(alert_obj); return; });

			$('.ui_showmessage').find('.close').parent().remove();
			options.$areaobj.after(alert_obj);
			$('#toTop').trigger('click');

				// var alert_obj = $('<div class="staticalert alert '+options.state+' ui_showmessage">' + _close + options.message + '</div>');
				// var alert_obj = $('<div class="staticalert alert '+options.state+' ui_showmessage">' + _close + options.message + '</div>');
				// $('#toTop').trigger('click');
		},



		save_sortIndex : function(name) {
			var elem = [];
			$('.move-mod').not('.not_sortable').each(function() {
				elem.push($(this).sortable("toArray"));
			});
			
			var str = '',
				m_len = elem.length;
			
			$.each(elem, function(index,value) {
				var s_len = value.length;
				if (value == '') {
					str += 'null';
				} else {
					$.each(value, function(index,value) {
						str += value;
						if  (index != s_len - 1) {
							str += ",";
						}
					});
				}
				if (index != m_len - 1) {
					str += ";";
				}
			});

			var options = $.extend({}, {name : 'tmp', val : 'tmpinfo'}, {name : name, val : str}),
				sortIndex = JSON.parse($.cookie('ecjia_sortIndex')),
				is_merge = false,
				ecjia_sortIndex = [];

				for (var i in sortIndex) {
					if (sortIndex[i].name == options.name) {
						is_merge = true;
						sortIndex[i].val = options.val;
					}
					ecjia_sortIndex.push(sortIndex[i]);
				}

				if (!is_merge) {
					ecjia_sortIndex.push(options);
				}

			$.cookie('ecjia_sortIndex', JSON.stringify(ecjia_sortIndex), { expires: 31});
		},

		set_sortIndex : function(name) {
			var sortIndex = JSON.parse($.cookie('ecjia_sortIndex')),
				ecjia_sortIndex = null;

			for (var i in sortIndex) {
				if (name == sortIndex[i].name) {
					ecjia_sortIndex = sortIndex[i].val;
					break;
				}
			}

			if (ecjia_sortIndex != null) {
				$.each(ecjia_sortIndex.split(';'), function(i,id) {
					thisSortable = $('.move-mod').not('.not_sortable').get(i);
					if (id != 'null') {
						$.each(id.split(','), function(i,id) {
							$("#"+id).appendTo(thisSortable);
						});
					}
				});
			}
		},
		
		search : function () {
			$('.search_query').quicksearch(
				$('.search-nav li' ),
				{
					onAfter : function(){
						if ($.trim($('.search_query').val()) == '') {
							$('.search-nav').css('display','none');
							$('.search-nav li').not('.search_query_none').removeClass('isShow').css('display','none');
						} else {
							$('.search-nav').css('display','');
							$('.search-nav .isShow').length == 0 ? ($('.search_query').val() == '' ? $('.search_query_none').html('<a href="javascript:;">璇峰厛杈撳叆鎼滅储淇℃伅</a>').show() : $('.search_query_none').html('<a href="javascript:;">鏈悳绱㈠埌瀵艰埅淇℃伅</a>').show()) : $('.search_query_none').hide();
						}
						return;
					},
					show: function () {
						this.style.display = "";
						$(this).addClass('isShow');
					},
					hide: function () {
						this.style.display = "none";
						$(this).removeClass('isShow');
					},
				}
			);
		}
	};

    ecjia.pjaxloadding = function() {
        $('body').append('<div class="la-ball-atom"><div></div><div></div><div></div><div></div></div>');
    };

    ecjia.setpjax = function() {
		/* PJAX鍩虹閰嶇疆椤� */
		ecjia.pjaxoption = {
			timeout: 10000,
			container: '.main_content', /* 鍐呭鏇挎崲鐨勫鍣� */
			cache: false,  /* 鏄惁浣跨敤缂撳瓨 */
			storage: false,  /* 鏄惁浣跨敤鏈湴瀛樺偍 */
			titleSuffix: '' /* 鏍囬鍚庣紑 */
		};

		/* ecjia.pjax */
		ecjia.extend({
			pjax : function(url, callback) {
				var option = $.extend( ecjia.pjaxoption , { url : url, callback : callback } );
				$.pjax(option);
				delete ecjia.pjaxoption.url;
				delete ecjia.pjaxoption.callback;
			}
		});
		/* pjax鍒锋柊褰撳墠椤甸潰 */
		ecjia.pjax.reload = function() {
			$.pjax.reload(ecjia.pjaxoption.container, ecjia.pjaxoption);
		};
		/* 绉诲姩pjax鏂规硶鐨勮皟鐢紝浣跨敤document鍏冪礌濮旀淳pjax鐐瑰嚮浜嬩欢 */
		if ($.support.pjax) {
			$(document).on('click', 'a.data-pjax', function(event) {
				$.pjax.click(event, ecjia.pjaxoption.container, ecjia.pjaxoption);
			});
		}
    };

    ecjia.setpjax();
    
    /* 椤甸潰杞藉叆鍚庤嚜鍔ㄦ墽琛� */
	 $(function() {
	 	ecjia.merchant.init();
	 })

	//PJAX璺宠浆鎵ц
	$(document).on('pjax:complete', function() {
	});

	//PJAX寮€濮�
	$(document).on('pjax:start', function() {
        //澧炲姞涓€涓姞杞藉姩鐢�
        $('html').addClass('pjaxLoadding-busy');
	});

	//PJAX鍓嶈繘銆佽繑鍥炴墽琛�
	$(document).on('pjax:popstate', function() {
	});

	//PJAX鍘嗗彶鍜岃烦杞兘浼氭墽琛岀殑鏂规硶
	$(document).on('pjax:end', function() {
        $('html').addClass('loadding');
        setTimeout(function(){
        	$('html').removeClass('pjaxLoadding-busy loadding');
        }, 300);
	});

})(ecjia, jQuery);