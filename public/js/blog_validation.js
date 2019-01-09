var app_root = $('#app_url').val();

$(document).ready(function () {

    $('input, textarea').blur(function() {
       var value = $.trim( $(this).val() );
       $(this).val( value );
    });

    $('#blog').validate({
        onkeyup: false,
        errorClass: 'error',
        validClass: 'valid',
         rules: {            
            name: {
                required: true                
            },
            username: {
                required: true                
            },
            Password: {
                  required: true   
            },
            gender: {
              required: true     
            },
            // vehicle: {
            //   required: true     
            // },
            "vehicle[]": { 
      required: true, 
      minlength: 1 
      },
            company_list: {
              required: true     
            },
            myresume: 
            { 
            required: true,
            extension: "png", 
            filesize: 1048576  
            },
        },
        messages: {
            name: {
                required: 'Name is required'                   
            },
            username: {
                required: 'username is required'                
            },
             Password: {
                required: 'Password is required'                
            },
            gender: {
                required: 'gender is required'                
            },
                 "vehicle[]": { 
      required: "You must check at least 1 box",
                maxlength: "Check no more than {0} boxes"
      },
             vehicle: {
                required: 'vehicle is required'                
            },
            company_list: {
                required: 'company list is required'                
            },
            myresume: 
            {
               required: 'File must be PNG, less than 1MB',
               extension:"select valied input file format"
            }
        },        
        highlight: function (element) {
            $(element).closest('div').addClass("f_error");
        },
        unhighlight: function (element) {
            $(element).closest('div').removeClass("f_error");
        },
        errorPlacement: function (error, element) {
            $(element).closest('div').append(error);
        }
    });
});


$(".btn_blog").click(function () {
    $('#blog').validate();
    var validated = $('#blog').valid();
    if (validated == true)
    {
        window.form.submit();
    }
});


