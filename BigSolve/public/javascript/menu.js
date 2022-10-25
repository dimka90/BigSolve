const menubtn=document.querySelector(".menu");
const navbar=document.querySelector(".links");
const list=document.querySelector(".lists");

list.addEventListener("click",()=>{
    navbar.setAttribute("data-visible",false);

});




menubtn.addEventListener("click",()=>{

const visibility=navbar.getAttribute("data-visible");

if (visibility==="false"){
    const image = document.getElementById("image");
    navbar.setAttribute("data-visible",true);
    image.setAttribute('src','image/closemenu.jpg');
 
}
else if(visibility==="true"){
    navbar.setAttribute("data-visible",false);
    image.setAttribute('src','image/menu.png');
  
}
});