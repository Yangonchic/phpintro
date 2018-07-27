<?php   include 'header.php';
        require 'random.php';
?>

        <h1>Substraction</h1>
        <h1>
            <?php
 
                echo $num1. " - ". $num2;
            
            ?>
        </h1>
        <br/><br/><br/>

        <?php
            if (!$_POST["answer"] ) {}
            else {
                $correct_answer = $_POST["num1"] - $_POST["num2"];
                if ($_POST["answer"] == $correct_answer) {
                    echo "Correct! ". $_POST["num1"] . " - " . $_POST["num2"] . " = " . $_POST["answer"];
                } else {
                    echo "Wrong! " . $_POST["num1"] . " - " . $_POST["num2"] . " = " . $correct_answer . ", not " . $_POST["answer"];
                }
            }
        ?>    
        <br/><br/>
        
        <form method="post" action="/substraction.php">
                    <input name="num1" type="hidden" value="<?php echo $num1?>">
                    <input name="num2" type="hidden" value="<?php echo $num2?>">                    
            Answer: <input name="answer"> <button>Submit</button> <br/><br/><br/><button>New Card</button>
        </form>
        <?php include 'footer.php'; ?>
        </center>
    </body>
</html>
<?php

    
?>