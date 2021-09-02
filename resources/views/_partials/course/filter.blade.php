<div id="{{$id}}" class="{{$isCollapse ? 'collapse':''}}">


    <ul class="list-group list-group-flush mt-3">
        <li class="list-group-item bg-transparent text-uppercase font-weight-bold border-0 mb-0">
            <a class="text-zircon" href="{{route('web.courses.all')}}">
                {!!  __('courses/index.all') !!}
            </a>
        </li>
        <li class="list-group-item bg-transparent text-uppercase font-weight-bold border-0">
            <a class="text-zircon" href="{{route('web.courses.all',['best-rate' => true])}}">
                {!!  __('courses/index.rate') !!}
            </a>
        </li>
    </ul>
    <h4 class="text-secondary-two font-weight-bold mt-3">
        {!!  __('courses/index.categories') !!}
    </h4>
    <hr class="bg-zircon">

    <ul class="list-group list-group-flush">
        @foreach($categories as $category)
            <li class="list-group-item bg-transparent text-uppercase font-weight-bold border-0 mb-0">
                <a class="text-zircon"
                   href="{{route('web.courses.all',['category' => $category->seo->slug])}}">
                    {{$category->name}}
                </a>
            </li>
        @endforeach
    </ul>


    <h4 class="text-secondary-two font-weight-bold mt-3">
        {!!  __('courses/index.price') !!}
    </h4>
    <hr class="bg-zircon">

    <ul class="list-group list-group-flush mt-3">
        <li class="list-group-item  text-uppercase font-weight-bold border-0 mb-0">
            <a class="text-zircon" href="{{route('web.courses.all',['free'=>true])}}">
                {!!  __('courses/index.free') !!}
            </a>
        </li>
        <li class="list-group-item  text-uppercase font-weight-bold border-0 mb-0">
            <a class="text-zircon" href="{{route('web.courses.all',['higher_price'=>true])}}">
                {!!  __('courses/index.higher_price') !!}
            </a>
        </li>
        <li class="list-group-item  text-uppercase font-weight-bold border-0">
            <a class="text-zircon" href="{{route('web.courses.all',['lower_price'=>true])}}">
                {!!  __('courses/index.lower_price') !!}
            </a>
        </li>

    </ul>
</div>
