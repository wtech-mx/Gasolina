@if (Session::has('success'))
<script>
    Swal.fire({
        title: 'Exito!!',
        html: 'Se ha <b>agragado</b> </br> ',
        imageUrl: '{{ asset('alertas/checked.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })

</script>
@endif

@if (Session::has('edit'))
<script>
    Swal.fire({
        title: 'Exito!!',
        html: 'Se ha <b>editado</b> </br>',
        imageUrl: '{{ asset('alertas/edit.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })

</script>
@endif

@if (Session::has('error'))
<script>
    Swal.fire({
        title: 'Error!!',
        html: 'Error <b>no se pudeo crear</b>favor de revisar datos ingresados </br>',
        imageUrl: '{{ asset('alertas/close.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })

</script>
@endif

@if (Session::has('delete'))
<script>
    Swal.fire({
        title: 'Exito!!',
        html: 'Se ha <b>eliminado</b> </br>',
        imageUrl: '{{ asset('alertas/delete.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })

</script>
@endif
