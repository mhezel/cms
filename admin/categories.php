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

<?php

if(isset($_POST['submit'])){
    
    $cat_title = $_POST['cat_title'];

    if($cat_title == "" || empty($cat_title)){

        echo "field should not be empty";

    }else{

        $query = "INSERT INTO categories(cat_title) ";
        $query .= "VALUE('{$cat_title}') ";

        $add_category_query = mysqli_query($conn, $query);

        if(!$add_category_query){
        die('ERROR' . mysqli_error($conn));
    }
    }
}
?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Categories</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>


                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Update Categories</label>

<?php                   //UPDATE AND INCLUDE CATEGORY QUERY

if(isset($_GET['edit'])){
    $cat_id = $_GET['edit'];

    $query = "SELECT * FROM categories WHERE cat_id = $cat_id ";
    $update_cat = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($update_cat)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        ?>
                            <input type="text" value="<?php 
                                        if(isset($cat_title)){
                                            echo $cat_title;
                                        } ?>
                                        "type="text" class="form-control" name="cat_title">
    <?php }} ?>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Update Category">
                                </div>
                            </form>

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



    <?php  //FINDING ALL CATEGORIES -- QUERY

        $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($select_categories)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<tr>";
            echo "<td>{$cat_id}</td>";
            echo "<td>{$cat_title}</td>";
            echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
            echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
            echo "<tr>";
    }
    
         ?>
                                <tbody>
                            </table>

    
    <?php //DELETE CATEGORY -- QUERY
    

        if(isset($_GET['delete'])){

            $get_cat_id = $_GET['delete'];
            $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id} ";
            $delete_category = mysqli_query($conn, $query);
            header("Location: categories.php");

        }
    
    
    
    
        ?>
















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
