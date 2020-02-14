<?php
session_start();
$pageTitle = 'me';
include_once 'view/head.php';
include 'view/header.php';?>

<body class="body">

    <article class="report">

        <h1>Presentation of my self in the course DA377B Programvaruutveckling för webben</h1>

        <div id="duck" class="duck"></div>

        <p><img src="images/profilbild.jpg" width="500" alt="Me on an image" class="center"></p>

        <p>Hello there, my name is Oscar Odelstav. Born in Kristianstad but mostly raised in Broby/Knislinge in the small county of östra göinge just outside of Kristinastad. In my youth my main activity was skateboarding although i exercised some thai boxing
            as well. Secondary me and my friends started a small gaming LAN organisation, this was back in the days when internet was running on 56k modems for most people. Im one of the few student who mainly use Linux as an operatingsystem for my computer.
            These days i consider Linux much more user friendly that back in the 2000 when i used a red hat dist for setting upp dedicated gaming servers. I was attending gymnasium in Sibbhult and studied cooking and worked as a chef for a few years after
            graduating. After switching jobs and traveling through asia for a while i came back to Kristianstad and started studying again. I now live roughly 30 min outside kristianstad, quite offgrid countryside, with my girlfriend and our 1.5 year
            old daughter, a cat and some chickens.
        </p>
        <p>I have been interested in computers since early age and been wondering about programming for many years before i decided to study developement. As i am a bit of a goofy guy with a lot of ideas the main reason for studying was to get the tools
            needed for making my ideas reality. In light of this i intend to start my own company directly after graduating and become an entrepreneur. As i have already identified a need for a software in a relatively small branch that several of my
            friends work in i hope to develope a software that they can use in their work and increases the efficiency of their work.
        </p>

        <div></div>

    </article>

    <?php include 'view/footer.php';?>

    <script src="js/Duck.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>