<?php
    // $this->extend('admin/index');
    // $this->section('content');
?>

<h1><?=esc($title)?></h1>

<div class="container">
    <div class="row show-error">

    </div>
    <div class="row">
        <?php //base_url('public/admin/admin_user_data/')
        ?>
        <form action="" id="admin_user_data" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">User Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="check" name="check">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <h1>Table</h1>

        <table class="table">
            <tbody>
                <tr>
                    <td>name</td>
                    <td>name</td>
                    <td>name</td>
                    <td>name</td>
                    <td>name</td>
                    <td>name</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
    // $this->endSection();
?>