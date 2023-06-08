let imges =document.querySelector('.imagchange');
let container =document.querySelector('.container');
let About =document.querySelector('.About');
let product1 =document.querySelector('.product1');

function change(phone){
    imges.src = phone;
}
function colorr(color){
    container.style.background=color;
}
function colorrr(color){
    About.style.background=color;

    product1.style.background=color;

}
