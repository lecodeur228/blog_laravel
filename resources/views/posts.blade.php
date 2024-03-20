@extends("template.index")

@section("content")
<div class="d-flex justify-content-between m-3">
    <h2>Listes des postes</h2>
    <a href="{{ route("add.post") }}" class="btn btn-primary">Ajouter un post</a>
</div>
    <div class="container d-flex m-3">
        @foreach ($posts as $post)
        <div class="card mt-2 me-4" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>

              {{-- <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> --}}
            </div>
          </div>
        @endforeach
    </div>
@endsection
