// BTN
const hBtnBhp = document.querySelector ('.header-btn-bhp')
const hBtnMontage = document.querySelector ('.header-btn-montage')
const hBtnTools = document.querySelector ('.header-btn-tools')
const burgerIcon = document.querySelector('.burger-icon')
const menu = document.querySelector ('.menu')


// acordeon
const accBtnOne = document.querySelector ('.title-one')
const contntAccOne = document.querySelector ('.content-one')
const accBtnTwo = document.querySelector ('.title-two')
const contntAccTwo = document.querySelector ('.content-two')
const accBtnThree = document.querySelector ('.title-three')
const contntAccThree = document.querySelector ('.content-three')
const accBtnFor = document.querySelector ('.title-for')
const contntAccFor = document.querySelector ('.content-for')


// Slainder
const slaiderOne = document.querySelector('.slaider-one')
const slaiderTwo = document.querySelector('.slaider-two')
const slaiderThree = document.querySelector('.slaider-three')



// Functions

function showMenu (){
    // event.preventDefault();
    menu.classList.toggle('full-hight')
}

function showAccOne (){
    contntAccOne.classList.toggle('dispairing')
}
function showAccTwo (){
    contntAccTwo.classList.toggle('dispairing')
}
function showAccThree (){
    contntAccThree.classList.toggle('dispairing')
}
function showAccFor (){
    contntAccFor.classList.toggle('dispairing')
}

function ShowBhp (){
    event.preventDefault();
    slaiderOne.classList.remove('swap-dissapiring')
    slaiderTwo.classList.add('swap-dissapiring')
    slaiderThree.classList.add('swap-dissapiring')
}
function ShowMontage (){
    event.preventDefault();
    slaiderOne.classList.add('swap-dissapiring')
    slaiderTwo.classList.remove('swap-dissapiring')
    slaiderThree.classList.add('swap-dissapiring')
}
function ShowTools (){
    event.preventDefault();
    slaiderOne.classList.add('swap-dissapiring')
    slaiderTwo.classList.add('swap-dissapiring')
    slaiderThree.classList.remove('swap-dissapiring')
}



// Liseners

hBtnBhp.addEventListener('click', ShowBhp )
hBtnMontage.addEventListener('click', ShowMontage )
hBtnTools.addEventListener('click', ShowTools)
burgerIcon.addEventListener('click', showMenu )
accBtnOne.addEventListener('click', showAccOne)
accBtnTwo.addEventListener('click', showAccTwo)
accBtnThree.addEventListener('click', showAccThree)
accBtnFor.addEventListener('click', showAccFor)

