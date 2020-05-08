 <ul class="list-unstyled">
    @foreach ($tasks as $task)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="{{ Gravatar::src($task->user->email, 50) }}" alt="">
            <div class="media-body">
                <div>
                    {!! link_to_route('users.show', $task->user->name, ['id' => $task->user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($task->status)) !!}</p>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
                </div>
                <!--<div>-->
                <!--    @if (Auth::id() == $task->user_id)-->
                <!--    @include('tasks.create', ['tasks' => $tasks])-->
                <!--    @endif-->
                <!--</div>-->
                <div>
                <p>{!! link_to_route('tasks.index', 'Tasklist', ['id' => $user->id]) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $tasks->links('pagination::bootstrap-4') }}