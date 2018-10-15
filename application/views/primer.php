<select id="combobox_scenario" />

<script>
    $('#combobox_scenario').combobox({
        source: function(req,add) {
            $.ajax({
                url: "/index.php/primer/combodata",
                dataType:"json",
                success: function(data, textStatus, XMLHttpRequest){
                    add(data);
                }
            });

        }});
</script>