@if ($city && $country)
<h1>The city name is: {{ $city }}</h1>
<h1>The country name is: {{ $country }}</h1>
@elseif ($city)
<h1>Only city name is: {{ $city }}</h1>
@elseif ($country)
<h1>Only country name is: {{ $country }}</h1>
@else
<h1>There is no information about city and country</h1>
@endif

@isset($name)
    <h1>The user name is: {{ $name }}</h1>
@endisset

@empty($name)
    <h1>The user name is not provided</h1>
@endempty
