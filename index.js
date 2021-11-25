/* this is edited by midnal sharma in server-side-work */
const passwordInput = document.querySelectorAll("input[type='password']");
const eyeIcon = document.querySelectorAll('.visibility')
console.log(eyeIcon.length);

for(let i= 0; i< passwordInput.length; i++){
    eyeIcon[i].addEventListener('click', ()=>{
        const content = eyeIcon[i].textContent
        const check = content.trim() === 'visibility_off';
        eyeIcon[i].textContent =  check ? 'visibility' : 'visibility_off'
        check ? passwordInput[i].setAttribute('type', 'text') : passwordInput[i].setAttribute('type', 'password');
    })
}

