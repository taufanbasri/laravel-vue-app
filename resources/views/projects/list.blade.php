<ul>
    @foreach($projects as $p)
        <li>{{ $p->name }}</li>
    @endforeach
</ul>