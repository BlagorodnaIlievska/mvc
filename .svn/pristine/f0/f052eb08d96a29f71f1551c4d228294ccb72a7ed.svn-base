<?php

function acl_SitePermisii()
{
    $korisnik_access = array("levo_meni_finansisko_rabotenje_celo",
        "levo_meni_finansisko_rabotenje_pocetna",
        "levo_meni_finansisko_rabotenje_vlezni_fakturi",
        "levo_meni_finansisko_rabotenje_izlezni_fakturi",
        "levo_meni_finansisko_rabotenje_izvodi",
        "levo_meni_finansisko_rabotenje_karticki",
        "levo_meni_finansisko_rabotenje_kasa",
        "levo_meni_finansisko_rabotenje_materijalno",
        "levo_meni_finansisko_rabotenje_izvestai",
        "levo_meni_finansisko_rabotenje_knizenje",
        "levo_meni_finansisko_rabotenje_javni_nabavki",

        "levo_meni_bolnicko_rabotenje_celo",
        "levo_meni_bolnicko_rabotenje_pacienti",
        "levo_meni_bolnicko_rabotenje_lekuvanja",
        "levo_meni_bolnicko_rabotenje_shalter",

        "levo_meni_planiranje_celo",
        "levo_meni_planiranje_finansiski_plan",
        "levo_meni_planiranje_covecki_resursi",
        "levo_meni_planiranje_smensko_planiranje",
        "levo_meni_planiranje_plati",

        "levo_meni_sistemsko_celo",
        "levo_meni_sistemsko_finansisko_rabotenje_podatoci",
        "levo_meni_sistemsko_bolnicko_podatoci",
        "levo_meni_sistemsko_korisnici",
        "levo_meni_sistemsko_planiranje_resursi",

        "vlezni_fakturi_pregled_na_vlezni_fakturi_menu",
        "vlezni_fakturi_pregled_na_dospeanost_fakturi_menu",
        "vlezni_fakturi_period_klient_fakturi_menu",

        "vlezni_fakturi_pregled_na_vlezni_fakturi_detalen_pregled_tab",

        "vlezni_fakturi_pregled_na_vlezni_detalen_pregled_nova_faktura_button",
        "vlezni_fakturi_pregled_na_vlezni_detalen_pregled_baraj_faktura_button",
        "vlezni_fakturi_pregled_na_vlezni_detalen_pregled_pecati_faktura_button",

        "vlezni_fakturi_pregled_na_vlezni_fakturi_grupen_pregled_tab",

        "vlezni_fakturi_pregled_na_vlezni_grupen_pregled_pecati_faktura_button",

        "vlezni_fakturi_pregled_po_dospeanost_komintent",
        "vlezni_fakturi_pregled_po_dospeanost_pecati_idnina_button",
        "vlezni_fakturi_pregled_po_dospeanost_pecati_denes_button",
        "vlezni_fakturi_pregled_po_dospeanost_pecati_minato_button",

        "vlezni_fakturi_period_klient_komitent_data",
        "vlezni_fakturi_period_klient_pecati_button",

        "izlezni_fakturi_pregled_izlezni_fakturi_menu",
        "izlezni_fakturi_pregled_dospeanost_menu",
        "izlezni_fakturi_period_klient_menu",

        "izlezni_fakturi_pregled_izlezni_fakturi_detalen_pregled_nova_faktura_button",
        "izlezni_fakturi_pregled_izlezni_fakturi_detalen_pregled_nova_faktura_fzom_button",
        "izlezni_fakturi_pregled_izlezni_fakturi_detalen_pregled_nova_faktura_ministerstvo_button",
        "izlezni_fakturi_pregled_izlezni_fakturi_detalen_pregled_pecati_button",
        "izlezni_fakturi_pregled_izlezni_fakturi_detalen_pregled_baraj_button",

        "izlezni_fakturi_pregled_izlezni_fakturi_grupen_pregled_pecati_button",

        "izlezni_fakturi_pregled_dospeanost_komitent_pacient",
        "izlezni_fakturi_pregled_dospeanost_pecati_idnina_button",
        "izlezni_fakturi_pregled_dospeanost_pecati_denes_button",
        "izlezni_fakturi_pregled_dospeanost_pecati_minato_button",

        "izlezni_fakturi_period_klient_komitent_pacient_data",
        "izlezni_fakturi_period_klient_pecati_button",

        "izvodi_pregled_izvodi_tab",
        "izvodi_prebaruvanje_izvodi_tab",

        "izvodi_pregled_izvodi_nov_izvod_button",
        "izvodi_pregled_izvodi_baraj_button",
        "izvodi_pregled_izvodi_nova_stavka_button",

        "karticki_kartica_klient_form_filter_po_komitent",
        "karticki_kartica_klient_form_filter_po_vlez_izlez",
        "karticki_kartica_klient_form_pecati_kartica",

        "kasa_vlez_izlez_tab",
        "kasa_pregled_na_kasa_tab",
        "kasa_vlez_izlez_nov",
        "kasa_vlez_izlez_pecati",
        "kasa_vlez_izlez_kasov_izvestaj",
        "kasa_vlez_izlez_baraj",
        "kasa_vlez_izlez_pecati_kasa",
        "kasa_vlez_izlez_filter_period_od_do",
        "kasa_vlez_izlez_filter_po_kasa",
        "kasa_vlez_izlez_prikaz_momentalna_sostojba",
        "kasa_pregled_na_kasa_pecati",
        "kasa_pregled_na_kasa_baraj",
        "kasa_pregled_na_kasa_filter_po_komitent",
        "kasa_pregled_na_kasa_filter_po_kasa",


        "materijalno_vlez_izlez_tab",
        "materijalno_vlez_izlez_vlez_tab",
        "materijalno_vlez_izlez_vlez_nova_priemnica",
        "materijalno_vlez_izlez_vlez_filter_po_magacin",
        "materijalno_vlez_izlez_vlez_filter_po_komitent",
        "materijalno_vlez_izlez_vlez_filter_po_faktura",
        "materijalno_vlez_izlez_vlez_pecati_priemnica",
        "materijalno_vlez_izlez_vlez_pecati_priemnica_stavki_vo_dokument",

        "materijalno_vlez_izlez_izlez_tab",
        "materijalno_vlez_izlez_interni_tab",
        "materijalno_vlez_izlez_kartici_tab",

        "materijalno_vlez_izlez_izlez_nova_ispratnica_button",
        "materijalno_vlez_izlez_izlez_pecati_ispratnici_button",
        "materijalno_vlez_izlez_izlez_pecati_stavki_button",

        "materijalno_vlez_izlez_interni_interna_ispratnica_button",
        "materijalno_vlez_izlez_interni_interna_pecati_ispratnici_button",
        "materijalno_vlez_izlez_interni_interna_pecati_stavki_button",

        "materijalno_vlez_izlez_kartici_pecati_button",

        "materijalno_magacin_tab",
        "materijalno_magacin_filter_po_magacin",
        "materijalno_magacin_filter_po_artikl",
        "materijalno_magacin_pecati",

        "materijalno_popis_tab",
        "materijalno_popis_nov_popis_kopce",

        "knizenje_pregled_na_nalozi_tab",
        "knizenje_nov_nalog_kopce",
        "knizenje_pecati_nalog_kopce",

        "knizenje_pregled_po_konto_tab",

        "bolnicko_rabotenje_pacienti_lista_tab",
        "bolnicko_rabotenje_pacienti_priem_tab",

        "bolnicko_lekuvanje_lekuvanje_pregled_button",
        "bolnicko_lekuvanje_lekuvanje_pregled_pocetna_sostojba_button",
        "bolnicko_lekuvanje_lekuvanje_pregled_pregled_button",
        "bolnicko_lekuvanje_lekuvanje_terapija_button",
        "bolnicko_lekuvanje_lekuvanje_naodi_button",
        "bolnicko_lekuvanje_lekuvanje_naodi_laboratoriski_naodi_button",
        "bolnicko_lekuvanje_lekuvanje_naodi_radiodijagnosticki_naodi_button",
        "bolnicko_lekuvanje_lekuvanje_naodi_rezultati_biohemiski_analizi_button",
        "bolnicko_lekuvanje_lekuvanje_operacija_button",
        "bolnicko_lekuvanje_lekuvanje_anestezija_button",
        "bolnicko_lekuvanje_lekuvanje_upati_button",
        "bolnicko_lekuvanje_lekuvanje_interklinicki_upat_button",
        "bolnicko_lekuvanje_lekuvanje_interbolnicki_upat_button",
        "bolnicko_lekuvanje_lekuvanje_interoddelenski_upat_button",
        "bolnicko_lekuvanje_lekuvanje_upat_radiodijagnostika_button",
        "bolnicko_lekuvanje_lekuvanje_laboratoriski_upat_button",
        "bolnicko_lekuvanje_lekuvanje_bolnicki_upat_button",
        "bolnicko_lekuvanje_lekuvanje_potvrda_smrt_button",
        "bolnicko_lekuvanje_lekuvanje_otpusna_lista_button",
        "bolnicko_lekuvanje_lekuvanje_uslugi_button",
        "bolnicko_lekuvanje_lekuvanje_uslugi_uslugi_button",
        "bolnicko_lekuvanje_lekuvanje_uslugi_dopolnitelni_uslugi_button",
        "bolnicko_lekuvanje_lekuvanje_baraj_button",

        "planiranje_resursi_finansiski_plan_tab",
        "planiranje_resursi_pregled_trosoci_tab",

        "planiranje_resursi_finansiski_plan_nova_button",

        "planiranje_resursi_covecki_resursi_nov_vraboten_button",
        "planiranje_resursi_covecki_resursi_baraj_button",
        "planiranje_resursi_covecki_resursi_print_button",

        "planiranje_resursi_mesecni_parametri_tab",
        "planiranje_resursi_mesecni_promeni_vraboteni_tab",
        "planiranje_resursi_krediti_tab",
        "planiranje_resursi_plati_tab",

        "planiranje_resursi_mesecni_parametri_nov_button",

        "planiranje_resursi_mesecni_promeni_vraboteni_nova_mesecna_presmetka_button",
        "planiranje_resursi_mesecni_promeni_vraboteni_baraj_button",

        "planiranje_resursi_krediti_nov_kredit_button",

        "planiranje_resursi_plati_plata_button",
        "planiranje_resursi_plati_pecati_button",

        "sistemsko_podesuvanje_pocetno_firmi_tab",
        "sistemsko_podesuvanje_pocetno_ziro_smetki_tab",
        "sistemsko_podesuvanje_pocetno_kasi_tab",
        "sistemsko_podesuvanje_pocetno_magacini_tab",

        "sistemsko_podesuvanje_pocetno_firmi_lista_firmi_nova_firma_button",
        "sistemsko_podesuvanje_pocetno_firmi_lista_firmi_nov_odel_button",
        "sistemsko_podesuvanje_pocetno_firmi_lista_firmi_nov_pododel_button",

        "sistemsko_podesuvanje_pocetno_kasi_nova_kasa_button",

        "sistemsko_podesuvanje_korisnici_korisnici_nov_korisnik_button",

        "sistemsko_podesuvanje_korisnici_rabotna_grupa_nova_rabotna_grupa_button",

        "sistemsko_podesuvanje_finansisko_rabotenje_klienti_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_artikli_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_konta_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_cenovnik_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_katalog_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_gradovi_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_banki_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_edinici_merki_tab",
        "sistemsko_podesuvanje_finansisko_rabotenje_proizvoditeli_tab",

        "sistemsko_podesuvanje_finansisko_rabotenje_konta_novo_konto_button",

        "sistemsko_podesuvanje_bolnicko_rabotenje_sifrarnik_tab",
        "sistemsko_podesuvanje_bolnicko_rabotenje_smenski_grupi_tab",
        "sistemsko_podesuvanje_bolnicko_rabotenje_mkb10_tab",
        "sistemsko_podesuvanje_bolnicko_rabotenje_sifrarnik_lekari_tab",
        "sistemsko_podesuvanje_bolnicko_rabotenje_tip_osigiruvanje_tab",

        "sistemsko_podesuvanje_bolnicko_rabotenje_sifrarnik_nova_zemja_button",

        "sistemsko_podesuvanje_bolnicko_rabotenje_smenski_grupi_nvoa_smenska_grupa_button",

        "sistemsko_podesuvanje_bolnicko_rabotenje_mkb10_nova_button",

        "sistemsko_podesuvanje_bolnicko_rabotenje_sifrarnik_site_lekari_nov_button",

        "sistemsko_podesuvanje_bolnicko_rabotenje_tip_osigiruvanje_nov_button",

        "sistemsko_podesuvanje_planiranje_resursi_sindikati_tab",
        "sistemsko_podesuvanje_planiranje_resursi_pridonesi_tab",
        "sistemsko_podesuvanje_planiranje_resursi_samopridonesi_tab",
        "sistemsko_podesuvanje_planiranje_resursi_kreditori_tab",

        "sistemsko_podesuvanje_planiranje_resursi_sindikati_nov_sindikat_button",

        "sistemsko_podesuvanje_planiranje_pridonesi_nov_pridones_button",

        "sistemsko_podesuvanje_planiranje_resursi_samopridonesi_nov_samopridones_button",

        "sistemsko_podesuvanje_planiranje_resursi_kreditori_nov_kreditor_button",

    );
    return $korisnik_access;
}