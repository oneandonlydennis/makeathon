<?php
    class Student {

        public $sommen = [];
        public $punten = 0;

        public function GetMultiply(){
            for($y=0; $y<20; $y++){
                $rand1 = rand(1,9);
                $rand2 = rand(1,9);
                $this->sommen[] = [$rand1 * $rand2];

                if ($y <= 5) {
                    $form = "<div class='eerste-helft col-3'>$rand1 X $rand2 = <input type='number' name='$y'><br></div>";
                    echo $form;
                } else if ($y >= 5) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='$y'><br></div>";
                    echo $form;
                } else if ($y >= 10) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='$y'><br></div>";
                    echo $form;
                } else if ($y >= 15) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='$y'><br></div>";
                    echo $form;
                }
            }
        }

        public function checkAntwoorden($sommen) {
            $i = 0;
            for ($x = 0; $x < 20; $x++) {
                foreach ($sommen as $value) {
                    if ($this->sommen[$x][0] == $value) {
                        $i++;
                    }
                }
            }
            $this->punten = $i;
            return true;
        }

        public function checkBeoordeling() {
            $points = $this->punten;

            $score = $points / 20 * 10;
            if ($score>5.5) {
                echo "Je bent geslaagd! Je score is: ".$score.".";
            } else if($score==5.5) {
                echo "Je bent nog net op het nippertje geslaagd! Volgende keer iets beter oefenen!";
            } else if($score<5.5) {
                echo "Jammer genoeg heb je het niet gehaald! Je hebt een ".$score." gehaald, en dit moest minimaal een 5.5 zijn!";
            }
        }
    }
?>
