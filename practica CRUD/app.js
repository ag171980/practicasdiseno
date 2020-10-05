class Datos {
    constructor(email, asunto, mensaje) {
        this.email = email;
        this.asunto = asunto;
        this.mensaje = mensaje;

    }
}

class Interface {

    AgregarAlLocalStorage(obj) {
        let localStorageKeyName = 'data';
        let contact = [];
        let dataInLocalStorage = localStorage.getItem(localStorageKeyName);
        if (dataInLocalStorage !== null) {
            contact = JSON.parse(dataInLocalStorage);
        }
        //Agrego lo del formulario al contact
        contact.push(obj);
        //Subo al LS lo que hay en contact con el nombre de data
        localStorage.setItem(localStorageKeyName, JSON.stringify(contact));

        this.LimpiarFormulario();
        this.CargarLocalStorage();
    }
    CargarLocalStorage() {
        //Nombre de la Key en el LS
        let localStorageKeyName = 'data';


        let contact = [];
        let dataInLocalStorage = localStorage.getItem(localStorageKeyName);

        if (dataInLocalStorage !== null) {
            contact = JSON.parse(dataInLocalStorage);
        }

        let gridBody = document.getElementById("datos-list");
        gridBody ? gridBody.innerHTML = '' : gridBody = '';
        //Recorro al array de contactos y los muestro
        contact.forEach(function (x, i) {
            let contenido = document.createElement('div');
            contenido.innerHTML = `
            <div class="card text-center mb-4">
                <div class="card-body d-flex flex-row justify-content-between align-items-center">
                    <div class="content-text d-flex flex-column">
                        <div class="d-flex flex-row">
                            <strong>Email</strong>:${x.email}
                        </div>
                        <div class="d-flex flex-row">
                            <strong>Asunto</strong>:${x.asunto}
                        </div>
                        <div class="d-flex flex-row">
                            <strong>Mensaje</strong>:${x.mensaje}
                        </div>
                    </div>
                    <div class="content-text">
                        <button class="btn btn-danger btn-xs" id="eliminar" name="eliminar">X</button>
                    </div>
                    
                </div>
            </div>
            `;
            //Anido lo recorrido con el datos-list que ya tengo.
            gridBody ? gridBody.appendChild(contenido) : gridBody = '';
        });
    }
    eliminar(index) {
        let localStorageKeyName = 'data';
        let contact = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName);

        contact = JSON.parse(dataInLocalStorage);

        contact.splice(index, 1);

        localStorage.setItem(localStorageKeyName, JSON.stringify(contact));

        this.CargarLocalStorage();

    }
    Buscar(obj) {
        let localStorageKeyName = 'data';
        let Remail = 'ag171980@gmail.com';
        let Gemail = document.getElementById('buscador').value;
        console.log(Gemail);
        let contact = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName);
        contact = JSON.parse(dataInLocalStorage);
        let c = 0;
        for (let i = 0; i < contact.length; i++) {
            if (contact[i].email == Gemail) {


                c++;
            }
        }
        console.log(contact);
        console.log('Obtenidos: ' + c);
        this.CargarLocalStorage();
    }
    LimpiarFormulario() {

        document.getElementById('datos-form').reset();
        this.CargarLocalStorage();
    }

    MostrarMensaje(mensaje, clase) {

        let msj = document.createElement('div');
        msj.className = `alert alert-${clase}`;
        msj.appendChild(document.createTextNode(mensaje));
        let contenedor = document.querySelector('.container');
        let app = document.querySelector('#App');
        contenedor.insertBefore(msj, app);
        setTimeout(function () {
            document.querySelector('.alert').remove();
        }, 1500);

    }

}
//Eventos DOM
//CARGO SIEMPRE EL LISTADO DE CONTACTOS DEL LS
const interface = new Interface();
interface.CargarLocalStorage();

let subtitulo = document.getElementById('contacto');
if (subtitulo.textContent == "Contacto") {
    document.getElementById('datos-form')
        .addEventListener('submit', function (e) {
            let localStorageKeyName = 'data';
            let email = document.getElementById('email').value;
            let asunto = document.getElementById('asunto').value;
            let mensaje = document.getElementById('mensaje').value;

            const datos = new Datos(email, asunto, mensaje);

            const interface = new Interface();

            if (email == '' || asunto == '' || mensaje == '') {
                return interface.MostrarMensaje('Complete los campos por favor', 'danger');
            }
            interface.AgregarAlLocalStorage(datos);
            interface.LimpiarFormulario();
            interface.MostrarMensaje('Agregado correctamente', 'success');
            e.preventDefault();

        });
} else if (subtitulo.textContent == "Lista de Contacto") {
    document.getElementById('eliminar').addEventListener('click', function (e) {
        const interface = new Interface();
        interface.eliminar(e.target);
    });
    document.getElementById('botonBuscador').addEventListener('submit', function (e) {
        const interface = new Interface();
        console.log(e.target);
        interface.Buscar(e.target);
    })
}
