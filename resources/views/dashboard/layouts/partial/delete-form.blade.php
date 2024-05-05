<form action="{{ $route }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="{{ $classes ?? 'form-control btn btn-danger' }}">{!! $title ?? '<i class="fa-solid fa-trash"></i>' !!}</button>
</form>
