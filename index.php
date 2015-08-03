<?php 
include('inc/classes.php');
include('inc/teams.php') ?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title>sports</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" href="css/main.css">
       

    </head>
    <body> 
        
        <div class="wrapper">
        
            <header>
                
                <h1 class="site__title">a page of casual interests</h1>
                <img class="site__logo" src="image/charlie.jpg" />
            
            </header>

            <nav class="menu">

    			<ul class="menu__row group">
    	            
                    <li class="menu__list">
    	            	<a href="http://localhost/~charlesamoss/epicPre/index.html" class="menu__link">home</a>
    	            </li>
    	            <li class="menu__list">
    	            	<a href="http://localhost/~charlesamoss/epicPre/food.html" class="menu__link">food</a>
    	            </li>
    	            <li class="menu__list">
    	            	<a href="http://localhost/~charlesamoss/epicPre/sports.html" class="menu__link current">sports</a>
    	            </li>
                    <li class="menu__list">
                        <a href="#" class="menu__link">cat</a>
                    </li>
    	            <li class="menu__list">
    	            	<a href="#" class="menu__link">contact</a>
    	            </li>
            	
                </ul>
            
            </nav> 

            <section class="main group">
            
                <article class="main__article">

                    <h2 class="main__title">Sports! The worlds most popular statistic model generator. Here are my rooting interests.</h2> 
                     
                    <ul class="teams">

						<?php

							foreach ($teams as $team) {
								echo "\r\n\t\t\t<li class=\"teams__item group\">";
								echo $team->getinfo();
								echo "</li>";

							}

				        ?>

				    </ul> 

				     

                </article>
                
                <aside class="interest">

                    <h4 class="interest__title">What am I reading?</h4>
                    <span class="interest__subject">Cryptonomicon - Neal Stephenson</span>

                    <h4 class="interest__title">What am I watching?</h4>
                    <span class="interest__subject">Orange Is the New Black - Season 3</span>

                    <h4 class="interest__title">What am I playing?</h4>
                    <span class="interest__subject">Fallout: New Vegas - PC</span>

                    <h4 class="interest__title">What am I listening to?</h4>
                    <span class="interest__subject">Panthalassa - Miles Davis</span>

                </aside>    

            </section>
    
        </div> <!-- end of wrapper -->
       
        <footer class="site__footer">
        	
            <div class="footer__content">
        	   <p> Copyright 2015 - see my lawyer for details </p>
            </div>
            
        </footer>

        
    </body> 
	</html>
	










