<?php
    class Student {

        public $sommen = [];
        
        public function __construct(){
            self::multiply();
        }

        public function multiply(){
            for($y=0; $y<20; $y++){
                $rand1 = rand(1, 9);
                $rand2 = rand(1, 9);
                $this->sommen[] = [$rand1 * $rand2];

                if ($y <= 5) {
                    $form = "<div class='eerste-helft col-3'>$rand1 X $rand2 = <input type='number' name='num$y'><br></div>";
                    echo $form;
                } else if ($y >= 5) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='num$y'><br></div>";
                    echo $form;
                } else if ($y >= 10) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='num$y'><br></div>";
                    echo $form;
                } else if ($y >= 15) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='num$y'><br></div>";
                    echo $form;
                }
            }
        }

        public function arrayresult() {
            return var_dump($this->sommen[5][0]);
//            if ($this->sommen[0] == $sum1 && $this->sommen[1] == $sum2) {
//                return true;
//            }
        }
    }
?>
