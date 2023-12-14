$(document).ready(function () {
    let sourceType = $('.allSource>div:not(.source-indicator)');
    let indicator = $('.source-indicator');
    let paymentSources = $('.paymentSources');
    indicator.css('height', sourceType.eq(0).outerHeight());
    sourceType.click(function () {
        let elem = $(this);
        indicator.css({ 'height': elem[0].offsetHeight, 'top': elem.position().top });
        let scroll_length = parseFloat(elem.attr('data-scroll')) * paymentSources.outerHeight();
        paymentSources.scrollTop(scroll_length);
    })

    $('.info.source').off('click', resizing);
    $('.info.source').on('click', resizing);
    function resizing() {
        if ($(window).outerWidth() < 767) {
            $('.info.source').toggleClass('fullView');
        }
        $(window).resize(function () {
            $('.info.source').removeClass('fullView');
        });
    }
    $('.currency').click(currency);
    function currency(e) {
        e.stopPropagation();
        let currentCurrency = $('[data-currentCurrency]').attr('data-currentCurrency');
        console.log(currentCurrency);
        let x = $('[data-currency]');
        for (const obj of x) {
            if ($(obj).attr('data-currency') == currentCurrency) {
                $(obj).css('display', 'none');
            }
            else {
                $(obj).css('display', 'inherit');
            }
        }
        if (currentCurrency == 'inr') {
            currentCurrency = $('[data-currentCurrency]').attr('data-currentCurrency','usd');
        }
        else {
            currentCurrency = $('[data-currentCurrency]').attr('data-currentCurrency','inr');
        }
     }
     // pay now button
        $('.btnDisable').click(function (e) {
            if (window.outerWidth >= 767) {
                e.preventDefault();
            }
        })
    // confirm Payment
    $(".button.confirm").click(function () {
        $(".button.confirmMail").attr('data-confirmWith',$(this).attr('data-confirmWith'))
        $(".confirmBox").fadeIn(300).css('display','flex');
    });
    $(".button.cancel").click(function () {
        $(".confirmBox").fadeOut(300);
    });
    $(".button.confirmMail").click(function(){
        let details={
            full_name:$('.firstPassenger').text().substr(2),
            uniq_code:$("#uniqCode").text(),
            paid_by:$(this).attr('data-confirmWith')
        }
        if ($(this).attr('data-confirmWith') == 'Bank') {
            $.ajax({
                url: "confirm_mail.php",
                method: "post",
                data: {data:JSON.stringify(details)},
                success: function (response) {
                    if (response.includes("Send Successfully")) {
                        $('.confirmMainBox').html(`<h1>Thank You!</h1>
                                                    <h3>Your Order Has Been Booked</h3>
                                                    <small>We have received your details successfully with "${details.uniq_code}" order id. We'll notify you once we have received your payment. Your dummy ticket, dummy hotel or both will be delivered at your specified date or within 2 hours. </small>
                                                    <a href='../' class='button' style='margin-top:10px;'>Back To Home</a>
                                                    <a class='button cancel'>X</a>`)
                        $(".button.cancel").click(function () {
                            $(".confirmBox").fadeOut(300);
                        });
                    }
                }
            });
        }
        else{
            //code for UPI & Paypal confirm buttone
            setTimeout(function () {
                $('.confirmMainBox').html(`<h1>Thank You!</h1>
                                            <h3>Your Order Has Been Booked</h3>
                                            <small>We have received your details successfully with "${details.uniq_code}" order id. We'll notify you once we have received your payment. Your dummy ticket, dummy hotel or both will be delivered at your specified date or within 2 hours. </small>
                                            <a href='../' class='button' style='margin-top:10px;'>Back To Home</a>
                                            <a class='button cancel'>X</a>`);
                $(".button.cancel").click(function () {
                    $(".confirmBox").fadeOut(300);
                });
            },500)
        }

    })
})

// offsetTop