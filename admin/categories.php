<?php include "includes/header.php";?>
    <div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/admin_nav.php";?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Admin!
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">
                       
            <?php insert_categories(); ?>    
                <form action="" method="post">
                     <div class="form-group">
                    <label for="cat-title">Add Categories</label>
                    <input type="text" class="form-control" name="cat_title">
                     </div>
                         <div class="form-group">
                         <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                         </div>
                </form>
                            <?php // UPDATE AND INCLUDE QUERY CATEGORY

                                if(isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];
                                    include "includes/update_categories.php";
                                }
                            ?>

                        </div> <!-- /.Add-Category Form -->

                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>

    <?php  findAllCategories()  //FINDING ALL CATEGORIES -- QUERY ?>
                                <tbody>
                            </table>
    <?php deleteCategory() //DELETE CATEGORY -- QUERY ?>


<!-- /. BREADCRUMB row 
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i>  <a hre f="index.html">Dashboard</a>
</li>
<li class="active">
<i class="fa fa-file"></i> Blank Page
</li>
</ol>   -->          

                  </div> <!-- /.page-header -->
               </div> <!-- /.row -->
            </div>  <!-- /.container-fluid -->
        </div> <!-- /#page-wrapper -->
    </div> <!-- /-wrapper -->

<?php include "includes/footer.php";?>
