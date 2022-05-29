<script type="text/javascript">
    function mostrar6(id) {
        if (id == "vi") {
            $("#vi").show();
            $("#vi-01").hide();
        }
        if (id == "vi-01") {
            $("#vi").hide();
            $("#vi-01").show();
        }
    }
    
    function mostrars6(id) {
        if (id == "VI-01-01") {
            $("#VI-01-01").show();
            $("#VI-01-03").hide();
            $("#VI-02-04").hide();
        }

        if (id == "VI-01-03") {
            $("#VI-01-01").hide();
            $("#VI-01-03").show();
            $("#VI-02-04").hide();
        }

        if (id == "VI-02-04") {
            $("#VI-01-01").hide();
            $("#VI-01-03").hide();
            $("#VI-02-04").show();
        }
    }


</script>
