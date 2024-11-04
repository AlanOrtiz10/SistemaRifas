@extends('layouts/layoutMaster')

@section('title', 'User Profile - Teams')

<!-- Page -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-profile.scss'])
@endsection


@section('content')
<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="user-profile-header-banner">
        <img src="{{ asset('assets/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-lg-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4 class="mb-2 mt-lg-6">John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 my-2">
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-palette ti-lg'></i><span class="fw-medium">UX Designer</span>
                </li>
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-map-pin ti-lg'></i><span class="fw-medium">Vatican City</span>
                </li>
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-calendar ti-lg'></i><span class="fw-medium"> Joined April 2021</span></li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary mb-1">
              <i class='ti ti-user-check ti-xs me-2'></i>Connected
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-sm-row mb-6 gap-2 gap-lg-0">
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-user')}}"><i class='ti ti-user-check me-1_5 ti-sm'></i> Profile</a></li>
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='ti ti-users me-1_5 ti-sm'></i> Teams</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-projects')}}"><i class='ti ti-layout-grid me-1_5 ti-sm'></i> Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-connections')}}"><i class='ti ti-link me-1_5 ti-sm'></i> Connections</a></li>
      </ul>
    </div>
  </div>
</div>
<!--/ Navbar pills -->

<!-- Teams Cards -->
<div class="row g-6">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/react-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">
              React Developers
            </div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">We don’t make assumptions about the rest of your technology stack, so you can develop new features...</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar">
              </li>
              <li class="avatar avatar-sm">
                <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="top" title="9 more">+9</span>
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">React</span></a>
            <a href="javascript:;"><span class="badge bg-label-info">MUI</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/vue-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">
              Vue.js Dev Team
            </div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">The development of Vue and its ecosystem is guided by an international team, some of whom have chosen.</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="John Doe" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Alan Walker" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar">
              </li>
              <li class="avatar avatar-sm">
                <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="top" title="14 more">+4</span>
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;" class="me-2"><span class="badge bg-label-success">Vuejs</span></a>
            <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/xd-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">Creative Designers</div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">A design or product team is more than just the people on it. A team includes the people, the roles they play.</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Ressula" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristi Lawker" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Danny Paul" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar">
              </li>
              <li class="avatar avatar-sm">
                <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="top" title="19 more">+2</span>
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;" class="me-1"><span class="badge bg-label-warning">Sketch</span></a>
            <a href="javascript:;"><span class="badge bg-label-danger">XD</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/support-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">
              Support Team
            </div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">Support your team. Your customer support team is fielding the good, the bad, and the ugly day in out.</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Andrew Tye" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Rishi Swaat" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Rossie Kim" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar">
              </li>
              <li class="avatar avatar-sm">
                <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="top" title="7 more">+7</span>
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;"><span class="badge bg-label-info">Zendesk</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/social-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">
              Digital Marketing
            </div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">Digital marketing refers to advertising delivered through digital channels such as search engines, websites…</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Merchent" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/10.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Sam D'souza" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/13.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nurvi Karlos" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">Twitter</span></a>
            <a href="javascript:;"><span class="badge bg-label-success">Email</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/event-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">
              Event
            </div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">Event is defined as a particular contest which is part of a program of contests. An example of an event is...</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/8.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar">
              </li>
              <li class="avatar avatar-sm">
                <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="top" title="2 more">+2</span>
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;"><span class="badge bg-label-success">Hubilo</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/figma-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">
              Figma Resources
            </div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">Explore, install, use, and remix thousands of plugins and files published to the Figma Community by designers.</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Andrew Mostowy" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Micky Ressula" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;" class="me-1"><span class="badge bg-label-success">UI/UX</span></a>
            <a href="javascript:;"><span class="badge bg-label-warning">Figma</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/react-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">Native Mobile App</div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">React Native lets you create truly native apps and doesn't compromise your users' experiences....</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar">
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;" class="me-1"><span class="badge bg-label-primary">React</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3 pb-1">
          <a href="javascript:;" class="d-flex align-items-center">
            <div class="avatar me-2">
              <img src="{{ asset('assets/img/icons/brands/html-label.png') }}" alt="Avatar" class="rounded-circle">
            </div>
            <div class="me-2 text-heading h5 mb-0">Only Beginners</div>
          </a>
          <div class="ms-auto">
            <ul class="list-inline mb-0 d-flex align-items-center">
              <li class="list-inline-item me-0"><a href="javascript:void(0);" class="d-flex align-self-center btn btn-icon btn-text-secondary rounded-pill"><i class="ti ti-star ti-md text-muted"></i></a></li>
              <li class="list-inline-item">
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical ti-md text-muted"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Rename Team</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Add to favorites</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete Team</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-3 pb-1">Learn the basics of how websites work, front-end vs back-end, and using a code editor.</p>
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kim Karlos" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Katy Turner" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Peter Adward" class="avatar avatar-sm pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar">
              </li>
              <li class="avatar avatar-sm">
                <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="top" title="8 more">+8</span>
              </li>
            </ul>
          </div>
          <div class="ms-auto">
            <a href="javascript:;" class="me-1"><span class="badge bg-label-info">CSS</span></a>
            <a href="javascript:;"><span class="badge bg-label-primary">HTML</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Teams Cards -->
@endsection
