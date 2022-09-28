<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Articoli scritti da {{$user->name}}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($user->articles as $article)
        <div class="col-12 col-md-4 my-2">
           <x-card :article="$article"/>
        </div>
        @endforeach
    </div>
</div>


</x-layout>