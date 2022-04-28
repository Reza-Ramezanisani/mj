let prev=window.pageYOffset;
window.onscroll=function () {
    let nav = document.getElementById('nav');

    if(window.pageYOffset>prev){
        nav.style.maxHeight=nav.scrollHeight+"px";

    }else{
        nav.style.maxHeight=0;

    }
    prev=window.pageYOffset;
    
}

let index=0;
function sl(ind) {
    let img=document.getElementById('img_slide');
    let text=document.getElementsByClassName('text');
    let list_img=['a.jpg','b.jpg','k.jpg','f.png'];
    index=(ind>=list_img.length)?index=0:index;
    index=(ind<0)?index=list_img.length - 1:index;
    img.src=list_img[index];
}
function next(){
    index+=1;
    sl(index);
}
function curr(x,y){
    index=x;
    sl(index);
    let dots=document.getElementsByClassName('dot');
    for (let i = 0; i < dots.length; i++) {
         dots[i].classList.remove('act');;
    }
    y.classList.add('act');
}
function pre(){
    index-=1;
    sl(index);
}
sl(index);
setInterval(() => {
    index+=1;
    sl(index);
}, 5000);


// music
let id=document.getElementById('val');
let track_index=id.value;
let isPlaying=false;
let track=document.createElement('audio');
let btn_play_pause=document.getElementsByClassName('fa-play-circle')[0];
let [anim1,anim2,anim3]=document.querySelectorAll('.anim div');
let track_name=document.getElementsByClassName('mus')[0];
let update_seek_rang;
let list_music=[{
    id:0,
    name:'Nahang',
    artist:'Sadegh',
    img:'a/s.jpg',
    path:'a/s.mp3'
},{
    id:1,
    name:'Nastaran',
    artist:'Farshad',
    img:'a.jpg',
    path:'a/fa.mp3'
},{
    id:2,
    name:'my life',
    artist:'Arash',
    img:'a/f.jpg',
    path:'a/f.mp3'
},{
    id:3,
    name:'Go',
    artist:'milad',
    img:'e.jpg',
    path:'k.mp3'
}
];


function load_track(ind) {
    
    let track_name=document.getElementsByClassName('track_name')[0];
    let artist=document.getElementsByClassName('artist')[0];
    let img_music=document.getElementById('img_music_');
    track.src=list_music[ind].path;
    track.load();
    track_name.innerHTML=list_music[ind].name;
    artist.innerHTML=list_music[ind].artist;
    img_music.src=list_music[ind].img;
    setInterval(update_seek_time,1000);
    bg_rand();
    console.log(ind);


}
function bg_rand() {
    let rand1=Math.floor(Math.random() * 256);
    let rand2=Math.floor(Math.random() * 256);
    let rand3=Math.floor(Math.random() * 256);
    let rand4=Math.floor(Math.random() * 25);
    let rand5=Math.floor(Math.random() * 25);
    let color=`rgba(${rand1},${rand2},${rand3},0.2)`;
    track_name.style.backgroundColor=color
    track_name.style.boxShadow=`inset ${rand4}px ${rand5}px 10px ${color}`;
}
function track_play_check() {
    if(!isPlaying) track_play();
    else track_pause();
}
function track_play() {
    track.play();
    isPlaying=true;
    btn_play_pause.classList.remove('fa-play-circle');
    btn_play_pause.classList.add('fa-pause-circle');
    anim1.style.animation='mus1 0.5s 0.3s infinite';
    anim2.style.animation='mus2 0.5s 0.7s infinite';
    anim3.style.animation='mus3 0.5s 0.5s infinite';
    anim1.style.height='47px';
    anim2.style.height='50px';
    anim3.style.height='45px';
    track_name.style.animation='bg 0.7s infinite';
}
function track_pause() {
    track.pause();
    isPlaying=false;
    btn_play_pause.classList.remove('fa-pause-circle');
    btn_play_pause.classList.add('fa-play-circle');
    anim1.style.animation='';
    anim2.style.animation='';
    anim3.style.animation='';
    anim1.style.height='';
    anim2.style.height='';
    anim3.style.height='';
    track_name.style.animation='';

}
function track_next(ind) {
    track_index+=ind;
     track_index=(track_index===list_music.length)?track_index=0:track_index;
    track_index=(track_index<0)?list_music.length -1:track_index;
    console.log(track_index);
    load_track(track_index);
    track_play();
}
function update_seek_time(){
     if(!isNaN(track.duration)){
       
         let curr_time=Math.round(track.currentTime);
         let dur_time=Math.round(track.duration);
         curr_time=new Date (curr_time * 1000).toISOString().substr(14,5);
         dur_time=new Date (dur_time * 1000).toISOString().substr(14,5);
         document.getElementById('curr_time').innerHTML=curr_time;
         document.getElementById('dur_time').innerHTML=dur_time;
         if(isPlaying===true){
                let seek = document.getElementById('seek');
                seek.value=track.currentTime * (100 / track.duration);
         }
         if(track.ended){
             track_next(1);
         }

    }

}
function seekTo() {
    let seek = document.getElementById('seek');
    track.currentTime = track.duration * (seek.value / 100);
}
function vol() {
    let Vol = document.getElementById('vol');
    let Vol_No = document.getElementById('vol_no');
    track.volume = (Vol.value) / 100;
    if(track.volume === 0){
        Vol_No.classList.remove("fa-volume-down");
        Vol_No.classList.add("fa-volume-mute");
    }else{
        Vol_No.classList.remove("fa-volume-mute");
        Vol_No.classList.add("fa-volume-down");
    }
}
function muted() {
    let mut= document.getElementById('muted');

    if(track.muted){
        track.muted = false;
        mut.classList.remove("fa-volume-mute");
        mut.classList.add("fa-volume-up");
    }else{
        track.muted = true;
        mut.classList.remove("fa-volume-up");
        mut.classList.add("fa-volume-mute");
    }
}
function loop() {
    let Loop= document.getElementById('loop');

    if(track.loop){
        track.loop = false;
        Loop.style.border='';

    }else{
        track.loop= true;
       Loop.style.border='2px dashed black';
    }
}

load_track(track_index);



for (let i = 0; i < list_music.length; i++) {
    let music = document.getElementsByClassName('musices')[0];

    let div = document.createElement('div');
    let Img  = document.createElement('img');
    let  text  = document.createElement('span');
    text.innerHTML=list_music[i].name +" / " +list_music[i].artist ;
    text.className="Music_text";
    div.className='Music';
    Img.src=list_music[i].img;
    Img.style.width="100%";
    Img.style.height="100%";
    Img.style.borderRadius="42px";
    Img.className='fil';
    div.appendChild(Img);
    div.appendChild(text);
    music.appendChild(div);
    div.addEventListener('click',function () {
        track_index=i;
        load_track(i);
       track_play();
       console.log(track_index);

    });
    
    
    
}
// window.onload=function(){
//     for (let i = 0; i < 6; i++) {
//         let slider = document.querySelectorAll('.slider div a img');
//         for (let Q = 0; Q < slider.length; Q++) {
//             slider[Q].src = list_music[i].img;
            
//         }
//         // list_music[i];
        
//     }

// }
    // track.play();