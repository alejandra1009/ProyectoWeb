function carrito(){
    
    //nombre
    var nombre="zapato rosado"
    //var nombre=document.getElementById("nombre").value;
    document.getElementById("nombre_text").value=nombre;



    //precio
    var precio=190000;
    //var precio=document.getElementById("precio").value;
    document.getElementById("precio_text").value=precio;



    // aqui obtengo la cantidad 
    var cantidad = document.getElementById("cantidad").value;
    document.getElementById("cantidad_text").value=cantidad;
   // document.getElementById('cantidad').innerHTML = cantidad;
  //console.log(cantidad); 
    

    
    var subtotal=subtotal+precio+cantidad;
    document.getElementById("subtotal").value=subtotal;



}
