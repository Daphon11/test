@extends('layouts.home')

@section('title')
    Daftar Produk
@endsection

@section('content')
    <!-- Container-fluid starts-->
    <div class="col-sm-12">
        <div class="card p-3">
            <div class="card-header">
                <button onclick="addForm('{{ route('produk.store') }}')" class="btn  btn-xs btn-success-gradien"><i class="fa fa-plus-circle"></i> Tambah</button>
                <button onclick="deleteSelected('{{ route('produk.delete_selected') }}')" class="btn btn-xs btn-danger-gradien"><i class="fa fa-trash"></i> Hapus</button>
                <button onclick="cetakBarcode('{{ route('produk.cetak_barcode') }}')" class="btn btn-xs btn-secondary-gradien"><i class="fa fa-barcode"></i> Cetak Barcode</button>
            </div>
            <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="table-responsive">
                       <form action="" method="post" class="form-produk">
                        @csrf
                        <table class="table table-stiped table-bordered">
                            <thead class="bg-primary">
                                <tr>
                                    <th width="5%">
                                        <input type="checkbox" name="select_all" id="select_all">
                                    </th>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Merk</th>
                                    <th scope="col">Harga Beli</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Diskon</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col" width="10%"><i class="fa fa-cog"></i></th>
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

    @includeIf('produk.form')
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
                  url: '{{ route('produk.data') }}',
                },
                columns: [
                    {data: 'select_all', searchable: false, sortable: false},
                    {data: 'DT_RowIndex', searchable:false, sortable: false},
                    {data: 'kode_produk'},
                    {data: 'nama_produk'},
                    {data: 'nama_kategori'},
                    {data: 'merk'},
                    {data: 'harga_beli'},
                    {data: 'harga_jual'},
                    {data: 'diskon'},
                    {data: 'stok'},
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
            $('#modal-form .modal-title').text('Tambah Produk');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama_produk]').focus();
        }

        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Produk');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama_produk]').focus();

            $.get(url)
                .done((response) => {
                    $('#modal-form [name=nama_produk]').val(response.nama_produk);
                    $('#modal-form [name=id_kategori]').val(response.id_kategori);
                    $('#modal-form [name=merk]').val(response.merk);
                    $('#modal-form [name=harga_beli]').val(response.harga_beli);
                    $('#modal-form [name=harga_jual]').val(response.harga_jual);
                    $('#modal-form [name=diskon]').val(response.diskon);
                    $('#modal-form [name=stok]').val(response.stok);
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

            function deleteSelected(url) {
                if ($('input:checked').length > 1) {
                    if (confirm('Yakin ingin menghapus data terpilih?')) {
                        $.post(url, $('.form-produk').serialize())
                        .done((response) => {
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            alert('Tidak dapat menghapus data');
                            return;
                    });
                    }
                } else {
                    alert('pilih data yang ingin dihapus!');
                    return;
                }
            }

            function cetakBarcode(url) {
                if ($('input:checked').length < 1) {
                    alert('Pilih data yang akan dicetak!');
                    return;
                } else if ($('input:checked').length < 3) {
                    alert('Pilih minimal 3 data untuk dicetak!');
                    return;
                } else {
                    $('.form-produk')
                    .attr('action', url)
                    .attr('target', '_blank')
                    .submit();
                }
            }

    </script>
@endpush
