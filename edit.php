<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

    $stu_id = $_GET['id'];

    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");


    $sql = "select * from information where sid = {$stu_id}";;

    $result = mysqli_query($conn, $sql) or die("query failed");


    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {


    ?>


            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
                    <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>




                    <?php

                    $sql1 = "select * from studentclass";

                    $result1 = mysqli_query($conn, $sql1) or die("query failed");

                    if (mysqli_num_rows($result1) > 0) {

                        echo '<select name="sclass">
                        <option value="" selected disabled>Select Class</option>';

                        while ($row1 = mysqli_fetch_assoc($result1)) {

                            if ($row['sclass'] == $row1['cid']) {

                                $select = "selected";
                            } else {

                                $select = "";
                            }



                            echo "<option {$select} value='{$row1['cid']}' > {$row1['cname']} </option>";
                        }









                        echo '</select>';
                    }


                    ?>


                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>

    <?php }
    }

    mysqli_close($conn);

    ?>

</div>
</div>
</body>

</html>