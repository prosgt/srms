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
                                <h2 class="title">Update Student Class</h2>
                            </div>

                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="#">Classes</a></li>
                                    <li class="active">Create Class</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->

                    <section class="section">
                        <div class="container-fluid">





                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h5>Create Student Class</h5>
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
                                        <div class="panel-body">


                                            <?php 
                                                //looping for display
                                                $cnt=1; foreach($data['detail'] as $result){?>
                                            <form method="post" action="<?php echo URLROOT.'/classes/update/'.htmlentities($result->id); ?>">
                                                <div class="form-group has-success">
                                                    <input type="hidden" name="id"
                                                        value="<?php echo htmlentities($result->id);?>">
                                                    <label for="success" class="control-label">Class Name</label>
                                                    <div class="">
                                                        <input type="text" name="classname"
                                                            value="<?php echo htmlentities($result->ClassName);?>"
                                                            required="required" class="form-control" id="success">
                                                        <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Class Name in
                                                        Numeric</label>
                                                    <div class="">
                                                        <input type="number" name="classnamenumeric"
                                                            value="<?php echo htmlentities($result->ClassNameNumeric);?>"
                                                            required="required" class="form-control" id="success">
                                                        <span class="help-block">Eg- 1,2,4,5 etc</span>
                                                    </div>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="success" class="control-label">Section</label>
                                                    <div class="">
                                                        <input type="text" name="section"
                                                            value="<?php echo htmlentities($result->Section);?>"
                                                            class="form-control" required="required" id="success">
                                                        <span class="help-block">Eg- A,B,C etc</span>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <div class="form-group has-success">

                                                    <div class="">
                                                        <button type="submit" name="update"
                                                            class="btn btn-success btn-labeled">Update<span
                                                                class="btn-label btn-label-right"><i
                                                                    class="fa fa-check"></i></span></button>
                                                    </div>



                                            </form>


                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-8 col-md-offset-2 -->
                            </div>
                            <!-- /.row -->




                        </div>
                        <!-- /.container-fluid -->
                    </section>
                    <!-- /.section -->

                </div>
                <!-- /.main-page -->


                <!-- /.right-sidebar -->

            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->
        <?php require APPROOT . '/views/inc/inner/footer.php'; ?>
