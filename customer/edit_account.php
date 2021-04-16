<h1 align="center">Edit Your Profile</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <lable>Costumer Name : </lable>
        <input type="text" name="c_name" class="form-control" required>
    </div>
    <div class="form-group">
        <lable>Costumer Email : </lable>
        <input type="text" name="c_email" class="form-control" required>
    </div>
    <div class="form-group">
        <lable>Costumer Country : </lable>
        <input type="text" name="c_country" class="form-control" required>
    </div>
    <div class="form-group">
        <lable>Costumer City : </lable>
        <input type="text" name="c_city" class="form-control" required>
    </div>
    <div class="form-group">
        <lable>Costumer Contact : </lable>
        <input type="text" name="c_contact" class="form-control" required>
    </div>
    <div class="form-group">
        <lable>Costumer Address : </lable>
        <input type="text" name="c_address" class="form-control" required>
    </div>
    <div class="form-group">
        <lable>Costumer Images : </lable>
        <input type="file" name="c_images" class="form-control form-height-custom" required>
        <img class="img-responsive" src="customet_images/dev-profile.jpeg" alt="Costumer Image">
    </div>
    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div>
</form>