@push('script')
<script type="text/javascript">
    function delete_row(route, row_id) {

        var table_row = '#row_' + row_id;
        var url = "{{url('')}}"+'/'+route+'/'+row_id;
        console.log(url);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
          }).then((confirmed) => {
            if (confirmed.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: row_id,
                        _method: 'DELETE'
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                })
                .done(function(response) {
                    console.log(response);
                    Swal.fire(
                        response[2],
                         response[0],
                         response[1]
                      );
                    $(table_row).fadeOut(2000);

                })
                .fail(function(error) {
                    console.log(error);
                    Swal.fire('{{ ___('common.opps') }}...', '{{ ___('common.something_went_wrong_with_ajax') }}', 'error');
                })
            }
          });
    };
</script>
@endpush
