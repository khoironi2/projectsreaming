<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">
        <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" aria-describedby="emailHelp">
              @error('gambar')
              <div class="alert alert-warning mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="video" class="form-label">video</label>
                <input type="file" class="form-control @error('video') is-invalid @enderror" name="video" id="video" aria-describedby="emailHelp">
                @error('video')
                <div class="alert alert-warning mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" aria-describedby="emailHelp">
                @error('nama')
                <div class="alert alert-warning mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="rating" class="form-label">rating</label>
                <input type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" id="rating" aria-describedby="emailHelp">
                @error('rating')
                <div class="alert alert-warning mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                {{-- <input type="text"  aria-describedby="emailHelp"> --}}
                @error('deskripsi')
                <div class="alert alert-warning mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>