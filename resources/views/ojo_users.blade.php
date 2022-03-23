
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<h2>Users List</h2>

<p>Users of the system</p>

<table class="table table-bordered">

<thead>

<tr>

<th>user</th>

</tr>

</thead>

<tbody>

@foreach($list as $key=>$value){
  <tr>
<td>{{$value->name}}</td>

  </tr>
}@endforeach
