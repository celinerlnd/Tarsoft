@extends ('layouts.app')

@section('content')

<div class="container">
    <div class ="row-justify-content-center">
        <div class ="col-md-8">
            <div class ="card">
            @foreach ($user as $user)
            <h2> {{ $user -> name}} </h2>
           {{-- <p>{{$user->address->country}} </p>
            @endforeach --}}
            @foreach ($user -> addresses as $address)
            <p> {{ $user ->address->country}}</p>
            @endforeach
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection