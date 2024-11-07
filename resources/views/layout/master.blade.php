@include('import.bootstrap-link')
<div class="d-flex flex-column min-vh-100">
@include('layout.navbar')
<main class="flex-grow-1 overflow-x-hidden">
   @yield('content') 
</main>
@include('layout.footer')
</div>
@include('import.bootstrap-script')