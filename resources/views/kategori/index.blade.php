@extends('layouts.home')

@section('title')
    Kategori
@endsection

@section('content')

<button class="btn btn-primary-gradien" type="button"><i data-feather="plus-circle"></i></button>

<!-- Container-fluid starts-->
            <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                      <div class="table-responsive">
                        <table class="table table-stiped table-bordered" >
                          <thead class="bg-primary">
                            <tr>
                              <th scope="col" width="5%">No</th>
                              <th scope="col">Kategori</th>
                              <th scope="col" width="15%"><i data-feather="settings"></i></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <!-- Zero Configuration  Ends-->

@endsection