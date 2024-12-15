<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Planet of Fire</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        body {
            background: url('lava.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #FFD700;
            font-family: 'Space Mono', monospace;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            margin-top: 50px;
            font-size: 4rem;
            text-shadow: 2px 2px 5px #FF4500;
        }
        p {
            font-size: 1.5rem;
            line-height: 1.8;
            margin: 20px auto;
            max-width: 800px;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        a {
            color: #FFD700;
            text-decoration: none;
            font-size: 1.8rem;
            margin: 0 15px;
            padding: 10px 20px;
            border: 2px solid #FFD700;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        a:hover {
            background: #FFD700;
            color: black;
        }
    </style>
</head>
<body>
    <h1>🔥 Welcome to the Planet of Fire 🔥</h1>
    <p>
        You’ve landed on a volcanic planet filled with raging lava rivers, fiery storms, and a sky that glows red with molten ash. 
        The ground beneath your feet rumbles as if the planet itself is alive.
    </p>
    <p>
        Long ago, legends say this planet was home to the mythical Fire Lords, beings of pure flame who guarded treasures of unimaginable power. 
        These treasures are said to grant their finders the strength to rule the stars, but they are hidden deep within the volcanic core.
    </p>
    <p>
        As you take your first steps, your suit's sensors warn you of rising temperatures and unstable terrain. 
        Every decision here could mean the difference between life and fiery demise. Will you brave the heat and unravel the planet's secrets, 
        or will you retreat to safety?
    </p>
    <p>What will you do, explorer?</p>
    <a href='treasure.php'>Search for Hidden Treasures</a>
    <a href='index.php'>Return to Space Station</a>
</body>
</html>
";
?>
