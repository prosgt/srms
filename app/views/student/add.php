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
                                <h2 class="title">Create Student Class</h2>
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
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-12">
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

                                            <form class="form-horizontal" action="<?php echo URLROOT.'/students/add'?>" method="post">

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Full
                                                        Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="fullname" class="form-control"
                                                            id="fullanme" required="required" autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Rool Id</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="rollid" class="form-control"
                                                            id="rollid" maxlength="5" required="required"
                                                            autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Email
                                                        id)</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" name="emailid" class="form-control"
                                                            id="email" required="required" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Gender</label>
                                                    <div class="col-sm-10">
                                                        <input type="radio" name="gender" value="Male"
                                                            required="required" checked="">Male <input type="radio"
                                                            name="gender" value="Female" required="required">Female
                                                        <input type="radio" name="gender" value="Other"
                                                            required="required">Other
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Class</label>
                                                    <div class="col-sm-10">
                                                        <select name="class" class="form-control" id="default"
                                                            required="required">
                                                            <option value="">Select Class</option>
                                                            <?php foreach($data['result'] as $result){?>
                                                            <option value="<?php echo htmlentities($result->id); ?>">
                                                                <?php echo htmlentities($result->ClassName); ?>&nbsp;
                                                                Section-<?php echo htmlentities($result->Section); ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date" class="col-sm-2 control-label">DOB</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="dob" class="form-control" id="date">
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary">Add</button>
                                                    </div>
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

            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /.main-wrapper -->
    <?php require APPROOT . '/views/inc/inner/footer.php'; ?>
