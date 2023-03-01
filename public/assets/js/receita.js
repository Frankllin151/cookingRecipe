576 
819

function LayoutReponsive(){
    var  viewportLayout = window.innerWidth; 
    if(viewportLayout < 960){
       
         document.querySelector('.align-items-start').classList.add('jus-donfig-caixa')
    } else{
      
        document.querySelector('.align-items-start').classList.remove('jus-donfig-caixa');
    }
}
 window.onload = LayoutReponsive; 

 window.addEventListener('resize' , LayoutReponsive);