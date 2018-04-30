<!DOCTYPE HTML5>
<html>
<head>
  <title>The ForEach Home Page</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- <link rel='stylesheet' type='text/css' href='../CSS/BannerBeforeLogin.css'> -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <link rel="stylesheet" href="../CSS/Home.css">
  <script>
    function getGameInfoP() {
      
      var ajax = new XMLHttpRequest();
      var method = "GET";
      var url = "getGameHomeP.php";
      var asynchronous = true;

      ajax.open(method, url, asynchronous);

      ajax.send();

      ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          var data = JSON.parse(this.responseText);
          console.log(data);

          var html = [];
          for(var a = 0; a < data.length; a++){
            var src = data[a].Icon;
            var title = data[a].Title;
            var gameID = data[a].Game_ID;
            html.push("<a class='cickable'><input type='image' src='",src,"' alt='",title,"' height='125' width='175' data-toggle='modal' data-target='#gameInfoModal' class='cickable-img'id='",gameID,"' onclick='modalInfo();'></a>");
          }
          $('#scroll1').append(html.join(''));
        }
      }    
}
    $(document).ready(function(){
   
      
    });

    $(window).load(function() {
    $(".clickable").click(function(){
      alert('click');
        console.log(this.id);
     });
    });

  function modalInfo() {
    // document.getElementById('#gameTitle').value = "GTA V";

  }

  </script>
</head>
<body onload='getGameInfoP();'>
<!-- Banner -->
<!-- <div class = 'test'>
    <div class='row'>
        <div class='col-lg-5'>
            <a href='./Home.php'><img class='logo-icon' src='../IMGS/Logo.png' alt='Logo'></a>
            <img class='vbar-icon' src='../IMGS/VerticalBar.png' alt='vertical bar'>
            <a href='./Home.php'><img class='page-icon' src='../IMGS/HomeIcon.png' alt='Logo'></a>
            <a href='./Store.php'><img class='page-icon' src='../IMGS/StoreIcon.png' alt='Logo'></a>
            <img class='vbar-icon' src='../IMGS/VerticalBar.png' alt='Logo'>
        </div>
        <div class='col-lg-2'>
            The Four Eaches!
        </div>  
        <div class='col-lg-5'>
            <input class='banner-textbox' type='text' placeholder='username'>
            <input class='banner-textbox' type='password' placeholder='password'>
            <button class='banner-btn' type='button'>Login</button>
            <a class='signup' href='AccountCreation.php'>sign-up</a>
        </div>
    </div>
    </div> -->

  <!-- Store Page -->
  <div class='welcomelable'>
    <label>Welcome to the ForEach Home Page!!</label><br>
  </div>
  <label class='catagories'>Popular Games</label><br>
  <!-- need to be auto generated for each scroolmenu-->
  <div class="scrollmenu" id='scroll1'>
    <!-- <img src="https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTc1FhCVDaoswL6bmTkmdwXXVGD6yxKE8umhRvOrmVN0xbkzXrlP.4vwk9ff_1PFWsPIkRF021Is.9NoMYqy230P7wL6hYZStpGgfe.yhZLY8Y71cJgI6s._21pXd9N_mrL4lryj8rWOkO5tlBR2fUvtThsMXmdMQrp5WHy0AvaCaE-&w=800&h=800&format=jpg" alt="Fortnite" height="125px" width="175px">
    <img src="https://images-na.ssl-images-amazon.com/images/I/81LXUOTmcGL.jpg" alt="Rocket League" height="125px" width="175px">
    <img src="https://static-cdn.jtvnw.net/ttv-boxart/Grand%20Theft%20Auto%20V.jpg" alt="GTA5" height="125" width="175">
    <input type="image" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/70/Fallout_4_cover_art.jpg/220px-Fallout_4_cover_art.jpg" alt="Fallout4" height="125" width="175" data-toggle="modal" data-target="#gameInfoModal" id='1'/>
    <img src="https://vignette.wikia.nocookie.net/lotr/images/2/2b/Middle-earth_Shadow_of_War.jpg/revision/latest?cb=20170302153716" alt="Shadow of War" height="125" width="175">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdTaXVL-hk0eEDHXvfBJv2uqJ6msPE0irZqtA9i5OnNTQ-IclG" alt="Forza Horizon 3" height="125" width="175">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdVD6yBci8ko-txo0sFioPFeV9kie3LQPZo7frQO5MMX2I8vyI" alt="Borderlands 2" height="125" width="175"> -->
  </div><br><br>
  <label class='catagories'>New Games</label><br>
  <div class="scrollmenu">
    <img src="https://sslh.ulximg.com/image/740x493/cover/1522167121_baf1a248c1fd96bd266e2c743127f254.jpg/91d447a8443b7bf3022a15ec049ea9cd/1522167121_4e3b05014fe38ed4df4dacf393e16ef8.jpg" alt="Far Cry 5" height="125" width="175">
    <img src="https://cdn3.dualshockers.com/wp-content/uploads/2018/01/MonsterHunterWorld.jpg" alt="monster hunter world" height="125px" width="175px">
    <input type="image" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/70/Fallout_4_cover_art.jpg/220px-Fallout_4_cover_art.jpg" alt="Fallout4" height="125" width="175" data-toggle="modal" data-target="#gameInfoModal" id='1'/>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9I6a5RAX61VKsyW11Sj7ycMan-8JwnIPkRyRI6JezNSyIU7XF" alt="dragon ball fighterz" height="125px" width="175px">
    <img src="https://www.thenerdmag.com/wp-content/uploads/2017/04/CODWW2_1.png" alt="cod WW2" height="125px" width="175px">
    <img src="https://img.youtube.com/vi/cwGrDlv5wok/hqdefault.jpg" alt="hellblade senua's sacrifice" height="125px" width="175px">
    <img src="https://images.g2a.com/newlayout/600x351/1x1x0/336d3b5a7ec8/59e73f58ae653aa7b752ff84" alt="prey" height="125px" width="175px">
  </div><br><br>
  <label class='catagories'>Discounted Games</label><br>
  <div class="scrollmenu">
    <img src="https://static.giantbomb.com/uploads/original/32/329701/2993791-survival-battle-royale-darwin-project-commences-pc-open-beta-with-mixer-features-1.jpg" alt="The Darwin Project" height="125" width="175">
    <img src="http://i.playground.ru/i/95/18/22/00/blog/icon.400x225.jpg?v1" alt="Space Engineers" height="125" width="175">
    <img src="https://static.quizur.com/i/b/5702fe733d3b39.92828718mortal-kombat-x-enhanced-online-beta-header.jpg" alt="mortal kombat x" height="125" width="175">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdVD6yBci8ko-txo0sFioPFeV9kie3LQPZo7frQO5MMX2I8vyI" alt="Borderlands 2" height="125" width="175">
    <img src="https://cdn.gamer-network.net/2017/articles/2017-10-23-15-36/GTA_5_Online_LEAK_Duke_O_Death_DLC_update_coming_soon_605675.jpg/EG11/resize/300x-1/quality/75/format/jpg" alt="GTA5" height="125" width="175">
    <img src="https://images-na.ssl-images-amazon.com/images/I/81LXUOTmcGL.jpg" alt="Rocket League" height="125px" width="175px">
  </div><br><br>
  <label class='catagories'>Free Games</label><br>
  <div class="scrollmenu">
    <img src="https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTc1FhCVDaoswL6bmTkmdwXXVGD6yxKE8umhRvOrmVN0xbkzXrlP.4vwk9ff_1PFWsPIkRF021Is.9NoMYqy230P7wL6hYZStpGgfe.yhZLY8Y71cJgI6s._21pXd9N_mrL4lryj8rWOkO5tlBR2fUvtThsMXmdMQrp5WHy0AvaCaE-&w=800&h=800&format=jpg" alt="Fortnite" height="125px" width="175px">
    <img src="http://cdn.player.one/sites/player.one/files/styles/lg/public/2018/02/13/eve-online-v-day.jpg" alt="eve online" height="125px" width="175px">
    <img src="https://cdn.images.express.co.uk/img/dynamic/143/590x/Smite-patch-notes-819381.jpg" alt="smite" height="125px" width="175px">
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5f/Tf2_standalonebox.jpg/220px-Tf2_standalonebox.jpg" alt="team fortress 2" height="125px" width="175px">
    <img src="https://steamcdn-a.akamaihd.net/steam/apps/570/header.jpg?t=1520987245" alt="dota 2" height="125px" width="175px">
    <img src="https://res.cloudinary.com/lmn/image/upload/c_limit,h_360,w_640/e_sharpen:100/f_auto,fl_lossy,q_auto/v1/gameskinnyc/g/a/m/gaming-20170224-paladins-91db3.jpg" alt="paladins" height="125px" width="175px">
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/bd/Warframe_Cover_Art.png/220px-Warframe_Cover_Art.png" alt="warframe" height="125px" width="175px">
  </div>

  <!-- Modal for games-->
  <div class='modal fade' id='gameInfoModal' tabindex='-1' role='dialog'>
    <div class='modal-dialog modal-lg' role='document'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h2 class='modal-title' align='center' id='gameTitle'>Game Infromation</h2>
        </div>
        <div class='modal-body' id='game_details'>
        <div class='row'>
          <div class='col-lg-6 col-md-6' id='game-pic'>
            <div class='col-lg-12' id='game-image'>
            <p id='gImage'>
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/70/Fallout_4_cover_art.jpg/220px-Fallout_4_cover_art.jpg" alt="Fallout4" height="400px" width="325px">
            </p>
            </div>
          </div><!--End of .game-pic-->
          <div class='col-lg-6 col-md-6' id='game-info'>
            <div class='col-lg-12' id='genre-contanier'><!--genre-->
              <p class='gInfo'>Genre: </p>
              <p id='genre'>Test</p>
            </div>
            <div class='col-lg-12' id='platforms-contanier'><!--platforms-->
              <p class='gInfo'>Platfroms: </p>
              <p id='platfrom'>Test</p>
            </div>
            <div class='col-lg-12' id='publisher-contanier'><!--publisher-->
              <p class='gInfo'>Publishers: </p>
              <p id='publisher'></p>
            </div>
            <div class='col-lg-12' id='developer-contanier'><!--developer-->
              <p class='gInfo'>Developer: </p>
              <p id='develpoer'></p>
            </div>
            <div class='col-lg-12' id='release-contanier'><!--release date-->
              <p class='gInfo'>Release Date: </p>
              <p id='release-date'></p>
            </div>
            <div class='col-lg-12' id='rating-contanier'><!--rating-->
              <p class='gInfo'>Rating: </p>
              <p id='rating'></p>
            </div>
            <div class='col-lg-12' id='price-contanier'><!--price-->
              <p class='gInfo'>Price: </p>
              <p id='price'></p>
            </div>
          </div><!--End of .game-info-->
          </div><!--End of .row-->
        </div><!--End of .modal-body-->
        <div class='modal-footer'>
          <p align='center'><button type='button' class='btn btn-primary' data-dismiss='modal'>Add Game to Cart</button></p>
        </div><!--End of .modal-footer-->
      </div><!--End of .modal-content-->
    </div><!--End of .modal-dialog-->
  </div><!--End of .modal fade-->
</body>
</html>
