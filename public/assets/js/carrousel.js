const control = document.querySelectorAll('.control');

let currentItem = 0;

const items = document.querySelectorAll('.item'); 

const maxItem = items.length;

control.forEach(control => {
    control.addEventListener('click', (e) =>{
        const isLeft  = control.classList.contains('arrow-left');
        
        if(isLeft){
                    currentItem -= 1;
        } else{
            currentItem += 1;
        }
        if(currentItem >= maxItem ){
          currentItem = 0;
        } 
        if(currentItem < 0){
                  currentItem = maxItem  - 1;
        }
         
        items.forEach(item => item.classList.remove("current-item")
       
               
        );
        items[currentItem].scrollIntoView({
            inline:"center", 
            behavior: 'smooth', 
          
             
        });          
      
         items[currentItem].classList.add('current-item');
    });
});