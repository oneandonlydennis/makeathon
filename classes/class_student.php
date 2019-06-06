<?php
    class Student {

        public $punten = 0;

        public function GetMultiply(){
            for($y=0; $y<20; $y++){
                $rand1 = rand(1,9);
                $rand2 = rand(1,9);
                $ans = $rand1 * $rand2;

                if ($y <= 5) {
                    $form = "<div class='eerste-helft col-3'>$rand1 X $rand2 = <input type='number' name='input[]'><input type='hidden' name='answers[]' value='$ans'/><br></div>";
                    echo $form;
                } else if ($y >= 5) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='input[]'><input type='hidden' name='answers[]' value='$ans'/><br></div>";
                    echo $form;
                } else if ($y >= 10) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='input[]'><input type='hidden' name='answers[]' value='$ans'/><br></div>";
                    echo $form;
                } else if ($y >= 15) {
                    $form = "<div class='tweede-helft col-3'>$rand1 X $rand2 = <input type='number' name='input[]'><input type='hidden' name='answers[]' value='$ans</br></div>";
                    echo $form;
                }
            }
        }

        public function checkAntwoorden() {
            $i = 0;
            for($x = 0; $x < 20; $x++) {
                if ($_POST['input'][$x] == $_POST['answers'][$x]) {
                    $i++;
                }
            }
            $this->punten = $i;
            return true;
        }

        public function checkBeoordeling() {
            $points = $this->punten;
            $score = $points / 20 * 10;

            $database = new Connection;
            $db = $database->OpenVerbinding();

            $query = $db->prepare('INSERT INTO activiteiten (userid, leerstof, datum, score) VALUES (:userid, :leerstof, :datum, :score)');
            $query->execute(array(
               ':userid' => $_SESSION['id'],
               ':leerstof' => 'Vermenigvuldigen',
               ':datum' => date('Y-m-d H:i:s'),
               ':score' => $score
            ));

            header('Location: http://rekenmaatje.nl/student/bedankt.php');

        }

        public function deleteResult($id) {
            $database = new Connection;
            $db = $database->OpenVerbinding();

            $query = $db->prepare('DELETE FROM activiteiten WHERE id = :id');
            $query->execute(array(
                ':id' => $id
            ));
        }

        public function checkMarked() {
            $database = new Connection;
            $db = $database->OpenVerbinding();

            $query = $db->prepare('SELECT * FROM activiteiten WHERE userid = :userid');
            $query->execute(array(
                ':userid' => $_SESSION['id']
            ));

            if ($query->rowCount() > 0) {
                return true;
            }
        }
    }
?>
