<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Benvenuto nel Blog con autenticazione @auth{{Auth::user()->name}}@endauth</h1>
        </div>
    </div>
</div>
<div class="container my-4">
    <div class="row">

            @foreach($articles as $article)
                <div class="col-12 col-md-4 my-2">
                   <x-card :article="$article"/>
                </div>
            @endforeach
        </div>
    </div>
</div>


</x-layout>