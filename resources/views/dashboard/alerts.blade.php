/* Section to show sweetalert2 from success events */

// Check if some meessage in the session and show
@if(session('success'))
<script>
Swal.fire(
    '¡Bien!',
     String("{{ Session::get('success') }}"),
    'success',
)
</script>
@endif

// Sweetalert2 for a delete event
<script>
  // $('.form-delete').submit(function(e){  jQuery version
  const deleteSubmit = document.querySelector('.form-delete');
  deleteSubmit.addEventListener('click', function(e){ //get the delete form
    e.preventDefault();// prevent the submit event and show a Sweetalert2
    Swal.fire({
        title: '¿Estas seguro?',
        text: "Una vez eliminado no se puede recuperar.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, ¡Eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
    Swal.fire({
      icon: 'error',
      title: 'No se a eliminado',
      showConfirmButton: false,
      timer: 1500
    })
  }
    })
  })
</script>
