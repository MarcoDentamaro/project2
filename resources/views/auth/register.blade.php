<x-layout>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1>Registrati</h1>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <form method="post" action="{{route('register')}}">
            @csrf
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputEmail1">
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
      </div>
      
      <button type="submit" class="btn btn-primary">Registrati</button>
    </form>

            
        </div>
    </div>
</div>


</x-layout>