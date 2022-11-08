

<?php
    include 'top.php';
?>

        <main>
            <h1>Background Of Tennis</h1>

            <section>
                <h2>Origins</h2>
                <p>Tbe origins of tennis can be traced back to 12/13th century game plated in France, called jeu de paume. 
                Translated, it means game of the palm, which later evolved to rackets. It is heavily disputed who created the modern game of tennis, 
                but it is almost certain that it was created by a English fellow during the late 19th century, in England. 
                Thus, the oldest tournament in the world is held in London since 1877. </p>
            </section>
            
            <section>
                <h2>Rankings & Tournaments</h2>
                <p>There are different tiers of tournaments in tennis. There are the four Grand Slam tournaments, the French, Austrailian, US Open, and Wimbledon. 
                It is referred to as a 'Grand Slam' when a player wins all four tournaments in one year, which has only happened five times. 
                These tournaments reward 2,000 points towards a players rankings.
                The rest of the tiers are Master's 1000, ATP 500, and ATP 250. 
                They award their respective amounts of points. Also, depending on how far in a player gets into the tournments, points will be alloted as earned. 
                That is the rough overview, with many more things in play.</p>
            </section>

            <section>
                <h2>Roger Federer</h2>
                <p>To start, Federer is my idol. I have modeled my game after his since I was about 6 years old, and he is firmly entrenched in my mind as the greatest tennis player in history.
                Born in Switzerland, Federer was nationally recogized at the age of 14, and went on to get his first sponsership by age 16. 
                By 25, he won Wimbledon, and became the first Swiss player to win that tournament. 
                From 2004-2008, he was the world's #1 player, regining supreme. He has a career 20 grand slam tournament wins at 35. 
                He has been playing and has been top 10 in most of his career. His health has been questionable for the past half decade, battling through knee and back injuries, but I, just like his millions of fans,
                await his comeback. </p>
            </section>

            <section>
            <h2>Rankings</h2>
                <table>
                    <caption>Top 3 Mens ATP Rankings 2022</caption>

                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Age and Points</th>
                    </tr>
                    <?php
                    $sql = 'SELECT fldActivity, fldEffects, fldImpact FROM tblIssues';

                    $statement = $pdo->prepare($sql);
                    $statement->execute() ;

                    $records = $statement->fetchAll();

                    foreach ($records as $record) {
                    print '<tr>' ;
                    print '<td>' . $record['fldRank'] . '</td>'; 
                    print '<td>' . $record['fldName'] . '</td>'; 
                    print '<td>' . $record['fldPoints'] . '</td>'; 
                    print '<tr>' . PHP_EOL; 
                    }
                    ?>

                    <tr>
                        <td>Source</td>
                        <td><a href="https://www.espn.com/tennis/rankings" target="_blank">
                        </td>
                    </tr>
                </table>
            </section>

            <section>
                <h2>Top Three Tennis Players of My Generation</h2>

                <figure>
                    <img class = "rounded" alt ="Top 3" src="images/tennis.jpg">
                    <figcaption><cite><a href="https://twitter.com/usopen/status/1413565875022614531"
                    target="_blank"></a></cite>Top Three in My Heart</figcaption>
                </figure>

            </section> 

            <ol>
                <li>Roger Federer</li>
                <li>Rafael Nadal</li>
                <li>Novak Djokovic</li>
                <li>Source : <cite><a href="https://twitter.com/usopen/status/1413565875022614531"
                    target="_blank">Twitter</a></cite></li>
            </ol>


        </main>

    <?php
        include 'footer.php';
    ?>
</html>
