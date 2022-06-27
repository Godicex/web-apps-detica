const enterbutton = document.querySelector('.button_enter');
const registerbutton = document.querySelector('.button_Register');
const container = document.querySelector('.container');
const enterregisterbutton = document.querySelector('.button_enter_register');

console.log(enterbutton)

enterbutton.addEventListener("click", () => {container.classList.add("active");});

registerbutton.addEventListener("click", () => {container.classList.add("active");});

 enterregisterbutton.addEventListener("click", () => {container.classList.remove("next_page");});
