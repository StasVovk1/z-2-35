<?php 
    $mass = [2, 0, 0, 1, 1, 1, 2, 1, 0, 2, 0, 0, 0, 1, 0, 0, 1, 0, 2, 2, 2, 0, 1, 0, 0, 1, 0, 2, 0, 0];
    $kol_0 = 0;
    $kol_1 = 0;
    $kol_2 = 0;
    $answer = [];
    echo 'Исходные данные: '.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] == 0){
            $kol_0++;
        }else if ($mass[$i] == 1){
            $kol_1++;
        }else {
            $kol_2++;
        }
    }

    while (($kol_0 != 0) || ($kol_1 != 0) || ($kol_2 != 0)){
        if ($kol_0 != 0){
            $answer[] = 0;
            $kol_0--;
        }
        if (($kol_2 != 0) && ($kol_0 == 0)){
            $answer[] = 2;
            $kol_2--;
        }

        if (($kol_1 != 0) && ($kol_2 == 0)){
            $answer[] = 1;
            $kol_1--;
        }
    }


    echo '<br> Ответ: '.json_encode($answer);

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }

?>