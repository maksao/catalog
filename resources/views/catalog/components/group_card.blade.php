<div class="card">
    <div class="card-body">
        <a href="{{ route('catalog.group',[$group['id'], $engine_id, Str::slug($group['name'])]) }}" class="card-title mb-0 h5">{{ \App\Group::getName($group) }}</a>
        <p class="card-text"><small class="text-muted">( {{ $group['name'] }} )</small></p>
        <div class="card-text">
            <ul>
                @foreach($group['subgroups'] as $subgroup)
                    <li>
                        <a href="{{ route('catalog.subgroup',[$subgroup['id'], $engine_id, Str::slug($subgroup['name'])]) }}" class="{{ $subgroup['important'] ? 'text-danger' : '' }}">
                            {{ \App\Group::getName($subgroup) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
