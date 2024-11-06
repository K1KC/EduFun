@include('import.bootstrap-link')
<div class="d-flex flex-column min-vh-100" style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover">
@include('layout.navbar')
<main class="flex-grow-1">
   @yield('content') 
</main>
@include('layout.footer')
</div>
@include('import.bootstrap-script')