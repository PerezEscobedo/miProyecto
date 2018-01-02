
@include('header')

<div class="row mt-3">
      <div class="col-8">

       <h1>  {{$title}} </li>
        <ul>
          @if(!empty($users))

          @foreach($users as $user)
            <li>{{$user}}</li>
             @endforeach
          @else
            <li>No hay usuarios registrados.</li>
          @endif

        </lu>
       </ul>
    </div>
            <div class="col-4">
            @include('sidebar')
            </div>
</div>



@include('footer')
