    </main>

    <footer>
        <!-- place footer here -->
        SasPrograming 2023
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
            $("#tablaID").dataTable({
                "pageLength":3,
                lengthMenu:[
                    [3, 10, 25, 50],
                    [3, 10, 25, 50]
                ],
                "language":{
                    "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/es_ES.json"
                }
            });
        });
    </script>
    <!-- ALERT -->
    <script>
        function borrar(id){
            console.log(id)
            Swal.fire({
                title: '¿Estás seguro de borrar el registro?',
                showCancelButton: true,
                confirmButtonText: 'Si, estoy seguro!',
                cancelButtonText: 'No, cancelar!',
                icon: 'warning',
                confirmButtonColor: '#28a745', // Color verde
                cancelButtonColor: '#dc3545', // Color rojo
            }).then((result) => {
                if(result.isConfirmed){
                    window.location = "index.php?txtID=" + id;
                }
            })
        }
    </script>
</body>

</html>