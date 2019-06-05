<?php
    class Student {

        public $sommen = [];
        
        public function __construct(){
            self::multiply();
        }

        public function multiply(){
            for($y=1; $y<10; $y++){
                $rand1 = rand(1,10);
                $rand2 = rand(1,10);
                $form = '$rand1' . ' x ' . $rand2 . ' = <input type=\'number\' name=\'sum".$y."\'><br>"';
                return $form;
                $this->sommen[] = [$rand1, $rand2, $rand1*$rand2];
            }
        }

        public function resultaat(){
            if ($this->sommen[0][2]) {
                return 'Test';
            }
        }
    }
?>
