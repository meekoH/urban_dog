function validateform(form_id) {
    var $form = $('#'+form_id);
    var requiredfields = $form.find("[name='required']").val();

    if (requiredfields!="") {
        rarr=requiredfields.split(",");

        for (rc=0;rc<rarr.length;rc++)
        {

            if ($form.find("[type='checkbox'][name='"+rarr[rc]+"']").length == 0) {
                if ($form.find("[type='radio'][name='"+rarr[rc]+"']").length > 0 &&
                        $form.find("[type='radio'][name='"+rarr[rc]+"']:checked").length == 0) {
                    alert("Missing : " + rarr[rc]);
                    return false;
                }
                if ($form.find("[name='"+rarr[rc]+"']").val() == "") {
                    alert("Missing : " + rarr[rc]);
                    return false;
                }
            }
        }
    }
    $form.submit(function(e) {
        $.ajax({
            url: 'http://www.digitalmarketingbox.com/unoapp/webform_ops.php',
            type: 'POST',
            data:  new FormData($form.get(0)),
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            dataType: "json",
            success: function(data, textStatus, jqXHR) {
                if(data["Result"]=="Success") {   
                   $form.html(data["Msg"]);    
                } else {
                    alert(data[Msg]);
                }                                 
            },
            error:function() {
                alert("Error : Please contact UNOapp");
            }
        }); 
        e.preventDefault(); //Prevent Default action. 
    });
}