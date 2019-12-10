<?php
?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading"><img id="hey" src="../../img/Logo1_groot.png" alt="Logo"></h1>
        <p class="shoulders">
            Wij zijn Barroc<span class="yellow">.</span> <span class="roboto">Intens</span>, Voor al uw vlammend heerlijke koffie.
        <p class="shoulders">Geniet van de zuiverste koffie op de wereld.</p>
        </p>
        <p>
                @if (Auth::Guest())
             
                <button> <a href="login" class="white"> Ik ben klant </a> </button>
                <button> <a href="login" class="white"> Ik ben werknemer </a> </button>   
                @endif
            
        </p>
    </div>
</section></div></div></html>

