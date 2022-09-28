<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <a href="{{route('articles.for.user', $article->user)}}">
        <p class="card-text"> Scritto da {{$article->user->name}}</p>
      </a>
      <p class="card-text"> categoria : {{$article->category->name}}</p>

      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>