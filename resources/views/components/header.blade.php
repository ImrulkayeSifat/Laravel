<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <!-- php artisan make:component Header -->
    <h1>This is Header Component</h1>
    <h3>hello {{$name}}</h3>
    <h3>Fruits are:</h3>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>