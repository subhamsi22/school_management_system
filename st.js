$(document).ready(function () {
    $(".text").click(function () {
          
        if($(".hh1").css("color")==="rgb(228, 32, 32)"){
        $(".hh1").css("color","blue");
        }
    else{
                $(".hh1").css("color","rgb(228, 32, 32)");
    }
    });
    });




    var slide =  document.querySelector(".slide");
    var boxess  =  document.querySelectorAll(".box");
    var boxes =  document.querySelectorAll(".boxes div");
let a = 0;
function move(a) {
        const b  =  a*95;

    slide.style.transform = `translateX(-${b}%)`;
    
}
    


boxes.forEach((boxk,i) => {
    boxk.addEventListener("click", () =>{
        a = i;
        move(a);
    })
    
});
move(a);

// setInterval(() => {
//     a++;
//     if(a >=  boxes.length){
// a = 0;

//     }
//     move(a);
// }, 2000);

var b2 =  document.querySelector(".b2");
var imgg  = document.querySelector("#img");
imgg.addEventListener("contextmenu",()=>{
    e.preventmeneu()
})

b2.addEventListener("click",()=>{
            imgg.style.opacity = "1";

imgg.style.transform= "rotate(40deg)";
setInterval(() => {
    imgg.style.opacity = "0.2";

}, 4000);
});


var b1 =document.querySelector(".b");
b1.addEventListener("click",()=>{
        imgg.style.opacity = "1";

    imgg.style.transform = "rotate(94deg)";
    setInterval(() => {
    imgg.style.opacity = "0.2";

}, 4000);
});

var b3 =document.querySelector(".b3");
b3.addEventListener("click",()=>{
            imgg.style.opacity = "1";

    imgg.style.transform = "rotate(350deg)";
    setInterval(() => {
    imgg.style.opacity = "0.2";

}, 4000);
});

// gsap animation
gsap.from(".box", {
  y: 100,
  opacity: 0,
  duration: 1,
  stagger:0.2,
  scrollTrigger: {
    trigger: ".banner2",
    start: "top 70%",
    // markers: true,
        // scrub:1,

  }
});


gsap.to("#newimg",{
    rotate : 360,
    yoyo:true,
    repeat:-1,
    duration:3
})
gsap.to(".img_class",{
    yoyo:true,
    rotate:360,
    duration:6,
    repeat:-1

})
gsap.from("#ho",{
    y:70,
    duration:7,
    
    opacity:0,
            stagger:0.2,
    scrollTrigger:{
        trigger:".banner3",
        // markers:true,
        start:"top 100%",
        
       
    }
})

// //   3rd anmtion 
// var secondnewbx =document.querySelector(".secondnewbx");
// function bigthe(params) {
//     secondnewbx.style.transform ="scale(1.1)";
// }
// setInterval(() => {
//     bigthe();
// }, 2000);


gsap.from(["#d3h1", "#d3h2", "#d3h3", "#d3h4"], {
    x:-100,
    opacity:0,
    duration:4,
    stagger:0.5,
    scrollTrigger:{
        trigger:".banner3",
        start:"top 80%",
        // markers:true,
        
    }
})
gsap.from("#b4h1", {
    y:100,
    opacity:0,
scrollTrigger:{
    trigger:".banner4",
    start:"top 80%",
    // markers:true,

}

})
gsap.from("#b4p1", {
    y:100,
    opacity:0,
    duration:2,
scrollTrigger:{
    trigger:".banner4",
    start:"top 80%",
    stagger:0.5,
    // markers:true, 
  }})
  gsap.from(".firstboxb4", {
    y:100,
    opacity:0,
    duration:4,
scrollTrigger:{
    trigger:"#b4p1",
    start:"top 80%",
    stagger:0.4,
    // markers:true,
}
})