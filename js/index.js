var boton = document.querySelector("#boton");
var menu = document.querySelector("#menu");
var menuStyle = document.querySelector("#menuStyle")
var menuImg = document.querySelector("#rotate")

boton.addEventListener("click", deploy);
function deploy(){
    menu.classList.toggle("active")
    menuStyle.classList.toggle("active_style")
    menuImg.classList.toggle("transform_rotate")
    

};

window.addEventListener("scroll", menuDelete);
function menuDelete(){
    if(window.pageYOffset>0){
        menu.classList.remove("active")
    }
};
