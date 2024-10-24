@extends("layouts.app")

@section("page-title")

@section("main-content")
<h1>
        Movies:
</h1>
{{--@dd($movies);
  #attributes: array:6 [▼
        "id" => 3
        "title" => "Psycho"
        "original_title" => "Psycho"
        "nationality" => "american"
        "date" => "1960-06-16"
        "vote" => 9.4
      ]--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
          @forelse($movies as $movie)
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{$movie->title}}</h4>
                  <h6 class="card-text">{{$movie->nationality}}</h6>
                  <p class="card-text">{{$movie->date}}</p>
                  <p class="card-text">{{$movie->vote}}</p>
                
                  
                </div>
                @empty
                <p>no movies available!</p>
                @endforelse
              </div>

        </div>
    </div>
</div>
@endsection
