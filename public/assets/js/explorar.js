//carrousel-slider
var slideindex = 0;

function showSlides(){
    var i;
    var slides = document.getElementsByClassName('slide');
    for(i = 0 ; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    slideindex++; 

    if(slideindex > slides.length){
            slideindex = 1;
    }

    slides[slideindex - 1].style.display = "flex"; 
    setTimeout(showSlides, 10000);
}

showSlides();
///carrousell
const controls =  document.querySelectorAll('.controls');

let currentCard = 0;

const cardItem = document.querySelectorAll('.card-item');

const maxCardItem =  cardItem.length;


controls.forEach(control => {
      control.addEventListener('click', (e) =>{
        const cardleft = control.classList.contains('arrow-left');
       if(cardleft  ){
            currentCard -= 1;
       } else{
        currentCard += 1;
        }
        
        if(currentCard >= maxCardItem){
               currentCard = 0;
        } 
        if(currentCard < 0){
               currentCard = maxCardItem -  1;
        }
       cardItem.forEach(card =>  card.classList.remove('card-current')
       );
      
    
      cardItem[currentCard].classList.add('card-current');
      });
});


