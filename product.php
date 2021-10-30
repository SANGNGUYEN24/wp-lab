<!DOCTYPE html>
<html>
    <head>
    </head>
        <style>
        table {
        margin-top: 96px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
</style>
        <body>
            <h1 class = "h1">Product page</h1>
            <div class = "center-div">
                <div class = "table">
                    <table>
                        <thead>
                            <tr>
                                <td>Product ID</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Register Date</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                        include './user_database.php';

                        $sql = "SELECT * FROM newuser";
                        $sql2 = "SELECT * FROM product";

                        $query = mysqli_query($mysqli, $sql);
                        $query2 = mysqli_query($mysqli2, $sql2);

                        $num_rows = mysqli_num_rows($query);
                        $num_rows2 = mysqli_num_rows($query2);


                        while($res = mysqli_fetch_array($query2)){
                            ?>
                        
                            <tr>
                                <td> <?php echo $res['product_id'] ?></td>
                                <td> <?php echo $res['product_name'] ?></td>
                                <td> <?php echo $res['price'] ?></td>
                                <td> <?php echo $res['reg_date'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        
                        <table>
                        <thead>
                            <tr>
                                <td>user ID</td>
                                <td>User name</td>
                                <td>User password</td>
                                <td>Register Date</td>
                            </tr>
                        </thead>
                        <?php

                        while($res = mysqli_fetch_array($query)){
                            ?>
                        
                            <tr>
                                <td> <?php echo $res['user_id'] ?></td>
                                <td> <?php echo $res['username'] ?></td>
                                <td> <?php echo $res['password'] ?></td>
                                <td> <?php echo $res['reg_date'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            
            
        </body>

</html>

