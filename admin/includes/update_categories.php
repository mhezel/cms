<form action="" method="post">
<div class="form-group">
<label for="cat-title">Update Categories</label>

<?php       
//UPDATE AND INCLUDE CATEGORY QUERY

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

        <?php //UPDATE 
        if(isset($_POST['update_cat'])){
            $cat_title = $_POST['cat_title'];
        
            $query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE cat_id = {$cat_id} ";
            $update_query = mysqli_query($conn, $query);

                if($update_query){

                    die*("query failed" . mysqli_error($conn));
                }
        }?>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="update_cat" value="Update Category">
                                </div>
                            </form>
                    