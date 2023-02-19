//Funcion para almacenar y traer los datos que se almacenan
function guardarAlmacenamientoLocal(key, guardar){
    localStorage.setItem(key, JSON.stringify(guardar))
}
function obtenerAlmacenamientoLocal(key){
    const datos = JSON.parse(localStorage.getItem(key))
    return datos
}

let almacen = [
    {nombre: 'Consola Xbox Series S',
    valor: 5860,
    existencia: 15,
    urlImagen: 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00088984265135l.jpg'},
    {nombre: 'Consola PlayStation 5',
    valor: 14449,
    existencia: 10,
    urlImagen: 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00071171954889l.jpg'},
    {nombre: 'Consola Nintendo Switch',
    valor: 5481,
    existencia: 15,
    urlImagen: 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00004549688217l.jpg'},
    {nombre: 'Control Inalámbrico Xbox One',
    valor: 6999,
    existencia: 20,
    urlImagen: 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00088984261392l.jpg'}
];

let productos = almacen;

const informacionCompra = document.getElementById('informacionCompra');
const contenedorCompra = document.getElementById('contenedorCompra');
const productosCompra = document.getElementById('productosCompra');
const contenedor = document.getElementById('contenedor');
const carrito = document.querySelector('.carrito');
const numero = document.getElementById("numero");
const header = document.querySelector("#header");
const total = document.getElementById('total');
const body = document.querySelector("body");

let lista = []
let valortotal = 0

window.addEventListener("scroll", function(){
    if(contenedor.getBoundingClientRect().top < 10){
        header.classList.add("scroll")
    } else{
        header.classList.remove("scroll")
    }
})

window.addEventListener('load', () => {
    visualizarProductos();
    contenedorCompra.classList.add("none")
})

function visualizarProductos(){
    contenedor.innerHTML = ""
    for(let i = 0; i < productos.length; i++){
        console.log(productos[i].urlImagen)
        if(productos[i].existencia > 0){
            contenedor.innerHTML += `<div><img src="${productos[i].urlImagen}"><div class="informacion"><p>${productos[i].nombre}</p><p class="precio">$${productos[i].valor}</p><button onclick=comprar(${i})>Comprar</button></div></div>`
        } else{
            contenedor.innerHTML += `<div><img src="${productos[i].urlImagen}"><div class="informacion"><p>${productos[i].nombre}</p><p class="precio">$${productos[i].valor}</p><p class="soldOut">Sold Out</p></div></div>`
        }

    }
}

function comprar(indice){
    lista.push( {nombre: productos[indice].nombre, precio: productos[indice].valor})

    let van = true
    let i = 0
    while(van == true){
        if(productos[i].nombre == productos[indice].nombre){
            productos[i].existencia -= 1
            if(productos[i].existencia == 0){
                visualizarProductos()
            }
            van = false
        }
        almacen = productos;
        i += 1;
    }
    numero.innerHTML = lista.length
    numero.classList.add("diseñoNumero")
    
    return lista
}

carrito.addEventListener("click", function(){
    body.style.overflow = "hidden"
    contenedorCompra.classList.remove('none')
    contenedorCompra.classList.add('contenedorCompra')
    informacionCompra.classList.add('informacionCompra')
    mostrarElementosLista()
})

salir.addEventListener("click",function(){
    window.location.href = "./index.php"
})


function mostrarElementosLista(){
    productosCompra.innerHTML = ""
    valortotal = 0
    for(let i=0; i<lista.length; i++){
        productosCompra.innerHTML += `<div><div class="img"><button onclick=eliminar(${i}) class="botonTrash"><img src="https://icons8.com/icon/iTwBvHZkjGQ6/ecommerce"></button><p>${lista[i].nombre}</p></div><p> $${lista[i].precio}</p></div>`
        valortotal += parseInt(lista[i].precio)
    }
    total.innerHTML = `<p>Valor Total</p> <p><span>$${valortotal}</span></p>`
}

function eliminar(indice){
    let van = true
    let i = 0
    while(van == true){
        if(productos[i].nombre == lista[indice].nombre){
            productos[i].existencia += 1
            lista.splice(indice, 1)
            van = false
        }
        i += 1;
    }
    almacen = productos;
        
    numero.innerHTML = lista.length
    if(lista.length == 0){
        numero.classList.remove("diseñoNumero")
    }
    visualizarProductos()
    mostrarElementosLista()
}

x.addEventListener("click", function(){
    body.style.overflow = "auto"
    contenedorCompra.classList.add('none')
    contenedorCompra.classList.remove('contenedorCompra')
    informacionCompra.classList.remove('informacionCompra')
})