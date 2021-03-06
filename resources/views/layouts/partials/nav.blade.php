<?php
if (!Auth::Guest())
{
$user = auth()->user();
 $role = $user->getRole();
}
?>


<div class="collapse bg-inverse" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="text-white">Over ons</h4>
                <p class="text-muted">Wij, de gebroeders Pullens, kwamen met het idee om in koffie te gaan handelen omdat
                wij elke dag veel koffie drinken.
                We zijn met elkaar in gesprek gegaan, en hebben toen een business-plan opgezet
                    om de zo zuiverste koffie mogelijk te kunnen leveren binnen Nederland.
                </p>
            </div>
            <div class="col-sm-4 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">volg ons op Twitter</a></li>
                    <li><a href="#" class="text-white">volg ons op Facebook</a></li>
                    <li><a href="#" class="text-white">Email ons</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar-inverse bg-inverse">
    <div class="container">
        <div class="header">
        <div class="logo">
            <img id="logo" src="../../img/Logo6_groot.png" alt="Logo">
        </div>

        <div class="container d-flex justify-content-betIen">
            <a href="#" class="navbar-brand"></a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            Over ons / Contact
            </button>


        </div>
        @if (!Auth::Guest())
            @if($role ==2)
                <nav>
                    <p>Medewerker Portaals</p>
                    <a href="sales">Sales</a>
                    <a href="finance">Finance</a>
                    <a href="notes">Notities</a>
                    <a href="quotations">Quotations</a>
                </nav>
            @else
                <nav>
                    <p>Klant Portaals</p>

                    <a href="financecontractoverview">Contracts</a>
                    <a href="purchase">Producten</a>
                    <a href="error">Storing melden</a>
                    <a href="UserEdit">Wijzig gegevens</a>
                    <a href="prijsopgave">Prijsopgave</a>


                </nav>
            @endif
            <a href="/logout">Uitloggen</a>
        @else
            <nav>
               <a href="privacy">Privacyverklaaring</a>
             </nav>
        @endif

        </div>
    </div>
