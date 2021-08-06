@extends ('layouts.app')

@section('content')

<div class="container">
    <div class ="row-justify-content-center">
        <div class ="col-md-8">
            <div class ="card">
                @foreach ($posts as $post)
                <h1>{{$post -> title}} </h1>
                <p> {{$post ->user ->name}}</p>
                <ul>
                    @foreach ($post ->tags as $tag)
                    <li> {{$tag->name}} </li>
                    @endforeach
                </ul>
                @endforeach 
            </div>
        </div>
    </div>
</div>
@endsection