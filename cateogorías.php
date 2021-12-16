<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>MiSalud</title>   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" /> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet">

    
        
    </head>
    <body>
      <?php include("layouts/header.php"); ?>
      <br>
      <br>
      <br>
        <div class="d-flex">        
            <div class="mx-5 container" style="">
                    <div style="background-color: white;width: 22vw;" class="">
                        <nav class="d-flex text-center" style=""> 
                            <div style="background-color: #C4C4C4" value="1" id="idCategories" onclick='categorieFilter("idCategories")'>
                                <a href="#" style="text-decoration: none;font-family: 'Roboto Condensed', serif;font-size: 1.5rem;color:#646262
                                ;
                                font-size: 1.6vw;" id="idCategories2">Categorías</a>
                            </div>                        
                            <div value="2" id="idFilters" onclick='categorieFilter("idFilters")'>
                                <a href="#" style="text-decoration: none;font-family: 'Roboto Condensed', serif;font-size: 1.5rem;color:black;
                                font-size: 1.6vw;" id="idFilters2">Filtros</a>
                            </div>
                        </nav>
                            <div class="container d-inline-flex align-items-center">  
                                <hr width="2" size="70" style="background-color: red;opacity: 1;margin-right: 7%;" id="hr1">             
                                <h2 style="font-size: 2.1vw;" id="titulo">Cuidado personal</h2>                            
                            </div>
                            <hr size="4" style="background-color: #C4C4C4;opacity: 1;margin-left: auto;margin-right: auto;
                            margin-top: 0px;width:17vw"> 
                        
                        <div class="">
                            <div id="space-list">
                                <div class="categories">
                                    <ul class="" id="list-categories" style="margin-right: 2rem;">
                                        <li style="margin-bottom: 1rem;">
                                            <div>
                                                <a href="#" style="font-size: 1.6vw;color:#4E4646">Cuidado para la piel</a>
                                            </div>
                                        </li>
                                        <li style="margin-bottom: 1rem;">
                                            <div>
                                                <a href="#" style="font-size: 1.6vw;color:#4E4646">Cuidado para el cabello</a>
                                            </div>
                                        </li>
                                        <li style="margin-bottom: 1rem;">
                                            <div>
                                                <a href="#" style="font-size: 1.6vw;color:#4E4646">Cuidado bucal</a>
                                            </div>
                                        </li>
                                        <li style="margin-bottom: 1rem;">
                                            <div>
                                                <a href="#" style="font-size: 1.6vw;color:#4E4646">Cuidado íntimo</a>
                                            </div>
                                        </li>
                                        <li style="margin-bottom: 1rem;">
                                            <div>
                                                <a href="#" style="font-size: 1.6vw;color:#4E4646">Desodorantes</a>
                                            </div>
                                        </li>     
                                        <li style="margin-bottom: 1rem;">
                                            <div>
                                                <a href="#" style="font-size: 1.6vw;color:#4E4646">Afeitado</a>
                                            </div>
                                        </li>   
                                        <br>                                                                                                    
                                    </ul>

                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>

            </div>
            <div class="d-block productos">
                <div class="search-filter d-flex w-100" style="margin-left: 40%;margin-right: 20%;margin-bottom: 4%;">
                    <h6 class="w-25" style="padding-left:10%">Ordenar por: </h6>
                    <select class="form-select w-25" style="margin-left: 0px;">
                        <option selected>Selecciona una opción</option>
                        <option value="1">Nombre A-Z</option>
                        <option value="2">Nombre Z-A</option>
                        <option value="3">Destacados</option>
                        <option value="4">Menor a mayor precio</option>
                        <option value="5">Mayor a menor precio</option>
                        <option value="6">Nuevo</option>
                    </select>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-right: 9%;margin-left: 10%">
                    <div class="col">
                      <div class="card h-100">
                        <img src="img/dove.png" style="height:11.3vw" class="card-img-top" alt="...">
                        <div class="card-body">        
                                         
                          <h5 class="card-title" style="font-size: 1.2vw;">Frasco 400ml</h5>
                          
                          <p class="card-text">Shampoo Dove nutritive Solutions reconstruction...</p>
                          <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                          border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                          <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                          <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 16.50</h5>
                          <h5 class="card-title" style="font-size: 1.3vw;">S/ 16.50</h5>
                        </div>
                        
                      </div>
                                            
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="img/shampoo.jpg" style="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 500ml</h5>
                            <p class="card-text">Shampoo Body Spa Lúcuma reconstruction...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 18.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 15.50</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="img/hys.jpg" style="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 400ml</h5>
                            <p class="card-text">Shampoo Head and Shoulders anticaspa...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 20.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 16.50</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="img/shampoo-sedal.jpg" style="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 300ml</h5>
                            <p class="card-text">Shampoo sedal floreal pink reconstruction...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 25.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 20.50</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                          <img src="img/vitane.png" style="" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 800ml</h5>
                            <p class="card-text">Shampoo Vitane Recalmer sin sal...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 18.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 12.50</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="img/jonson.jpg" style="" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 500ml</h5>
                            <p class="card-text">Shampoo Jhonson & Baby nutritive manzanilla...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 17.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 15.50</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="img/ammens.jpg" style="" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 400ml</h5>
                            <p class="card-text">Shampoo Ammens para bebés olor manzana...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 16.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 16.50</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="img/savital.jpg" style="" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 600ml</h5>
                            <p class="card-text">Shampoo Savital tamaño familiar...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 30.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 20.50</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <img src="img/crew.jpg" style="" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.2vw;">Frasco 900ml</h5>
                            <p class="card-text">Shampoo Crew recontrucción capilar new...</p>
                            <button type="button" class="btn btn-primary btn-lg btn-agregar" style="font-size: 1.3vw;background-color: #57C988;
                            border: none;border-radius: 20px;">Agregar al carrito <i class="fas fa-shopping-cart"></i></button>
                            <button type="button" class="btn btn-link btn-ver" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:#658DEF;font-size:1.3vw;font-weight: 500;">Ver más detalles</button>
                            <h5 class="card-title" style="text-decoration:line-through;font-size: 1vw;">S/ 15.50</h5>
                            <h5 class="card-title" style="font-size: 1.3vw;">S/ 10.50</h5>
                          </div>
                        </div>
                      </div>                      
                </div>
            </div>         
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex container">
                <img src="img/image 45.png" class="container img-fluid" style="height: 35vw;width:20vw" alt="">
                <div class="d-block">
                    <h5 class="container">Frasco 900ml</h5>
                    <h2 class="container">Crema hidratante La Roche-Posay</h2>
                    <h5 class="container" style="text-decoration:line-through;font-size: 1vw;">S/ 16.50</h5>
                    <h5 class="container" style="font-size: 1.3vw;">S/ 16.50</h5>
                    <h4 class="container">Descripción</h4>
                    <p class="container">
                        Disfruta de todo Nivea, especializados en belleza, seguridad, limpieza, 
                        protección facial y corporal para mujeres y hombres. Con más de 100 años de experiencia, 
                        los productos Nivea fueron desarrollados por expertos para brindarte calidad, seguridad, 
                        confianza y el cuidado que necesitas para tu piel.
                    </p>
                    <ul>
                        <li>Hidratación y cuidado de la piel</li>
                        <li>Elimina las estrías del embarazo</li>
                        <li>Lata de 60 ml</li>
                        <li>NSOC01224-04EC</li>
                    </ul>
                    <div class="row g-3 align-items-center" style="margin-left: 30%">
                        <div class="col-auto">
                            <button type="button" class="btn btn-default btn-circle" style="border-color:black;border-radius: 25px;">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <div class="col-sm-2">
                          <input type="number" id="" class="form-control">
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-default btn-circle" style="border-color:black;border-radius: 25px;">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>    
                    <button type="button" class="btn btn-primary btn-lg btn-agregar justify-content-center" style="font-size: 1.3vw;background-color: #57C988;
                    border: none;border-radius: 20px;margin-top: 1vw;margin-left: 30%;"><i class="fas fa-shopping-cart"></i> Agregar al carrito</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        <br>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true" style="background-color: transparent;">
                    <i class="fas fa-angle-left"></i></a>
              </li>
              <li class="page-item"><a class="page-link a1" href="#" style="border-radius: 10px;margin-right: 1vw;color:black">1</a></li>
              <li class="page-item"><a class="page-link a2" href="#" style="border-radius: 10px;margin-right: 1vw;color:black">2</a></li>
              <li class="page-item"><a class="page-link a3" href="#" style="border-radius: 10px;margin-right: 1vw;color:black">3</a></li>
              <li class="page-item"><a class="page-link" href="#" style="border-radius: 10px;margin-right: 1vw;color:black">4</a></li>
              <li class="page-item"><a class="page-link" href="#" style="border-radius: 10px;color:black">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" style="background-color: transparent;color:#837C7C"><i class="fas fa-angle-right"></i></a>
              </li>
            </ul>
          </nav>

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="js/scripts.js"></script>
        <br>
        <br>
    </body>
    <?php include("layouts/footer.php"); ?>
    