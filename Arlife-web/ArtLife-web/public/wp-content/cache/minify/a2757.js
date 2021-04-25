!function(d){"use strict";window.qodef={},qodef.body=d("body"),qodef.html=d("html"),qodef.windowWidth=d(window).width(),qodef.windowHeight=d(window).height(),qodef.scroll=0,d(document).ready(function(){qodef.scroll=d(window).scrollTop(),t.init(),x.init(),n.init(),i.init(),o.init(),a.init()}),d(window).load(function(){r.init(),setTimeout(function(){e.init()},50)}),d(window).resize(function(){qodef.windowWidth=d(window).width(),qodef.windowHeight=d(window).height(),i.init()}),d(window).scroll(function(){qodef.scroll=d(window).scrollTop()}),d(document).on("pelicula_trigger_get_new_posts",function(){x.init(),n.init(),i.init()});var t={init:function(){t.addBodyClassName()},isBrowser:function(e){var i=!1;switch(e){case"chrome":i=/Chrome/.test(navigator.userAgent)&&/Google Inc/.test(navigator.vendor);break;case"safari":i=/Safari/.test(navigator.userAgent)&&/Apple Computer/.test(navigator.vendor);break;case"firefox":i=-1<navigator.userAgent.toLowerCase().indexOf("firefox");break;case"ie":i=0<window.navigator.userAgent.indexOf("MSIE ")||!!navigator.userAgent.match(/Trident.*rv\:11\./);break;case"edge":i=/Edge\/\d./i.test(navigator.userAgent)}return i},addBodyClassName:function(){d.each(["chrome","safari","firefox","ie","edge"],function(e,i){t.isBrowser(i)&&void 0!==qodef.body&&("ie"===i&&(i="ms-explorer"),qodef.body.addClass("qodef-browser--"+i))})}},x={init:function(e){this.holder=d(".qodef-swiper-container"),d.extend(this.holder,e),this.holder.length&&this.holder.each(function(){x.createSlider(d(this))})},createSlider:function(i){var e=x.getOptions(i),t=x.getEvents(i,e);new Swiper(i,Object.assign(e,t)).on("slideChange",function(){var e=String(this.realIndex+1);i.find(".swiper-pagination-current-slide").text(e.length<2?"0"+e:e)})},getOptions:function(e,i){var t=void 0!==e.data("options")?e.data("options"):{},n=void 0!==t.spaceBetween&&""!==t.spaceBetween?t.spaceBetween:0,o=void 0!==t.slidesPerView&&""!==t.slidesPerView?t.slidesPerView:1,a=void 0!==t.centeredSlides&&""!==t.centeredSlides&&t.centeredSlides,s=void 0!==t.slideToClickedItem&&""!==t.slideToClickedItem&&t.slideToClickedItem,d=void 0!==t.sliderScroll&&""!==t.sliderScroll&&t.sliderScroll,r=void 0!==t.roundLengths&&""!==t.roundLengths&&t.roundLengths,l=void 0===t.loop||""===t.loop||t.loop,f=void 0===t.autoplay||""===t.autoplay||t.autoplay,c=void 0!==t.speed&&""!==t.speed?parseInt(t.speed,10):3e3,u=void 0!==t.speedAnimation&&""!==t.speedAnimation?parseInt(t.speedAnimation,10):800,h=void 0!==t.customStages&&""!==t.customStages&&t.customStages,p=void 0!==t.outsideNavigation&&"yes"===t.outsideNavigation,g=p?".swiper-button-next-"+t.unique:e.find(".swiper-button-next"),m=p?".swiper-button-prev-"+t.unique:e.find(".swiper-button-prev"),v=e.find(".swiper-pagination");!1!==f&&(f={delay:c,disableOnInteraction:!1});var q=void 0!==t.slidesPerView1440&&""!==t.slidesPerView1440?parseInt(t.slidesPerView1440,10):5,w=void 0!==t.slidesPerView1366&&""!==t.slidesPerView1366?parseInt(t.slidesPerView1366,10):4,y=void 0!==t.slidesPerView1024&&""!==t.slidesPerView1024?parseInt(t.slidesPerView1024,10):3,_=void 0!==t.slidesPerView768&&""!==t.slidesPerView768?parseInt(t.slidesPerView768,10):2,b=void 0!==t.slidesPerView680&&""!==t.slidesPerView680?parseInt(t.slidesPerView680,10):1,C=void 0!==t.slidesPerView480&&""!==t.slidesPerView480?parseInt(t.slidesPerView480,10):1;isNaN(q)&&(q="auto"),isNaN(w)&&(w="auto"),isNaN(y)&&(y="auto"),isNaN(_)&&(_="auto"),isNaN(b)&&(b="auto"),isNaN(C)&&(C="auto"),h||(o<2?_=y=w=q=o:o<3?y=w=q=o:o<4?w=q=o:o<5&&(q=o));var P={slidesPerView:o,centeredSlides:a,slideToClickedItem:s,sliderScroll:d,spaceBetween:n,autoplay:f,loop:l,roundLengths:r,speed:u,navigation:{nextEl:g,prevEl:m},pagination:{el:v,type:"progressbar",progressbarOpposite:!0,renderProgressbar:function(e){return'<span class="'+e+'"></span><span class="swiper-pagination-current-slide">01</span>'}},breakpoints:{0:{slidesPerView:C},481:{slidesPerView:b},681:{slidesPerView:_},769:{slidesPerView:y},1025:{slidesPerView:w},1367:{slidesPerView:q},1441:{slidesPerView:o}}};return Object.assign(P,x.getSliderDatas(e))},getSliderDatas:function(e){var i=e.data(),t={};for(var n in i)i.hasOwnProperty(n)&&"options"!==n&&void 0!==i[n]&&""!==i[n]&&(t[n]=i[n]);return t},getEvents:function(t,n){return{on:{init:function(){if(t.addClass("qodef-swiper--initialized"),setTimeout(function(){n.slideToClickedItem&&t.on("click",".swiper-slide",function(e){d(this).hasClass("swiper-slide-active")||(e.preventDefault(),e.stopPropagation(),d(this).hasClass("swiper-slide-next")?t[0].swiper.slideNext():d(this).hasClass("swiper-slide-prev")&&t[0].swiper.slidePrev())})},300),n.sliderScroll){var i=!1;t.on("mousewheel",function(e){e.preventDefault(),i||(i=!0,e.deltaY<0?t[0].swiper.slideNext():t[0].swiper.slidePrev(),setTimeout(function(){i=!1},n.speed))})}}}}}};qodef.qodefSwiper=x;var n={init:function(e){this.holder=d(".qodef-magnific-popup"),d.extend(this.holder,e),d.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=d(this);e.hasClass("qodef-popup-item")?n.initSingleImagePopup(e):e.hasClass("qodef-popup-gallery")&&n.initGalleryPopup(e)})},initSingleImagePopup:function(e){var i=e.data("type");e.magnificPopup({type:i,titleSrc:"title",image:{cursor:null}})},initGalleryPopup:function(e){var i=e.find(".qodef-popup-item"),t=n.generateGalleryItems(i);i.each(function(e){d(this).magnificPopup({items:t,gallery:{enabled:!0},index:e,type:"image",image:{cursor:null}})})},generateGalleryItems:function(e){var t=[];return e.length&&e.each(function(){var e=d(this),i={src:e.attr("href"),title:e.attr("title"),type:e.data("type")};t.push(i)}),t}};qodef.qodefMagnificPopup=n;var e={init:function(){var e=d(".qodef--parallax-row .elementor-text-editor");e.length&&e.each(function(){var e=d(this);e.appear(function(){e.addClass("qodef--appear")},{accX:0,accY:200})})}};qodef.qodefAppearOnLoad=e;var i={init:function(){var e=d(".qodef-e-holder-main");e.length&&e.each(function(){i.position(d(this))})},position:function(e){var i=!!e.length&&e.hasClass("qodef-has-post-media"),t=!!e.length&&!e.hasClass("qodef-exception"),n=e.find(".qodef-e-content-main"),o=e.find(".qodef-e-title-main"),a=o.length?parseFloat(o.css("line-height")):0;n.length&&(i&&t&&o.length&&0<a&&n.css("margin-top",-a/2),n.addClass("qodef-e-content--appear"))}};qodef.qodefMainContent=i;var r={init:function(){var e=d(".qodef-slider-layout--predefined.qodef-slider-layout--predefined-fullscreen");e.length&&e.each(function(){var e=d(this);r.calcFSHeight(e)})},calcFSHeight:function(e){var i=d("#qodef-page-header"),t=d(".qodef-predefined-slider-fs-bottom-section"),n=d(".qodef-slider-predefined-text-behind .qodef-custom-font"),o=0,a=0;if(i.length&&(o=i.outerHeight()),t.length&&(a=t.outerHeight()),n.length){var s=n.text().split(" ");n.empty(),s.forEach(function(e,i){n.append("<span>"+e+" </span>")})}e.css("height","calc(100vh - "+(o+a)+"px"),r.initAppear(e,t,n)},initAppear:function(e,i,t){if(t.length){t.css("opacity",1);var n=t.find(">span");n.length&&n.each(function(e){var i=d(this);setTimeout(function(){i.addClass("qodef--appear")},70*e)})}setTimeout(function(){if(i.length){var e=i.find(".elementor-social-icon");e.length&&e.each(function(e){var i=d(this);setTimeout(function(){i.addClass("qodef--appear")},70*e)})}},700),setTimeout(function(){e.length&&e.addClass("qodef--appear")},300)}};qodef.qodefSliderPredefinedFS=r;var o={customClass:"qodef-last-word",init:function(){var e=d(".widget:not(.widget_rss) .qodef-widget-title, .widget.widget_rss .qodef-widget-title a.rsswidget:last-child, .widget .qodef-author-info-name a span");e.length&&e.each(function(){o.modify(d(this)),d(this).find("."+o.customClass).appear(function(){d(this).addClass("qodef-appeared")})})},modify:function(e){e.html(e.html().replace(/(\S+)\s*$/,'<span class="'+o.customClass+'">$1</span>'))}};qodef.qodefTextModification=o;var a={init:function(){var e=d("rs-module[id^=rev_slider]");e.length&&e.each(function(){a.setSlider(d(this))})},setSlider:function(e){var i=e,t=i.revmaxslide(),n=0;i.on("revolution.slide.onloaded",function(e){d(e.target).find(".pelicula_pag.tp-bullets").append('<div class="rs-bullets-progressbar-fill"></div>')}),i.on("revolution.slide.onbeforeswap",function(e,i){n=100*i.nextSlideIndex/t,d(e.target).find(".pelicula_pag.tp-bullets .rs-bullets-progressbar-fill").height(n+"%"),d(e.target).find(".pelicula_pag.tp-bullets .tp-bullet").css("opacity",0).filter(":nth-child("+i.nextSlideIndex+")").css("opacity",1)})}};qodef.qodefRevSlider=a,"function"!=typeof Object.assign&&(Object.assign=function(e){if(null==e)throw new TypeError("Cannot convert undefined or null to object");e=Object(e);for(var i=1;i<arguments.length;i++){var t=arguments[i];if(null!==t)for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])}return e})}(jQuery),function(o){"use strict";o(document).ready(function(){n.init()}),o(window).on("resize",function(){n.init()}),o(document).on("pelicula_trigger_get_new_posts",function(e,i){i.hasClass("qodef-blog")&&(t.init(i),n.resize(i))});var t={init:function(e){var i=e.find(".wp-video-shortcode, .wp-audio-shortcode").not(".mejs-container");i.length&&i.each(function(){var e=o(this);"function"==typeof e.mediaelementplayer&&e.mediaelementplayer({videoWidth:"100%",videoHeight:"56.5%"})})}},n={init:function(){var e=o(".qodef-blog");e.length&&n.resize(e)},resize:function(e){var i=e.find(".qodef-e-media iframe");i.length&&i.each(function(){var e=o(this),i=e.attr("width"),t=e.attr("height"),n=e.width()/i*t;e.css("height",n)})}}}(jQuery),function(h){"use strict";h(document).ready(function(){p.init()}),h(document).on("pelicula_trigger_get_new_posts",function(e,i){i.hasClass("qodef-filter--on")&&p.setVisibility(i,i.find(".qodef-m-filter-item.qodef--active"),!0)});var p={init:function(e){this.holder=h(".qodef-filter--on"),h.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=h(this),i=e.find(".qodef-m-filter-item");p.extendListHTML(e),p.clickEvent(e,i)})},extendListHTML:function(e){e.children(".qodef-hidden-filter-items").length||p.isMasonryLayout(e)||e.append('<div class="qodef-hidden-filter-items"></div>')},clickEvent:function(t,n){n.on("click",function(e){e.preventDefault();var i=h(this);i.hasClass("qodef--active")||(t.addClass("qodef--filter-loading"),n.removeClass("qodef--active"),i.addClass("qodef--active"),p.setVisibility(t,i))})},setVisibility:function(e,i,t){var n=e.children(".qodef-hidden-filter-items"),o=n.length,a=o?n.children(".qodef-grid-item"):"",s=e.find(".qodef-grid-inner"),d=s.children(".qodef-grid-item"),r=i.data("taxonomy"),l=i.data("filter"),f="*"===l,c=f?l:r+"-"+l,u=d.hasClass(c);o&&!u&&a.hasClass(c)&&(u=!0),t&&f||(f||u||!p.hasLoadMore(e)?(p.isMasonryLayout(e)?s.isotope({filter:f?"":"."+c}):(f||d.each(function(){var e=h(this);-1===e.attr("class").indexOf(c)&&e.hide(300,"linear",function(){e.appendTo(n)})}),a.length&&a.each(function(){var e=h(this),i=e.attr("class");f?e.appendTo(s).show(300,"linear"):-1!==i.indexOf(c)&&e.appendTo(s).show(300,"linear")})),e.removeClass("qodef--filter-loading")):qodef.body.trigger("pelicula_trigger_load_more",[e]))},isMasonryLayout:function(e){return e.hasClass("qodef-layout--masonry")},hasLoadMore:function(e){return e.hasClass("qodef-pagination-type--load-more")}};qodef.qodefFilter=p}(jQuery),function(d){"use strict";d(document).ready(function(){i.init()}),d(document).on("pelicula_trigger_get_new_posts",function(){i.init()});var i={init:function(){var e=d(".qodef-layout--justified-gallery");e.length&&e.each(function(){i.setJustifyGallery(d(this))})},setJustifyGallery:function(e){var i=e.data("options"),t=e.children(".qodef-grid-inner"),n=void 0!==i.justified_gallery_row_height&&""!==i.justified_gallery_row_height?i.justified_gallery_row_height:150,o=void 0!==i.justified_gallery_row_height_max&&""!==i.justified_gallery_row_height_max&&i.justified_gallery_row_height_max,a=2*i.space_value,s=void 0!==i.justified_gallery_treshold&&""!==i.justified_gallery_treshold?i.justified_gallery_treshold:.75;t.waitForImages(function(){"function"==typeof t.justifiedGallery&&t.justifiedGallery({captions:!1,rowHeight:n,maxRowHeight:o,margins:a,border:0,lastRow:"nojustify",justifyThreshold:s,selector:".qodef-grid-item"}).on("jg.complete jg.rowflush",function(){var i=d(this),t=!1;i.find(".qodef-grid-item").addClass("show").each(function(){var e=d(this);e.height(Math.round(e.height())),t||0!==e.width()||(i.height(i.height()-e.height()-a),t=!0)})}),e.addClass("qodef--justified-gallery-init")})}};qodef.qodefJustifiedGallery=i}(jQuery),function(i){"use strict";i(document).ready(function(){t.init()});var t={init:function(){var e=i("#qodef-page-mobile-header");e.length&&(t.initMobileHeaderOpener(e),t.initDropDownMobileMenu())},initMobileHeaderOpener:function(e){var i=e.find(".qodef-mobile-header-opener");if(i.length){var t=e.find(".qodef-mobile-header-navigation");i.on("tap click",function(e){e.preventDefault(),t.is(":visible")?(t.slideUp(450),i.removeClass("qodef--opened")):(t.slideDown(450),i.addClass("qodef--opened"))})}},initDropDownMobileMenu:function(){var e=i(".qodef-mobile-header-navigation .menu-item-has-children > a");e.length&&e.each(function(){var o=i(this);o.on("tap click",function(e){e.preventDefault();var i=o.parent(),t=i.siblings(".menu-item-has-children");if(i.hasClass("menu-item-has-children")){var n=i.find("ul.sub-menu").first();n.is(":visible")?(n.slideUp(450),i.removeClass("qodef--opened")):(i.addClass("qodef--opened"),0===t.length?i.find(".sub-menu").slideUp(400,function(){n.slideDown(400)}):i.siblings().removeClass("qodef--opened").find(".sub-menu").slideUp(400,function(){n.slideDown(400)}))}})})}}}(jQuery),function(i){"use strict";i(document).ready(function(){o.init()}),i(document).on("pelicula_trigger_get_new_posts",function(e,i){i.hasClass("qodef-layout--masonry")&&o.init()});var o={init:function(e){this.holder=i(".qodef-layout--masonry"),i.extend(this.holder,e),this.holder.length&&this.holder.each(function(){o.createMasonry(i(this))})},createMasonry:function(i){var t=i.find(".qodef-grid-inner"),n=t.find(".qodef-grid-item");t.waitForImages(function(){if("function"==typeof t.isotope){if(t.isotope({layoutMode:"packery",itemSelector:".qodef-grid-item",percentPosition:!0,masonry:{columnWidth:".qodef-grid-masonry-sizer",gutter:".qodef-grid-masonry-gutter"}}),i.hasClass("qodef-items--fixed")&&!i.hasClass("qodef-items-custom-proportions--enabled")){var e=o.getFixedImageSize(t,n);o.setFixedImageProportionSize(t,n,e)}t.isotope("layout")}t.addClass("qodef--masonry-init")})},getFixedImageSize:function(e,i){var t=e.find(".qodef-item--square");if(t.length){var n=t.find("img"),o=n.width(),a=n.height();return o!==a?a:o}return e.find(".qodef-grid-masonry-sizer").width()-2*parseInt(i.css("paddingLeft"),10)},setFixedImageProportionSize:function(e,i,t){var n=parseInt(i.css("paddingLeft"),10),o=(e.find(".qodef-item--square"),e.find(".qodef-item--landscape")),a=e.find(".qodef-item--portrait"),s=e.find(".qodef-item--huge-square"),d=qodef.windowWidth<=680;i.css("height",t),o.length&&o.css("height",Math.round(t/2)),a.length&&a.css("height",Math.round(2*(t+n))),d||(o.length&&o.css("height",t),s.length&&s.css("height",Math.round(2*(t+n))))}};qodef.qodefMasonryLayout=o}(jQuery),function(d){d(document).ready(function(){e.init()});var e={init:function(){var e=d(".qodef-header-navigation.qodef-header-navigation-initial > ul > li.qodef-menu-item--narrow.menu-item-has-children");e.length&&e.each(function(e){var i,t=d(this),n=t.offset().left,o=t.find(" > ul"),a=o.outerWidth(),s=d(window).width()-n;0<t.find("li.menu-item-has-children").length&&(i=s-a),o.removeClass("qodef-drop-down--right"),(s<a||i<a)&&o.addClass("qodef-drop-down--right")})}}}(jQuery),function(a){"use strict";a(document).ready(function(){s.init()}),a(window).scroll(function(){s.scroll()}),a(document).on("pelicula_trigger_load_more",function(e,i,t){s.triggerLoadMore(i,t)});var s={init:function(e){this.holder=a(".qodef-pagination--on"),a.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=a(this);s.initPaginationType(e)})},scroll:function(e){this.holder=a(".qodef-pagination--on"),a.extend(this.holder,e),this.holder.length&&this.holder.each(function(){var e=a(this);e.hasClass("qodef-pagination-type--infinite-scroll")&&s.initInfiniteScroll(e)})},initPaginationType:function(e){e.hasClass("qodef-pagination-type--standard")?s.initStandard(e):e.hasClass("qodef-pagination-type--load-more")?s.initLoadMore(e):e.hasClass("qodef-pagination-type--infinite-scroll")&&s.initInfiniteScroll(e)},initStandard:function(n){var e=n.find(".qodef-m-pagination-items");if(e.length){var o=n.data("options");e.children().each(function(){var i=a(this),t=i.children("a");s.changeStandardState(n,o.max_pages_num,1),t.on("click",function(e){e.preventDefault(),i.hasClass("qodef--active")||s.getNewPosts(n,t.data("paged"))})})}},changeStandardState:function(e,i,t){if(e.hasClass("qodef-pagination-type--standard")){var n=e.find(".qodef-m-pagination-items"),o=n.children(".qodef--number"),a=n.children(".qodef--prev"),s=n.children(".qodef--next");o.removeClass("qodef--active").eq(t-1).addClass("qodef--active"),a.children().data("paged",t-1),1<t?a.show():a.hide(),s.children().data("paged",t+1),t===i?s.hide():s.show()}},initLoadMore:function(i){i.find(".qodef-load-more-button").on("click",function(e){e.preventDefault(),s.getNewPosts(i)})},triggerLoadMore:function(e,i){s.getNewPosts(e,i)},hideLoadMoreButton:function(e,i){e.hasClass("qodef-pagination-type--load-more")&&i.next_page>i.max_pages_num&&e.find(".qodef-load-more-button").hide()},initInfiniteScroll:function(e){var i=e.outerHeight()+e.offset().top,t=qodef.scroll+qodef.windowHeight,n=e.data("options");!e.hasClass("qodef--loading")&&i<t&&n.max_pages_num>=n.next_page&&s.getNewPosts(e)},getNewPosts:function(i,t){i.addClass("qodef--loading");var n=i.children(".qodef-grid-inner"),o=i.data("options");s.setNextPageValue(o,t,!1),a.ajax({type:"GET",url:qodefGlobal.vars.restUrl+qodefGlobal.vars.paginationRestRoute,data:{options:o},beforeSend:function(e){e.setRequestHeader("X-WP-Nonce",qodefGlobal.vars.restNonce)},success:function(e){"success"===e.status?(s.setNextPageValue(o,t,!0),s.changeStandardState(i,o.max_pages_num,t),n.waitForImages(function(){s.addPosts(n,e.data,t),s.reInitMasonryPosts(i,n),qodef.body.trigger("pelicula_trigger_get_new_posts",[i])}),s.hideLoadMoreButton(i,o)):console.log(e.message)},complete:function(){i.removeClass("qodef--loading")}})},setNextPageValue:function(e,i,t){void 0===i||""===i||t?t&&(e.next_page=parseInt(e.next_page,10)+1):e.next_page=i},addPosts:function(e,i,t){void 0!==t&&""!==t?e.html(i):e.append(i)},reInitMasonryPosts:function(e,i){e.hasClass("qodef-layout--masonry")&&(i.isotope("reloadItems").isotope({sortBy:"original-order"}),setTimeout(function(){i.isotope("layout")},200))}};qodef.qodefPagination=s}(jQuery),function(r){"use strict";r(document).ready(function(){t.init(),e.init(),i.init()});var t={init:function(e){this.holder=[],this.holder.push({holder:r("#qodef-woo-page .woocommerce-ordering select"),options:{minimumResultsForSearch:1/0}}),this.holder.push({holder:r("#qodef-woo-page .variations select"),options:{minimumResultsForSearch:1/0}}),this.holder.push({holder:r("#qodef-woo-page #calc_shipping_country"),options:{}}),this.holder.push({holder:r("#qodef-woo-page .shipping select#calc_shipping_state"),options:{}}),this.holder.push({holder:r(".widget.widget_archive select"),options:{}}),this.holder.push({holder:r(".widget.widget_categories select"),options:{}}),this.holder.push({holder:r(".widget.widget_text select"),options:{}}),r.extend(this.holder,e),"object"==typeof this.holder&&r.each(this.holder,function(e,i){t.createSelect2(i.holder,i.options)})},createSelect2:function(e,i){"function"==typeof e.select2&&e.select2(i)}},e={init:function(){r(document).on("click",".qodef-quantity-minus, .qodef-quantity-plus",function(e){e.stopPropagation();var i,t=r(this),n=t.siblings(".qodef-quantity-input"),o=parseFloat(n.data("step")),a=parseFloat(n.data("max")),s=!1,d=parseFloat(n.val());t.hasClass("qodef-quantity-minus")&&(s=!0),s?1<=(i=d-o)?n.val(i):n.val(0):(i=d+o,void 0===a?n.val(i):a<=i?n.val(a):n.val(i)),n.trigger("change")})}},i={init:function(){if("object"==typeof qodef.qodefMagnificPopup){var e=r(".qodef--single.qodef-magnific-popup.qodef-popup-gallery .woocommerce-product-gallery__image");e.length&&(e.each(function(){r(this).children("a").attr("data-type","image").addClass("qodef-popup-item")}),qodef.qodefMagnificPopup.init())}}};qodef.qodefWooMagnificPopup=i}(jQuery);