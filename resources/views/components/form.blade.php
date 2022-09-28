<form method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" name="title" class="form-control" >
      
    </div>
    <div class="mb-3">
        <label class="form-label">Sottotitolo</label>
        <input type="text" name="subtitle" class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea name="body" class="form-control" cols="30" rows="10" ></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select name="category_id" id="" class="form-control">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">img</label>
        <input type="file" class="form-control"  name="img" 
    </div>
    <button type="submit" class="btn btn-primary my-5">Submit</button>
  </form>