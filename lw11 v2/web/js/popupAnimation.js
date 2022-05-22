let popupBg = document.querySelector('.popup__bg'); 
let popup = document.querySelector('.popup'); 
let openPopup = document.querySelectorAll('.signUp'); // общий класс для кнопок
let closePopupButton = document.querySelector('.close-popup');  

openPopup.forEach((button) => {    
    button.addEventListener('click', () => {
        popup.classList.add('active');
        popupBg.classList.add('active');
    })
});

closePopupButton.addEventListener('click', () => {
    removePopUp();
});

document.addEventListener('click', (e) => {
    if (e.target == popupBg) {
        removePopUp();
    } 
});

document.addEventListener('keydown', (e) => {
    if (e.key == 'Escape') {
        removePopUp();
    }   
});
// вынести в функцию две строчки
function removePopUp() {
    popup.classList.remove('active');
    popupBg.classList.remove('active');
}