@props(['name', 'checked' => false, 'label' => null])
<x-acme::form.input :name="$name" :label="$label" component="toggle">
    <div x-data="{checked:{{ $checked ? 1 : 0 }}}">
        <button :id="$id('input')" type="button" :class="checked?'checked':''" @click.prevent.stop="checked=1-checked">
            <span></span>
        </button>
        <input type="hidden" name="{{ $name }}" :value="checked" {{ $attributes }} />
    </div>
</x-acme::input>
