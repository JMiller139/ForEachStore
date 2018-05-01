<?php include 'getOrder.php';
$connect = mysqli_connect("localhost", "proj1", "foreach", "proj1");
$query = "SELECT * FROM Games";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en-au">
<head>
<meta charset="utf-8" />
<title>Your Order</title>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../CSS/Order.css" rel="stylesheet" type="text/css"/>
  <script>
    $(document).ready(function(){
      $('.delete_order').click(function(){
        var game_id = $(this).attr("id");
        $.ajax({
          url:"deleteOrder.php",
          method:"post",
          data:{game_id:Game_id},
          dataType: "JSON"
        });
        document.forms['myForm'].reset();
        window.location.reload();
      });
    });
  </script>
</head>
<body>
  <form action = "CheckOut.php" name ="myForm">
    <h2>Review Order</h2>
    <div class="orderTable">
      <h4>Games</h4>
      <p><?php listOrder();?>
        <?php
          while($row = mysqli_fetch_array($result)){
            ?>
          <button name='delete' class='delete-order' id='<?php echo $row['Game_ID']?>'>Delete</button>
          <?php
        }
      ?>
      </p>

    </div>
  </div>
</div>
<input type="submit" value="Continue to Checkout" class="button">
</form>
</body>
</html>
