let popupBg = document.querySelector('.popup__bg'); //by id 
let popup = document.querySelector('.popup'); //by id 
let openPopupShortButton = document.querySelectorAll('.button__short'); // общий класс для кнопок
let openPopupLongButton = document.querySelectorAll('.button__long');
let closePopupButton = document.querySelector('.close-popup'); //by id 

openPopupShortButton.forEach((button) => {       // когда один класс - тогда цикл
    button.addEventListener('click', () => {
        popup.classList.add('active');
        popupBg.classList.add('active');
    })
});

openPopupLongButton.forEach((button) => {
    button.addEventListener('click', () => {
        popupBg.classList.add('active');
        popup.classList.add('active');
    })
});

closePopupButton.addEventListener('click', () => {
    popupBg.classList.remove('active');
    popup.classList.remove('active');
});

document.addEventListener('click', (e) => {
    if (e.target == popupBg) {
        popup.classList.remove('active');
        popupBg.classList.remove('active');
    } 
});

document.addEventListener('keydown', (e) => {
    if (e.key == 'Escape') {
        popup.classList.remove('active');
        popupBg.classList.remove('active');
    }   
});
// вынести в функцию две строчки