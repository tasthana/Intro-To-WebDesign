

<?php
    include 'top.php';
?>

        <main>
            <h1>Tushar Asthana </h1>

            <section>
                <h3>Look at me!</h3>
                <marquee class = "marquee" behavior="scroll" direction="up" >         
                    <img src= "images/skydive.jpg" alt="Skydiving"> 
                    <img src= "images/sebbie.jpg" alt="Sebbie and I">
                    <img src= "images/lanky.jpeg" alt="Lanky and I">
                </marquee>  

            </section> 

            <section>
                <h2>Background</h2>
                <p>
                    Hello all. My name is Tushar Asthana, and I was born November 21, 2001 in Gorakhpur, India. 
                The first six years of my life were spent in Singapore, in a neighborhood called Chuan Park. At the age of 6, my family moved to Atlanta, Georgia, in the USA.
                The following year and half were spent learning what it meant to live in America, going to school and making new friends in the Dunwoody Complex in Jefferson County.  
                At the age of 7, my dad found a new job in a small town called South Burlington, Vermont. Vermont was not what we were used to at the time, but in the past 14 years, 
                my family and I have learned to call it home!   
            </p>
            </section>
            
            <section>
                <h2>A Little More....</h2>
                <p>
                    Growing up in such a diverse environment, from learning Hindi, Mandarin, and English all together, to being submerged into what it meant to really be an immigrant was a lot. 
                    I had the honor of going from different ends of this planet, and learning so many new things. 
                    Not all of them were good, but that's the way of life. My parents raised me in such a great manner that I will never be able to repay them, and they continue to bless me by taking me to different places even now! 
                    This website, while it is a reflection of my experience, please don't forget who has blessed me and allowed me to be in such a position to travel all around.
                    While most of my experiences thus far have been with family, solo traveling is definitely a goal of mine for the future.  
                </p>
            </section>


            <section>
            <h2>Rankings</h2>
            <p>
                A little more context, this list below is simply my favorite places out of all of the places that I have been! This is an entirely biased list, but I'll go into depth about my favorite three on this website.
            </p>
                <table>
                    <caption>Ranking My Favorites</caption>

                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                    </tr>
                    <?php
                    $sql = 'SELECT fldRank, fldName FROM tblBestTravels';

                    $statement = $pdo->prepare($sql);
                    $statement->execute() ;

                    $records = $statement->fetchAll();

                    foreach ($records as $record) {
                    print '<tr>' ;
                    print '<td>' . $record['fldRank'] . '</td>'; 
                    print '<td>' . $record['fldName'] . '</td>'; 
                    print '<tr>' . PHP_EOL; 
                    }
                    ?>
                </table>

            </section>


        </main>

    <?php
        include 'footer.php';
    ?>
</body>
</html>
