function () 
{
  const opentrabajo = document.getElementById('open_curp');
  const modal_container_trabajo = document.getElementById('modal_container_trabajo');
  
  opentrabajo.addEventListener('click', () => {
    modal_container_trabajo.classList.add('show_trabajo');  
  });
  
  close.addEventListener('click', () => {
    modal_container_trabajo.classList.remove('show_trabajo');
  });
 
  /*abrir ventana*/
  const open = document.getElementById('open_curp');
  const modal_container_name = document.getElementById('modal_container_name');
 
  open.addEventListener('click', () => {
    modal_container_name.classList.add('show_name');  
  });
  
  close.addEventListener('click', () => {
    modal_container_name.classList.remove('show_name');
  });
}

