<?php require APPROOT . '/views/inc/inner/header.php'; ?>
<style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
}

.succWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
}

</style>

<body class="top-navbar-fixed">
    <div class="main-wrapper">

        <?php require APPROOT . '/views/inc/inner/topbar.php'; ?>
        <div class="content-wrapper">
            <div class="content-container">
                <?php require APPROOT . '/views/inc/inner/leftbar.php'; ?>
                <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-6">
                                <h2 class="title">Manage Student</h2>

                            </div>

                            <!-- /.col-md-6 text-right -->
                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li> Students</li>
                                    <li class="active">Manage Students</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->

                    <section class="section">
                        <div class="container-fluid">



                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h5>View Student's Info</h5>
                                            </div>
                                        </div>
                                        <?php if(!empty($data['msg'])){?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Well done!</strong><?php echo htmlentities($data['msg']); ?>
                                        </div><?php } 
else if(!empty($data['error'])){?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($data['error']); ?>
                                        </div>
                                        <?php } ?>
                                        <div class="panel-body p-20">

                                            <table id="example" class="display table table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Student Name</th>
                                                        <th>Roll Id</th>
                                                        <th>Class</th>
                                                        <th>Reg Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Student Name</th>
                                                        <th>Roll Id</th>
                                                        <th>Class</th>
                                                        <th>Reg Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php 

                                                    //foreach loop
                                                    $cnt=1; 
                                                    foreach($data['rows'] as $result){ 
                                                    //start showing details  
                                                    ?>
                                                    <tr>
                                                        <td><?php echo htmlentities($cnt);?></td>
                                                        <td><?php echo htmlentities($result->StudentName);?></td>
                                                        <td><?php echo htmlentities($result->RollId);?></td>
                                                        <td><?php echo htmlentities($result->ClassName);?>(<?php echo htmlentities($result->Section);?>)
                                                        </td>
                                                        <td><?php echo htmlentities($result->RegDate);?></td>
                                                        <td>
                                                            <?php if($result->Status==1){
                                                            echo htmlentities('Active');
                                                            }
                                                            else{
                                                            echo htmlentities('Blocked'); 
                                                            }
                                                             ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo URLROOT.'/students/edit/'. htmlentities($result->StudentId);?>">
                                                                <i class="fa fa-edit" title="Edit Record"></i> 
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1;}?>


                                                </tbody>
                                            </table> 


                                            <!-- /.col-md-12 -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->


                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.section -->

    </div>
    <!-- /.main-page -->



    </div>
    <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

    </div>
