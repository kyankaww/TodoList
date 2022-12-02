<!-- <div class="wrapper bg-white shadow">
    <div class="d-flex align-items-start justify-content-between">
        <div class="d-flex flex-column">
            <div class="h5">My Todo's</div>
            <p class="text-muted text-justify">
                Here's a list of activities you have to do
            </p>
            <br>
            <span>
                <a href="/maketodo" class="text-success">Create</a> <a href="">Complated</a>
            </span>
        </div>
        <div class="info btn ml-md-4 ml-0">
            <span class="fas fa-info" title="Info"></span>
        </div>
    </div>
    <div class="work border-bottom pt-3">
        <div class="d-flex align-items-center py-2 mt-1">
            <div>
                <span class="text-muted fas fa-comment btn"></span>
            </div>
            <div class="text-muted">{{ $todoo->count() }} Todoo</div>
            <button class="ml-auto btn bg-white text-muted fas fa-angle-down" type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments"></button>
        </div>
    </div>
    @foreach($todoo as $todo)
    <div id="comments" class="mt-1">
        <div class="comment d-flex align-items-start justify-content-between">
            <div class="mr-2 d-flex">
                <label class="option">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <div class="d-flex flex-column">
                    <a class="text-decoration-none text-dark" href="/edit/{{$todo['id']}}">
                        {{ $todo->title }}
                    </a>
                    <p>{{ $todo->description }}</p>
                    <p class="text-muted">Completed <span class="date"> {{\Carbon\Carbon::parse($todo->date)->format('j F, Y')}}
                        </span></p>
                </div>
            </div>

            <div class="ml-md-4 ml-0 justify-self-end">
                <a href="/delete/{{$todo['id']}}">
                <span class="fas fa-arrow-right btn"></span>
                </a>
            </div>
        </div>
        @endforeach
    </div> -->

<!-- <div class="container">
    <div class="row over">
        @foreach($todoo as $todo)
        <div class="col-4">
            <div class="card my-5 border-0 rounded shadow bg-warning">
                <div class="card-body">
                    <h5 class="card-title">{{ $todo->title }}</h5>
                    <p class="card-text">
                        {{ $todo->description }}
                    </p>
                    <p class="">Finished on <span>{{\Carbon\Carbon::parse($todo->date)->format('j F, Y')}}

                        </span></p>
                </div>
                <div class="card-body">
                    <a href="/edit/{{ $todo['id'] }}" class="btn btn-success">Edit</a>
                    <a href="/delete/{{ $todo['id'] }}" class="btn btn-danger mx-3">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> -->
<div class="container">
    <div class="d-flex row">
        @foreach($todoo as $todo)
        @if($todo['status'] == 0)
        <div class="my-4 mx-auto shadow rounded-3" id="wisnuu">
            <div class="card" id="wardhana">
                <div class="card-body">
                    <h5 class="card-title">{{ $todo->title }}</h5>
                    <p class="card-text">{{ $todo->description }}</p>
                    <div class="d-flex">
                        <a href="/edit/{{ $todo['id'] }}" class="btn btn-success">Edit</a>
                        <form action="/delete/{{ $todo['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mx-2">Delete</button>
                        </form>
                        <form action="complated/{{ $todo['id'] }}" method="POST">
                            @csrf
                            @method('patch')
                            <button type="submit" class="btn btn-primary">Done</button>
                        </form>
                    </div>
                </div>
                <div class="mx-3 mb-3" id="kyanka">
                    <p class="text-muted">{{$todo['status'] ? 'finished at' : 'on-progress, deadline at'}} <span>{{$todo['status'] ? \Carbon\Carbon::parse($todo->done_time)->format('j F, Y') :  \Carbon\Carbon::parse($todo->date)->format('j F, Y')}}
                    </span></p>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>