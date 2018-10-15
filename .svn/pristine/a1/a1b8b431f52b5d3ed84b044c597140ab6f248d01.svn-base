<?php
function tabela($modul,$buttons,$collons)
{ ?> <div class="<?php echo $modul.'-glavna-lista';?>">

        <div class="buttoncontainer">

            <?php foreach($buttons as $action=>$caption){ ?>
                      <button type="button" value="" class="button" onclick="<?= $action ?>"><span><?= $caption?></span></button>
                  <?php  } ?>
        </div>

        <div class="tablecontainer">
            <table class="<?= $modul ?>-tabela" border="1" cellspacing="2" cellpadding="2">
                <thead>
                <tr>
                <?php foreach($collons as $class=>$caption){ ?>
                           <th class="<?= $class?>"><?= $caption ?></th>
                       <?php } ?>

                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
      </div>
<?php }

function pop_up_form($class_name,$form_action,$firmi,$start_model,$banki)
{?>
    <div class="$class_name">
        <form action="<?php echo $form_action ?>" method="post" accept-charset="utf-8">

            Фирма:<br />
            <select class="firmadropdown" name="firma_id">
                <?php 	foreach($firmi as $firma) { ?>
                <option class="firmafirma" value="<?php echo $firma->id ?>"><?php echo $firma->ime ?></option>

                <?php $odeli =$start_model->getOdeli($firma->id); ?>
                <?php 	foreach($odeli as $odel) { ?>
                    <option class="firmaodel" value="<?php echo $odel->id ?>"><?php echo $firma->ime ?>/<?php echo $odel->ime ?></option>

                    <?php $pododeli = $start_model->getPodOdeli($odel->id); ?>
                    <?php 	foreach($pododeli as $pododel) { ?>
                        <option class="firmapododel" value="<?php echo $pododel->id ?>"><?php echo $pododel->ime ?></option>
                        <?php
                    }
                }
            }	?>
            </select><br>
            Банка:<br />
            <select class="firmadropdown" name="banka_id">
                <?php 	foreach($banki as $banka) { ?>
                <option class="banka" value="<?php echo $banka->id ?>"><?php echo $banka->ime ?></option>

                <?php }	?>
            </select><br />

            Жиро сметка:<br />
            <input type="text" name="zirosmetka" value=""><br /><br />
            <button type="button" class="snimi-forma button" izvrsi="zirosmetki_popolni_lista()" poraka_uspesno="Жиросметката е снимен" poraka_neuspesno="Грешка">Сними</button>
        </form>
    </div>
<?php }


function input_form($modul,$item,$object,$mode,$inputs,$selects)
{?>
    <div class="input-form-"<?=$object['name']?>>
        <fieldset>
            <legend>
                <?php
                if($mode=="edit"){echo "Измени ".$object['caption'];}
                elseif($mode=="new") {echo "Нов ".$object['caption'];}
                ?>
            </legend>
            <form method="post" action="<?php
            if($mode=="edit"){echo "/index.php/vraboteni/vraboteni/update_vraboten";}
            elseif($mode=="new") {echo "/index.php/vraboteni/vraboteni/create_vraboten";}
            ?>" >

                <?php
                if($mode=="edit"){echo "<input type=\"hidden\" value=\"".$item->id."\" name=\"id\" />";}

                foreach($inputs as $name => $caption){
                    echo $caption.":<br/>";
                    echo "<input type=\"text\" class=\"".$name."\" name=\"".$name."\" value=\"".($mode=="edit" ? $item->$name : "")."/><br/>" ;
                } ?>



                <button type="button" class="snimi-forma button" izvrsi="vraboteni_popolnilista()" poraka_uspesno="Снимено" poraka_neuspesno="Грешка">Сними</button>
            </form>
        </fieldset>
     </div>
<?php } ?>