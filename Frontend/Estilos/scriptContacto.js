// Validación y envío de formulario
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const formAlert = document.getElementById("formAlert");

    form.addEventListener("submit", function (event) {
        // Evitar el envío real del formulario
        event.preventDefault();

        // Validar el formulario
        if (!form.checkValidity()) {
            event.stopPropagation();
        } else {
            // Simular envío exitoso
            form.classList.add('was-validated');
            formAlert.classList.remove('d-none');

            // Resetear el formulario después de mostrar la alerta
            setTimeout(() => {
                formAlert.classList.add('d-none');
                form.reset();
                form.classList.remove('was-validated');
            }, 3000); // Ocultar la alerta después de 3 segundos
        }

        form.classList.add("was-validated");
    }, false);
});
