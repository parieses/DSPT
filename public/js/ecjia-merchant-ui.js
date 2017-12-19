/**
 * ecjiaUI缁勪欢妯″潡
 */
;(function(ecjia, $) {

	ecjia.merchant_ui = {
		editor_info : '',
		init : function(){
			if($('.admin-editor-container').length>0){
				$('.admin-editor-container').css({ clear: "none"});
			}
			ecjia.merchant_ui.check_pjax();
            ecjia.merchant_ui.set_sortable();
		},

        /**
         * 妫€鏌JAX
         */
        check_pjax : function() {
			if (!!(window.history && history.pushState)){
				// 鏀寔History API
			} else {
				// 涓嶆敮鎸�
                console.log('鎮ㄤ娇鐢ㄧ殑娴忚鍣ㄥ苟涓嶈兘寰堝ソ鐨勬敮鎸佹垜浠殑鏁堟灉锛岃鏇存崲娴忚鍣ㄨ闂垨寮€鍚祻瑙堝櫒history.pushState鎵╁睍銆�');
			}
        },

        /**
         * 璁剧疆鎺掑簭
         */
        set_sortable : function() {
			if( jQuery.isFunction(jQuery.fn.sortable) ){
				$('.move-mod').not('.nomove').sortable({
					connectWith: '.move-mod',
					// delay: 2,
					distance: 5,
					handle: '.move-mod-head',
					placeholder: 'ui-sortable-placeholder',
					items: ".move-mod-group:not(.not-move)",
					activate: function(event, ui) {
						$(".move-mod").addClass('sort_ph');
					},
					stop: function(event, ui) {
						$(".move-mod").removeClass('sort_ph');
					},
					sort: function() {
						$( this ).removeClass( "ui-state-default" );
					},
					update: function(e, ui) {
						var name = ui.item.find('.move-mod-head').attr('data-sortname');
						if (name) {
							ecjia.merchant.save_sortIndex(name);
						}
					}
				});
				$( ".move-mod-head" ).disableSelection();
			}
        },

		/**
		 * AJAX鍒犻櫎鏁版嵁鏂规硶
		 */
		ajax_remove : function(options){
			var defaults = {
				url	: false,					//url 鍒犻櫎璁块棶鐨剈rl鍦板潃
				id	: '',						//id  鍒犻櫎鐨勬暟鎹甶d
				msg	: admin_lang.confirm_del,	//msg 鍒犻櫎鏃剁殑鎻愮ず淇℃伅
				obj : '',						//obj 鍒犻櫎鍚庤绉婚櫎鐨勫厓绱�
			}

			var options = $.extend({}, defaults, options);
			// options.url, options.id ,options.msg ,options.obj
			if (!options.url) {
				smoke.alert(admin_lang.error);
				return false;
			}

			smoke.confirm(options.msg,function(e){
				if (e){
					$.get(options.url, options.id, function(data){
						// if(data.state == 'success'){
							// options.obj.remove();
							ecjia.pjax(window.location.href, function(){
								ecjia.merchant.showmessage(data);
							});
						// }
					}, 'json');
				}
			}, 
			{ok:admin_lang.ok, cancel:admin_lang.cancel});
		},

		/**
		 * batch 鎵归噺鎿嶄綔鏂规硶
		 */
		batch : function(options) {
			var defaults = {
				url			: false,					//url 			鎵归噺鎿嶄綔璁块棶鐨剈rl鍦板潃
				msg			: admin_lang.confirm,		//msg 			鎵归噺鎿嶄綔鐨勬彁绀轰俊鎭�
				noSelectMsg	: admin_lang.please_select,	//noSelectMsg	娌℃湁閫変腑椤圭殑鎻愮ず淇℃伅
				name		: 'checkboxes',				//name 			瀵瑰簲PHP鎿嶄綔涓幏鍙栫殑name
				id			: [],						//obj 			鎵归噺鎿嶄綔鐨勭敤鎴穒d鏁扮粍
			};

			var options = $.extend({}, defaults, options);
			if(!options.url || options.id.length == 0)return console.log(admin_lang.batch_error);
			var ajaxinfo = "{" + options.name + ":'" + options.id + "'}";
			ajaxinfo=eval("("+ajaxinfo+")");
			smoke.confirm(options.msg,function(e){
				if (e) {
					$.ajax({
						type: "POST",
						url: options.url,
						data: ajaxinfo,
						dataType: "json",
						success: function(data){
							ecjia.merchant.showmessage(data);
						}
					});
				}
			}, 
			{ok:admin_lang.ok, cancel:admin_lang.cancel});
		},

		/**
		 * sort 鎺掑簭鏂规硶
		 */
		sort : function(options){
			ecjia.pjax(options.url + "&sort_by=" + options.sort_by + "&sort_order=" + options.sort_order, function(){
				$('[data-sortby="'+options.sort_by+'"]').addClass(options.sortclass);
			});
		},

		/**
		 * clone_obj 鍏嬮殕娣诲姞涓€涓妭鐐圭殑鏂规硶
		 */
		clone_obj : function(options) {
			if (!options.parentobj) return console.log('鎵归噺鎿嶄綔缂哄皯鍙傛暟锛�');
			var tmpObj = options.parentobj.clone();
			tmpObj.find('[data-toggle="clone-obj"]')
				.attr('data-toggle','remove-obj').on('click', function(){tmpObj.remove();})
				.find('i').attr('class', 'fa fa-times ecjiafc-red');

			(options.before == 'before') ? options.parentobj.before(tmpObj) : options.parentobj.after(tmpObj);

			tmpObj.find('.chzn-container').remove();
			tmpObj.find('select').removeClass('chosen_hide').removeClass('chzn-done').attr({'id' : ''}).chosen();
			//娓呯┖榛樿鏁版嵁
			tmpObj.find('input').not(":hidden").val('');
			tmpObj.find('textarea').not(":hidden").val('');
			
			options.parentobj.find('.chzn-container').remove();
			options.parentobj.find('select').removeClass('chosen_hide').removeClass('chzn-done').attr({'id' : ''}).chosen();
		},

		/*
		 * 閫氳繃鐖剁骇澶嶉€夋锛屾洿鏀瑰瓙闆嗙姸鎬�
		 */
		select_all : function(options){
			var defaults = {
				thisobj	: false,					//url 鍒犻櫎璁块棶鐨剈rl鍦板潃
				children	: false,				//id  鍒犻櫎鐨勬暟鎹甶d
			};
			var options = $.extend({}, defaults, options);

			if (!options.thisobj) {
				console.log('鍙傛暟閿欒锛屾棤娉曢€夋嫨锛�');
				return false;
			}
			
			if (!options.children) options.children = 'input[type="checkbox"]';
			
			options.allobj = $(options.children);

			if (!options.thisobj.prop("checked")) {
				options.allobj.prop("checked",false);
			} else {
				options.allobj.prop("checked",true);
			}
//			if ($.uniform.update) $.uniform.update(options.allobj);

		},

		/*
		 * 閫氳繃瀛愰泦澶嶉€夋锛屾洿鏀圭埗绾х姸鎬�
		 */
		re_select_all : function(){
			$('input[data-toggle="selectall"]').each(function(i){
				var parents = $(this).eq(i).attr('data-toggle') ? $(this).eq(i) : $(this).eq(i).prevObject,
					children = parents.attr('data-children'),
					$children = $(children);
				if(children && $children.length){
					$children.filter(":checked").length == $children.length ?
					parents.prop("checked", true) :
					parents.prop("checked", false);
				}
//				$.uniform.update && parents && $.uniform.update(parents);
			});
			//瀵瑰叏閫夌殑鎵╁睍 TODO:瀵绘壘鏇村悎鐞嗙殑鏂规硶妫€娴�
			if ($('.checkbox').filter(":checked").length == $('.checkbox').length) {
				$('input[name="checkall"]').prop("checked", true);
			} else {
				$('input[name="checkall"]').prop("checked", false);
			}
//			$.uniform.update && $.uniform.update($('input[name="checkall"]'));
		},

		removefile : function(options) {
			var defaults = {
				url	: false,					//url 鍒犻櫎璁块棶鐨剈rl鍦板潃
				id	: '',						//id  鍒犻櫎鐨勬暟鎹甶d
				msg	: admin_lang.confirm_delete_file,	//msg 鍒犻櫎鏃剁殑鎻愮ず淇℃伅
				obj : ''
			};
			var options = $.extend({}, defaults, options);
			if ($(options.obj).attr("data-removefile")!="true") {
				$(options.obj).parent().removeClass("fileupload-exists");
				$(options.obj).parent().addClass("fileupload-new");
				$(options.obj).parent().children(".fileupload-preview").children().remove();
				return false;
			}
			if (!options.url) {
				smoke.alert(admin_lang.error);
				return false;
			}
			smoke.confirm(options.msg, function(e) {
				if (e) {
					$.get(options.url, options.id, function(data) {
						if (data.state == 'success') {
							$(options.obj).parent().children("div:first-child").find("img").attr("src","");
							$(options.obj).parent().children("div:first-child").find("a").attr("href","");
							$(options.obj).parent().removeClass("fileupload-exists");
							$(options.obj).parent().addClass("fileupload-new");
							$(options.obj).removeAttr("data-removefile");
							ecjia.merchant.showmessage(data);
						}
					}, 'json');
				}
			}, 
			{ok:admin_lang.ok, cancel:admin_lang.cancel});
		},

		//toggleState蹇€熷垏鎹㈢姸鎬佺殑鏂规硶
		toggleState : function(option) {
			$.ajax({
				url: option.url,
				data: {id : option.id , val : option.val},

				type: option.type,
				dataType: "json",
				success: function(data){
					data.content ? option.obj.removeClass('fa-times').addClass('fa-check') : option.obj.removeClass('fa-check').addClass('fa-times');
					data.pjaxurl ? ecjia.merchant.showmessage(data) : ecjia.merchant.showmessage(admin_lang.status_success);
				}
			});
		}
	};

	/**
	 * ajaxremove瑙﹀彂鍣�
	 * data-toggle
	 * data-href
	 * data-id
	 * data-msg
	 * data-removeClass
	 */
	$(document).on('click', '[data-toggle="ajaxremove"]', function(e){
		var $this	= $(this);
		var url		= $this.attr('data-href') || $this.attr('href');
		var id		= $this.attr('data-id');
		var msg		= $this.attr('data-msg');
		var $obj		= $this.attr('data-removeClass') ? $('.' + $this.attr('data-removeClass')) : $this.closest('tr');
		var option	= {url : url, id : id, msg : msg, obj : $obj};

		e.preventDefault();
		ecjia.merchant_ui.ajax_remove(option);
	});

	/**
	 * ecjiabatch瑙﹀彂鍣�
	 * data-url 		鎵归噺鎿嶄綔璁块棶鐨剈rl鍦板潃
	 * data-msg 		鎵归噺鎿嶄綔鐨勬彁绀轰俊鎭�
	 * data-name		鎵归噺鎿嶄綔瀵瑰簲php涓殑name淇℃伅
	 * data-idClass 	鎵归噺鎿嶄綔鐨勭敤鎴穒d鏁扮粍
	 * data-noSelectMsg 鏈€夋嫨鐨勬椂鍊欐彁绀轰俊鎭�
	 */
	$(document).on('click', '[data-toggle="ecjiabatch"]', function(e){
		var $this	= $(this);
		e.preventDefault();

		var $id = $($this.attr('data-idClass')) || $(".checkbox:checked");
		var id = [];
		$id.each(function () {
			id.push($(this).val());
		});
		var name		= $this.attr('data-name') || 'checkboxes';
		var url 		= $this.attr('data-url');
		var msg 		= $this.attr('data-msg') || admin_lang.confirm;
		var noSelectMsg = $this.attr('data-noSelectMsg') || admin_lang.please_select;
		var option 		= {id : id, url : url, msg : msg, name : name};
		id.length == 0 ? smoke.alert(noSelectMsg) : ecjia.merchant_ui.batch(option);
	});

	/**
	 * sortby瑙﹀彂鍣�
	 * data-sorthref 	鎵归噺鎿嶄綔璁块棶鐨剈rl鍦板潃锛堝姞鍦ㄧ埗绾r涓婏級
	 * data-sortby 		鎺掑簭鍙傝€冨瓧娈�
	 */
	$(document).on('click', '[data-toggle="sortby"]', function(e) {
		e.preventDefault();
		var $this		= $(this),
		url			= $this.parent('tr').attr('data-sorthref'),
		sort_by		= $this.attr('data-sortby'),
		sort_order	= $this.hasClass('sorting-asc') ? 'desc' : 'asc',
		sortclass	= $this.hasClass('sorting-asc') ? 'sorting-desc' : 'sorting-asc',
		option		= {url : url, sort_by : sort_by, sort_order : sort_order,thisobj : $this, sortclass : sortclass};
		(!option.url || !option.sort_by || !option.sort_order) && console.log('缂哄皯鍙傛暟');

		ecjia.merchant_ui.sort(option);
	});

	/**
	 * clone-obj瑙﹀彂鍣�
	 * data-parent 		瑕佸鍒剁殑鐖剁骇鑺傜偣
	 */
	$(document).on('click', '[data-toggle="clone-obj"]', function(e){
		e.preventDefault();

		var $this		= $(this),
			$parentobj	= $this.parents($this.attr('data-parent')),
			before		= $this.attr('data-before') || 'after',
			option		= {parentobj : $parentobj, before : before};
			console.log(before);
		!$parentobj ? console.log('clone-obj鏂规硶鏈缃甦ata-parent鍙傛暟銆�') : ecjia.merchant_ui.clone_obj(option);
	});

	/**
	 * remove-obj鍒犻櫎鑺傜偣obj
	 * data-parent 		瑕佸垹闄ょ殑鐖剁骇鑺傜偣
	 */
	$(document).on('click', '[data-toggle="remove-obj"]', function(e){
		e.preventDefault();

		var $this		= $(this),
			$parentobj	= $this.parents($this.attr('data-parent'));
		$parentobj.remove();
	});

	/**
     * toggleState瑙﹀彂鍣�
     * url      褰撳墠璇锋眰鍦板潃
     * id       褰撳墠鍏冪礌鐨刬d鍙�
     * val      鏀瑰彉鐨勫€�
     * type     鍙戦€佹柟寮�
     *
     */
	$(document).on('click', '[data-trigger="toggleState"]', function(e){
		var $this   = $(this);
		var url     = $this.attr('data-url');
		var id      = $this.attr('data-id');
		var val     = $this.hasClass('fa-times') ? 1 : 0;
		var type    = $this.attr('data-type') ? $this.attr('data-type') : "POST";

		var option  = {obj : $this, url : url, id : id, val : val, type : type};
		e.preventDefault();
		ecjia.merchant_ui.toggleState(option);
	});

	/**
	 * removefile瑙﹀彂鍣�
	 * data-href
	 * data-msg
	 */
	$(document).on('click', '[data-toggle="removefile"]', function(e){
		var $this	= $(this);
		var url		= $this.attr('data-href') || $this.attr('href');
		var msg		= $this.attr('data-msg');
		var option	= {url : url, msg : msg ,obj : $this};

		e.preventDefault();
		ecjia.merchant_ui.removefile(option);
	});

	/**
	 * checkall瑙﹀彂鍣�
	 * data-toggle
	 * data-children
	 */
	$(document).on('change', 'input[type="checkbox"]', function(){
		var $this		= $(this);
		if ($this.attr('data-toggle') == 'selectall') {
			var children	= $this.attr('data-children');
			var option	= {thisobj : $this, children : children};
			ecjia.merchant_ui.select_all(option);
		}
		ecjia.merchant_ui.re_select_all();
	});
	
	$(ecjia.merchant_ui.init).on('pjax.end', '.main_content', ecjia.merchant_ui.init);
	
})(ecjia, jQuery);