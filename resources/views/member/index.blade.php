@extends('layouts.home')

@section('title')
    Daftar Member
@endsection

@section('content')
    <!-- Container-fluid starts-->
    <div class="col-sm-12">
        <div class="card p-3">
            <div class="card-header">
                <button onclick="addForm('{{ route('member.store') }}')" class="btn  btn-xs btn-success-gradien"><i class="fa fa-plus-circle"></i> Tambah</button>
                <button onclick="cetakMember('{{ route('member.cetak_member') }}')" class="btn btn-xs btn-secondary-gradien"><i class="fa fa-barcode"></i> Cetak Member</button>
            </div>
            <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="table-responsive">
                       <form action="" method="post" class="form-member">
                        @csrf
                        <table class="table table-stiped table-bordered">
                            <thead class="bg-primary">
                                <tr>
                                    <th>
                                        <input type="checkbox" name="select_all" id="select_all">
                                    </th>
                                    <th scope="col" width="7%">No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th scope="col" width="12%"><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Zero Configuration  Ends-->

    @includeIf('member.form')
@endsection

@push('scripts')
    <script>
        let table;

        $(function() {
            table = $('.table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                  url: '{{ route('member.data') }}',
                },
                columns: [
                    {data: 'select_all', searchable: false, sortable: false},
                    {data: 'DT_RowIndex', searchable:false, sortable: false},
                    {data: 'kode_member'},
                    {data: 'nama'},
                    {data: 'telepon'},
                    {data: 'alamat'},
                    {data: 'aksi', searchable: false, sortable: false},
                ]
            });

            $('#modal-form').validator().on('submit', function (e) {
                if (! e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                    .done((response) => {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menyimpan data');
                        return;
                    });

                }
            });
            $('[name=select_all]').on('click', function () {
                $(':checkbox').prop('checked', this.checked);
            });
        });

        function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Member');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama]').focus();
        }

        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Member');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama]').focus();

            $.get(url)
                .done((response) => {
                $('#modal-form [name=nama]').val(response.nama);
                $('#modal-form [name=telepon]').val(response.telepon);
                $('#modal-form [name=alamat]').val(response.alamat);
                })
                .fail((errors) => {
                    alert('Tidak dapat menampilkan data');
                    return;
                })
        }

        function deleteData(url) {
            if (confirm('Yakin Anda ingin menghapus data yang dipilih?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        }

            function cetakMember(url) {
                if ($('input:checked').length < 1) {
                    alert('Pilih data yang akan dicetak!');
                    return;
                } else if ($('input:checked').length < 3) {
                    alert('Pilih minimal 3 data untuk dicetak!');
                    return;
                } else {
                    $('.form-member')
                    .attr('action', url)
                    .attr('target', '_blank')
                    .submit();
                }
            }

    </script>
@endpush
