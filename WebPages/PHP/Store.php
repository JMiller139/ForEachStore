<?php require_once('Store-Functions.php'); ?>
<?php require_once('ForEachStore_Constants.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>ForEach Store</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="../CSS/Store.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</head>

<body>

<div class="container">
  <table id='filterTable'>
    <div class="container">
      <tr>
        <form id='filterDropdownMenus' class="form-group">
          <div class="container">
            <select class='selectpicker' id="genreDropDown" name="genreDropDown">
              <option value="Action-Adventure" id="Action-Adventure">Action-Adventure</option>
              <option value="Action Roll-Playing" id="Action_Roll-Playing">Action Roll-Playing</option>
              <option value="Shooter" id="Shooter">Shooter</option>
              <option value="Single Player" id="Single_Player">Single Player</option>
              <option value="Multiplayer" id="Multiplayer">Multiplayer</option>
            </select>
          </div>

          <div class="container">
            <select class="selectpicker" id="ratingDropDown" name="ratingDropDown">
              <option value="eC" id="eC">eC</option>
              <option value="E" id="E"></option>
              <option value="E10" id="E10"></option>
              <option value="T" id="T"></option>
              <option value="M" id="M"></option>
              <option value="A" id="A"></option>
              <option value="RP" id="RP"></option>
            </select>
          </div>

          <div class="container">
            <select class="selectpicker" id="priceDropDown" name="priceDropDown">
              <option value="$0.00 - $4.99" id="zeroToFive">$0.00 - $4.99</option>
              <option value="$5.00 - $9.99" id="fiveToTen">$5.00 - $9.99</option>
              <option value="$10.00 - $14.99" id="tenToFifteen">$10.00 - $14.99</option>
              <option value="$20.00 - $29.99" id="twentyToThirty">$20.00 - $29.99</option>
              <option value="$30.00 - $39.99" id="thirtyToFourty">$30.00 - $39.99</option>
              <option value="$40.00 - $40.99" id="fourtyToFifty">$40.00 - $40.99</option>
              <option value="$50.00 - $59.99" id="fiftyToSixty">$50.00 - $59.99</option>
            <select>
          <div>

          <div class="container">
            <select class="selectpicker" id="platformDropDown" name="platformDropDown">
              <option value="PC" id="PC">PC</option>
              <option value="XBOX" id="XBOX">XBOX</option>
              <option value="PLAYSTATION" id="PLAYSTATION"></option>
            </select>
          </div>

          <td><input type='submit' class="btn btn-default" name='filterSearchButton' id='filterSearchBarButton' value='Search'></td>
        </form>
      </div>
      <div class="container">
        <td id='searchBarCell'>
          <form>
            <input type="text" placeholder="Search..">
            <input type='submit' class="btn btn-default" name='searchBarButton' id='searchBarButton' value='Search'>
          </form>
        </td>
      </div>
    </tr>
  </table>
</div>

<div class="container">
  <table id='gamesTable'>
    <tr>
      <td>
        <img src="https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTc1FhCVDaoswL6bmTkmdwXXVGD6yxKE8umhRvOrmVN0xbkzXrlP.4vwk9ff_1PFWsPIkRF021Is.9NoMYqy230P7wL6hYZStpGgfe.yhZLY8Y71cJgI6s._21pXd9N_mrL4lryj8rWOkO5tlBR2fUvtThsMXmdMQrp5WHy0AvaCaE-&w=800&h=800&format=jpg" alt="Fortnite" height="175px" width="225px"></td>
        <td><img src="https://images-na.ssl-images-amazon.com/images/I/81LXUOTmcGL.jpg" alt="Rocket League" height="175px" width="225px"></td>
        <td><img src="https://cdn.gamer-network.net/2017/articles/2017-10-23-15-36/GTA_5_Online_LEAK_Duke_O_Death_DLC_update_coming_soon_605675.jpg/EG11/resize/300x-1/quality/75/format/jpg" alt="GTA5" height="175" width="225>"></td>
        <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/70/Fallout_4_cover_art.jpg/220px-Fallout_4_cover_art.jpg" alt="Fallout4" height="175" width="225>"></td>
        <td><img src="https://vignette.wikia.nocookie.net/lotr/images/2/2b/Middle-earth_Shadow_of_War.jpg/revision/latest?cb=20170302153716" alt="Shadow of War" height="175" width="225>"></td>
    </tr>
    <tr>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdTaXVL-hk0eEDHXvfBJv2uqJ6msPE0irZqtA9i5OnNTQ-IclG" alt="Forza Horizon 3" height="175" width="225"></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdVD6yBci8ko-txo0sFioPFeV9kie3LQPZo7frQO5MMX2I8vyI" alt="Borderlands 2" height="175" width="225"></td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvXoarPvljhJn28MKOTGkXo1_zt0-5AT0thG-SXGDqahjvAG2t8g" alt="Overwatch" height="175" width="225"></td>
      <td><img src="https://bioshockinfinite.ghoststorygames.com/site/uploads/sites/3/synopsis_graphic01-323x254.jpg" alt="Bioshock Infinite" height="175" width="225"></td>
      <td><img src="https://static.gamespot.com/uploads/scale_tiny/1197/11970954/3246063-aco_pack_agnostic_bxsht2d_e3_170611_330pm_us.jpg" alt="Assassins Creed Origins" height="175" width="225"></td>
    </tr>
    <tr>
      <td><img src="https://static.giantbomb.com/uploads/original/32/329701/2993791-survival-battle-royale-darwin-project-commences-pc-open-beta-with-mixer-features-1.jpg" alt="The Darwin Project" height="175" width="225"></td>
      <td><img src="https://static.quizur.com/i/b/5702fe733d3b39.92828718mortal-kombat-x-enhanced-online-beta-header.jpg" alt="Mortal Kombat X" height="175" width="225"></td>
      <td><img src="https://sslh.ulximg.com/image/740x493/cover/1522167121_baf1a248c1fd96bd266e2c743127f254.jpg/91d447a8443b7bf3022a15ec049ea9cd/1522167121_4e3b05014fe38ed4df4dacf393e16ef8.jpg" alt="Far Cry 5" height="175" width="225"></td>
      <td><img src="http://i.playground.ru/i/68/19/82/00/blog/icon.400x225.jpg?v1" alt="Outlast 2" height="175" width="225"></td>
      <td><img src="http://i.playground.ru/i/95/18/22/00/blog/icon.400x225.jpg?v1" alt="Space Engineers" height="175" width="225"></td>
    </tr>
  </table>
</div>

</body>
</html>
