<?php require_once 'header.php'; ?>
<?php
     $id = (isset($_GET['id']))? $_GET['id'] : 1;
     $sql = "SELECT `id`, `name`, `description`, `price`, `picture`, `category` FROM `products` WHERE id = $id " ;
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             $preArray = $row["id"].",". $row["name"]. "," . $row["description"]. "," . $row["price"]. "," . $row["picture"]. "," . $row["category"] ;
             $array = explode(",", $preArray);
          }}
    ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?php  $i = "images/$array[4]"; echo $i; ?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo "$array[3]"; ?></h4>
                        <h4><a href="#"><?php echo "$array[1]"; ?></a>
                        </h4>
                        <p><?php echo "$array[2]"; ?></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

<?php require_once 'footer.php'; ?>
