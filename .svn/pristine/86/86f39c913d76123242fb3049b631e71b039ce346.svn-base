
function proveri_konto(){
    var konto = jQuery('.tipID option:selected').val();
    if(konto == 0) return 0;
    else return 1;
}
jQuery(".snimi-forma").live("click", function () {

    var forma = jQuery(this).closest("form");

    var formaction = forma.attr('action');
    var formmethod = forma.attr('method');
    var formflag = forma.attr('flag');
    if(formflag == "kasa") sredi_formatnumber_kasa();
    var izvrsi = jQuery(this).attr('izvrsi');

    if (forma.attr('enctype') == 'multipart/form-data' ) {
        forma.submit();
    } else {
        var poraka_uspesno = jQuery(this).attr('poraka_uspesno');
        var poraka_neuspesno = jQuery(this).attr('poraka_neuspesno');
        jQuery.ajax({
            type:formmethod,
            url:formaction,
            data:decodeURIComponent(jQuery(this).closest("form").serialize()),
            success:function (data) {
                if (jQuery.trim(data) == "ok")
                {
                    if (poraka_uspesno != "undefined" || typeof poraka_uspesno != "undefined")
                    {
                        popupmessage(poraka_uspesno);
                    }
                }
                else
                {
                    if (poraka_neuspesno != "undefined" || typeof poraka_neuspesno != "undefined")
                    {
                        popupmessage(poraka_neuspesno);
                    }
                }
                if (izvrsi != "" || izvrsi != "undefined")
                {
                    eval(izvrsi);
                }
            }
        });
    }

    if (jQuery(this).attr('zatvori_forma') != 0)
    {
        destroyparentdialog(jQuery(this));
    }

});

jQuery(".snimi-forma-upati").live("click", function () {

    var ovakopce = jQuery(this);
    ovakopce.attr("disabled", "disabled");

    var forma = jQuery(this).closest("form");
    var div = forma.closest("div");
    var div_klasa = div.attr("class");

    var formaction = forma.attr('action');
    var formmethod = forma.attr('method');
    var formflag = forma.attr('flag');
    if(formflag == "kasa") sredi_formatnumber_kasa();
    var izvrsi = jQuery(this).attr('izvrsi');

    if (forma.attr('enctype') == 'multipart/form-data' ) {
        forma.submit();
    } else {
        var poraka_uspesno = jQuery(this).attr('poraka_uspesno');
        var poraka_neuspesno = jQuery(this).attr('poraka_neuspesno');
        jQuery.ajax({
            type:formmethod,
            url:formaction,
            data:decodeURIComponent(jQuery(this).closest("form").serialize()),
            success:function (data) {
                console.log(data);
                if (data > 0)
                {
//                    jQuery('div.' + div_klasa).find("a.printlinkupati").removeClass("hide");
                    jQuery(".printlinkupati").removeClass("hide");
//                    jQuery('div.' + div_klasa).find(".printlinkupati").attr("href", jQuery('div.' + div_klasa).find(".printlinkupati").attr("href") + data);
                    jQuery(".printlinkupati").attr("href", jQuery(".printlinkupati").attr("href") + data);
                    if (poraka_uspesno != "undefined" || typeof poraka_uspesno != "undefined")
                    {
                        popupmessage(poraka_uspesno);
                    }
                }
                else
                {
                    if (poraka_neuspesno != "undefined" || typeof poraka_neuspesno != "undefined")
                    {
                        popupmessage(poraka_neuspesno);
                    }
                }
                if (izvrsi != "" || izvrsi != "undefined")
                {
                    eval(izvrsi);
                }
            }
        });
    }

//    if (jQuery(this).attr('zatvori_forma') != 0)
//    {
//        destroyparentdialog(jQuery(this));
//    }

});


function popupmessage(message) {
    var tempdialog = "dialog" + Math.floor((Math.random() * 1000) + 1);
    jQuery("body").append('<div class="' + tempdialog + '">' + message + '</div>');
    jQuery('div.' + tempdialog).dialog({
        autoOpen:true,
        width:"auto",
        title:"Порака:",
        position:"center",
        close:function (event, ui) {
            jQuery(this).dialog("destroy");
            jQuery(this).remove();
        }
    });
    var dialog = 'div.' + tempdialog;
    setTimeout("jQuery('" + dialog + "').parent().fadeOut(4000)", 1);
    setTimeout("jQuery('" + dialog + "').remove()", 5000);
}

//$('input').live("keypress", function(e) {
//    /* ENTER PRESSED*/
//    if (e.keyCode == 13) {
//        /* FOCUS ELEMENT */
//        var inputs = $(this).parents("form").eq(0).find(":input");
//        var idx = inputs.index(this);
//
//        if (idx == inputs.length - 1) {
//            inputs[0].select()
//        } else {
//            inputs[idx + 1].focus(); //  handles submit buttons
//            inputs[idx + 1].select();
//        }
//        return false;
//    }
//});
//jQuery("form").live("keypress",function(e){
//    if ( e.which == 13 ) // Enter key = keycode 13
//    {
//        var snimiforma= jQuery(this).find("snimi-forma");
//        if (snimiforma.length ==1){
//            snimiforma.click();
//        }
//        return false;
//    }
//
//});

//$('input, select, textarea, a, button').live('keydown', function(e) {
//    if (e.keyCode==13) {
//       // e.preventDefault();
//        var focusable = $('input, a, select, button, textarea').filter(':visible');
//        focusable.eq(focusable.index(this)+1).focus();
//        focusable.eq(focusable.index(this)+1).select();
//
//
//    }
//});