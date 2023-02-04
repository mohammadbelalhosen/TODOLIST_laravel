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
            TODOLIST
        </div>
        <div class="card-body">
            {{-- form start --}}
            <form action="{{ route('todolist.addlist') }}" method="post">
                @csrf
                <div class="row align-items-center">
                    <div class="col-10">
                        <input class="form-control" type="text" name="task" placeholder="Enter Your Task...">
                    </div>
                    <div class="col">
                        <button class="btn btn-info" type="submit" name="submit"><i
                                class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </form>
            {{-- form end --}}
            @error('task')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <ul class="list-group mt-3 ">
                @foreach ($datas as $key=> $data)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{++$key . ' : '}}
                        {{$data->task }}
                        <span>
                            <a class="btn" href="{{ route('todolist.edit', $data->id) }}"><i
                                    class="fas text-info fa-edit">
                                </i></a>
                            <form class="d-inline" action="{{ route('todolist.delete', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn"><i
                                        class="fas text-danger fa-trash"></i></button>
                            </form>
                        </span>
                    </li>
                @endforeach 
                @if (count($datas) == 0)
                    <span class="m-auto">No Task Hare..</span>
                @endif
            </ul>
            @if (count($datas) > 0)          
            <form action="{{route('todolist.deleteall')}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mt-3" type="submit" name="submit">Delete All</button>                
            </form>               
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
