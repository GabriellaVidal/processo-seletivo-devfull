<script>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            swal('Oops...', '{{ $error }}', 'error')
        @endforeach
    @endif

    @if (session('flash_error'))
        swal('Oops...', '{!! session('flash_error') !!}', 'error')
    @endif

    @if (session('flash_info'))
        swal('Importante!', '{{ session('flash_info') }}', 'info')
    @endif

    @if (session('flash_warning'))
        swal('Atenção!', '{{ session('flash_warning') }}', 'warning')
    @endif

    @if (session('flash_success'))
        swal('Sucesso!', '{{ session('flash_success') }}', 'success')
        @php 
            session()->forget('flash_success') 
        @endphp
    @endif
</script>