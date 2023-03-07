<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/explorar.css">
    <title>Milhares de Receitas de culinaria</title>
</head>
<body>

  @if (!isset($name) || empty($name) &&  !isset($id) || empty($id))
  @include('component.header' , ['name' => "Usuario"]);       
  @else
  @include('component.header' , ['name' => $name]);    

  @endif
 
  
   
    <section>
        <div class="slider-img">
            <div class="slide" style="background-image: url(assets/image/slider/sl1.png);">
                
            </div>
            <div class="slide" style="background-image: url(assets/image/slider/sl2.png);">
               
            </div>
            <div class="slide" style="background-image: url(assets/image/slider/sl3.png);">
               
            </div>
        </div>
    </section>
<section class="pattenr-estrctu">
   <div class="cenrg">
    <div class="title-seel-all" style="display: flex; justify-content: space-between;">
      <h2>melhores Receitas</h2>
     <button class="ver-all"> <a   href="#">Ver todos</a></button>
    </div>
   
    <div class="all-card">
       <div class="cards">
           <div class="card-item card-current">
            <div class="card" style="width: 12rem;">
              <img src="assets/image/itemrecipe/Cheesecake.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Ver Receita</a>
              </div>
            </div>
           </div>
           <div class="card-item ">
            <div class="card" style="width: 12rem;">
              <img src="assets/image/itemrecipe/paofrances.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Ver Receita</a>
              </div>
            </div>
           </div>
           <div class="card-item ">
            <div class="card" style="width: 12rem;">
              <img src="assets/image/itemrecipe/sushi.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Ver Receita</a>
              </div>
            </div>
           </div>
           <div class="card-item ">
            <div class="card" style="width: 12rem;">
              <img src="assets/image/itemrecipe/tacossuculentos.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Ver Receita</a>
              </div>
            </div>
           </div>
      </div>
    </div>
    
  
   </div>
   <div class="cenrg buttons">
    <button class="arrow-left controls" aria-label="Previous Image">
      <
              </button>
              <button class="arrow-rigth controls" aria-label="Next Image">
                >
                        </button>
   </div>
</section>
<footer>
  <div class="container">
            <!------- <div class="jiso-ojs">choose language</div>-->
  </div>
          <div class="m-pl-sj">
            <div class="container fn-fot-e">
              <div class="svae-lle">
                <div class="ceter-psoi">
                  <div class="title">Nossa Rede sociais:</div>
                  <div class="icones-pg">
                     <a href="">Instagram</a>
                  </div>
                  <div class="icones-pg">
                   <a href=""> Tiktok</a>
                 </div>
                </div>
                <div class="ceter-psoi">
                  <h2>Bakery Recipe</h2>
                </div>
              </div>
       </div>
          </div>
</footer>

    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/jquery-3.6.3.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/bootstrap.bundle.min.js"></script>
    
</body>

<script src="assets/js/explorar.js"></script>
</html>