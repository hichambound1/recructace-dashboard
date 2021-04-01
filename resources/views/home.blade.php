@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-5  p-5">
            <div class="main-content" id="panel">
               
                <div class="header bg-primary pb-6">
                  <div class="container-fluid">
                    <div class="header-body">
                   
                      <!-- Card stats -->
                      <div class="row pt-5">
                        <div class="col-xl-3 col-md-6">
                          <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                              <div class="row">
                                <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">Total condidat</h5>
                                  <span class="h2 font-weight-bold mb-0">{{$condidats->count()}}</span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-active-40"></i>
                                  </div>
                                </div>
                              </div>
                            
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                              <div class="row">
                                <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">total users</h5>
                                  <span class="h2 font-weight-bold mb-0">{{$users->count()}}</span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="ni ni-chart-pie-35"></i>
                                  </div>
                                </div>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                              <div class="row">
                                <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">entreprise</h5>
                                  <span class="h2 font-weight-bold mb-0">{{$entreprise->count()}}</span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                    <i class="ni ni-money-coins"></i>
                                  </div>
                                </div>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                              <div class="row">
                                <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">ville</h5>
                                  <span class="h2 font-weight-bold mb-0">{{$villes->count()}}</span>
                                </div>
                                <div class="col-auto">
                                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                    <i class="ni ni-chart-bar-32"></i>
                                  </div>
                                </div>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
        </div>
    </div>
</div>
@endsection

