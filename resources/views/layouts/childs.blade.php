    @foreach($childs as $child)
        <li>
            <a href="/shop/{{$child->id}}">
                {{ $child->name }}
                @if(count($child->childs))
                    @include('layouts.childs',['childs' => $child->Childs])
                @endif
            </a>
        </li>
    @endforeach
