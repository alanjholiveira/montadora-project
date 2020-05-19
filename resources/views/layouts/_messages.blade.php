@if (session('error'))
    <div class="alert alert-danger shadow">
        {{ session('error') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success shadow">
        {{ session('success') }}
    </div>
@endif
