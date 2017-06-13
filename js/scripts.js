$(document).ready(function() {

    $(".blog-main .bloglink").click(function() {
        var blogid = $(this).data("id");
        if (blogid > 0 && blogid != '') {
            $(location).attr('href', 'blog_detailed.php?blogid=' + blogid);
        }
    });
    $(".blog-main .share").click(function() {
        var blogid = $(this).data("id");
        var blogtitle = $(this).data("title");
        if (blogid > 0 && blogid != '') {
            var location = 'http://www.park9.ca/blog_detailed.php?blogid=' + blogid;
            location = encodeURIComponent(location);
            var pubid = 'ra-54417da11752f812';
            var text = blogtitle;
            var url = "https://www.addthis.com/bookmark.php?source=tbxnj-1.0&pubid=" + pubid + "&url=" + location;
            //var url = "https://www.addthis.com/bookmark.php?source=tbxnj-1.0&pubid=" + pubid + "&text=" + text + "&url=" + location;
            window.open(url);
        }
    });
    $("div[id^=blog_click_]").click(function() {
        var blogid = $(this).attr("id");
        var res = blogid.split("_");
        if (res[2] > 0) {
            window.location.href = "blog_detailed.php?blogid=" + res[2];
        }
    });
});


///////////////////   Custom Functions to fill Pages from Database.... ////////////////////////////////
// <editor-fold defaultstate="collapsed" desc="Custom Functions to fill Pages from Database">

function fetchAllTalent() {
    $.ajax({
        url: 'talent_ops.php',
        type: 'post',
        data: {'action': 'fetchAllTalent'},
        beforeSend: function() {
        },
        success: function(data) {
            $("#talent_div_id").html(data);
        }
    });
}
function fillblog() {
    $(".blog-main div").remove();
    $.ajax({
        url: "blog_ops.php",
        type: 'post',
        data: "action=fetchAllblogs",
        async: false,
        success: function(response) {
            if (response != '') {
                $(".blog-main").append(response);
            }
        }
    });

}

function blogdetails(blogid) {
    $(".blog-col-left").html('');
    $(".blog-col-right div.hidden-sm").remove();
    $.ajax({
        url: "blog_ops.php",
        type: 'post',
        data: "action=fetchBlogdetails&blogid=" + blogid,
        async: false,
        success: function(response) {
            var obj = $.parseJSON(response);
            if (obj.left_html != '') {
                $(".blog-main").append(obj.left_html);
            }
            
        }
    });

}

function fetchNews(offset)
{
    $.ajax({
        url: "news_ops.php",
        type: 'post',
        data: {"action": "fetchAllNews", 'offset': offset},
        async: false,
        success: function(response) {
            var obj = $.parseJSON(response);

            $("#news_div_section").html(obj.html);
            $("#page_no").html(obj.pageHtml);
            $("#navigation_btn").html(obj.navHtml);
            $('html, body').animate({
                scrollTop: $("#news_div_section").offset().top - 500
            }, 2000);
        }
    });
}

function newsDetail(news_id)
{
    if (news_id != '')
    {
        $.ajax({
            url: "news_ops.php",
            type: 'post',
            data: "action=newsDtail&news_id=" + news_id,
            async: false,
            success: function(response) {
                //console.log(response)
                $("#news_detailed_section").html(response);
            }
        });
    }
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
}

function contactinquery()
{
    if ($('#name').val() == '')
    {
        alert('Fill name');
        return false;
    }
    if ($('#company').val() == '')
    {
        alert('Fill company');
        return false;
    }
    if ($('#email').val() == '')
    {
        alert('Fill email');
        return false;
    }
    if (!isValidEmailAddress($('#email').val()))
    {
        alert('Fill valid email');
        return false;
    }
    if ($('#contact').val() == '')
    {
        alert('Fill contact');
        return false;
    }
    var frmdata = $("#contactfrm").serialize();
    $.ajax({
        url: "contact_ops.php",
        type: 'post',
        data: frmdata,
        async: false,
        success: function(response) {
            if (response == 'success') {
                $("#contactfrm")[0].reset();
            }
        }
    });
}

// </editor-fold>
///////////////////   Custom Functions to fill Pages from Database.... ////////////////////////////////