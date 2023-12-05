<!-- THIS APP PAGE YIELD USER AND QUEST CONTENT -->


{{-- Header --}}
@include('partials.header')

{{-- TopNav --}}
@include('partials.topbar')

{{-- NavBar --}}
@include('partials.navbar')

<div>
    <h5>Success Message</h5>
    {{ session('success') }}
    {{ Auth::user() }}
</div>
<div>
    <h5>Error Message</h5>
    {{ session('error') }}
</div>
<div>
    <form action="{{ route('auth.logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>

{{-- Yield Content --}}
@yield('content')



{{-- Footer --}}
@include('partials.footer')
