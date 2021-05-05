let liquidar = {

    start:() => {
        document.addEventListener("DOMContentLoaded", function(event){
            liquidar.validationPage();
            liquidar.porcentaje();
            liquidar.captureData();
        })
    },

    porcentaje : () => {
        let dataValue = document.querySelector("#bonificacion");
        dataValue.addEventListener("change", (event) => {
            if(dataValue.value != "si") {
                let containerPorcentaje = document.querySelector(".porcentaje");
                if(containerPorcentaje) {
                    let elementContianer = document.querySelector(".containerBonificacion");
                    elementContianer.removeChild(containerPorcentaje);
                }
            } else {
                liquidar.addCampoBonificacion();
            }
        });
    },

    addCampoBonificacion : () => {
        const containerDiv = document.querySelector(".containerBonificacion");
        let containerElement = document.createElement('div');
        containerElement.className = "porcentaje";
        containerDiv.appendChild(containerElement);

        let titleElement = document.createElement("label");
        titleElement.innerHTML = "Porcentaje";
        containerElement.appendChild(titleElement);

        let cajon = document.createElement("input")
        cajon.type = "number";
        cajon.name = "porcentaje"
        cajon.placeholder = "%"
        containerElement.appendChild(cajon);
    },

    creatorInputCB : (containerInputNew) => {
        let containeElement = document.createElement("input");
        containeElement.type = "number";
        containeElement.name = "chaturbate";
        containeElement.className = "inputDolarsCB";
        containeElement.placeholder = "Ingresa valor en dólares";
        containerInputNew.appendChild(containeElement);
    },

    creatorInputBonga : (containerInputNew) => {
        let containeElement = document.createElement("input");
        containeElement.type = "number";
        containeElement.name = "bonga";
        containeElement.placeholder = "Ingresa valor en dólares";
        containeElement.className = "inputDolarsBonga";
        containerInputNew.appendChild(containeElement);
    },

    creatorInputStripchat : (containerInputNew) => {
        let containeElement = document.createElement("input");
        containeElement.type = "number";
        containeElement.name = "stripchat";
        containeElement.placeholder = "Ingresa valor en dólares";
        containeElement.className = "inputDolarsStrip";
        containerInputNew.appendChild(containeElement);
    },

    creatorInputAmateur : (containerInputNew) => {
        let containeElement = document.createElement("input");
        containeElement.type = "number";
        containeElement.name = "amateur";
        containeElement.placeholder = "Ingresa valor en dólares";
        containeElement.className = "inputDolarsAmateur";
        containerInputNew.appendChild(containeElement);
    },

    creatorInputStreamate : (containerInputNew) => {
        let containeElement = document.createElement("input");
        containeElement.type = "number";
        containeElement.name = "streamate";
        containeElement.placeholder = "Ingresa valor en dólares";
        containeElement.className = "inputDolarsStreamate";
        containerInputNew.appendChild(containeElement);
    },

    validationPage : () => {
    
        let containerElementCB = document.querySelector("#chaturbate");
        let containerElementBonga = document.querySelector("#bonga");;
        let containerElementStripchat = document.querySelector("#stripchat");
        let containerElementAmateur = document.querySelector("#amateur");
        let containerElementStreamate = document.querySelector("#streamate");


        // chaturbate
        containerElementCB.addEventListener("change", (event => {
            if(containerElementCB.checked) {
                let containerInputNew = document.querySelector(".containerCB");
                liquidar.creatorInputCB(containerInputNew);
            } else {
                let inputDolar = document.querySelector(".inputDolarsCB");
                inputDolar.remove();
            }
        }));

        // bonga
        containerElementBonga.addEventListener("change", (event) => {
            if(containerElementBonga.checked) {
                let containerInputNew = document.querySelector(".containerBon");
                liquidar.creatorInputBonga(containerInputNew);
            } else {
                let inputDolar = document.querySelector(".inputDolarsBonga");
                inputDolar.remove();
            }
        });

        // stripchat
        containerElementStripchat.addEventListener("change", (event) => {
            if(containerElementStripchat.checked) {
                let containerInputNew = document.querySelector(".containerStrip");
                liquidar.creatorInputStripchat(containerInputNew);
            } else {
                let inputDolar = document.querySelector(".inputDolarsStrip");
                inputDolar.remove();
            }
        })

        // amateur
        containerElementAmateur.addEventListener("change", (event) => {
            if(containerElementAmateur.checked) {
                let containerInputNew = document.querySelector(".containerAmateur");
                liquidar.creatorInputAmateur(containerInputNew);
            } else {
                let inputDolar = document.querySelector(".inputDolarsAmateur");
                inputDolar.remove();
            }
        })

         // streamate
         containerElementStreamate.addEventListener("change", (event) => {
            if(containerElementStreamate.checked) {
                let containerInputNew = document.querySelector(".containerStream");
                liquidar.creatorInputStreamate(containerInputNew);
            } else {
                let inputDolar = document.querySelector(".inputDolarsStreamate");
                inputDolar.remove();
            }
        })
    },





    processData : (datos) => {
        const formData = new FormData(datos);
        console.log(formData);
    },

    captureData : () => {
        let datos = document.dataLiquidacion;
        datos.addEventListener("submit", (event) => {
            liquidar.processData(datos);
        })
    },

}

liquidar.start();

