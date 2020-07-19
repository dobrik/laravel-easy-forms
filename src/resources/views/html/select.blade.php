<div class="form-group">
    <?php $current_value = Illuminate\Support\Arr::pull($attributes ,'value') ?>
    <?php $not_empty = Illuminate\Support\Arr::pull($attributes ,'not_empty', false) ?>
    @if($label = Illuminate\Support\Arr::pull($attributes ,'title'))
        <label for="{{ $attributes['id'] or $attributes['name'] }}">{{ $label }}</label>
    @endif
    <select @forelse($attributes as $attr_name => $attr_value) {{ $attr_name }}="{{ $attr_value }}" @empty @endforelse >
        @if(!$not_empty) <option></option> @endif
    @if($current_value instanceof \Illuminate\Support\Collection)
        @forelse($values as $value => $title)
            <option
                    @if($current_value->where('id', $value)->first())
                    selected
                    @endif
                    value="{{ $value }}">{{ $title }}</option>
        @empty
        @endforelse
    @else
        @forelse($values as $value => $title)
            <option
                    @if($current_value === $value)
                    selected
                    @endif
                    value="{{ $value }}">{{ $title }}</option>
            @empty
        @endforelse
    @endif
    </select>
@if($errors->has(arrayToDot($attributes['name'])))
<div class="input_error text-danger select">{{ $errors->first(arrayToDot($attributes['name'])) }}</div>
@endif
</div>