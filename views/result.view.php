
		<h1>Result</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;
            
            if ($answer1 == "A") { $totalA++; }
            if ($answer1 == "B") { $totalB++; }
            if ($answer1 == "C") { $totalC++; }
            if ($answer1 == "D") { $totalD++; }

            if ($answer2 == "A") { $totalA++; }
            if ($answer2 == "B") { $totalB++; }
            if ($answer2 == "C") { $totalC++; }
            if ($answer2 == "D") { $totalD++; }

            if ($answer3 == "A") { $totalA++; }
            if ($answer3 == "B") { $totalB++; }
            if ($answer3 == "C") { $totalC++; }
            if ($answer3 == "D") { $totalD++; }

            if ($answer4 == "A") { $totalA++; }
            if ($answer4 == "B") { $totalB++; }
            if ($answer4 == "C") { $totalC++; }
            if ($answer4 == "D") { $totalD++; }

            if ($answer5 == "A") { $totalA++; }
            if ($answer5 == "B") { $totalB++; }
            if ($answer5 == "C") { $totalC++; }
            if ($answer5 == "D") { $totalD++; }



            // $values = [
            //     1,
            //     2,
            //     3,
            //     22
            // ];


            // function max_value($values){
            //     $max = 0;
            //     foreach($values as v) {
            //         if($v > $max) $max = $v;
            //     }
            //     return $max
            // }

            

            

            echo "<div id='results'>$totalA Tropical</div>";
            echo "<div id='results'>$totalB Boreal/Tundra</div>";
            echo "<div id='results'>$totalC Temperate/Grassland</div>";
            echo "<div id='results'>$totalD Savanne/Desert</div>";
            
        ?>