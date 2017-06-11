<?php
$date = $_GET['property_id']; // the post data from previous page
$info = $_GET['monthly_rnet']; // the post data from previous page
?>  


<form action="#" method="get" name="myForm"> 


    <input name="date" type="hidden" value="<?php echo $property_id; ?>" />
    <input name="info" type="hidden" value="<?php echo $monthly_rnet; ?>" />




    <?php
    include('conn.php');


    $q = "select count(*) \"total\"  from property_details";
	
    $ros1 = @mysqli_query($connection,$q);
	//mysqli_fetch_array($sql)
    $row = (mysqli_fetch_array($ros1));
    $total = $row['total'];
    $dis = 8;
    $total_page = ceil($total / $dis);


    $page_cur = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $k = ($page_cur - 1) * $dis;

    $query = "SELECT * FROM property_details limit $k,$dis";
    $ros = @mysqli_query($connection,$query);

    while ($row = mysqli_fetch_array($ros)) {

        echo $row["property_id"];

        echo $row["monthly_rnet"];

        echo $row["security_deposit"];
		echo "<br/><br/>";
    }
    for ($i = 1; $i <= $total_page; $i++) {
        if ($page_cur == $i) {
            echo ' <input type="button" value="' . $i . '"> ';
        } else {
            echo '<a href="demo.php?page=' . $i . '&property_id=' . $property_id . '&monthly_rnet=' . $monthly_rnet . '"> $i </a>';
        }
    }
    ?>
    <input  type="submit" name="userId" value="' .$row['property_id'] . '" /> 

</form>