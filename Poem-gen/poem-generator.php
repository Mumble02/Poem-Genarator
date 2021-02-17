    <?php include('header.php'); ?>
    <div class="container">
        <div class="wrapper">
        <h1> Here's Your Valentine's Poem </h1> 
        <?php

        $submit = filter_input(INPUT_POST, 'submit');

        function poemDisplay($colour, $noun, $person) {
            
            echo "<div class='poemDiv'>";
            echo "<p> Roses are $colour.</p>";
            echo "<p> $noun are blue. </p>";
            echo "<p> Dear $person, Happy Valentine's Day to you! </p>";
            echo "</div>"; 
        }
        // 5. logic error - no ! 

        if(isset($submit)) {
            $colour = filter_input(INPUT_POST, 'colour');
            $noun = filter_input(INPUT_POST, 'noun');
            $person = filter_input(INPUT_POST, 'person');
            if(empty($colour)=== false && empty($noun)=== false && empty($person)=== false)
            {
                echo poemDisplay($colour, $noun, $person);
            }  
            else 
            {
                echo "<p> Please submit your info! </p>";
            }   
        }

        ?>
         <a href="index.php" class="btn btn-secondary"> Create Another Poem </a>; 
         </div>
        </div>
    </body>
</html>