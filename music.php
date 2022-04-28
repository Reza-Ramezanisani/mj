<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="SRE.css">
</head>
<body>
    <nav id='nav_o'>
        <ul class="" id='nav'>
            <h1>Music Film</h1>
            <div id='div' >
                    <li><a href="index.htm">Home</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a onclick="window.close();" href="">Close window</a></li>
                </div>
        </ul>
    </nav> 
    <main>
        <div class='slide'>
            <h1 style="position: absolute;top: 10px;;transform: rotate(-30deg);font-size: 5vw;text-align: center;;color:white;font-family:verdana">
                <span style="color:aqua ;">M</span>
                <span style="color:red;">U</span>
                <span style="color:yellow ;">S</span>
                <span style="color:rgb(199, 8, 206) ;">I</span>
                <span style="color:white ;">C</span>
            </h1>
            <img style="width: 100%;height: 100%;border-radius: 30px;" id="img_slide" src="" alt="">
            <div class="dots">
                <div class="dot" onclick='curr(0,this)'></div>
                <div class="dot" onclick='curr(1,this)'></div>
                <div class="dot" onclick='curr(2,this)'></div>
                <div class="dot" onclick='curr(3,this)'></div>
            </div>
                <div style='cursor: pointer;' onclick="next()" class="next">next</div>
                <div style='cursor: pointer;' onclick="pre()" class="prev">prev</div>
        </div>
        <section>
            <div class='music_img'>
                <img style='width: 100%;height: 100%;border-radius:50px;' id='img_music_' src="k.jpg" alt="">
                <div class="name">
                    <p class="track_name">re</p>
                    <p class="artist">da</p>
                </div>
            </div>
            <div class="mus">
                    <div class="music"style='position:relative'>
                        <div class="anim" style='width:10%;'>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                     <div class="icons" >
                        <i onclick="track_next(-1)" class="fas fa-backward fa-2x"></i>
                        <i onclick="track_play_check()" class="fas fa-play-circle fa-4x"></i>
                        <i onclick="track_next(1)" class="fas fa-forward fa-2x"></i>
                        <i onclick="muted()" id='muted' style='position:absolute;right:10%;top:3%;color:black' class="fas fa-volume-up fa-md"></i>
                        <i onclick="loop()" id='loop' style='position:absolute;right:17.5%;top:3%;color:black' class="fas fa-retweet fa-1x"></i>
                        </div>
                    </div>
                    <div class='seek_time' style='display: flex;justify-content: center;margin-top: 30px;padding:0 15px;'>
                            <span id='curr_time'>00:00</span><input type="range" id='seek' onchange="seekTo()" style="width: 50%;cursor: pointer;" value='0'><span style="margin-right: 20px;" id='dur_time'></span>
                            <span id='vol_no' class='fas fa-volume-down fa-1x'></span><input type="range" id='vol' onchange='vol()' value='50' style="width: 30%;cursor: pointer;"><span  class='fas fa-volume-up fa-1x'></span>
                    </div>
            </div>
        </section>
        <div class='musices' style='margin: 60px 10px'>
        </div>
    </main>
    <input value='<?php echo $_GET['id'];?>' id='val' type='text' hidden>
    <script src="Sc.js"></script>
</body>
</html>