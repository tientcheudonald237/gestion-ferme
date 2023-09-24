@extends('layouts.personnel')
@section('styles')

@endsection
@section('content')
    <div class="body">
        <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card">
                <div class="card-body card-type-3">
                  <div class="row">
                    <div class="col">
                      <h6 class="text-muted mb-0">Ancienete</h6>
                    </div>
                    <div class="col-auto">
                      <div class="card-circle l-bg-orange text-white">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 7.8%</span> --}}
                    <span class="text-nowrap">Duree d'emploi, Avantages et Privileges</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card">
                <div class="card-body card-type-3">
                  <div class="row">
                    <div class="col">
                      <h6 class="text-muted mb-0">New Booking</h6>
                      <span class="font-weight-bold mb-0">1,562</span>
                    </div>
                    <div class="col-auto">
                      <div class="card-circle l-bg-cyan text-white">
                        <i class="fas fa-briefcase"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 7.8%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card">
                <div class="card-body card-type-3">
                  <div class="row">
                    <div class="col">
                      <h6 class="text-muted mb-0">Inquiry</h6>
                      <span class="font-weight-bold mb-0">7,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="card-circle l-bg-green text-white">
                        <i class="fas fa-phone"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 15%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card">
                <div class="card-body card-type-3">
                  <div class="row">
                    <div class="col">
                      <h6 class="text-muted mb-0">Earning</h6>
                      <span class="font-weight-bold mb-0">$8,965</span>
                    </div>
                    <div class="col-auto">
                      <div class="card-circle l-bg-purple text-white">
                        <i class="fas fa-dollar-sign"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 5.4%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
@push('other-scripts')

@endpush
