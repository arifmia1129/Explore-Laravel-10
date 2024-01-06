{{-- @if ($city && $country)
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
@endempty --}}


{{-- Raw php blade directive --}}

{{-- @php
    $username = 'arifmia';
    $password = '123456';
@endphp

@if ($username == 'arifmia' && $password == '123456')
<h1>Successfully logged in to your account. Congratulations!</h1>
@endif --}}


{{-- Loop blade directive --}}

{{-- for loop --}}
{{-- @for ($i = 1; $i <= 10; $i++)
    @for ($j = 1; $j <= 10; $j++)
        <p>{{ $i }} x {{ $j }} = {{ $i*$j }}</p>
    @endfor
    <br>
@endfor --}}

{{-- foreach loop --}}

@php
    $students = ['arif', 'shahin', 'soikat', 'sadik', 'hannan'];
    $teachers = ['Hasan', 'Al-Amin'];
@endphp

{{-- foreach loop --}}
{{-- @foreach ($students as $student)
    <h1>{{ ucwords($student) }}</h1>
    <br>
@endforeach --}}

{{-- forelse loop --}}
{{-- @forelse ($teachers as $teacher)
    <h1>{{ ucwords($teacher) }}</h1>
@empty
    <h1>No teachers information found.</h1>
@endforelse --}}

