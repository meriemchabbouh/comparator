
<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/common_scripts_min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>


@if (notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            type: "{{ notify()->type() }}",
            @if (notify()->option('timer'))
                timer: {{ notify()->option('timer') }},
                showConfirmButton: false
            @endif
        });
    </script>
@endif