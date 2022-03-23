@if (Session::has('error'))

        <div class="alert alert-danger mt-2">{{ Session::get('error') }}
        </div>

        @endif
<div class="">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><i class="fas fa-paw fa-3x"></i>Complaint Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('barchart')}}"><i class="fas fa-tachometer-alt fa-2x"></i>Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>


      <li class="nav-item">
            <a class="nav-link" href="{{route('dviewtickets')}}">  <i class="fas fa-ticket-alt fa-2x"></i> All Tickets</a>
          </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('ojo_users')}}"><i class="fas fa-user-alt fa-2x"></i>Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ojo_listemails')}}"><i class="far fa-envelope fa-2x"></i>E-Mails</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" routerLink="#"><i class="fas fa-cogs fa-2x"></i>Settings</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}"><i class="fas fa-user-lock fa-2x"></i>Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fa fa-car fas fa-user-lock fa-2x"></i>Login</a>
        </li>



    </div>
  </nav>
  <section>
  <p>bar chart here</p>
  </section>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</div>
