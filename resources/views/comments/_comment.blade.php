<li>
    <div>
      <h5>
        <span class="glyphicon glyphicon-user"></span>{{ $comment->name }}
        <span class="glyphicon glyphicon-time"></span>
        {{ $comment->created_at->diffForHumans()}}
      </h5>
      <p>{{ $comment->content }}</p>
    </div>
</li>