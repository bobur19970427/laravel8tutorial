<div>
    <h1>
        This is Header Component
    </h1>
    <h2>
        hello {{$name}}
    </h2>
    <h3>Fruits are:</h3>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>

</div>
