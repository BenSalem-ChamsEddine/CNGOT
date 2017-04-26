/**
 * FKG Register Part
 */

(function($){

    var sectionWidth = 600,
        currentTransform = 0;
    
    var onResize = function() {
        sectionWidth = Number.parseInt($('.register-container').css('width'));
        $('.register-section').css('width', sectionWidth + 'px');
    };

    var lastFocus = null;
    var onFocus = function(e) {
        var scrollLeft = $('.register-container').scrollLeft();
        if(scrollLeft % sectionWidth !== 0){
            var dir = currentTransform - scrollLeft > 0 ? 'left' : 'right';
            moveSlider(dir);
        }
        lastFocus = e;
    };

    var checkValue = function(input){
        switch(input.type) {
            //specialcase for firmas
            case 'file':
                var select = input.previousElementSibling;
                if(select && select.classList.contains('firma')) {
                    return !!select.value && !!input.value;
                } else {
                    return !!input.value;
                }
                break;
            case 'select-one':
            case 'text':
                return !!input.value;
            
            case 'email':
                return !!input.value.match(/.*@.*\..*/);
            case 'radio':
            case 'checkbox':
                return !!document.querySelector('input[name="'+ input.name +'"]:checked');

            default:
                return false;
        }
    };

    var checkInput = function(e) {
        var input = e.target ? e.target : e;
        if(!checkValue(input)) {
            $(input).parent().addClass('error');
        } else {
            $(input).parent().removeClass('error');
        }
    };

    var fancyFileUpload = function(){
        var label    = this.nextElementSibling,
            labelVal = label.innerHTML;

        this.addEventListener( 'change', function( e )
        {
            var fileName = e.target.value.split( '\\' ).pop();
            if( fileName )
                label.innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    };

    var moveSlider = function(dir){
        //moveSlider is eventHandler for back/continue buttons, so dir.target is set
        //else it is called from onFocus -> check the previous focused element section for errors
        var target = dir.target ? dir.target : lastFocus.target;
        dir = dir.data ? dir.data : dir;

        $('.register-container').scrollLeft(currentTransform); //reset to prevent half assed animation
        if(dir == 'right') {
            var wrongInputs = getWrongInputsIn( $(target).parents('.register-section') );
            if(wrongInputs.length > 0) return wrongInputs.focus();
        }
        var factor = dir == 'right' ? 1 : -1;

        currentTransform += factor*sectionWidth;
        $('.register-container').animate({
            scrollLeft: currentTransform + 'px'
        });
    };

    var getWrongInputsIn = function($elem) {
        return $elem.find('[required]').filter(function(i, e){
            checkInput(e);
            return !checkValue(e);
        });
    };

    window.formSaved = function(json){
        $('.register-section .register-box').html('<p>Wir haben deine Anmeldung erhalten. Vielen Dank.</p>');
    };
    var uploadFiles = function(formData) {
        if($('#lebenslauf:visible').length === 0) return;

        var data = new FormData();
        for(var key in formData){
            data.append(key, formData[key]);
        }
        $('#lebenslauf, #motivationsschreiben1, #motivationsschreiben2, #motivationsschreiben3')
        .each(function(i, input){
            if(input.files.length === 0) return;
            data.append(input.name, input.files[0]);
        });
        return $.ajax({
            url: 'http://fkg.dev/anmeldungen/fileUpload.php',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Don't process the files
            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
        });
    };

    var saveForm = function() {
        var wrongInputs = getWrongInputsIn( $('.register-section:visible') );
        if(wrongInputs.length > 0){
            alert('Die hast ein Pflichtfeld vergessen. Bitte prüfe die Anmeldung noch einmal.');
            $('.register-container').scrollLeft(0);
        } else {
            var data = {
                vorname: $('#vorname').val(),
                nachname: $('#name').val(),
                studiengang: $('#studiengang').val(),
                email: $('#email').val(),
                mappencheck: $('[name="mappencheck"]:checked').val(),
                projektvortrag: $('[name="projektvortrag"]:checked').val(),
                personaltalk: $('[name="personaltalk"]:checked').val(),

            };
            data.projektvortrag1 = $('[name="projektvortrag_1_prio"]:checked').length ? 
                $('[name="projektvortrag_1_prio"]:checked').val() : "-";
            data.projektvortrag2 = $('[name="projektvortrag_2_prio"]:checked').length ?
                $('[name="projektvortrag_2_prio"]:checked').val() : "-";
            data.projektvortrag3 = $('[name="projektvortrag_3_prio"]:checked').length ?
                $('[name="projektvortrag_3_prio"]:checked').val() : "-";
            
            data.unternehmen1 = $('[name="unternehmen1"]').val() ? 
                $('[name="unternehmen1"]').val() : "-";
            data.unternehmen2 = $('[name="unternehmen2"]').val() ?
                $('[name="unternehmen2"]').val() : "-";
            data.unternehmen3 = $('[name="unternehmen3"]').val() ?
                $('[name="unternehmen3"]').val() : "-";

            $('.register-section .register-box').html('<div class="uil-ring-css" style="transform:scale(0.6);"><div></div></div>');
            var $upload = uploadFiles(data);
            $.when($upload).done(
                function(){
                    
                    $.ajax({
                        url: 'https://script.google.com/macros/s/AKfycbyULW6iYnspJM07t33N-NxsSlLhviRcpMeTfnhpE3uhduSfJfMu/exec',
                        dataType: 'jsonp',
                        jsonpCallback: 'formSaved',
                        data: data
                    });
                }
            );
            
            

            
        }

    };

    // init
    onResize();
    $(window).resize(onResize);
    $('.register-container input, .register-container .btn').focus(onFocus);
    $('.register-section .btn-continue').click('right', moveSlider);
    $('.register-section .btn-back').click( 'left', moveSlider);
    $('.register-section input[type="file"]').each(fancyFileUpload);
    $('#register-save').click(saveForm);

    //check required and values
    $('.register-section [required]').change(checkInput);

    // special case buttons
    $('.register-section input:radio[name="projektvortrag"]').change(
    function(){
        if (this.checked && this.value == 'ja') {
            $('.register-section.talks').show();
        } else {
            $('.register-section.talks').hide();
        }
    });
    $('.register-section input:radio[name="personaltalk"]').change(
    function(){
        if (this.checked && this.value == 'ja') {
            $('.register-section.personaltalk-details').show();
        } else {
            $('.register-section.personaltalk-details').hide();
        }
    });

    //mutually exclusive talk priorities
    $('.register-section.talks input').change(function(e){
        var $target = $(e.target);
        if(!$target.is(":checked")) return;

        var num = $target.parent().index() + 1;
        $('.register-section.talks .register-row>*:nth-child(' + num + ') input')
        .not($target)
        .prop('checked', false);
    });

})(jQuery);


/**
 * Theme Part
 */

/**
 * skip-link-focus-fix.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/fkg/pull/136
 */
( function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

    if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false );
    }
})();

/**
* Responsive Videos
*/
( function() {
    jQuery('.site-content').fitVids();
})();

/**
 * Section: Hero Full Screen Slideshow
 */
( function() {

    jQuery(window).on('resize', function (){
        var is_transparent = jQuery( 'body').hasClass( 'header-transparent' );

        var headerH;
        var is_top_header = jQuery( '#page > .site-header').length ?  true : false;
        if( is_top_header && ! is_transparent ) {
            headerH = jQuery('.site-header').height();
        } else {
            headerH = 0;
        }
        jQuery('.hero-slideshow-fullscreen').css('height',(jQuery(window).height()-headerH+1)+'px');

    });
    jQuery(window).trigger( 'resize' );

} )();


/**
 * Text rotator
 */
( function() {

    jQuery(".js-rotating").Morphext({
        // The [in] animation type. Refer to Animate.css for a list of available animations.
        animation: fkg_js_settings.hero_animation,
        // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
        separator: "|",
        // The delay between the changing of each phrase in milliseconds.
        speed: parseInt( fkg_js_settings.hero_speed ),
        complete: function () {
            // Called after the entrance animation is executed.
        }
    });
} )();



/**
 * Parallax Section
 */
( function() {

    jQuery(window).resize(function(){
        fkgParallax();
    });

    function fkgParallax() {
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        var testMobile = isMobile.any();
        if (testMobile == null) {
            jQuery( 'body' ).addClass( 'body-desktop') .removeClass( 'body-mobile' );
        } else {
            jQuery( 'body' ).addClass( 'body-mobile' ).removeClass( 'body-desktop' );
        }

        jQuery('.section-has-parallax').each(function() {
            var $this = jQuery(this);
            var bg    = $this.find('.parallax_bg');

            jQuery(bg).css('backgroundImage', 'url(' + $this.data('bg') + ')');

            if (testMobile == null) {
                jQuery(bg).addClass('not-mobile');
                jQuery(bg).removeClass('is-mobile');
                jQuery(bg).parallax('50%', 0.4);
            } else {
                //jQuery(bg).css('backgroundAttachment', 'inherit');
                jQuery(bg).removeClass('not-mobile');
                jQuery(bg).addClass('is-mobile');

            }
        });
    }
})();


/**
 * Reveal Animations When Scrolling
 */
( function() {
    if ( fkg_js_settings.fkg_disable_animation != '1' ) {
        wow = new WOW(
            {
                offset:       50,
                mobile:       false,
                live:         false
            }
        )
        wow.init();
    }
})();

/**
 * Center vertical align for navigation.
 */
( function() {
    if ( fkg_js_settings.fkg_vertical_align_menu == '1' ) {
        var header_height = jQuery('.site-header').height();
        jQuery('.site-header .fkg-menu').css( 'line-height', header_height + "px" );
    }
})();

/**
 * Sticky header when scroll.
 */
( function( $ ) {

    if ( fkg_js_settings.fkg_disable_sticky_header != '1' ) {
        var is_top_header = $( '#page > .site-header').length ?  true : false;
        var p_to_top;
        $('.site-header').eq(0).wrap( '<div class="site-header-wrapper">' );
        var is_transparent = $( 'body').hasClass( 'header-transparent' );
        $wrap =  $( '.site-header-wrapper');
        $wrap.addClass( 'no-scroll' );

        if (! is_top_header ) {
            $( 'body').removeClass( 'header-transparent' );
        }

        $( document ).scroll( function(){
            var header_fixed = $('.site-header').eq(0);
            var header_parent = header_fixed.parent();
            var header_h = header_fixed.height() || 0;
           // $( '.site-header-wrapper').height( header_h );
            p_to_top    = header_parent.position().top;
            var topbar = $( '#wpadminbar' ).height() || 0;
            if (  topbar > 0 ) {
                var  topbar_pos = $( '#wpadminbar').css( 'position' );
                if ( 'fixed' !== topbar_pos ) {
                    topbar = 0;
                }
            }

            if( $( document ).scrollTop() > p_to_top ) {
                if ( ! is_transparent){
                    $wrap.height( header_h );
                }

                $wrap.addClass( 'is-fixed').removeClass( 'no-scroll' );

                header_fixed.addClass('header-fixed');
                header_fixed.css( 'top', topbar+'px' );
                header_fixed.stop().animate({},400);
            } else {
                header_fixed.removeClass('header-fixed');
                header_fixed.css( 'top', 'auto' );
                header_fixed.stop().animate({},400);
                if ( ! is_transparent ) {
                    $wrap.height('');
                }
                $wrap.removeClass( 'is-fixed' ).addClass( 'no-scroll' );
            }
        });

    }

})(jQuery);



/*
* Nav Menu & element actions
*
* Smooth scroll for navigation and other elements
*/
( function() {

    // Initialise Menu Toggle
    jQuery('#nav-toggle').on('click', function(event){
        event.preventDefault();
        jQuery('#nav-toggle').toggleClass('nav-is-visible');
        jQuery('.main-navigation .fkg-menu').toggleClass("fkg-menu-mobile");
        jQuery('.header-widget').toggleClass("header-widget-mobile");
    });

    jQuery('.fkg-menu li.menu-item-has-children, .fkg-menu li.page_item_has_children').each( function() {
        jQuery(this).prepend('<div class="nav-toggle-subarrow"><i class="fa fa-angle-down"></i></div>');
    });

    jQuery('.nav-toggle-subarrow, .nav-toggle-subarrow .nav-toggle-subarrow').click(
        function () {
            jQuery(this).parent().toggleClass("nav-toggle-dropdown");
        }
    );

    // Get the header height and wpadminbar height if enable.
    var h;
    if ( fkg_js_settings.fkg_disable_sticky_header != '1' ) {
        h = jQuery('#wpadminbar').height() + jQuery('.site-header').height();
    } else {
        h = jQuery('#wpadminbar').height();
    }

    // Navigation click to section.
    jQuery('.home #site-navigation li a[href*="#"]').on('click', function(event){
        event.preventDefault();
        // if in mobile mod
        if (  jQuery( '.fkg-menu' ).hasClass( 'fkg-menu-mobile' ) ) {
            jQuery( '#nav-toggle' ).trigger( 'click' );
        }
        smoothScroll(jQuery(this.hash));
    });

    // Add active class to menu when scroll to active section.
    jQuery(window).scroll(function() {
        var currentNode = null;
        jQuery('.onepage-section').each(function(){
            var currentId = jQuery(this).attr('id') || '';

            if(jQuery(window).scrollTop() >= jQuery(this).offset().top - h-10) {
                currentNode = currentId;
            }

        });
        jQuery('#site-navigation li').removeClass('fkg-current-item');
        if ( currentNode ) {
            jQuery('#site-navigation li').find('a[href$="#' + currentNode + '"]').parent().addClass('fkg-current-item');
        }
    });

    // Move to the right section on page load.
    jQuery(window).load(function(){
        var urlCurrent = location.hash;
        if (jQuery(urlCurrent).length>0 ) {
            smoothScroll(urlCurrent);
        }
    });

    // Other scroll to elements
    jQuery('.hero-slideshow-wrapper a[href*="#"]:not([href="#"]), .parallax-content a[href*="#"]:not([href="#"]), .back-top-top').on('click', function(event){
        event.preventDefault();
        smoothScroll(jQuery(this.hash));
    });

    // Smooth scroll animation
    function smoothScroll(urlhash) {
        if ( urlhash.length <= 0 ) {
            return false;
        }
        jQuery("html, body").animate({
            scrollTop: (jQuery(urlhash).offset().top - h) + "px"
        }, {
            duration: 800,
            easing: "swing"
        });
        return false;
    }
})();

// Counter Up
jQuery( document ).ready( function( $ ){
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
} );

/**
 * Call magnificPopup when use
 */
( function($) {

    $('.popup-video').magnificPopup({
        //disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        zoom: {
            enabled:true
        }
    });

    $('.open-firma-link').magnificPopup({
        type:'inline',
        midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        gallery: {
            enabled:true
        }
    });

    $('.open-talk-link').magnificPopup({
        type:'inline',
        midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        gallery: {
            enabled:true
        }
    });

    $('.about-images').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'img', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });

})(jQuery);
