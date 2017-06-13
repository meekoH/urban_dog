$(document).ready(function() {
    //	$(".login button").click(function() {
    //		$(location).attr('href', '../admin/admin_news.php');
    //	});
    //    $(".news .row").click(function() {
    //        $(location).attr('href', '../admin/admin_news_new.php');
    //    });
    $(".news .new-item").click(function() {
        $(location).attr('href', '../admin/admin_news_new.php');
    });
    //    $(".blog .row").click(function() {
    //        $(location).attr('href', '../admin/admin_blog_new.php');
    //    });
    //    $(".blog .new-item").click(function() {
    //        $(location).attr('href', '../admin/admin_blog_new.php');
    //    });
    //    $(".talent .row").click(function() {
    //        $(location).attr('href', '../admin/admin_talent_new.php');
    //    });
    //    $(".talent .new-item").click(function() {
    //        $(location).attr('href', '../admin/admin_talent_new.php');
    //    });
    $(".news-det .back-btn").click(function() {
        $(location).attr('href', '../admin/admin_news.php');
    });
    $(".blog-det .back-btn").click(function() {
        $(location).attr('href', '../admin/admin_blog.php');
    });
    //    $(".news-det .save-btn").click(function() {
    //        $(location).attr('href', '../admin/admin_news.php');
    //    });
    //    $(".blog-det .save-btn").click(function() {
    //        $(location).attr('href', '../admin/admin_blog.php');
    //    });
    $(".talent-det .back-btn").click(function() {
        $(location).attr('href', '../admin/admin_talent.php');
    });
    //    $(".talent-det .save-btn").click(function() {
    //        $(location).attr('href', '../admin/admin_talent.php');
    //    });
    //    $(".row img:last-child").click(function(e) {
    //        e.stopPropagation();
    //        confirm("Are you sure you want to delete this item?");
    //    });

    $(".category").click(function() {
        $("div.new-cat").show();
        $("div.new-cat input").focus();
    });
//    $("div.new-cat button").click(function() {
//        $("div.new-cat").hide();
//    })
    $('#photo[type=file]').on('change', prepareUpload);
});

function chkLogin() {
    var username = $("#username").val();
    var password = $("#password").val();

    $("#loginBtn").attr('onclick', 'javascript:chkLogin();').removeAttr('disabled');

    $("#frmlogin").find("input").css('border', '');
    if (username == "")
    {
        $("#username").focus().addClass('error')
        return false;
    }
    if ((password) == "")
    {
        $("#password").focus().addClass('error')
        return false;
    }
    var params = "action=checklogin&username=" + username + "&password=" + password;
    $.ajax({
        url: 'login_ops.php',
        type: 'post',
        data: params,
        beforeSend: function() {
            $("#loginBtn").attr('disabled', 'disabled');
            $("#loginBtn").attr('onclick', '');
        },
        success: function(data) {
            outstr = (data);
            if (outstr.indexOf("client_login_pass") > 0)
            {
                window.location.href = "../index.php";
            }
            else if (outstr.indexOf("admin_login_pass") > 0)
            {
                window.location.href = "admin_blog.php";
            }
            else
            {
                $("#login_errmsg").html(data).show();
            }
            $("#loginBtn").attr('onclick', 'javascript:chkLogin();').removeAttr('disabled');
            return false;
        }
    });
    return false;
}
function sendForgotPass() {
    $("#password_form").find("input").removeClass('error');
    $("#msgBox_forgotpass").html("").hide();
    var email = $("#forgotemail").val();
    var filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if ((email) == "")
    {
        $("#forgotemail").focus().addClass('error')
        return false;
    }
    if (!filter.test(email)) {
        $("#forgotemail").focus().addClass('error')
        return false;
    }

    $("#msgBox_forgotpass").hide();
    var frmdata = $("#password_form").serialize();
    $.ajax({
        url: "login_ops.php",
        type: 'post',
        data: frmdata,
        async: false,
        success: function(response) {
            if (response == 'success') {
                alert("Thank-you we have sent you an email with a link to reset your password.");
                window.location.href = "login.php";
                return true;
            }
            else {
                alert(response);
                return false;
            }
        }
    });

}

function reset_password() {
    if (userInfo_validation()) {
        $("#msgBox_userinfo").hide();
        var frmdata = $("#user_form").serialize();

        $.ajax({
            url: "login_ops.php",
            type: 'post',
            data: frmdata + "&action=updatePassword",
            async: false,
            success: function(response) {
                if (response == 'success') {
                    window.location.href = "admin_news.php";
                }
                else if (response == "logout") {
                    $("#msgBox_userinfo").html("Session Expired.").css('color', 'red').show();
                    window.location.href = "login.php";
                }
                else {
                    $("#msgBox_userinfo").html(response).css('color', 'green').show();
                    window.location.href = "admin_news.php";
                }
            }
        });
    }
    else {
        //        $("#msgBox_userinfo").html('Please fill out all required form fields').show();
        return false;
    }
}
function userInfo_validation() {
    $("#user_form").find("input").removeClass('error');
    $("#msgBox_userinfo").hide();
    var isValid = true;

    var username = $("#username").val();
    var password = $("#password").val();
    var confPass = $("#confirm_password").val();

    $("#msgBox_userinfo").hide();
    if (username == '') {
        $("#username").focus().addClass('error');
        $("#msgBox_userinfo").html('Please fill out all required form fields').css('color', 'red').show();
        isValid = false;
    }
    if (password == '') {
        $("#password").addClass('error');
        $("#msgBox_userinfo").html('Please fill out all required form fields').css('color', 'red').show();
        isValid = false;
    }
    if (confPass == '') {
        $("#confirm_password").addClass('error');
        $("#msgBox_userinfo").html('Please fill out all required form fields').css('color', 'red').show();
        isValid = false;
    }
    if (password.length < 8) {
        $("#msgBox_userinfo").html("Password must contain 8 characters.").css('color', 'red').show();
        $("#password").addClass('error')
        isValid = false;
    }
    if (password != confPass) {
        $("#msgBox_userinfo").html("Passwords should match.").css('color', 'red').show();
        $("#password").addClass('error')
        $("#confirm_password").addClass('error')
        isValid = false;
    }

    return isValid;
}
function prepareUpload(event)
{
    $("#blog_img").hide();
    files = event.target.files;
    if (files.length > 0) {
        var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }
        var reader;
        var file = document.getElementById('photo').files[0];
        //        for ( ; i < len; i++ ) {
//        var photoPath = '';

        if (file !== undefined) {
            if (!!file.type.match(/image.*/)) {
                if (window.FileReader) {
                    reader = new FileReader();
                    reader.onloadend = function(e) {
                    };
                    reader.readAsDataURL(file);
                }
                if (formdata) {
                    formdata.append("photo[]", file);
                }
            }
            $.ajax({
                url: "upload.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                async: false,
                beforeSend: function() {
                    $("#loading_img").show();
                },
                success: function(res) {
                    $("#blog_img_hidden").val(res);
                    $("#blog_img").attr('src', "../uploads/" + res).show();
                    $("#loading_img").hide();
                }
            });
            return true;
        }
    }
}
function blog_addedit(blogid) {
    var isValid = true;

    var editor = CKEDITOR.instances.editor.getData();

    //    if ($("#file").val() == '') {
    //        $("#file").addClass('error')
    //        isValid = false;
    //    }
    if ($("#title").val() == '') {
        $("#title").addClass('error')
        isValid = false;
    }
    if ($("#date").val() == '') {
        $("#date").addClass('error')
        isValid = false;
    }
    if (editor == '') {
        $("#editor").addClass('error')
        isValid = false;
    }

    if (isValid) {

        var frmdata = $("#admin_blog_form").serialize();
        var photoPath = $("#blog_img_hidden").val();
        var urls = frmdata + "&action=addEditBlog&description=" + encodeURIComponent(editor) + "&blog_id=" + blogid;
        if (photoPath != '') {
            urls = frmdata + "&action=addEditBlog&description=" + encodeURIComponent(editor) + "&image_name=" + photoPath + "&blog_id=" + blogid;
        }
        $.ajax({
            url: "blog_ops.php",
            type: 'post',
            data: urls,
            async: false,
            success: function(response) {
                if (response > 0) {
                    $(location).attr('href', '../admin/admin_blog.php');
                }
            }
        });

    } else {
        $("#msgBox_blog").html('Please fill out all required form fields').css('color', 'red').show();
        return false;
    }

}

function fillCategory() {
    $(".category_list_div div").remove();
    $.ajax({
        url: "talent_ops.php",
        type: 'post',
        data: "action=fetchAllCategory",
        async: false,
        success: function(response) {
            if (response != '') {
                //                $(".category_list_div div").remove();
                $(".category_list_div").append(response);
            }
            else {
                $(".category_list_div").append("<div class='row'>No Category Found</div>");
            }
        }
    });
    $(".category_list_div div").first().addClass("current-talent");
    var catId = $(".category_list_div div").first().attr('id');
    var items = catId.split('_');
    $("#selectedCategory").val(items[1]);
}

//// this function is used to add new category from Talent page
function add_cate(catId) {
    var new_cat = '';
    if (catId == 0) {
        ///// insert category
        new_cat = $("#new_cat").val();
        if (new_cat == '') {
            $("#new_cat").focus();
            return false;
        }
    } else {
        ///// update category
        new_cat = $("#cat_name_" + catId).val();
        if (new_cat == '') {
            $("#cat_name_" + catId).focus();
            return false;
        }
    }
    $.ajax({
        url: "talent_ops.php",
        type: 'post',
        data: "action=addCategory&cat_name=" + new_cat + "&cat_id=" + catId,
        async: false,
        success: function(response) {
            if (response > 0) {
                fillCategory();
            }
            else {
                alert("Error in adding new Category");
            }
        }
    });
}

function deleteCategory(category_id) {
    if (confirm("Are you sure want to delete This category?")) {
        $.ajax({
            url: "talent_ops.php",
            type: 'post',
            data: "action=deleteCategory&category_id=" + category_id,
            async: false,
            success: function(response) {
                if (response > 0) {
                    fillCategory();
                }
            }
        });
    }
}

function show_edit_cate(catId) {

    $("div[id^=cat_list_]").show();
    $("div[id^=cat_edit_]").hide();

    ///// to fill category name 
    var cat_name = $("#cat_list_" + catId + " span").text();
    $("#cat_name_" + catId).val(cat_name);

    $("#cat_list_" + catId).hide();
    $("#cat_edit_" + catId).show();
}
function cancel_edit_category(catId) {
    $("#cat_list_" + catId).show();
    $("#cat_edit_" + catId).hide();
}
function addEditPosition(position_id) {
    var cat_id = $("#selectedCategory").val();
    $(location).attr('href', '../admin/admin_talent_new.php?position_id=' + position_id + "&category_id=" + cat_id);
}

function deletePosition(position_id) {
    if (confirm("Are you sure want to delete This position?")) {
        $.ajax({
            url: "talent_ops.php",
            type: 'post',
            data: "action=deletePosition&position_id=" + position_id,
            async: false,
            success: function(response) {
                fillPosition();
            }
        });
    }
}

function doAddEditPosition(position_id, category_id) {
    var frmdata = $("#frmPosition").serialize();
    $.ajax({
        url: "talent_ops.php",
        type: 'post',
        data: frmdata + "&action=addEditPostion&position_id=" + position_id + "&category_id=" + category_id,
        async: false,
        success: function(response) {
            if (response > 0) {
                $(location).attr('href', '../admin/admin_talent.php');
            } else {
                alert("Error in adding new Category");
            }
        }
    });
}

function fillPositionForm(positionId) {
    if (positionId > 0) {
        $.ajax({
            url: "talent_ops.php",
            type: 'post',
            data: "action=fetchPosition&positionid=" + positionId,
            async: false,
            success: function(response) {
                var obj = $.parseJSON(response);
                $("#job_title").val(obj[0].job_title);
                $("#job_url").val(obj[0].job_url);
                $("#country").val(obj[0].country);
                $("#city").val(obj[0].city);
            }
        });
    }

}

function change_category(catId) {
    $("div[id^='cat_']").removeClass('current-talent');
    $("#selectedCategory").val(catId);
    $("#cat_" + catId).addClass("current-talent");
    fillPosition();
}

function fillPosition() {
    var selectedCategory = $("#selectedCategory").val();
    $(".position_list_div div").remove();
    $.ajax({
        url: "talent_ops.php",
        type: 'post',
        data: "action=fetchAllPosition&selectedCategory=" + selectedCategory,
        async: false,
        success: function(response) {
            if (response != '') {
                $(".position_list_div").append(response);
            }
            else {
                $(".position_list_div").append("<div class='row'>No Position Found</div>");
            }
        }
    });
//    $(".category_list_div div").first().addClass("current-talent");
}

function addEditBlog(blogId) {
    $(location).attr('href', '../admin/admin_blog_new.php?blogId=' + blogId);
}
function fillBlog() {
    $(".blog_list_div div").remove();
    $.ajax({
        url: "blog_ops.php",
        type: 'post',
        data: "action=fetchAllBlog",
        async: false,
        success: function(response) {
            if (response != '') {
                $(".blog_list_div").append(response);
            }
            else {
                $(".blog_list_div").append("<div class='row'>No Blog Found</div>");
            }
        }
    });
//    $(".category_list_div div").first().addClass("current-talent");
}
function fillBlogForm(blogId) {
    if (blogId > 0) {
        $.ajax({
            url: "blog_ops.php",
            type: 'post',
            data: "action=fetchBlog&blogid=" + blogId,
            async: false,
            success: function(response) {
                var obj = $.parseJSON(response);
                //                $("#photo").val(obj[0].image_name);
                $("#title").val(obj[0].title);
                $("#date").val(obj[0].date);
                $("#editor").val(obj[0].description);
                if (obj[0].image_name != '') {
                    $("#blog_img").attr('src', obj[0].image_name).show();
                    $("#loading_img").hide();
                } else {
                    $("#blog_img").hide();
                }
            }
        });
    }

}

function deleteBlog(blog_id) {
    if (confirm("Are you sure want to delete this blog?")) {
        $.ajax({
            url: "blog_ops.php",
            type: 'post',
            data: "action=deleteBlog&blog_id=" + blog_id,
            async: false,
            success: function(response) {
                fillBlog();
            }
        });
    }
}

function addedit_newsinfo()
{
    if ($('#title').val() == '')
    {
        alert('Required : News Title');
        return false;
    }
    if ($('#urllink').val() == '')
    {
        if (!$("#demo_box_1").is(':checked') == true)
        {
            alert('Required : News Link URL');
            return false;
        }

    }
    if ($('#date').val() == '')
    {
        alert('Required : News Date');
        return false;
    }
    if ($('#thumb_desc').val() == '')
    {
        alert('Required : THUMBNAIL DESCRIPTION');
        return false;
    }
    var editor = CKEDITOR.instances.editor.getData();
    //var frmdata = $('#addnews').find('input, select, textarea, button').serialize()
    var frmdata = $("#addnews").serialize();
    $.ajax({
        url: "news_ops.php",
        type: 'post',
        data: frmdata + "&editor=" + encodeURIComponent(editor),
        async: false,
        success: function(response) {
            if (response == 'success') {
                window.location.href = "admin_news.php";
            }
        }
    });
    return true;

}
function escapeHtml(text) {
    return text
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
}
$("#demo_box_1").click(function() {
    if ($(this).is(':checked') == true)
    {
        $('#urllink').val('');
        $('#urllink').attr('readonly', true);
    } else {
        $('#urllink').attr('readonly', false);
    }
});
function edit_newsinfo(enid)
{
    window.location.href = "admin_news_new.php?id=" + enid;
}
function delete_newsinfo(dnid)
{
    if (confirm("Are you sure you want to delete")) {
        $.ajax({
            url: "news_ops.php",
            type: 'post',
            data: "action=deletenews&dnid=" + dnid,
            async: false,
            success: function(response) {
                if (response == 'success') {
                    window.location.href = "admin_news.php";
                }
            }
        });
        return true;
    }
}

function fillnews() {
    $(".table-body div").remove();
    $.ajax({
        url: "news_ops.php",
        type: 'post',
        data: "action=fetchAllnews",
        async: false,
        success: function(response) {
            if (response != '') {

                $(".table-body").append(response);
            }
            else {
                $(".table-body").append("No Category Found");
            }
        }
    });

}
function fetchnews(news_id)
{
    if (news_id != '')
    {

        $.ajax({
            url: "news_ops.php",
            type: 'post',
            data: "action=fetchnews&news_id=" + news_id,
            async: false,
            success: function(response) {
                if (response != '') {
                    var obj = $.parseJSON(response);
                    $("#nid").val(obj[0].news_id);
                    $("#title").val(obj[0].title);
                    $("#urllink").val(obj[0].urllink);
                    $("#date").val(obj[0].date);
                    $("#thumb_desc").val(obj[0].thumb_desc);
                    $("#editor").val(obj[0].description);

                }
            }
        });

    }
}