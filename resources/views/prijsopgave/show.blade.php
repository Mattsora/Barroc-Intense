<?php
?>

@extends('layouts/mainlayout')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <p>Prijsopgave nummer {{$prijsopgave->id}}.</p>
            <div class="showprijsopgave">

                <div class="supply">

                    <?php
                    if ($prijsopgave['supply_id'] == 0){
                        echo "Niks:";
                    }
                    if ($prijsopgave['supply_id'] == 1){
                        echo "Koffiemachine:";
                    }
                    if ($prijsopgave['supply_id'] == 2){
                        echo "Theelepel:";
                    }
                    if ($prijsopgave['supply_id'] == 3){
                        echo "Suiker:";
                    }
                    if ($prijsopgave['supply_id'] == 4){
                        echo "Koffiebonen:";
                    }
                    ?>
                </div>

                <div class="count">
                    <?php
                    if ($prijsopgave['count'] == 1){
                        echo "Je hebt hier 1 van besteld.";
                    }
                    if ($prijsopgave['count'] == 2){
                        echo "Je hebt hier 2 van besteld.";
                    }
                    if ($prijsopgave['count'] == 3){
                        echo "Je hebt hier 3 van besteld.";
                    }
                    if ($prijsopgave['count'] == 4){
                        echo "Je hebt hier 4 van besteld.";
                    }
                    if ($prijsopgave['count'] == 5){
                        echo "Je hebt hier 5 van besteld.";
                    }
                    ?>
                </div>

            </div>

            <div class="showprijsopgave">

                <div class="supply">

                    <?php
                    if ($prijsopgave['supply_id1'] == 0){
                        echo "Niks:";
                    }
                    if ($prijsopgave['supply_id1'] == 1){
                        echo "Koffiemachine:";
                    }
                    if ($prijsopgave['supply_id1'] == 2){
                        echo "Theelepel:";
                    }
                    if ($prijsopgave['supply_id1'] == 3){
                        echo "Suiker:";
                    }
                    if ($prijsopgave['supply_id1'] == 4){
                        echo "Koffiebonen:";
                    }
                    ?>
                </div>
                <div class="count">
                    <?php
                    if ($prijsopgave['count1'] == 1){
                        echo "Je hebt hier 1 van besteld.";
                    }
                    if ($prijsopgave['count1'] == 2){
                        echo "Je hebt hier 2 van besteld.";
                    }
                    if ($prijsopgave['count1'] == 3){
                        echo "Je hebt hier 3 van besteld.";
                    }
                    if ($prijsopgave['count1'] == 4){
                        echo "Je hebt hier 4 van besteld.";
                    }
                    if ($prijsopgave['count1'] == 5){
                        echo "Je hebt hier 5 van besteld.";
                    }
                    ?>
                </div>

            </div>

            <div class="showprijsopgave">

                <div class="supply">

                    <?php
                    if ($prijsopgave['supply_id2'] == 0){
                        echo "Niks:";
                    }
                    if ($prijsopgave['supply_id2'] == 1){
                        echo "Koffiemachine:";
                    }
                    if ($prijsopgave['supply_id2'] == 2){
                        echo "Theelepel:";
                    }
                    if ($prijsopgave['supply_id2'] == 3){
                        echo "Suiker:";
                    }
                    if ($prijsopgave['supply_id2'] == 4){
                        echo "Koffiebonen:";
                    }
                    ?>
                </div>
                <div class="count">
                    <?php
                    if ($prijsopgave['count2'] == 1){
                        echo "Je hebt hier 1 van besteld.";
                    }
                    if ($prijsopgave['count2'] == 2){
                        echo "Je hebt hier 2 van besteld.";
                    }
                    if ($prijsopgave['count2'] == 3){
                        echo "Je hebt hier 3 van besteld.";
                    }
                    if ($prijsopgave['count2'] == 4){
                        echo "Je hebt hier 4 van besteld.";
                    }
                    if ($prijsopgave['count2'] == 5){
                        echo "Je hebt hier 5 van besteld.";
                    }
                    ?>
                </div>
                <div class="totaldiv">
                    <?php

                    ?>
                </div>

            </div>
        </div>
    </section>
@endsection
