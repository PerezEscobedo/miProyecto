
@include('header')

<div class="row mt-3">
      <div class="col-8">
        <li>
          <li>

       <li></li>
       <li></li>
              <h1> el valor es #{{$id}} </h1>
              <li> aqui va un titulo {{$titulo}}</li>
       <li></li>
<li> le pesa todo {{$id}} </li>

    </div>
            <div class="col-4">
              <li></li>
              <li></li>
            @include('sidebar')
            </div>
</div>

@include('footer')
