<div class="banka-glavnalista">
    <div class="bankalista">
        <div class="buttoncontainer">
            <button class="button" onclick="banka_nov()">Нова банка</button>
        </div>
        <div class="predtabela">
            <table class="tabela-bankalista">
                <thead>
                <tr>
                    <th width='25'></th>
                    <th> Име</th>

                </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        banka_popolnilista();
        jQuery(".tabela-bankalista").tablesorter();

        jQuery(".tabela-bankalista tbody tr").live('click', function () {
            jQuery(".tabela-bankalista tbody tr").removeClass("active");
            jQuery(this).addClass("active");

        });
        jQuery(".tabela-bankalista .edit-tr").live('click', function () {
            banka_izmeni(jQuery(this).parent().parent().attr('banka_id'));
        });
        jQuery(".tabela-bankalista .delete-tr").live('click', function () {
            banka_delete(jQuery(this).parent().parent().attr('banka_id'));
        });

    });
</script>