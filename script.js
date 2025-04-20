const btnModo = document.getElementById('modo-btn');
const logoImg = document.getElementById('logo-img');
const tituloLogo = document.getElementById('titulo-logo');

btnModo.addEventListener('click', () => {
  document.body.classList.toggle('dark');

  if (document.body.classList.contains('dark')) {

    logoImg.src = 'img/logo-night.png';         
    tituloLogo.src = 'img/titulo-logo-night.png'; 
    btnModo.textContent = '☀️';
  } else {

    logoImg.src = 'img/logo-day.png';             
    tituloLogo.src = 'img/titulo-logo-day.png';     
    btnModo.textContent = '🌙';
  }
});

const sections = document.querySelectorAll('main section');
const navLinks = document.querySelectorAll('nav a');

function showSection(id) {
  sections.forEach(section => {
    section.style.display = section.id === id ? 'block' : 'none';
  });
}

navLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = link.getAttribute('href').substring(1);
    showSection(target);
    history.pushState(null, '', `#${target}`);
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const currentHash = location.hash.substring(1) || 'home';
  showSection(currentHash);
});

const formContacto = document.getElementById('form-contacto');

formContacto.addEventListener('submit', function (e) {
  e.preventDefault();
  
  const nombre = this.nombre.value.trim();
  const servicio = this.servicio.value;
  const mensaje = this.mensaje.value.trim();

  if (!nombre || !servicio || !mensaje) {
    alert('Por favor, completa todos los campos.');
    return;
  }

  const datosFormulario = { nombre, servicio, mensaje };
  console.log("Datos del formulario:", datosFormulario);
  alert("Mensaje enviado correctamente. ");
  this.reset();
});
