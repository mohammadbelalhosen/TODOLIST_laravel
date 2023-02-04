<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Todolist</title>
</head>

<body>
    <div class="card mt-3 w-50 m-auto ">
        <div class="card-header text-center h3 bg-info">
            Edit TODOLIST
        </div>
        <div class="card-body">
            <form action="{{ route('todolist.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row align-items-center">
                    <div class="col-10">
                        <input class="form-control" type="text" name="task" value="{{ $data->task }}">
                    </div>
                    <div class="col">
                        <button class="btn btn-info" type="submit" name="submit"><i class="fa fa-refresh"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
            @error('task')
                {{ $message }}
            @enderror
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>
