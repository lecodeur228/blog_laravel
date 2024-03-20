@extends("template.index")

@section('content')

<center>
    <div class="card col-lg-6 col-sm-6 col-6 mt-5 p-3">
        <form action="{{ route("store.post") }}" method="POST">
            @csrf
            @method("POST")
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Titre de mon post</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error("title")
              <strong class="text text-danger">{{$message}}</strong>
              @enderror
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea name="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2"></label>
                  </div>
                  @error("content")
              <strong class="text text-danger">{{$message}}</strong>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
    </div>
</center>


@endsection
