<?php require 'header.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Category menu</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <?php
                $sql = "SELECT `id`, `name`, `description`, `price`, `picture`, `category` FROM `products` WHERE id > 0 " ;
                $result = $conn->query($sql);
                // echo "<pre>";
                // var_dump ($result);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $preArray = $row["id"].",". $row["name"]. "," . $row["description"]. "," . $row["price"]. "," . $row["picture"]. "," . $row["category"] ;
                        $array = explode(",", $preArray);
                        //var_dump($array)?>




                  <div class="row">
                      <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $array[4] ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $array[3] ?></h4>
                                <h4><a href="<?php echo "product.php?id=$array[0]" ?>"><?php echo $array[1] ?></a>
                                </h4>
                                <p><?php echo $array[2] ?></p>
                            </div>
                      <?php    //  <div class="ratings">
                            //     <p class="pull-right">15 reviews</p>
                            //     <p>
                            //         <span class="glyphicon glyphicon-star"></span>
                            //         <span class="glyphicon glyphicon-star"></span>
                            //         <span class="glyphicon glyphicon-star"></span>
                            //         <span class="glyphicon glyphicon-star"></span>
                            //         <span class="glyphicon glyphicon-star"></span>
                            //     </p>
                            // </div>
                      ?>
                        </div>
                    </div>
                <?php  }
                } else {
                  echo "0 results";
                }
                ?>



                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>
<?php require_once'footer.php' ?>
