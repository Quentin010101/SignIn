const backg = document.querySelector('.backgroundHeader')
const link = document.querySelectorAll('header ul li')
let speed = 500
let intervale1

function createBubulle(){

    let bubulle = document.createElement('div')
    bubulle.classList.add('bubulle')

    let widthHeight = Math.floor(Math.random()*100 + 50)
    let numberLeft = Math.floor(Math.random()*90)
    let numberColor = Math.floor(Math.random()*360)

    bubulle.style.cssText += "left: " + numberLeft + "%; height:" + widthHeight + "px; width: " + widthHeight + "px; background-image: radial-gradient(farthest-corner at " + widthHeight/3 + "px " + widthHeight/3 + "px, hsl(" + numberColor + ", 40%, 95%) 0%, hsl(" + numberColor + ", 40%, 50%) 100%);"
    setTimeout(()=>{
        bubulle.style.cssText += "transform: translateY(900px); transition: transform 20s;"
    },100)
    backg.appendChild(bubulle)
    setTimeout(() => {
        bubulle.remove()
    }, 10000);
}

setInterval(() => {
    createBubulle()
}, 200);

function createA(element){
    let bulle = document.createElement('div')
    bulle.classList.add('bulle')

    let numberLeft = Math.floor(Math.random()*30 + 35)
    let numberColor = Math.floor(Math.random()*360)

    bulle.style.cssText += "opacity: 1; left: " + numberLeft + "%; background-image: radial-gradient(farthest-corner at 5px 10px, hsl(" + numberColor + ", 100%, 50%) 0%, hsl(" + numberColor + ", 100%, 30%) 100%);"
    element.appendChild(bulle)
    setTimeout(()=>{
         let numberX = Math.floor(Math.random()*150 - 75)
         bulle.style.cssText += "opacity: 0; transform: translateY(-100px) translateX(" + numberX + "px); transition: all 2s;"
    },100)
    setTimeout(() => {
        bulle.remove()
    }, 1000);
}
link.forEach(element => {
    element.addEventListener('mouseover', function(){
        intervale1 = setInterval(()=>{
            createA(element)
        }, 200)
    })
});
link.forEach(element => {
element.addEventListener('mouseout', function(){
    clearInterval(intervale1)
})
});