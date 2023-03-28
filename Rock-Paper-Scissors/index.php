<html>

<head>
    <title>PHP Test</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://kit.fontawesome.com/855ee508c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css" />
</head>

<body>

    <div id="game">
        <div id="opts">
            <div class="option">
                <i class="fas fa-hand-rock fa-2x fa-rotate-90"></i>
                Rock
                <form action="" method="GET">
                    <input type="submit" name="option" value="Rock">
                </form>
            </div>
            <div class="option">
                <i class="fas fa-hand-paper fa-2x fa-rotate-90"></i>
                Paper
                <form action="" method="GET">
                    <input type="submit" name="option" value="Paper">
                </form>
            </div>
            <div class="option">
                <i class="fas fa-hand-scissors fa-2x fa-flip-horizontal"></i>
                Scissors
                <form action="" method="GET">
                    <input type="submit" name="option" value="Scissors">
                </form>
            </div>
            <div class="option"></div>
            <div id="computer">
                <p>
                    <b>Computer</b>:
                    <span id="result">
                        <?php
                        $option = "$_GET[option]";
                        $options = ["Rock", "Paper", "Scissors"];
                        $computer = array_rand($options);
                        $result = "";
                        if ("$options[$computer]" == $option) {
                            $result .= "Draw";
                        } elseif ("$options[$computer]" == "Rock" && $option == "Paper") {
                            $result .= "You Win ";
                        } elseif ("$options[$computer]" == "Paper" && $option == "Scissors") {
                            $result .= "You Win ";
                        } elseif ("$options[$computer]" == "Scissors" && $option == "Rock") {
                            $result .= "You Win ";
                        } elseif ("$options[$computer]" == "Paper" && $option == "Rock") {
                            $result .= "You Lose ";
                        } elseif ("$options[$computer]" == "Scissors" && $option == "Paper") {
                            $result .= "You Lose ";
                        } elseif ("$options[$computer]" == "Rock" && $option == "Scissors") {
                            $result .= "You Lose ";
                        }
                        if (!empty($_GET)) {
                            echo "$options[$computer] <br/>";
                            echo "<h3>You :</h3> $option<br/>";
                            echo "<br/><h3>{$result}</h3>";
                        }
                        ?>
                    </span>
                </p>
            </div>
        </div>

</body>

</html>



<!--[x]: use $_GET-->
<!--[x]: The computer should randomly choose one option between [rock, paper, scissors] use array_rand-->
<!--[x]: In the span with the id of result display what the computer selected and display whos the winner.-->