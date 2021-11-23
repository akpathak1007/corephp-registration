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
// eyeIcon[0].addEventListener('click', ()=>{
//     const content = eyeIcon[0].textContent
//     const check = content.trim() === 'visibility_off';
//     eyeIcon[0].textContent =  check ? 'visibility' : 'visibility_off'
//     check ? passwordInput[0].setAttribute('type', 'text') : passwordInput[0].setAttribute('type', 'password');
// })
// eyeIcon[1].addEventListener('click', ()=>{
//     const content = eyeIcon[1].textContent
//     const check = content.trim() === 'visibility_off';
//     eyeIcon[1].textContent =  check ? 'visibility' : 'visibility_off'
//     check ? passwordInput[1].setAttribute('type', 'text') : passwordInput[1].setAttribute('type', 'password');
// })
