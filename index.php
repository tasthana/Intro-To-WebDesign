
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CS 008 Index Website</title>
        <meta name="author" content="Tushar Asthana">
        <meta name="description" content="A site map to all my groovy assignments for the best course at UVM.">
    <style>
            /* basic CSS */
            body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }
            
            /* Setting up a grid layout for the main inded page */
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }  
            .public-files{
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .5%;
                margin: .5%;
                width: 100%;    
            }

        </style>

    </head>

    <body>
        <figure class="right small">
            <img alt="Tushar Asthana circa- Summer 2022" src="images/tushar-asthana.png">
            <figcaption>Skydiving in Algarve, Portugal</figcaption>
        </figure>

        <h1>CS 008-<em>B</em> Fall 2022</h1>
        <h2>Tushar Asthana - Site map</h2>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>

        <section class="grid-layout">
            <h2 class="header">Lab Five - Adding More Style.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab5/detail.php">detail.php</a></p> 
                <p><a href="lab5/form.php">form.php</a></p>
                <p><a href="lab5/index.php">index.php</a> </p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab5/css/custom.css">custom.css</a> </p>
                <p><a href="lab5/images/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Four - Styling My Site.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab4/detail.php">detail.php</a></p> 
                <p><a href="lab4/form.php">form.php</a></p> 
                <p><a href="lab4/index.php">index.php</a></p> 
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab4/css/custom.css">custom.css</a> </p>
                <p><a href="lab4/images/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Three - Adding a Form and More Detail</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab3/detail.php">detail.php</a></p>
                <p><a href="lab3/form.php">form.php</a></p> 
                <p><a href="lab3/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab3/css/custom.css">custom.css</a> </p>
                <p><a href="lab3/images/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        <section class="grid-layout">
            <h2 class="header">Lab Two - Making the World a Better Place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab2/index.php">index.php</a></p>      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>              
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2>Lab one - Setting up my sitemap.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="test-page.php">Testing Page</a></p>      
            </section>
            <section class="supporting-files">
                <h3>Supporting files</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

    </body>
</html>