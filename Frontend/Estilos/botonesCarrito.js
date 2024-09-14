/*function increment() {
    var quantity = document.getElementsById('quantity');
    quantity.value = parseInt(quantity.value) + 1;
}

function decrement() {
    var quantity = document.getElementsById('quantity');
    if (parseInt(quantity.value) > 0) {
        quantity.value = parseInt(quantity.value) - 1;
    }
}
                para uno solo                    */


function increment(id) {
    var quantity = document.getElementById(id);
    quantity.value = parseInt(quantity.value) + 1;
    validateQuantity(id);
}

function decrement(id) {
    var quantity = document.getElementById(id);
    if (parseInt(quantity.value) > 0) {
        quantity.value = parseInt(quantity.value) - 1;
    }
    validateQuantity(id);
}


function validateQuantity(id) {
    var quantity = document.getElementById(id);
    var value = parseInt(quantity.value);

    if (isNaN(value) || value < 0) {
        quantity.value = 0; // Establece el valor a 0 si es negativo o no es un número
        alert("El valor no puede ser negativo. Se ha ajustado a 0."); // Muestra advertencia
    }
}

function handleEnter(event, id) {
    // Verifica si la tecla presionada es Enter (código 13)
    if (event.key === 'Enter') {
        validateQuantity(id); // Llama a la validación si se presiona Enter
    }
}