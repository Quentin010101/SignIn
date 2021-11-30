const inputName = document.querySelector('form > div:nth-child(2) input')
const inputSurName = document.querySelector('form > div:nth-child(3) input')
const inputEmail = document.querySelector('form > div:nth-child(4) input')
const inputEmailConfirm = document.querySelector('form > div:nth-child(5) input')
const inputPassword = document.querySelector('form > div:nth-child(6) input')
const inputPasswordConfirm = document.querySelector('form > div:nth-child(7) input')
const form = document.querySelector('form > input')
let result = true
let verification = true
let arr = [[inputName, "* U need to fill in your Name"], [inputSurName, "* U need to fill in your Surname"], [inputEmail, "* U need to fill in your email"], [inputEmailConfirm, "* U need to fill in your email"], [inputPassword, "* U need to fill in your password"], [inputPasswordConfirm, "* U need to fill in your password"]]

form.addEventListener('click', function (e) {
    checkEmptyAll()
    if (checkEmptyAll()) {
        inputMatch(inputEmail, inputEmailConfirm, "* Your email does not match")
        inputMatch(inputPassword, inputPasswordConfirm, "* Your password does not match")
        if(inputMatch(inputEmail, inputEmailConfirm, "* Your email does not match") && inputMatch(inputPassword, inputPasswordConfirm, "* Your password does not match"))
        {
            verification = true
        }
        else{
            verification = false
        }
    }else{
        verification = false
    }
    if(!verification){
        e.preventDefault()
    }
})

function checkEmptyAll() {
    for (let i = 0; i < arr.length; i++) {
        if (checkEmpty(arr[i][0], arr[i][1])) {
            validElement(arr[i][0])
            result = true
        }
        else {
            inValidElement(arr[i][0])
            result = false
        }

    }
    return result
}
function validElement(elem) {
    elem.classList.add('valid')
    elem.classList.remove('nonValid')
}
function inValidElement(elem) {
    elem.classList.remove('valid')
    elem.classList.add('nonValid')
}
function checkEmpty(elem, message) {
    if (elem.value === "") {
        elem.nextElementSibling.innerHTML = message
        return false
    }
    else {
        elem.nextElementSibling.innerHTML = ""
        return true
    }
}
function inputMatch(elem1, elem2, message) {
    let elementValue1 = elem1.value
    let elementValue2 = elem2.value

    if (elementValue1 === elementValue2) {
        elem1.nextElementSibling.innerHTML = ""
        validElement(elem1)
        validElement(elem2)
        return true
    }
    else {
        elem1.nextElementSibling.innerHTML = message
        inValidElement(elem1)
        inValidElement(elem2)
        return false
    }
}

