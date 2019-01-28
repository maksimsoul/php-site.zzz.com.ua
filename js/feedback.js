$(document).ready(function(){
    $('#button_contacts').click(function(){
        var form_name   = $('#form_name').val();
        var form_email   = $('#form_email').val();
        var form_message = $('#form_message').val();
        $.ajax({
            url: "post.php",
            type: "post",
            dataType: "json",
            data: {
                "form_name":   form_name,
                "form_email":   form_email,
                "form_message": form_message
            },
            success: function(data){
                $('.messages').html(data.result);
            }
        });
    });
});