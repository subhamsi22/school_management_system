var mainc2 = document.querySelector(".main_c2");
var ball  = document.querySelector(".ball");
var deletbut = document.querySelector(".deletbut");
var op = document.getElementById("op");

ball.addEventListener("click",()=>{
   
    if(ball.style.transform == "translateX(30px)"){
        ball.style.transform = "translateX(0px)";
        mainc2.style.display = "none";
        deletbut.style.display = "block";
        op.style.display = "block";
    }
    else{

         ball.style.transform = "translateX(30px)";
    mainc2.style.display = "flex";
deletbut.style.display = "none";
op.style.display = "none";
    }
})

var upp = typeof phpdata !=='undefined' ? phpdata : [];

var dataaa = document.querySelector(".dataaa");
 let total = upp *2;
    let t = 100-total;
     // dataaa.style.height = `${t}%`;
    gsap.to(dataaa,{
        height: `${t}%`,
        duration:1.5,
        ease:"power2.out"})
var dataaaa = document.querySelector(".dataaaa");
var upp2 = typeof ph2 !=='undefined' ? ph2 : [];
 let total2 = upp2 *2;
    let t2 = 100-total2;
    gsap.to(dataaaa,{
        height: `${t2}%`,
        duration:1.5,
        ease:"power2.out"})
var main_content = document.querySelector(".main-content");
var main_content2 = document.querySelector(".main_content2");
var mainforexam = document.querySelector(".mainforexam");
        var u = document.getElementById("u");
        var d = document.getElementById("d");
        var e = document.getElementById("e");
       var r = document.getElementById("r");
       var s = document.getElementById("s");
       var l = document.getElementById("l");
       
       
        d.addEventListener("click",()=>{
            d.style.fontSize = "20px";
            u.style.fontSize = "17px";
            e.style.fontSize = "17px";
            r.style.fontSize = "17px";
            s.style.fontSize = "17px";
            l.style.fontSize = "17px";
main_content.style.display = "block";
            main_content2.style.display = "none";
            mainforexam.style.display = "none";
        })

 u.addEventListener("click",()=>{
            d.style.fontSize = "17px";
            u.style.fontSize = "20px";
            e.style.fontSize = "17px";
            r.style.fontSize = "17px";
            s.style.fontSize = "17px";
            l.style.fontSize = "17px";
            main_content.style.display = "none";
            main_content2.style.display = "block";
                mainforexam.style.display = "none";

        })
    e.addEventListener("click",()=>{
            d.style.fontSize = "17px";
            u.style.fontSize = "17px";
            e.style.fontSize = "20px";
            r.style.fontSize = "17px";
            s.style.fontSize = "17px";
            l.style.fontSize = "17px";

                    main_content.style.display = "none";
            main_content2.style.display = "none";
            mainforexam.style.display = "block";

    })
    r.addEventListener("click",()=>{
            d.style.fontSize = "17px";
            u.style.fontSize = "17px";
            e.style.fontSize = "17px";
            r.style.fontSize = "20px";
            s.style.fontSize = "17px";
        l.style.fontSize = "17px";
                    main_content.style.display = "none";
            main_content2.style.display = "none";   
                mainforexam.style.display = "none";
    })
    s.addEventListener("click",()=>{
            d.style.fontSize = "17px";
            u.style.fontSize = "17px";
            e.style.fontSize = "17px";
            r.style.fontSize = "17px";
            s.style.fontSize = "20px";
        l.style.fontSize = "17px";
                    main_content.style.display = "none";
            main_content2.style.display = "none";   
                mainforexam.style.display = "none";
    }   
    )
    l.addEventListener("click",()=>{
            d.style.fontSize = "17px";
            u.style.fontSize = "17px";      
            e.style.fontSize = "17px";
            r.style.fontSize = "17px";
            s.style.fontSize = "17px";
            l.style.fontSize = "20px";
                    main_content.style.display = "none";
            main_content2.style.display = "none";   
                mainforexam.style.display = "none";
    }
    )
    



    var jst = document.getElementById("jst");
var hg = document.querySelector(".hg");
hg.addEventListener("click",()=>{

if(jst.style.display == "block"){
    gsap.to(jst,{
        x:0,
        duration:1,
        ease:"power2.out",});
    jst.style.display = "none";
    hg.style.backgroundColor = "#fff";
    return;
}
else{


    gsap.to(jst,{
        x:40,
        duration:1,
        ease:"power2.out"
    });
    jst.style.display = "block";
    // jst.style.marginLeft = "30px";
    hg.style.backgroundColor = "lightblue";
    jst2.style.display = "none";
        hg2.style.backgroundColor = "#fff";


}
});


var hg2 = document.querySelector(".hg2");
var jst2 = document.getElementById("jst2");
hg2.addEventListener("click",()=>{  
if(jst2.style.display == "block"){
    gsap.to(jst2,{
        x:0,
        duration:1,
        ease:"power2.out",});
    jst2.style.display = "none";
        
    hg2.style.backgroundColor = "#fff";
    return;
}
else{
    gsap.to(jst2,{
        x:40,
        duration:1,
        ease:"power2.out"
    });
    jst2.style.display = "block";
    jst.style.display = "none";
    // jst2.style.marginLeft = "30px";
        hg.style.backgroundColor = "#fff";

    hg2.style.backgroundColor = "lightblue";
}
});

var  delet = document.getElementById("delet");
delet.addEventListener("click",()=>{
    if(confirm("are you sure you want to delete all student data?")){
        window.location.href = "delete.php";

        return true;
    }      
    else{
        return false;
    }
});


var tech = document.querySelector(".tech");
tech.addEventListener("click",()=>{
    if(confirm("are you sure you want to delete this teacher data?")){
        
        
        
        window.location.href = "deletetech.php";
        
        
        return true;    

    }
    else{
        return false;
    }   
})