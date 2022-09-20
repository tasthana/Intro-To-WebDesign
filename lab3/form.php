<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Tennis </title>
        <meta name="author" content="Tushar Asthana">
        <meta name="description" content="The 4th largest followed sport in the world. Players from all over the world come to 
        compete in tournaments to make a name for themselves. Here we will break down rankings, icons, and my favorite player! ">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <!-- Side note to myself, things come and go, take a breath. -->
    </head>

    <body>

        <header>
        <!-- logo image would go here -->
            <h1 style="text-align: center;">Survey Form</h1>
            <h2 style="text-align: center;">How much of a tennis nerd are you?</h2>
        </header>

        <nav style="text-align: center;">
            <a href="index.php">Home</a>
            <a href="detail.php">Wimbledon</a>
            <a href="form.php">Survey</a>
        </nav>

        <main>
        <h1 style="text-align: center;">Survey</h1>

            <section>
                <h2>Favorite Player</h2>
                <p> Judging everyone based off of their favorite tennis player of the past decade.</p>
            </section>

            <section>
                <h2>This information will let me know whose likely to be my friend.</h2>
                <form action="#" id= "frmFavPlayer" method="post">

                    <fieldset class="listbox">
                        <legend>Favorite Player</legend>
                        <p>
                            <select id="lstFavPlayer" name="lstFavPlayer" tabindex="120">
                                <option value="Roger Federer">Roger Federer</option>
                                <option value="Serena Williams">Serena Williams</option>
                                <option value="Novak Djokovic">Novak Djokovic</option>
                                <option value="Andy Murray">Andy Murray</option>
                                <option value="Rafael Nadal<">Rafael Nadal</option>
                                <option value="Venus Williams">Venus Williams</option>
                                <option value="Carlos Alcaraz">Carlos Alcaraz</option>
                                <option value="Casper Rudd">Casper Rudd</option>
                            </select>
                        </p>
                    </fieldset> 

                    <fieldset class="contact">
                        <legend>What's your email?</legend>
                        <p>
                            <label class="required" for="txtEmail" >Email</label>
                            <input id="txtEmail" maxlength="50" name="txtEmail"
                            onfocus="this.select()" tabindex="310" type="text" value=""
                            required>
                        </p>
                    </fieldset>

                    <fieldset class="checkbox">
                        <legend>What kind of player are you?</legend>
                        <p>
                            <input id="chkRock" name="chkRock" tabindex="510"
                            type="checkbox" value="1">
                            <label for="chkRock">Rock</label>
                        </p>

                        <p>
                            <input id="chkPaper" name="chkPaper" tabindex="520"
                            type="checkbox" value="1">
                            <label for="chkPaper">Paper</label>
                        </p>

                        <p>
                            <input id="chkScissor" name="chkScissor" tabindex="530"
                            type="checkbox" value="1">
                            <label for="chkScissor">Scissor</label>
                        </p>
                    </fieldset>

                    <fieldset class="radio">
                        <legend>How often do you play tennis?</legend>
                        <p>
                            <input type="radio" id="radCoupleDays"
                            name="radCoupleDays" value="Couple" tabindex="410" required>
                            <label class="radio-field" for="radCoupleDays">Couple Days</label>
                        </p>

                        <p>
                            <input type="radio" id="radFewDays"
                            name="radFewDays" value="Few" tabindex="420" required>
                            <label class="radio-field" for="radFewDays">Few Days</label>
                        </p>

                        <p>
                            <input type="radio" id="radEveryDays"
                            name="radEveryDays" value="Every" tabindex="430" required>
                            <label class="radio-field" for="radEveryDays">Couple Days</label>
                        </p>

                        <fieldset class="buttons">
                            <input id="btnSubmit" name="btnSubmit" tabindex="900"
                            type="submit" value="Register">
                        </fieldset>
                    </fieldset> 

                </form>
            </section>

            <section>
            <h2>Appreciate it</h2>
            <?php
            print'<p>Post Array:</p><pre>';
            print_r($_POST);
            print '</pre>';
            ?>
            </section> 


        </main>

        <footer>
            <p><a href="../index.php">Site Map (Main index)</a></p>
        </footer>
    </body>
</html>
