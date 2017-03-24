<?php

function cards(){
    $file=__DIR__."/../data/cs_figures.csv";
    $csv= file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    // var_dump($array);
    echo '
    <div class="container">
    <h2>Computer science figures</h2>
    </div>
    ';
    foreach($array as $key => $value){
        if($key > 0 && $key < 8){
            echo '
            <div class="card-container col-md-4 col-sm-6 col-xs-6">
                <div class="card">
                    <img class="card-img-top" src="'.$value[5].'" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">'. $value[0] .'</h4>
                        <p class="card-job">'. $value[2] .'</p>
                        <p class="card-text">'. $value[3] .'</p>
                        <div class="bottom-align-text">
                            <hr>
                            <p class="card-date">Bord in '. $value[1] .'</p>
                        </div>
                    </div>
                </div>
            </div>
            ';

        }
    }

}

?>
