import './styles/app.scss';
import './imgs/logo.svg';
import './imgs/arrow.svg';
import './imgs/drum-outline.svg';
import './imgs/drum.svg';
import './imgs/drummer.svg';
import './imgs/facebook.svg';
import './imgs/insta.svg';
import './imgs/mail.svg';
import './imgs/play.svg';
import './imgs/pause.svg';
import './imgs/pre.svg';
import './imgs/next.svg';

// use timeout to wait for wordpress to print page
setTimeout(() =>{
    // Enable Nav
    const slidebar = document.querySelector('#secondary');
    const menuBtn = document.querySelector('.menu_wrap');
    const closeBtn = document.querySelector('#close-btn');
    menuBtn.addEventListener('click', () => slidebar.classList.add('show'));
    closeBtn.addEventListener('click', () => slidebar.classList.remove('show'));

    // show privacy pop up once per user
    const popUp = document.querySelector('#privacy-notice');
    const ppBtn = document.querySelector('#pp-btn');
    ppBtn.addEventListener('click', () => {
        localStorage.visited = 1;
        sessionStorage.visited = 1;
        popUp.style.display = 'none';
    });
    // first check if broswer supports storage
    if (typeof(Storage) !== 'undefined'){
        if(localStorage.visited == 1){
            popUp.style.display = 'none';
        }
    }
}, 150);