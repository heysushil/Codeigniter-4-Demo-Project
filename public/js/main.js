// alert('hello');

// $('#admin_user_data').submit(function(e){
//     e.preventDefault();
//     $.ajax({
//         url:base_url + 'public/admin/admin_user_data',
//         type:'post',
//         dataTyep:'json',
//         data: new FormData(this),
//         processData: false,
//         contentType: false,
//         caches: false,
//         async: false,
//         success: function(res){
//             console.log(res);
//         }
//     });
// });

// Remember to pass url without slash at last of the method
$('#admin_user_data').submit(function(e){
    e.preventDefault();
    $.ajax({
        url: base_url + '/public/admin/admin_user_data',
        type: 'post',
        dataType: 'json',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(res){
            if($.isEmptyObject(res.errors)){
                $('.show-error').removeClass('alert-danger');
                $('.show-error').addClass('alert-success').html(res.success);
            }else{
                $('.show-error').addClass('alert-danger').html(res.errors);
            }
        }
    });
});