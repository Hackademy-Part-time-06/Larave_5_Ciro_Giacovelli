<x-main>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$corso['name']}}</h5>
          <p class="card-text">{{$corso['time']}}</p>
          <a href="{{route('contatti')}}" class="btn btn-primary">Contattaci per info</a>
        </div>
      </div>
</x-main>