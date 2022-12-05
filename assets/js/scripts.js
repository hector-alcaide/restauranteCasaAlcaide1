'use strict'

//Scrollear al final y principio
function scrollArriba() {
    window.scroll({
        top: 0,
        behavior: 'smooth'
    });
}
//var saber height total
function scrollAbajo() {
    var totalAlturaDocumento = document.body.offsetHeight;
    window.scrollBy({
        top: totalAlturaDocumento,
        behavior: 'smooth'
    });
}

// //Cargar eventos scroll
// var botonScrollArriba = document.querySelector("#scrollArriba");
// botonScrollArriba.addEventListener('click', function(){
//     scrollArriba();
// }); 

// var botonScrollAbajo = document.querySelector("#scrollAbajo");
// botonScrollAbajo.addEventListener('click', function(){
//     scrollAbajo();
// }); 

// botonScrollArriba.addEventListener('mouseover', function(){
//     scrollArriba();
// }); 
// botonScrollAbajo.addEventListener('mouseover', function(){
//     scrollAbajo();
// }); 

//Carta


// document.querySelectorAll('.addProduct').forEach(item => {
//     item.addEventListener('click', event => {
//         document
//     })
// })
// botonAddProduct.addEventListener('click', function(){
//     alert("a");
// });

//MODAL producto, rellenar
const addProductModal = document.getElementById('addProductModal')
addProductModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;

    const datosProducto = button.getAttribute('data-bs-whatever');

    //Array con los datos
    const datosProducto_array = datosProducto.split(";");
    console.log(datosProducto_array);

    //0 es id producto
    const idProducto = datosProducto_array[0];
    document.getElementById('idProducto_input').value = idProducto;

    //1 es nombre
    const nombreProducto = datosProducto_array[1];
    console.log(nombreProducto);
    document.getElementById('nombreProducto').textContent = nombreProducto;

    //2 es definicion
    const definicionProducto = datosProducto_array[2];
    document.getElementById('definicionProducto').textContent = definicionProducto;

    //3 es precio
    const precioProducto = datosProducto_array[3];
    // document.getElementById('precioProducto').textContent = precioProducto; 

    // //4 es categoria
    const categoriaProducto = datosProducto_array[4];
    document.getElementById('idCategoria_input').value = categoriaProducto;

});

//Validar que los campos de añadir el producto sean correctos
// const addProductForm = document.getElementById('addProductForm')
// addProductModal.addEventListener('submit', event => {
//     //Campos a validar
//     const cantidad = document.getElementById('cantidad').value;

//     //Mensajes validacion error
//     var messageCantidad = 'El campo cantidad no puede quedar vacío o menor que 0.';
//     //Validación
//     if (cantidad !== null && cantidad != 0) {
//         return true;
//     } else {
//         alert("Campos incorrectos: " + messageCantidad);
//         return false;
//     }
// });

// const exampleModal = document.getElementById('exampleModal')
// exampleModal.addEventListener('show.bs.modal', event => {
//   // Button that triggered the modal
//   const button = event.relatedTarget
//   // Extract info from data-bs-* attributes
//   const recipient = button.getAttribute('data-bs-whatever')
//   // If necessary, you could initiate an AJAX request here
//   // and then do the updating in a callback.
//   //
//   // Update the modal's content.
//   const modalTitle = exampleModal.querySelector('.modal-title')
//   const modalBodyInput = exampleModal.querySelector('.modal-body input')

//   modalTitle.textContent = `New message to ${recipient}`
//   modalBodyInput.value = recipient
// })