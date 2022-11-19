
<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?> 

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            <?php

            $query = "SELECT * FROM posts";
            $select_all_post_query = mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($select_all_post_query)){
                 
                  $post_title = $row['post_title'];
                  $post_author = $row['post_author'];
                  $post_date = $row['post_date'];
                  $post_image = $row['post_image'];
                  $post_content = $row['post_content'];
            ?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></a></p>
                <hr>
                <img class="img-responsive" src="img/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></a></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>

            <?php } ?>

            </div>
              
            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

    </div>

<?php include "includes/footer.php"; ?>
