<?php
    // Variables
    $title = "What It Sounds Like";
    $artist = "HUNTR/X";
    $mood = "Emotional, Heartwarming";


    // Arrays

    $nouns = [
        "Nothing","truth","proof","patterns","things","head","heart","lies",
        "side","pieces","beauty","scars","darkness","harmony",
        "voice","colors","light","song","silence","demons","heroes",
        "survivors","dreamers","fighters","fire",
    ];
    $verbs = [
        "fix","fight","trust","broke","seeing","cover","let","show","find",
        "write","shattering","rising","shouting","listened","get","dive",
    ];
    $adjectives = [
        "worst","ashamed","broken","jagged","quiet","alone",
        "tired","Fearless","undefined",
    ];

    // --------------------------------

    $repeatChorusAll = 1;
    $repeatChorus = 1;
    $verses = "2";

    // --------------------------------

    // These codes call the array index above

    $verse1 = [
        "Nothing but the {$nouns[1]} now",
        "Nothing but the {$nouns[2]} of what I am",
        "The  {$adjectives[0]}  of what I came from, {$nouns[3]} I'm ashamed of",
        "Things that even I don't understand",
        "I tried to {$verbs[0]} it, I tried to {$verbs[1]} it",
        "My {$nouns[5]}  was twisted, my {$nouns[6]} divided",
        "My {$nouns[7]} all collided",
        "I don't know why I didn't {$verbs[2]}  you to be on my {$nouns[8]}",
    ];

    $chorus1 = [
        "I {$verbs[3]} into a million {$nouns[9]}, and I can't go back",
        "But now I'm {$verbs[4]} all the {$nouns[10]} in the {$adjectives[2]} glass",
        "The {$nouns[11]} are part of me, {$nouns[12]} and {$nouns[13]}",
        "My {$nouns[14]} without the {$nouns[7]}, this is what it sounds like",
        "Why did I {$verbs[5]} up the {$nouns[15]} stuck inside my {$nouns[5]}?",
        "I should've {$verbs[6]} the {$adjectives[3]} edges meet the {$nouns[16]} instead",
        "Show me what's underneath, I'll {$verbs[8]} your {$nouns[13]}",
        "The {$nouns[17]} we couldn't {$verbs[9]}, this is what it sounds like",
    ];

    $verse2 = [
        "We're {$verbs[10]} the {$nouns[18]}, we're {$verbs[11]}, defiant",
        "Shouting in the {$adjectives[4]}, You're not alone",
        "We {$verbs[14]} to the {$nouns[19]}, we {$verbs[6]} them {$verbs[14]} between us",
        "But none of us are out here on our own",
        "So we were cowards, so we were liars",
        "So we're not {$nouns[20]}, we're still {$nouns[21]}",
        "The {$nouns[22]}, the {$nouns[23]}, no lying, I'm {$adjectives[6]}",
        "But {$verb[15]} in the {$nouns[24]}, and I'll be right here by your {$nouns[8]}",
    ];

    $chorus2 = [
        "We {$verbs[3]} into a million {$nouns[9]}, and I can't go back",
        "But now I'm {$verbs[4]} all the {$nouns[10]} in the {$adjectives[2]} glass",
        "The {$nouns[11]} are part of me, {$nouns[12]} and {$nouns[13]}",
        "My {$nouns[14]} without the {$nouns[7]}, this is what it sounds like",
        "Why did I {$verbs[5]} up the {$nouns[15]} stuck inside my {$nouns[5]}?",
        "I should've {$verbs[6]} the {$adjectives[3]} edges meet the {$nouns[16]} instead",
        "Show me what's underneath, I'll {$verbs[8]} your {$nouns[13]}",
        "The {$nouns[17]} we couldn't {$verbs[9]}, this is what it sounds like",
    ];

    $bridge = ["
        (Oh, hey) This is what it sounds like",
        "(Oh, oh, oh) Hey, hey",
        "This is what it sounds like",
        "(Oh, oh, oh) Hey, hey",
        "This is what it sounds like",
        "(Oh, oh, oh) Hey, hey",
        "Oh, this is what it—, this is what it—",
        "This is what it sounds like

    ",
    ];

    $outro = ["
        My {$nouns[14]} without the {$nouns[7]}, this is what it sounds like",
        "{$adjectives[7]} and {$adjectives[8]}, this is what it sounds like",
        "Truth after all this time, our voices all combined",
        "When {$nouns[12]} meets the {$nouns[16]}, this is what it sounds like
    ",];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What It Sounds Like Lyrics</title>
    <style>
        body{
            background-color: #dfc5fe;
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><b>Artist:</b> <?php echo $artist; ?></p>

    <h2>Verse 1</h2>
    <?php foreach($verse1 as $line) echo "<p>$line</p>"; ?>

    <h2>Chorus</h2>
    <?php foreach($chorus1 as $line) echo "<p>$line</p>"; ?>

    <h2>Verse 2</h2>
    <?php foreach($verse2 as $line) echo "<p>$line</p>"; ?>

    <h2>Chorus</h2>
    <?php foreach($chorus2 as $line) echo "<p>$line</p>"; ?>

    <h2>Bridge</h2>
    <?php foreach($bridge as $line) echo "<p>$line</p>"; ?>

    <h2>Outro</h2>
     <?php foreach($outro as $line) echo "<p>$line</p>"; ?>
    
</body>
</html>