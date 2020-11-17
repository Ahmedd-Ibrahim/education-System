@if (session('success'))
    <script>
        $.toast({
            heading: 'Success',
            text: "{{ session('success') }}",
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    </script>
@endif

@if (session('error'))
    <script>
        $.toast({
            heading: 'Something Wrong',
            text: "{{ session('error') }}",
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500
        });
    </script>
@endif
