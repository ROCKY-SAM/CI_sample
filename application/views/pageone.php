<?php include 'template\header.php'; ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">pageone</li>
</ol>

 

<div class="card mb-3">

    <div class="card-header" style="background-color: #00C851;color: whitesmoke;">
        <i class="fa fa-user"></i> Add Sample</div>
    <div class="card-body">
        <form action="<?php echo site_url(); ?>/pageone/addSample" method="post">
            <div class="form-group row">
                <label for="usr" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="userName" required="">
                </div>
            </div> 
            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <select class="form-control" name="typeSelect" required>
                        <option value="type1">Type 01</option>
                         <option value="type2">Type 02</option>
                          <option value="type3">Type 03</option>
                    </select>
                </div>
            </div>
<!--            <div class="form-group row">
                <label for="task" class="col-sm-2 col-form-label">Type Multi</label>
                <div class="col-sm-10">
                    <select multiple class="form-control" name="typeMulti">
                        <option value="">hi</option>
                    </select>
                </div>
            </div>           -->

            <div class="form-group row" style="color: whitesmoke;">
                <div class="col-sm-9"></div>
                <div class="col-sm-1">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times-rectangle-o" ></i> Reset</button>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary" ><i class="fa fa-check-square" ></i> Submit</button>
                </div>


            </div>
        </form>
    </div>
</div>





<?php include 'template\footer.php'; ?>