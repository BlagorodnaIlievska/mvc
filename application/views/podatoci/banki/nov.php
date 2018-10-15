<div class="novabanka">
    <form action="/index.php/podatoci/banki/create_banka" method="post">
        <fieldset>


            <legend>Нова банка</legend>


            Име:<br/>
            <input type="text" name="ime"/><br/>

        </fieldset>
        <br/>

        <button type="button" class="button snimi-forma" izvrsi="banka_popolnilista()" poraka_uspesno="Банката е успешно снимена"
                poraka_neuspesno="Грешка при снимање на банка"
                ><span>Сними</span></button>


        <br/>
    </form>

</div>