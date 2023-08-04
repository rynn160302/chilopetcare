@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'text-sm text-danger space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <small>{{ $message }}</small>
        @endforeach
    </div>
@endif
