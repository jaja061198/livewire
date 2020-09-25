@extends('layouts.app')

@section('header-assets')
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <style>
    /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-ball-scale-pulse,
.la-ball-scale-pulse > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-ball-scale-pulse {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-ball-scale-pulse.la-dark {
    color: #333;
}
.la-ball-scale-pulse > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-ball-scale-pulse {
    width: 32px;
    height: 32px;
}
.la-ball-scale-pulse > div {
    position: absolute;
    top: 0;
    left: 0;
    width: 32px;
    height: 32px;
    border-radius: 100%;
    opacity: .5;
    -webkit-animation: ball-scale-pulse 2s infinite ease-in-out;
       -moz-animation: ball-scale-pulse 2s infinite ease-in-out;
         -o-animation: ball-scale-pulse 2s infinite ease-in-out;
            animation: ball-scale-pulse 2s infinite ease-in-out;
}
.la-ball-scale-pulse > div:last-child {
    -webkit-animation-delay: -1.0s;
       -moz-animation-delay: -1.0s;
         -o-animation-delay: -1.0s;
            animation-delay: -1.0s;
}
.la-ball-scale-pulse.la-sm {
    width: 16px;
    height: 16px;
}
.la-ball-scale-pulse.la-sm > div {
    width: 16px;
    height: 16px;
}
.la-ball-scale-pulse.la-2x {
    width: 64px;
    height: 64px;
}
.la-ball-scale-pulse.la-2x > div {
    width: 64px;
    height: 64px;
}
.la-ball-scale-pulse.la-3x {
    width: 96px;
    height: 96px;
}
.la-ball-scale-pulse.la-3x > div {
    width: 96px;
    height: 96px;
}
/*
 * Animation
 */
@-webkit-keyframes ball-scale-pulse {
    0%,
    100% {
        -webkit-transform: scale(0);
                transform: scale(0);
    }
    50% {
        -webkit-transform: scale(1);
                transform: scale(1);
    }
}
@-moz-keyframes ball-scale-pulse {
    0%,
    100% {
        -moz-transform: scale(0);
             transform: scale(0);
    }
    50% {
        -moz-transform: scale(1);
             transform: scale(1);
    }
}
@-o-keyframes ball-scale-pulse {
    0%,
    100% {
        -o-transform: scale(0);
           transform: scale(0);
    }
    50% {
        -o-transform: scale(1);
           transform: scale(1);
    }
}
@keyframes ball-scale-pulse {
    0%,
    100% {
        -webkit-transform: scale(0);
           -moz-transform: scale(0);
             -o-transform: scale(0);
                transform: scale(0);
    }
    50% {
        -webkit-transform: scale(1);
           -moz-transform: scale(1);
             -o-transform: scale(1);
                transform: scale(1);
    }
}
  </style>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Clients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clients</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

      <div class="container-fluid">

        <div class="row">

          @livewire('client')

        </div>
          @livewire('client-edit')
<!-- /.row -->
</div><!-- /.container-fluid -->

</div>
<!-- /.content -->
</div>




@endsection

@section('footer-assets')
  <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    window.addEventListener('openEditModal', event => {
      $('#modal-lg').modal('show');
      // Toast.fire({
      //   icon: 'success',
      //   title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      // })

    });

    window.addEventListener('closeEditModal', event => {
      $('#modal-lg').modal('hide');
    });

    window.addEventListener('openAddModal', event => {
      $('#modal-lg-add').modal('show');
    });

    window.addEventListener('closeAddModal', event => {
      $('#modal-lg-add').modal('hide');
    });


    window.addEventListener('successToastInsert', event => {
      Toast.fire({
        icon: 'success',
        title: 'Insert Success.'
      })
    })

    window.addEventListener('successToastUpdate', event => {
      Toast.fire({
        icon: 'success',
        title: 'Update Success.'
      })
    })

  </script>

@endsection
