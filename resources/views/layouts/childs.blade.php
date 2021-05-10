    @foreach($childs as $child)
        <ul>
            <a  style="color: lightpink" href="/shop/{{$child->id}}">
                {{ $child->name }}
                @if(count($child->childs))
                    @include('layouts.childs',['childs' => $child->Childs])
                @endif
            </a>
        </ul>
    @endforeach
