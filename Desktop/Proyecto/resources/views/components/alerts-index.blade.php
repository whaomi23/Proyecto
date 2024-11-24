<div>
@if($message)
    <div class="alert alert-{{ $type ?? 'info' }}">
        {{ $message }}
    </div>
@endif
</div>