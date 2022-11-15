<?php
    include 'top.php';

    $dataIsGood = true;
    $email = '';
    $rock = 'false';
    $paper = 'false';
    $scissor = 'false'; 
    $dedicated = 'false';

    function getData($field) {
        if (!isset ($_POST[$field])) {
            $data = "";
        } 

        else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        // Check for letters, numbers and dash, period, space and single quote only.
        // added & ; and # as a single quote sanitized with html entities will have 
        // this in it bob's will be come bob's
        return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }

?>
        <main>
        <h1>Survey</h1>

            <section>
                <h2>Judging everyone based off of their favorite tennis player of the past decade.</h2>
                <p> Answer these few questions for a judgement!</p>

                <?php
                if($_SERVER["REQUEST_METHOD"] == 'POST'){

                    //sanitize 
                    $email = getData('txtEmail');

                    $rock = (int) getData('chkRock'); 
                    $paper = (int) getData('chkPaper'); 
                    $scissor = (int) getData('chkScissor'); 

                    $dedicated = getData('radCoupleDays');  

                    //validate 
                    $dataIsGood = true;

                    if($email ==''){
                        print '<p class = "wrong"> Please type in your email again. </p> ';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class = "wrong">Invalid characters, try again! </p> ';
                        $dataIsGood = false; 
                    } if ($dedicated != "Couple Days" AND $dedicated != "Few Days" AND $dedicated != "Every Days"){
                        print '<p class = "wrong">Please tell us how dedicated you are to the game! </p> ';
                        $dataIsGood = false; 
                    }

                    $totalChecked = 0; 

                    if($rock != 1) $rock = 0;
                    $totalChecked += $rock; 

                    if($paper != 1) $paper = 0;
                    $totalChecked += $paper; 

                    if($scissor != 1) $scissor = 0;
                    $totalChecked += $scissor; 

                    if($totalChecked == 0){
                        print '<p class="wrong"> Please choose one adjective that describes you! </p>';
                        $dataIsGood = false; 
                    }

                    //save data 
                    if($dataIsGood){
                        try{
                            $sql ='INSERT INTO tblAnswers (fldEmail, fldDedicated, fldRock, fldPaper, fldScissor) VALUES (?,?,?,?,?)';
                            $staement = $pdo->prepare($sql);
                            $data = array($email, $dedicated, $rock, $paper, $scissor);

                            if($statement->execute($data)){
                                $message = '<h2> Thank you, your information was saved succesfully. </h2>';
                            } else{
                                $message = '<p> Something went wrong, records not saved. </p>';
                            }
                        }catch(PDOException $e){
                            $message = '<p> Something went wrong, contact your administrator. </p>';
                        }
                    }


                } //ends form submitted 
                ?>
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
                            onfocus="this.select()" tabindex="310" type="text" value="<?php print $email; ?>"
                            required>
                        </p>
                    </fieldset>

                    <fieldset class="checkbox">
                        <legend>What kind of player are you?</legend>
                        <p>
                            <input id="chkRock" name="chkRock" tabindex="510"
                            type="checkbox" value="1" <?php if($rock) print 'checked'; ?>>
                            <label for="chkRock">Rock</label>
                        </p>

                        <p>
                            <input id="chkPaper" name="chkPaper" tabindex="520"
                            type="checkbox" value="1" <?php if($paper) print 'checked'; ?>>
                            <label for="chkPaper">Paper</label>
                        </p>

                        <p>
                            <input id="chkScissor" name="chkScissor" tabindex="530"
                            type="checkbox" value="1" <?php if($scissor) print 'checked'; ?>>
                            <label for="chkScissor">Scissor</label>
                        </p>
                    </fieldset>

                    <fieldset class="radio">
                        <legend>How often do you play tennis?</legend>
                        <p>
                            <input type="radio" id="radCoupleDays"
                            name="radPick" value="Couple" tabindex="410" required <?php if($dedicated == "Couple Days") print 'checked';?>>
                            <label class="radio-field" for="radCoupleDays">Couple Days</label>
                        </p>

                        <p>
                            <input type="radio" id="radFewDays"
                            name="radPick" value="Few" tabindex="410" required  <?php if($dedicated == "Few Days") print 'checked';?>>
                            <label class="radio-field" for="radFewDays">Few Days</label>
                        </p>

                        <p>
                            <input type="radio" id="radEveryDays"
                            name="radPick" value="Every" tabindex="410" required  <?php if($dedicated == "Every Days") print 'checked';?>>
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