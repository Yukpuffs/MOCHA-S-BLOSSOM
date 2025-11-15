
/*----------------------------------Inicio sesion--------------------------------- */
class inisesi{
    constructor(email , contraseña){
        this.email = email
        this.contraseña = contraseña
    }
}

const formulario = document.getElementById('formularioinicio')
const login = document.getElementById('login')
const datos = []

if(formulario){
    const actualizardatos = () =>{
        login.innerHTML = ""
        datos.forEach((inisesi, index) => {
            const li = document.createElement('li')
            li.textContent = `${inisesi.email} (contraseña oculta)`
            login.appendChild(li)
        });
    }
    formulario.addEventListener('submit',  function(event){
    event.preventDefault()
    const email = document.getElementById('email').value
    const contraseña = document.getElementById('password').value

    const registro = new inisesi(email, contraseña)
    datos.push(registro)
    console.log(datos)
    actualizardatos()
    formulario.reset()
})

/*-------------------------------------cuenta--------------------------------------- */

const botonAper = document.getElementById('boton-aper');
const usuario = document.getElementById('usuario').querySelectorAll('input')



botonAper.addEventListener("click", () => {

    const estaDeshabilitado = usuario[0].hasAttribute('disabled');

    if (estaDeshabilitado) {
        usuario.forEach(input => input.removeAttribute('disabled'));
    } else {
        usuario.forEach(input => input.setAttribute('disabled', 'true'));
    }
});    

}


/*------------------------------------------Registro-------------------------------------*/

class regis extends inisesi{
    constructor(usuario, email, contraseña){
        super(email, contraseña)
        this.usuario = usuario
    }
}

const formulare = document.getElementById('regis')
const loginn = document.getElementById('loginn')
const datores = []

if(formulare){
    const actualizardatoss = () =>{
    loginn.innerHTML = ""
    datores.forEach((regis, index) => {
        const li = document.createElement('li')
        li.textContent = `${regis.usuario} ${regis.email} (contraseña oculta)`
        loginn.appendChild(li)
    });
}


    formulare.addEventListener('submit', function(event){
        event.preventDefault()
        const usuario0 = document.getElementById('usuario').value
        const emaill = document.getElementById('emaill').value
        const contraseñaa = document.getElementById('passwordd').value

        const regist = new regis(usuario0,emaill, contraseñaa)
        datores.push(regist)
        console.log(datores)
        actualizardatoss()
        formulare.reset()
    })
}


/*--------------------------------------Personalizacion------------------------------------*/

class personalizacion {
    constructor(sabor, relleno, tamaño, cobertura, decoracion ){
        this.sabor = sabor
        this.relleno = relleno
        this.tamaño = tamaño
        this.cobertura = cobertura
        this.decoracion = decoracion
    }
}

const form = document.getElementById('pref')
const pos = document.getElementById('pos')
const lista = []

if(form){
    const actualizardato = () =>{
        pos.innerHTML = ""
        lista.forEach((personalizacion, index)=>{
            const li = document.createElement('li')
            li.textContent = `${personalizacion.sabor} ${personalizacion.relleno} ${personalizacion.tamaño} ${personalizacion.cobertura} ${personalizacion.decoracion}`
            pos.appendChild(li)
        })
    }

    form.addEventListener('submit', function(event){
        event.preventDefault()
        const sabor = document.querySelector('input[name="sabor"]:checked').value
        const relle = document.getElementById('relleno').value
        const tam = document.querySelector('input[name="tamano"]:checked').value
        const cober = document.getElementById('cobertura').value
        const decoracion = document.getElementById('decoracion').value

        const pedido = new personalizacion(sabor, relle, tam, cober, decoracion)
        lista.push(pedido)
        console.log(lista)
        actualizardato()
        form.reset()
    })
}

/*-------------------------------------Cuenta---------------------------------------------- */

class Cuenta{
    constructor(name, correo, telefono, direccion, numero_tarjeta){
        this.name = name
        this.correo = correo
        this.telefono = telefono
        this.direccion = direccion
        this.numero_tarjeta = numero_tarjeta
    }
}

const datos_pe = document.getElementById('usuario')
const da = document.getElementById('da')
const pers = []

if(datos_pe){
    const actualizar = () =>{
        da.innerHTML = ""
        pers.forEach((Cuenta, index) => {
            const li = document.createElement('li')
            li.textContent = `${Cuenta.name} ${Cuenta.correo} ${Cuenta.telefono} ${Cuenta.direccion} {Confidencial} `
            da.appendChild(li)
        })
    }
    datos_pe.addEventListener('submit', function(event){
        event.preventDefault()
        const nam = document.getElementById('nombre').value
        const cor = document.getElementById('corre_E').value
        const tel = document.getElementById('telefono').value
        const dir = document.getElementById('direccion').value
        const taj = document.getElementById('tarj').value

        const cuentau = new Cuenta(nam, cor, tel, dir, taj)
        pers.push(cuentau)
        console.log(pers)
        actualizar()
        datos_pe.reset()
    })
}

/*--------------------------------------------Pedidos-------------------------------------- */

class pediido{
    constructor( nombre, direccion, telefono, correo, fecha, hora, medio, num, cvv, fechac){
        this.nombre = nombre
        this.direccion = direccion
        this.telefono = telefono
        this.correo = correo
        this.fecha = fecha
        this.hora = hora
        this.medio = medio
        this.num = num
        this.cvv = cvv
        this.fechac = fechac
    }
}

const formpago = document.getElementById('pedidos')
const pedd = document.getElementById('pedd')
const listped = []

if(formpago){
    const actualizarpago = () =>{
        pedd.innerHTML = ""
        listped.forEach((pediido, index) =>{
            const li = document.createElement('li')
            li.textContent = `${pediido.nombre} ${pediido.direccion} ${pediido.telefono} ${pediido.correo} ${pediido.fecha} ${pediido.hora} ${pediido.medio} ${pediido.num} ${pediido.cvv} ${pediido.fechac}`
            pedd.appendChild(li)
        })
    }
    formpago.addEventListener('submit', function(event){
        event.preventDefault()

        const mna = document.getElementById('completo').value
        const di = document.getElementById('direcio').value
        const te = document.getElementById('teleo').value
        const dc = document.getElementById('q').value
        const fe = document.getElementById('fecha_en').value
        const ho = document.getElementById('hora').value
        const me = document.getElementById('medio').value
        const nu = document.getElementById('tarjt').value
        const cvv = document.getElementById('cvv').value
        const fec = document.getElementById('fc').value

        const pedidoscl = new pediido(mna, di, te, dc, fe, ho, me, nu, cvv, fec)
 
        listped.push(pedidoscl)
        console.log(listped)
        actualizarpago()
        formpago.reset()
    })
}

/*--------------------------------Carrito de compras---------------------*/


const productoslis = document.getElementById('listaproductos')
let productos = JSON.parse(localStorage.getItem("carrito")) || []

if (productoslis) {

    productoslis.addEventListener('click', event => {

        if (event.target.classList.contains('btn-carrito')) {

            const card = event.target.closest('.card')
            
            const productoInfo = {
                img: card.querySelector('img').src,
                cantidad: 1,
                tipo: card.querySelector('h5').textContent,
                descripcion: card.querySelector('p').textContent
            }

            const existe = productos.some(p => p.tipo === productoInfo.tipo)

            if (existe) {
                productos = productos.map(p => {
                    if (p.tipo === productoInfo.tipo) {
                        p.cantidad++
                    }
                    return p
                })
            } else {
                productos.push(productoInfo)
            }

            localStorage.setItem("carrito", JSON.stringify(productos))

        }
    })
}



const mostrarCarrito = () =>{

    productos = JSON.parse(localStorage.getItem("carrito")) || []

    const contenedor = document.getElementById('carrito')
    if (!contenedor) return  

    contenedor.innerHTML = ''

    productos.forEach( p =>{
        const cont = document.createElement('div')
        cont.classList.add('par')
        cont.innerHTML = `
            <div class="container-fluid">
                <div class="row" id="listaproductos"> 
                <div class="col-lg-4 col-md-4 col-sm-6 cardd p-5">
                    <div class="card h-40 par" >
                        <img <img src="${producto.img}" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5>${producto.tipo}</h5>
                                <p>${producto.descripcion}</p>
                                <p><strong>Cantidad:</strong> ${producto.cantidad}</p>    
                            </div>
                    </div>
                </div>
            </div>    
            `
        contenedor.appendChild(cont)
    })
}

const contenedor = document.getElementById("carrito")
const carrito = JSON.parse(localStorage.getItem("carrito")) || []

if (contenedor && carrito.length > 0) {

    contenedor.innerHTML = ''

    carrito.forEach(producto => {

        const div = document.createElement("div")
        div.classList.add("par")

        div.innerHTML = `
            <div class="container-fluid">
                <div class="row" id="listaproductos"> 
                <div class="col-lg-4 col-md-4 col-sm-6 cardd pb-3">
                    <div class="card h-40 par" >
                        <img <img src="${producto.img}" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5>${producto.tipo}</h5>
                                <p>${producto.descripcion}</p>
                                <p><strong>Cantidad:</strong> ${producto.cantidad}</p>    
                            </div>
                    </div>
                </div>
            </div>    
            `
        contenedor.appendChild(div)
    })

} 

