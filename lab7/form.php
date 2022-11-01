<?php
    include 'top.php';
?>
        <main>
        <h1>Survey</h1>

            <section>
                <h2>Judging everyone based off of their favorite tennis player of the past decade.</h2>
                <p> Answer these few questions for a judgement!</p>
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
                            name="radPick" value="Couple" tabindex="410" required>
                            <label class="radio-field" for="radCoupleDays">Couple Days</label>
                        </p>

                        <p>
                            <input type="radio" id="radFewDays"
                            name="radPick" value="Few" tabindex="410" required>
                            <label class="radio-field" for="radFewDays">Few Days</label>
                        </p>

                        <p>
                            <input type="radio" id="radEveryDays"
                            name="radPick" value="Every" tabindex="410" required>
                            <label class="radio-field" for="radEveryDays">Every Day</label>
                        </p>

                        <fieldset class="button">
                            <input id="btnSubmit" name="btnSubmit" tabindex="900"
                            type="submit" value="Submit">
                        </fieldset>
                    </fieldset> 

                </form>
            </section>

            <section>
                <h2>Favorite Tennis Picture</h2>
                <figure class="go-left">
                    <img class="rounded" alt ="Big Four" src="images/fed.jpg">
                    <figcaption><cite><a href= "" target="_blank"></a></cite>Roger Federer's Instagram</figcaption>
                </figure>
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
    
    <?php
        include 'footer.php';
    ?>
        

</html>
