
//Default main Module
var mainModule = {
    //Handles scrolling down and up on the nav menu
    scrollLinkClick: $('.mainNavTop .scroll-link').on('click', function (event) {
        event.preventDefault();
        var sectionID = $(this).attr("data-id");
        mainModule.scrollToID('#' + sectionID, 400);
    }),
    //function called by above function
    scrollToID: function (id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    },
    //Handles mobile only menu toggles
    toggleMenu: $('.menuToggle a').on('click', function(e){
        e.preventDefault();
        $('.navbar-nav').slideToggle(500);
    })
};

$(window).scroll(function (e) {
    if($(this).width()>=768){
        var currentScroll = $(this).scrollTop();
        $('.articles-menu-container').css({'top': currentScroll});
        if(currentScroll>$('.articles-content').height()-500){
            $('.articles-menu-container').css({'visibility': 'hidden'});
        }else{
            $('.articles-menu-container').css({'visibility': 'visible'});
        }
    }
})

$(function(){
    function after_form_submitted(data){
        if(data.result == 'success'){
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else{
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val){
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();
            $('button[type="button"]', $form).each(function(){
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' );
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });
        }
    }

    $('#reused_form').submit(function(e){
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function(){
            $btn = $(this);
            $btn.prop('type','button' );
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });

        $.ajax({
            type: "POST",
            url: '/wp-content/themes/drzhu/sendmail.php',
            data: $form.serialize(),
            success: after_form_submitted,
            dataType: 'json'
        });

      });
});