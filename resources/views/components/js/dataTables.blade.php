<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('ajax.index') }}",
            columns: [{
                data: 'name',
            }, {
                data: 'keahlian',
            }, {
                data: 'nilai',
            }]
        });
    });

    $("#Form").on("submit",function(e){
    e.preventDefault()
    $.ajax({
        url: "{{ route('nilai.store') }}",
        method: "POST",
        data: $(this).serialize(),
        success:function(){
            $("#create-modal").modal("hide")
            $('#dataTable2').DataTable().ajax.reload();
            Swal.fire(
              'Simpan',
              'Data berhasil disimpan!',
              'success'
            )
            resetForm()
        }
    })
  })

</script>
