// use timeout to wait for wordpress to print page
setTimeout(() => {
    document.querySelector('body').style.overflowY ='hidden';
    //Only show opening screen once
    const welcome = document.querySelector('#welcome');
    const home = document.querySelector('#home');
    if(sessionStorage.visited == 1){
        welcome.style.display = 'none';
        home.classList.add('show');
        document.querySelector('body').style.overflowY ='visible';
    } else{
        // wait for welcome animation to end
        setTimeout(() => {
            home.classList.add('show');
            document.querySelector('body').style.overflowY ='visible';
        },5500);
    }
}, 100);
