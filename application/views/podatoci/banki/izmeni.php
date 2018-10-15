<div class="novabanka">
    <form action="/index.php/podatoci/banki/update_banka" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $banka->id  ?>"/>

            <legend>Измени банка</legend>
            Име:<br/>
            <input type="text" name="ime" value="<?php echo $banka->ime ?>"/><br/>

        </fieldset>
        <br/>

        <button type="button" class="button snimi-forma" izvrsi="banka_popolnilista()" poraka_uspesno="Банката е успешно изменета"
                poraka_neuspesno="Грешка при снимање на банка"
                ><span>Сними</span></button>

        <br/>
    </form>

</div>