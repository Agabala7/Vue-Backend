<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <title></title>
</head>
<body>
    
    <div class="container">
        <div class="content">
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading mt-5">Tərçümə əlavə et</h2>
                    @if (isset($errors))
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif 
                    @endif
                    <form action="{{ route('addTranslateApiPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="title">Başlıq</label>
                          <input type="text" class="form-control" id="title" name="title" />
                        </div>
                        <div class="form-group">
                          <label for="contents">Tərçümə Məzmunu</label> <br />
                          <textarea class="form-control" name="contents" id="contents" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Təsdiq Et</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>