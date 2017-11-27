<?php include 'template\header.php'; ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">PageTwo</li>
</ol>

 

  <div class="card mb-3">
            <div class="card-header" style="background-color: #00C851;color: whitesmoke;">
                <i class="fa fa-table" ></i> PageTwo List</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>TYPE</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
                        foreach ($pagetwo_list as $list) {
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $list->id; ?></span></td>
                                <td><?php echo $list->name; ?></td>
                                <td><?php echo $list->type; ?></td>
 
                                <td><a type='button' class='btn btn-warning' href='<?php echo site_url(); ?>/pageone/updateSample/<?php echo $list->id; ?>'><i class='fa fa-pencil' ></i></a></td>   

                            </tr>
                        <?php } ?>
 
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
          




<?php include 'template\footer.php'; ?>