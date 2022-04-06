<script type="text/javascript">
    function mostrar(id) {
        if (id == "X-01-01") {
            $("#X-01-01").show();
            $("#X-01-02").hide();
            $("#X-02-01").hide();
            $("#X-04-01").hide();
        }

        if (id == "X-01-02") {
            $("#X-01-01").hide();
            $("#X-01-02").show();
            $("#X-02-01").hide();
            $("#X-04-01").hide();
        }

        if (id == "X-02-01") {
            $("#X-01-01").hide();
            $("#X-01-02").hide();
            $("#X-02-01").show();
            $("#X-04-01").hide();
        }

        if (id == "X-04-01") {
            $("#X-01-01").hide();
            $("#X-01-02").hide();
            $("#X-02-01").hide();
            $("#X-04-01").show();
        }
    }
</script>
