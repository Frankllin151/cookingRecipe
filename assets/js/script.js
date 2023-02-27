const smbtn = document.getElementById('question1');
const btnQuestion2 = document.getElementById('question2');
const bnQuestion3 = document.getElementById('question3');
const btnQuestion4 = document.getElementById('question4');
const btnquestun5 = document.getElementById('question5');
console.log(smbtn);
smbtn.addEventListener('click', (e) => {
    
    document.querySelector('.text-infomation').classList.toggle('text-info-flex');
});
btnQuestion2.addEventListener('click', () =>{
    document.querySelector('.qu3stion').classList.toggle('text-info-flex');
});
bnQuestion3.addEventListener('click', () =>{
    
    document.querySelector('.qu4stion').classList.toggle('text-info-flex');
})
btnQuestion4.addEventListener('click', ( ) =>{
       document.querySelector('.qu5stion').classList.toggle('text-info-flex');
});

btnquestun5.addEventListener('click', ( ) =>{
 document.querySelector('.tchu-tcha').classList.toggle('text-info-flex');
});
