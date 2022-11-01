

<?php
include 'top.php';

$frenchOpenWinners = array(
    array(2022, 'Rafael Nadal', 'Spain', 36),
    array(2021, 'Novak Djokovic', 'Serbia', 34),
    array(2020, 'Rafael Nadal', 'Spain', 34),
    array(2019, 'Rafael Nadal', 'Spain', 33),
    array(2018, 'Rafael Nadal', 'Spain', 32)      
);

?>


        <main>
        <h1>French Open</h1>

            <section>
                <h2>Background</h2>
                <p>The French Open, in French in full, is the Championnats Internationaux de France de Tennis (“France’s International Championships of Tennis”). 
                It is the second of the major events that make up the annual Grand Slam of tennis. 
                In 1891 the first French national championships were held in the Stade Français, as a men’s interclub competition. 
                In 1897 women’s singles matches were added to tournament play. Women’s doubles matches were added in 1925, the same year that the championships were opened to non-French players. 
                In 1968 the tournament was opened to professional as well as amateur players, as were a number of the most established championships. 
                Play moved in 1928 to the Stade Roland-Garros, which contains clay courts. </p>
            </section>
            
            <section>
                <h2>Rafa Nadal at the French Open</h2>
                <p>Rafael Nadal is a Spanish born tennis player, whose movement on the court is the highlight of the tennis world. 
                He has long been known as one of the hardest players to face, as his movement makes him a real life moving backboard. 
                His footwork, combined with his athleticism makes his game on clay courts undeniably the best in the world. 
                He plays with extreme topspin, which makes the ball hit the court with an extra burst of height and speed, pushing back players deep behind the baseline. 
                He has won the French Open 14 times in the past 20 years, with three 4 year streaks of winning in a row. </p>
            </section>

            <section>
            <h2>Last <?php echo count($frenchOpenWinners);?> Winners. </h2>
                <table>
                    <tr>
                        <th>Year</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Age</th>
                    </tr>
                    
<?php 
foreach ($frenchOpenWinners as $frenchOpenWinner){
    print '<tr>';
    print '<td>' . $frenchOpenWinner[0] . '</td>';
    print '<td>' . $frenchOpenWinner[1] . '</td>';
    print '<td>' . $frenchOpenWinner[2] . '</td>';
    print '<td>' . $frenchOpenWinner[3] . '</td>';
    print '<td>' . $frenchOpenWinner[4] . '</td>';
    print '</tr>' . PHP_EOL;
}
?>
    </table>
    </section>
    </main>

<?php
    include 'footer.php';
?>
