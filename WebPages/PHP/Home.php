<?php
  $connect = mysqli_connect("localhost", "proj1", "foreach", "proj1");
  $query = "SELECT * FROM Games LIMIT 10";
  $result = mysqli_query($connect, $query);
?>

<!DOCTYPE HTML5>
<html>
<head>
  <title>The ForEach Home Page</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <link rel="stylesheet" href="../CSS/Home.css">
  <script>
    
    $(document).ready(function(){
      $('.view_data').click(function(){
        var game_id = $(this).attr("id");
        $.ajax({
            url:"getGameInfo.php",
            method:"post",
            data:{game_id:game_id},
            success:function(data){
              $('#game_detail').html(data);
              $('#dataModal').modal("show");
            }
        });
      });
    });

  </script>
</head>
<body> 

  <div class='welcomelable'>
    <label>Welcome to the ForEach Home Page!!</label><br>
  </div>
  <label class='catagories'>Popular Games</label><br>
  <div class="scrollmenu" id='scroll1'>
    <?php
      while($row = mysqli_fetch_array($result)){
       ?>
      <button name='view' class='view_data' id='<?php echo $row['Game_ID']?>'><input type='image' src='<?php echo $row['Icon']?>' alt='<?php echo $row['Title']?>' height='125' width='175'></button>       
    <?php
      }
    ?>
  </div><br><br>
  <label class='catagories'>New Games</label><br>
  <div class="scrollmenu">
      
  </div><br><br>
  <label class='catagories'>Discounted Games</label><br>
  <div class="scrollmenu">
  <?php
      $query = "SELECT * FROM Games WHERE Price > 0 and Price < 30.00 ORDER BY RAND() LIMIT 10";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result)){
       ?>
      <button name='view' class='view_data' id='<?php echo $row['Game_ID']?>'><input type='image' src='<?php echo $row['Icon']?>' alt='<?php echo $row['Title']?>' height='125' width='175'></button>       
    <?php
      }
    ?>
  </div><br><br>
  <label class='catagories'>Free Games</label><br>
  <div class="scrollmenu">
    <?php
      $query = "SELECT * FROM Games WHERE Price = 0 ORDER BY RAND() LIMIT 10";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result)){
       ?>
      <button name='view' class='view_data' id='<?php echo $row['Game_ID']?>'><input type='image' src='<?php echo $row['Icon']?>' alt='<?php echo $row['Title']?>' height='125' width='175'></button>       
    <?php
      }
    ?>
  </div>

  <div id='dataModal' class='modal fade'>
    <div class='modal-dialog modal-lg'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title' align='center'>Game Info</h4>
        </div>
        <div class='modal-body' id='game_detail'>

        </div>  
        <div class='modal-footer'>
          <p align='center'><button type='button' class='btn btn-default' data-dismiss='modal'>Add to Cart</button></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
