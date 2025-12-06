<footer>

    <div class="bg-dark py-5" id="footer_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="m-0 fs-5 text-white text-opacity-75">
                        &copy; <span id="currentYear"></span> <span class="fw-semibold text-white text-opacity-85">MD
                            WALID SHAHRIAR</span>. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>

</footer>

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection