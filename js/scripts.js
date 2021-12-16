function categorieFilter(id){
    let mb = document.getElementById(id).getAttribute('value');
    let html = '';
    if(mb=="2"){
        document.getElementById(id).style.backgroundColor="#C4C4C4";
        document.getElementById("idFilters2").style.color="#646262";
        document.getElementById("idCategories2").style.color="black";
        document.getElementById("idCategories").style.backgroundColor="#FFFF";
        document.getElementById("titulo").innerText="Filtrar por:";
        document.getElementById("hr1").style.backgroundColor="#043CAA";
        html='<div class="filters">'+
        '<ul style="list-style:none">'+
            '<li>'+
                '<div class="mx-0" style="font-size:2vw">Marca</div>'+
                '<div class="form-outline">'+
                    '<input type="text" id="form12" class="form-control w-75" placeholder="Buscar por marca" style="margin-top:5%;border-color:#658DEF"/>'+
                  '</div>'+
                  '<div class="overflow-auto" style="margin-top:5%;max-width: 20vw; max-height: 8vw;" id="lista-marcas">'+
                    '<div class="form-check">'+
                        '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border-color:#658DEF;>'+
                        '<label class="form-check-label" for="flexCheckDefault" style="color:#4E4646">'+
                          'Dove(40)'+
                        '</label>'+
                      '</div>'+
                      '<div class="form-check">'+
                        '<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="border-color:#658DEF;'+
                        '<label class="form-check-label" for="flexCheckChecked" style="color:#4E4646">'+
                          'Pantent(12)'+
                        '</label>'+
                      '</div>'+
                      '<div class="form-check">'+
                        '<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="border-color:#658DEF;>'+
                        '<label class="form-check-label" for="flexCheckChecked" style="color:#4E4646">'+
                          'Nosotras (15)'+
                        '</label>'+
                      '</div>'+
                      '<div class="form-check">'+
                        '<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="border-color:#658DEF;">'+
                        '<label class="form-check-label" for="flexCheckChecked" style="color:#4E4646">'+
                          'Nivea (20)'+
                        '</label>'+
                      '</div>'+
                  '</div>'+
                  '<div>'+
                      '<a href="#" id="verMarcas" value="1" onclick="verMarcas()">Ver todas las marcas (16)</a>'+
                  '</div>'+
            '</li>'+
            '<br>'+
            '<li>'+
                '<div class="" style="font-size:2vw">Precio (S/.)</div>'+
                '<br>'+
                '<div class="justify-content-center align-items-center">'+
                    '<div class="row form-group g-1">'+
                      '<div class="col-sm-4">'+
                        '<input type="text" id="typeText" class="form-control" placeholder="Desde" style="border-color:#658DEF">'+
                      '</div>'+
                      '<div class="col-sm-1">'+
                        '<hr class="">'+
                      '</div>'+
                      '<div class="col-sm-4">'+
                        '<input type="text" id="typeText" class="form-control" placeholder="Hasta" style="border-color:#658DEF">'+
                      '</div>'+
                      '<div class="col-md-2 align-items-center">'+
                        '<button type="button" class="btn btn-primary" style="font-size:0.5vw;background-color:#57C988;border:none;margin-top:20%"><i class="fas fa-search"></i></button>'+
                      '</div>'+
                    '</div>'+
                '</div>'+
            '</li>'+
        '</ul>'+
        '<br>'+
    '</div>';
    }else{
        document.getElementById(id).style.backgroundColor="#C4C4C4";
        document.getElementById("idFilters").style.backgroundColor="#FFFF";
        document.getElementById("idCategories2").style.color="#646262";
        document.getElementById("idFilters2").style.color="black";
        document.getElementById("titulo").innerText="Cuidado personal";
        document.getElementById("hr1").style.backgroundColor="red";
        html='<div class="categories">'+
        '<ul class="" style="list-style: none;margin-right: 2rem;">'+
            '<li style="margin-bottom: 1rem;">'+
                '<div>'+
                    '<a href="" style="font-size: 1.5vw;color:#4E4646;text-decoration: none;">Cuidado para la piel</a>'+
                '</div>'+
            '</li>'+
            '<li style="margin-bottom: 1rem;">'+
                '<div>'+
                    '<a href="" style="font-size: 1.5vw;color:#4E4646;text-decoration: none;">Cuidado para el cabello</a>'+
                '</div>'+
            '</li>'+
            '<li style="margin-bottom: 1rem;">'+
                '<div>'+
                    '<a href="" style="font-size: 1.5vw;color:#4E4646;text-decoration: none;">Cuidado bucal</a>'+
                '</div>'+
            '</li>'+
            '<li style="margin-bottom: 1rem;">'+
                '<div>'+
                    '<a href="" style="font-size: 1.5vw;color:#4E4646;text-decoration: none;">Cuidado íntimo</a>'+
                '</div>'+
            '</li>'+
            '<li style="margin-bottom: 1rem;">'+
                '<div>'+
                    '<a href="" style="font-size: 1.5vw;color:#4E4646;text-decoration: none;">Desodorantes</a>'+
                '</div>'+
            '</li>'+     
            '<li style="margin-bottom: 1rem;">'+
                '<div>'+
                    '<a href="" style="font-size: 1.5vw;color:#4E4646;text-decoration: none;">Afeitado</a>'+
                '</div>'+
            '</li>'+ 
            '<br>'+                                                                                                      
        '</ul>'+
    '</div>';    
    }
    document.getElementById("space-list").innerHTML=html;
}
function verMarcas(){
    let html = document.createElement("div");
    html.className='form-check mas';
    html.innerHTML='<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="border-color:#658DEF;">'+
    '<label class="form-check-label" for="flexCheckChecked" style="color:#4E4646">'+
      'Nivea (20)'+
    '</label>';

    if(document.getElementById("verMarcas").getAttribute('value')=="1"){        
        document.getElementById("lista-marcas").appendChild(html);
        document.getElementById("verMarcas").innerText="Ver menos marcas";
        document.getElementById("verMarcas").setAttribute('value','2');
    }else{
        document.getElementById("verMarcas").setAttribute('value','1');
        document.getElementById("verMarcas").innerText="Ver todas las marcas (16)";

        let div = document.querySelector(".mas");
        div.remove();
      
    }
}
