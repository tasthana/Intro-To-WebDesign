<?php
    include 'top.php';
?>


<main>
    <h1>SQL</h1>
    <h2>Create Table</h2>
    <p>Create Table SQL</p>

    <pre> 
        CREATE TABLE tblBestTennisStars(
            pmkBestTennisStars INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldRank varchar(20),
            fldName varchar(30),
            fldPoints varchar(250)
        )
    </pre>

    <h2>Insert Data</h2>
        <pre>
        INSERT INTO tblBestTennisStars(fldRank, fldName, fldPoints) VALUES 
        ('1', 'Carlos Alcaraz', 'At 19 years old, Alcaraz has 6,740 points.'),
        ('2', 'Casper Rudd', 'At 23 years old, Rudd has 5,850 points.'),
        ('3', 'Rafael Nadal', 'At 36 years old, Nadal has 5,810 points.')
        </pre>

    <pre>
    CREATE TABLE tblAnswers(
        pmkAnswers int(15)NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fldEmail varchar(50) DEFAULT NULL,
        fldDedicated varchar(20) DEFAULT NULL,
        fldrock tinyint(1)DEFAULT 0,
        fldpaper tinyint(1)DEFAULT 0,
        fldscissor tinyint(1) DEFAULT 0
        )
    </pre>

    <h2> Insert Data </h2>
    <pre>
    INSERT INTO tblFavoriteWildlife
    (pmkAnswers, fldEmail, fldDedicated, fldRock, fidPaper, fldScissor)
    VALUES
    ('tasthana@uvm.edu', 'Every Days', 0, 0,1);
    </pre>

    <h2>Select Records</h2>
    <pre>
    SELECT fldRank, fldName, fldPoints FROM tblBestTennisStars
    </pre>

    </main>
<?php
    include 'footer.php';
?>
</body>
</html>
