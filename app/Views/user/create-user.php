<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter 4 User Form With Validation Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>

<body>
    <div class="container">
        <br>
        <?= \Config\Services::validation()->listErrors(); ?>
        <span class="d-none alert alert-success mb-3" id="res_message"></span>
        <div class="row">
            <div class="col-md-9">
                <form action="<?php echo base_url('public/index.php/users/store'); ?>" name="user_create" id="user_create" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Id</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        if ($("#user_create").length > 0) {
            $("#user_create").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        maxlength: 50,
                        email: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please enter name",
                    },
                    email: {
                        required: "Please enter valid email",
                        email: "Please enter valid email",
                        maxlength: "The email name should less than or equal to 50 characters",
                    },
                },
            })
        }
    </script>
</body>

</html>