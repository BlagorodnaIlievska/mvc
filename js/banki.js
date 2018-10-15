
function banka_nov() {

    var formurl = "/index.php/podatoci/banki/nov";
    jQuery.ajax({
        url:formurl,
        type:'GET',
        data:{},
        success:function (response) {
            var tempdialog = "dialog" + Math.floor((Math.random() * 1000) + 1);
            jQuery("body").append('<div class="' + tempdialog + '"></div>');
            jQuery('div.' + tempdialog).html(response);
            jQuery('div.' + tempdialog).dialog({
                autoOpen:true,
                width:"auto",
                position:"center",
                title:"Нова банка",
                close:function (event, ui) {
                    // Remove the dialog elements
                    // Note: this will put the original div element in the dom
                    jQuery(this).dialog("destroy");
                    // Remove the left over element (the original div element)
                    jQuery(this).remove();
                }
            });

            //  jQuery(".korisnici-korisnikpostoi").change(function () {
            //     korisnici_proveridalipostoi(jQuery(this));
            // });
            // jQuery(".korisnici-korisnikpostoi").keyup(function () {
            //     korisnici_proveridalipostoi(jQuery(this));
            //  });
            //   jQuery(".tabela-artikli").trigger("update");


        }
    });
}


function banka_popolnilista() {
    var formurl = "/index.php/podatoci/banki/popolnilista";
    jQuery.ajax({
        url:formurl,
        type:'GET',
        data:{},
        dataType:'json',
        success:function (response) {
            //  console.log(response);
            jQuery(".tabela-bankalista tbody").html('');

            jQuery.each(response, function (index, item) {
                //  console.log(item);

                jQuery(".tabela-bankalista tbody").append(('<tr banka_id="' + item.id + '">' +
                    '<td>' +
                    '<a class="delete-tr" href="javascript:"><img width="15" height="15" alt="" src="/images/delete.png"></a>' +
                    '<a class="edit-tr" href="javascript:"><img width="15" height="15" alt="" src="/images/edit.png"></a>' +

                    '</td>' +
                    '<td>' + item.ime + '</td>' +

                    '</tr>'
                    ));
            });
            jQuery(".tabela-bankalista").trigger("update");


        }
    });
}


function banka_izmeni(bankaid) {
    var formurl = "/index.php/podatoci/banki/izmeni";
    var data = {  id:bankaid  }
    jQuery.ajax({
        url:formurl,
        type:'GET',
        data:data,
        success:function (response) {

            var tempdialog = "dialog" + Math.floor((Math.random() * 1000) + 1);
            jQuery("body").append('<div class="' + tempdialog + '"></div>');
            jQuery('div.' + tempdialog).html(response);
            jQuery('div.' + tempdialog).dialog({
                autoOpen:true,
                width:"auto",
                position:"center",
                title:"Измени банка",
                close:function (event, ui) {
                    // Remove the dialog elements
                    // Note: this will put the original div element in the dom
                    jQuery(this).dialog("destroy");
                    // Remove the left over element (the original div element)
                    jQuery(this).remove();
                }
            });

        }
    });

}

function banka_delete(bankaid){
    var r=confirm("Избриши банка");
    if (r==true)
    {
        var b=confirm("Дали сте сигурни?");
        if (b==true)
        {
            var formurl = "/index.php/podatoci/banki/delete_banka";
            var data = {  id:bankaid  }
            jQuery.ajax({
                url:formurl,
                type:'GET',
                data:data,
                success:function (response) {
                    banka_popolnilista();
                }
            });

        }
    }

}

