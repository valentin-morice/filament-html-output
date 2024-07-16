<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }"
>
    <template x-if="typeof state !== 'object'">
        <div x-html="state"></div>
    </template>
    @if($getHtml())
        {!! $getHtml() !!}
    @endif
</x-dynamic-component>
