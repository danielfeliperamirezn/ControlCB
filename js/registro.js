
let global = {

    start: () => {
        document.addEventListener("DOMContentLoaded", function(event){
            global.dataValidation();
        })
    },

    register: (formRegister) => {

        const formdata = new FormData(formRegister);
        alert(formdata);

    },


    dataValidation: () => {
        let formRegister = document.formRegister;
        formRegister.addEventListener('submit', (event) => {
            global.register(formRegister);
        });
    }

}

global.start();