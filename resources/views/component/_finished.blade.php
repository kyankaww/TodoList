<div class="container">
    <div class="d-flex row">
        @foreach($todoo as $todo)
        @if($todo['status'] == 1)
        <div class="my-4 mx-auto shadow rounded-3" id="wisnuu">
            <div class="card" id="wardhana">
                <div class="card-body">
                    <h5 class="card-title">{{ $todo->title }}</h5>
                    <p class="card-text">{{ $todo->description }}</p>
                    <div class="d-flex">
                        <form action="/delete/{{ $todo['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mx-2">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="mx-3 mb-3" id="kyanka">
                    <p class="text-muted">{{$todo['status'] ? 'finished' : 'on-progress'}} on <span>{{$todo['status'] ? \Carbon\Carbon::parse($todo->done_time)->format('j F, Y') :  \Carbon\Carbon::parse($todo->date)->format('j F, Y')}}
                    </span></p>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>