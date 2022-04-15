<h1>This Is Our Home Page</h1>
<br>

<h4>All Route List</h4>
<ul>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/services') }}">Services</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
    <li><a href="{{ url('/redirect') }}">Redirect</a></li>
    <li><a href="{{ url('/another') }}">Another Folder View</a></li>
    <li><a href="{{ url('/users/100') }}">Parametars 100</a></li>
    <li><a href="{{ route('name') }}">Named Route</a></li>
    <li><a href="{{ route('encripted') }}">Encripted Route</a></li>
    <li><a href="{{ route('namedid', ['id' => 100]) }}">Named Route With Parametars</a></li>
</ul>
