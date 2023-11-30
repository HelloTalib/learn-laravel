

<h3>
    @if (!empty($about))
        <span style="color: red"> {{ $about['name'] }} </span><br>
        <span style="color: red"> {{ $about['version'] }} </span><br>
        <span style="color: red"> {{ $about['author'] }} </span> <br>
        <span style="color: red"> {{ $about['website'] }} </span> <br>
    @endif
</h3>