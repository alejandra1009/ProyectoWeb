function carrito(){
    //debo traerme el nombre y la foto, validar foto
    //operaciones de calculo
    
    var cantidad="";
    var nombre="";

    var cantidad = document.getElementById("cantidad").value;
    var nombre = document.getElementById("nombre").value;
    document.getElementById('cantidad').innerHTML = cantidad;
    document.getElementById('nombre').innerHTML = nombre;
    console.log(cantidad+nombre);
    /*
    
   
    
    var precio = document.getElementById("precio");

    

    if (typeof nombre !== 'undefined') {
        console.log(nombre);
      }

*/
   
}