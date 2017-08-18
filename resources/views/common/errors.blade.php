@if (count($errors) > 0)
<div class="notification is-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
</div>
@endif