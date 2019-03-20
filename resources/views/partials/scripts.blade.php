<script src="{{ asset('js/app-chateau.js') }}"></script>
<script>
    $(document).foundation();
</script>
<script>
    $('.datepicker').pickadate(
        { 
        format: 'dd-mm-yyyy',
        formatSubmit: 'yyyy-mm-dd' 
        }
        );
</script>