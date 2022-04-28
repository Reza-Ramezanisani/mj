<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/all.min.css">
    <link rel="stylesheet" href="SRE.css">

</head>
<body>
   
    <main>
            <div id='img'>

                <h1 style="font-size: 10vw;text-align: center;;color:white;font-family:verdana">
                    <span style="color:aqua ;">M</span>
                    <span style="color:red;">U</span>
                    <span style="color:yellow ;">S</span>
                    <span style="color:rgb(199, 8, 206) ;">I</span>
                    <span style="color:white ;">C</span>
                </h1>
               
                <!-- <a href="#" style=";text-decoration: none;color:white;font-size: 2em;" target="_blank" rel="noopener noreferrer">Enter</a> -->
          
                    <div class="slider" id='slider' >
                       
                        <div><a style='height: 40vw;width: 50vw;' href="music.php?id=0" class='link_img1' ><img src="b.jpg" id='img1' alt=""/></a></div>
                        <div><a style='height: 40vw;width: 50vw;' href="music.php?id=2" class='link_img1' ><img src="a/f.jpg" id='img1' alt=""/></a></div>
                        <div><a style='height: 40vw;width: 50vw;' href="music.php?id=0" class='link_img1' ><img src="a/s.jpg" id='img1' alt=""/></a></div>
                        <div><a style='height: 40vw;width: 50vw;' href="music.php?id=3" class='link_img1' ><img src="e.jpg" id='img1' alt=""/></a></div>
                        <!-- <div style='height: 20vh;width: 50vw;border:1px solid red'><img style='width:100%;height:100%;object-fit:contain' src='a/f.jpg'></div>
                        <div style='height: 20vh;width: 50vw;border:1px solid red'><img style='width:100%;height:100%;object-fit:contain' src='a/f.jpg'></div>
                        <div style='height: 20vh;width: 50vw;border:1px solid red'><img style='width:100%;height:100%;object-fit:contain' src='a/f.jpg'></div> -->
                        <!-- <div  style='height: 40vw;width: 50vw;'><a style='height: 40vw;width: 50vw;' href="music.htm"><img style='width:100%;height:100%' src="a/f.jpg" id='div'  alt=""></a></div>
                        <div><a style='height: 40vw;width: 50vw;' href="music.htm"><img src="a.jpg" alt=""></a></div>
                         <div><a style='height: 40vw;width: 50vw;' href="music.htm"><img src="a.jpg" alt=""></a></div>
                        <div><a style='height: 40vw;width: 50vw;' href="music.htm"><img src="a.jpg" alt=""></a></div>
                        <div><a style='height: 40vw;width: 50vw;' href="music.htm"><img src="a.jpg" alt=""></a></div>  
                         -->
                        
                    </div>
              
            </div>
    </main>
    <script>
        let slider =document.getElementById('slider');
slider.onscroll=function () {
    let img1 =document.getElementById('img1');
    let a=slider.scrollLeft;

    if(a>50){
        img1.classList.add('act');

    }else{
        img1.classList.remove('act');
    }
}

    </script>
    <script src="Sc.js"></script>
       
</body>
</html>