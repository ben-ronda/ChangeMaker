<?php
    class ChangeMaker
    {
        function makeChange($centsTotal){
            $quarter = 0;
            $dime = 0;
            $nickel = 0;
            $penny = 0;
            $change_array = array();
            while ($centsTotal >= 25) {
                $centsTotal = $centsTotal - 25;
                ++$quarter;
            }
                array_push($change_array, $quarter);
            while($centsTotal >= 10){
                $centsTotal = $centsTotal-10;
                ++$dime;
            }
                array_push($change_array, $dime);
            while($centsTotal >= 5){
                $centsTotal = $centsTotal-5;
                ++$nickel;
            }
                array_push($change_array, $nickel);
            while($centsTotal >= 1){
                $centsTotal = $centsTotal-1;
                ++$penny;
            }
                array_push($change_array, $penny);

            return $change_array;
        }

    }





?>
