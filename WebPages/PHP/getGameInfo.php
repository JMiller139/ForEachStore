<?php

    $output = '';
    $connect = mysqli_connect('localhost', 'proj1', 'foreach', 'proj1');
    if(mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }
    $query = "SELECT * FROM (Games INNER JOIN Game_Publishers ON Games.Game_ID = Game_Publishers.Game_ID 
                                    INNER JOIN Game_Developers ON Games.Game_ID = Game_Developers.Game_ID
                                    INNER JOIN Game_Genres ON Games.Game_ID = Game_Genres.Game_ID)
                            WHERE Games.Game_ID = '".$_POST['game_id']."'";
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_array($result)){
        $title = $row['Title'];
        $src = $row['Icon'];
        $genre = $row['Genre'];
        $developer = $row['Developer'];
        $release_date = $row['Release_Date'];
        $rating = $row['ESRB_Rating'];
        $price = $row['Price'];
    }
    $query = "SELECT * FROM Game_Platforms WHERE Game_ID = '".$_POST['game_id']."'";
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_array($result)){
        $platfroms .= $row[1]." ";
    }
    $output .= '<div class="row">
                    <div class="col-lg-6 col-md-6" id="game-pic">
                        <div class="col-lg-12" id="game-image">
                        <p id="gImage">
                        <img src="'.$src.'" alt="'.$title.'" height="400px" width="325px">
                        </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" id="game-info">
                        <div class="col-lg-12" id="genre-contanier">
                            <p id="gInfoTop">Genre: </p>
                            <p id="genre">'.$genre.'</p>
                        </div>
                        <div class="col-lg-12" id="platforms-contanier">
                            <p class="gInfo">Platforms: </p>
                            <p id="genre">'.$platfroms.'</p>
                        </div>
                        <div class="col-lg-12" id="publisher-contanier">
                            <p class="gInfo">Developer: </p>
                            <p id="genre">'.$developer.'</p>
                        </div>
                        <div class="col-lg-12" id="release-contanier">
                        <p class="gInfo">Release Date: </p>
                        <p id="genre">'.$release_date.'</p>
                    </div>
                        <div class="col-lg-12" id="rating-contanier">
                            <p class="gInfo">Rating: </p>
                            <p id="genre">'.$rating.'</p>
                        </div>
                        <div class="col-lg-12" id="price-contanier">
                            <p class="gInfo">Price: </p>
                            <p id="genre">'.$price.'</p>
                        </div>
                    </div>
                </div>';
    echo $output;

    mysqli_close($connect);


?>