const submit = document.querySelector('form > input')
const inputEmail = document.querySelector('form > div:nth-child(2) input')
const inputPassword = document.querySelector('form > div:nth-child(3) input')

function checkEmpty(elem, message){
    if(elem.value == ""){
        elem.nextElementSibling.innerText = message
        inValidInput(elem)
        return false
    }
    else{
        elem.nextElementSibling.innerText = ""
        validInput(elem)
        return true
    }
}
function validInput(elem){
    elem.classList.remove('nonValid')
    elem.classList.add('valid')
}
function inValidInput(elem){
    elem.classList.remove('valid')
    elem.classList.add('nonValid')
}

submit.addEventListener('click', function(e){
    checkEmpty(inputPassword, '* You need to fill in your password')
    checkEmpty(inputEmail, '* You need to fill in your email')
    if(!checkEmpty(inputEmail, '* You need to fill in your email') || !checkEmpty(inputPassword, '* You need to fill in your password')){
        e.preventDefault()
    }


})