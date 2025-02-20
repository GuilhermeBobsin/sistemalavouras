@foreach($plantios as $plantio)
    <div>
        <h3>{{ $plantio->produto }}</h3>
        <h3>{{ $plantio->quantidade_bandeijas }}</h3>
        <p>{{ $plantio->created_at->format('d/m/Y') }}</p>

        <a href="{{ url('plantios/'.$plantio->id.'/edit') }}">Edit</a>
        <form action="{{ url('plantios/'.$plantio->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach