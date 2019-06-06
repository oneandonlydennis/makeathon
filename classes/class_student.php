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
            $points = 0;
            for($z=0; $z<20; $z++){
                if(isset($_POST['num0'])){
                    if($this->sommen[$z][0] == $_POST["num$z"]){
                        $points++;
                    }else{
                        
                    }
                }
            }
            $score = $points / 20 * 10;
            if($score>5.5){
                echo "Je bent geslaagd! Je score is: ".$score.".";
            }
            else if($score==5.5){
                echo "Je bent nog net op het nippertje geslaagd! Volgende keer iets beter oefenen!";
            }
            else if($score<5.5){
                echo "Jammer genoeg heb je het niet gehaald! Je hebt een ".$score." gehaald, en dit moest minimaal een 5.5 zijn!";
            }
            else{
            }
        }
    }
?>
