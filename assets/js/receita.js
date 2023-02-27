var DrodownButton = function(){
  
  const massa = document.getElementById('massa');
  const recheio = document.getElementById('recheio');
  const preparo = document.getElementById('preparo');
  const montagem = document.getElementById('montagem');
 massa.addEventListener('click', (e) =>{
           console.log('clicked ms');
 });
 recheio.addEventListener('click', (e) =>{
    console.log('clicked rc');
});
preparo.addEventListener('click', (e) =>{
    console.log('clicked prp');
});
montagem.addEventListener('click', (e) =>{
    console.log('clicked mtng');
});

}
DrodownButton();
