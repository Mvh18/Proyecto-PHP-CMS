<!-- DB Connection -->
<?php include "templates/includes/db.php" ?>

<?php include 'templates/includes/header.php' ?>
<!--Header Close -->

<!-- Navigation Start -->
<?php include "templates/includes/navigation.php" ?>

<div class="main-wrapper ">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our blog</span>
                        <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-5">
                            <div class="blog-item">
                                <?php
                                try {
                                    if (isset($_POST['submit'])) {
                                        $search = $_POST['buscar'];

                                        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                                        $search_query = mysqli_query($connection, $query);

                                        if (!$search_query) {
                                            die("Query failed" . mysqli_error($connection));
                                        }

                                        $count = mysqli_num_rows($search_query);

                                        if ($count == 0) {
                                            echo "<h5> No se encontró ningún post</h5>";
                                        } else {
                                            $query = "SELECT * FROM posts";
                                            $select_all_posts_query = mysqli_query($connection, $query);

                                            while ($row = mysqli_fetch_assoc($search_query)) {
                                                $post_title = $row['post_title'];
                                                $post_author = $row['post_author'];
                                                $post_date = $row['post_date'];
                                                $post_image = $row['post_image'];
                                                $post_content = $row['post_content'];
                                    ?>
                                                <?php if (isset($post_image)) : ?>
                                                    <img src="images/blog/<?php echo $post_image; ?>" alt="" class="img-fluid rounded">
                                                <?php elseif (empty($post_image)) : ?>
                                                    <img src="images/blog/no_image.jpg" alt="" class="img-fluid rounded">
                                                <?php endif; ?>

                                                <div class="blog-item-content bg-white p-4">
                                                    <p class="text-muted py-1 px-2" style="margin: 0px">Autor:
                                                        <a href="index.php"><?php echo $post_author; ?></a>
                                                    </p>
                                                    <div class="blog-item-meta  py-1 px-2">
                                                        <span class="text-muted text-capitalize mr-3"><i class="ti-calendar mr-2"></i><?php echo $post_date; ?></span>
                                                    </div>
                                                    <h3 class="mt-3 mb-3"><a href="blog-single.html"><?php echo $post_title; ?></a></h3>
                                                    <p class="mb-4"><?php echo $post_content; ?></p>

                                                    <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Ver más</a>
                                                </div>
                                <?php
                                            }
                                        }
                                    }
                                } catch (Exception $e) {
                                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                                } ?>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Start -->
                <?php include "templates/includes/blog/sidebar.php"; ?>
                <!-- Sidebar Close -->

            </div>

            <div class="row mt-5">
                <div class="col-lg-8">
                    <nav class="navigation pagination py-2 d-inline-block">
                        <div class="nav-links">
                            <a class="prev page-numbers" href="#">Prev</a>
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#">Next</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- footer Start -->
    <?php include "templates/includes/footer.php"; ?>