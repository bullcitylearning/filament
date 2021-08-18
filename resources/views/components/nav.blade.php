<nav aria-label="primary" {{ $attributes }}>
    <ol>
        @foreach($items as $group)
        @if($group[0]->group)
        <li>
            {{$group[0]->group}}
        </li>
        <ol>
            @endif
            @foreach ($group as $item)
            <li>
                <x-filament::nav-link
                    :active-rule="$item->activeRule"
                    :icon="$item->icon"
                    :label="$item->label"
                    :url="$item->url"
                />
            </li>
            @endforeach
            @if($group[0]->group)
        </ol>
        @endif
        @endforeach
    </ol>
</nav>
