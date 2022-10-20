<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button href="{{ route('logout') }}" type="submit" class="btn btn-primary">Déconnexion</button>

</form>