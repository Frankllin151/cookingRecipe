<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/searchresult.css">
    <title>Catálago</title>
</head>
<body>
    @if (!isset($name) || empty($name) &&  !isset($id) || empty($id))
  @include('component.header' , ['name' => "Usuario"]);       
  @else
  @include('component.header' , ['name' => $name]);    

  @endif
    <section class="pattern-ctlgo">
             <div class="pagn-cl row ">
                <div class="browser-serach row " >
                    <div class="patterns-browser">
                        <div class="header-browser"><h4>Categorias</h4></div>
                    
                       
 <form action="" class="search-now">
    <input type="search" name="" id="" placeholder="pesquisar">
    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M14.5776 14.5419C15.5805 13.53 16.2 12.1373 16.2 10.6C16.2 7.50721 13.6928 5 10.6 5C7.50721 5 5 7.50721 5 10.6C5 13.6928 7.50721 16.2 10.6 16.2C12.1555 16.2 13.5628 15.5658 14.5776 14.5419ZM14.5776 14.5419L19 19" stroke="#464455" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
 </form>

                     <ul class="ul-list">
                        <li><a href="">Japones</a></li>
                        <li><a href="">Japones</a></li>
                        <li><a href="">conteporaneo</a></li>
                        <li><a href="">Japones</a></li>
                        <li><a href="">Japones</a></li>
                        <li><a href="">Japones</a></li>
                        <li><a href="">Japones</a></li>
                        <li><a href="">Japones</a></li>
                        <li><a href="">Brasileiro</a></li>
                     </ul>
                    </div>
                    
                      
                </div>
                <div class="recipe-search col">
                    <p class="result-search" >search</p>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><button class="text-muted"><a href="">Ver Receita</a></button></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
             </div>
    </section>
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/jquery-3.6.3.js"></script>
    <script type="text/javascript" src="assets/css/bootstrap-5.3.0/bootstrap.bundle.min.js"></script>
    <script src="assets/js/searchresult.js"></script>
</body>
<script src=""></script>
</html>