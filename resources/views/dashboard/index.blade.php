@if(auth()->check())
   
    {{ auth()->user()->jenis_kelamin }}
    {{ auth()->user()->tempat_lahir }}


@endif
@auth
<h1>Welcom Back  {{ auth()->user()->nama }}</h1>
<form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
@else
 <a href="/login">Login</a>
@endauth