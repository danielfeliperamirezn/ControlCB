let global = {

    start: () => {
        document.addEventListener("DOMContentLoaded", function(event){
            global.dataValidation();
        })
    },

    eventSend: (formRegister) => {
        const formData = new FormData(formRegister);
        fetch('../flotantes/validarRegistro.php', {
            method: 'POST',
            body: formData
        })
    },

    dataValidation: () => {
        let formElement = document.formRegister;
        formElement.addEventListener('submit', (event) => {
            global.eventSend(formElement);
        }); 
    }

}

global.start();