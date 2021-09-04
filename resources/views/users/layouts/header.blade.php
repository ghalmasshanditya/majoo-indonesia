<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="height: 5em; background: #E4F0C5;">
    <div class="container-fluid">
    <a class="navbar-brand text-dark ml-4" style="margin-left: 5em" href="/">Majoo Teknologi Indonesia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @if (Auth::user())
    <strong>{{ Auth::user()->name }}</strong>
    @else
    <a href="{{ route('login') }}"><button class="btn btn-outline-primary">Sign In</button></a>
    @endif
    </div>
</nav>
