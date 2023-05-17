let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let scroll = document.querySelector('.scroll-top');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
    scroll.classList.toggle('active');
};


// function sendEmail(){
//     sendEmail.send({
//         Host: "smtp.yourisp.com",
//         Username: "",
//         Password: "",
//         To : '',
//         From : "you@isp.com",
//         subject : "This is the subject",
//         Body : "And this is the body"
//     }).then(
//         message => alert(message)
//     );
// }