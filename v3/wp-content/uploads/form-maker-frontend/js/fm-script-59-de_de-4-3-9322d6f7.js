    var fm_currentDate = new Date();
    var FormCurrency_9322 = '$';
    var FormPaypalTax_9322 = '0';
    var check_submit9322 = 0;
    var check_before_submit9322 = {};
    var required_fields9322 = ["4","5","7","9","10","12","13","15","18","18_confirm","21","21_child","30","32","33","34","35","56"];
    var labels_and_ids9322 = {"2":"type_radio","3":"type_section_break","4":"type_text","5":"type_text","6":"type_section_break","7":"type_text","8":"type_section_break","9":"type_text","10":"type_text","11":"type_section_break","12":"type_text","13":"type_text","14":"type_section_break","15":"type_text","16":"type_own_select","17":"type_section_break","18":"type_submitter_mail","19":"type_text","20":"type_section_break","21":"type_cascading_lookup","22":"type_section_break","23":"type_checkbox","25":"type_text","26":"type_section_break","27":"type_label","28":"type_checkbox","29":"type_section_break","30":"type_text","38":"type_text","45":"type_section_break","32":"type_text","39":"type_text","46":"type_section_break","33":"type_text","40":"type_text","47":"type_section_break","34":"type_text","41":"type_text","48":"type_section_break","35":"type_text","42":"type_text","49":"type_section_break","36":"type_text","52":"type_checkbox","43":"type_text","50":"type_section_break","37":"type_text","55":"type_checkbox","44":"type_text","51":"type_section_break","56":"type_checkbox","53":"type_section_break","67":"type_recaptcha","62":"type_section_break","64":"type_label","65":"type_section_break","66":"type_submit_reset"};
    var check_regExp_all9322 = [];
    var check_paypal_price_min_max9322 = [];
    var file_upload_check9322 = [];
    var spinner_check9322 = [];
    var scrollbox_trigger_point9322 = '20';
    var header_image_animation9322 = 'none';
    var scrollbox_loading_delay9322 = '0';
    var scrollbox_auto_hide9322 = '1';
    function onload_js9322() {
        
                            var CASCADING_PARENT_21_9322 = ["Bitte w\u00e4hlen","Auto","Dienstleitung, Service","Druckerei, Copyshop","Florist, Garten, Tier","Foto","Freizeit","Geschenke","Kurzwaren, Wolle","Lebensmittel","Medizien, Drogerie, Sanit\u00e4tshaus","Mobilfunk, Internet","Pers\u00f6nlicher Bedarf","Presse, Tabak, B\u00fccher, Schreibwaren","Reinigung, b\u00fcgeln, waschen","Wohnbedarf"];
                            var CASCADING_CHILD_21_9322 = [null,["Autohandel","Autovermietung","Autowerkstatt","Ersatzteilhandel","Fahrschule","Tankstelle"],["\u00c4nderungsschneiderei","Depot, Transportunternehmen","Friseur","Klemptner, Schreiner, Schlosser","Nagelstudio","Schl\u00fcsseldienst, Schuster","Sch\u00f6nheitssalon, Kosmetik","Sonstige Dienstleistung","Verbraucherberatung"],["Copyshop","Druckerei","Tinten, Druckertankstelle"],["Blumen, Florist","Blumen, G\u00e4rtnerei","Gartenbau, Garten","S\u00e4merei","Tierfachgesch\u00e4ft, Zoohandel"],["Fotofachgesch\u00e4ft","Fotografen"],["Angel-, Jagd-, Waffengesch\u00e4ft","Bastelgesch\u00e4ft","Bootszubeh\u00f6r","Fahrradladen","Motorradfachgesch\u00e4ft","Musikgesch\u00e4ft","Outdoor, Camping","Reiseb\u00fcro","Spielzeugladen","Videothek, Gameshop"],["Geschenkartkel","Souvenirshop"],["Kurzwaren","Stoffgesch\u00e4ft","Wolle und stricken"],["Getr\u00e4nkemarkt","Kiosk, Conviencestore","Obst- und Gem\u00fcseladen","Reformhaus, Bioladen","Supermarkt","Wein, Kaffee, Schokolade, Tee"],["Apotheke","Drogerie","Sanit\u00e4tshaus"],["Internetcafe","Kabelnetzbetreiber","Mobilfunk, Internet"],["Arbeits-, Schutzkleidung","Baby-Fachgesch\u00e4ft","Lederwaren","Mode, Textilhandel","Optiker","Parf\u00fcmerie, Kosmetik","Schuhladen","Sonnenstudio","Sonstiger pers\u00f6nlicher Bedarf","Uhren, Schmuck","W\u00e4sche"],["Buchladen, Schreibwarenhandlung","B\u00fcro-, Schulbedarf","E-Zigaretten","Lotto, Zeitschriften, Tabak","Tabakfachgesch\u00e4ft","Zeitungen, Tabak, B\u00fccher, Schreibwaren"],["B\u00fcgelservice, Hei\u00dfmangel","Chemische Reinigung","Waschsalon"],["Baumarkt","Computer","Dekoration","Elektronik-Fachgesch\u00e4ft","Farben, Tapeten","Haushaltswaren","M\u00f6belhaus, Beleuchtung","Tr\u00f6delhandel, Gebrauchtwaren"]];
                            jQuery("select#wdform_21_element9322").change(function(e) {
                                var index = $("option:selected", this).attr("data-parent-position");
                                var $div_option = jQuery("select#wdform_21_child_element9322")
                                    .closest('div[type="type_cascading_lookup"]').find(".cascading-option-wrap");
                                jQuery("select#wdform_21_child_element9322").html("");
                                $div_option.html("").prev('.placeholder').text("");
                                if (typeof CASCADING_CHILD_21_9322[index] !== "undefined") {
                                    for(var x = 0; x < CASCADING_CHILD_21_9322[index].length; x++) {
                                        var option_value = CASCADING_CHILD_21_9322[index][x];
                                        jQuery("select#wdform_21_child_element9322").append(
                                            jQuery("<option></option>").val(option_value).text(option_value)
                                        );
                                        $div_option.append(jQuery("<div></div>").addClass("select-option").attr("data-value", option_value).data("value", option_value).append(jQuery("<span></span>").text(option_value)));
                                    };
                                }
                                var $childSelect = jQuery("select#wdform_21_child_element9322");
                                $childSelect.prev(".cascading-select-box").find(".placeholder").text($childSelect.val());
                            });
                            var CASCADING_DEF_21_9322 = "Bitte w\u00e4hlen";
                            if (CASCADING_DEF_21_9322 == "" && jQuery("select#wdform_21_element9322").val() != "") {
                                jQuery("select#wdform_21_element9322").val("");
                            }    }
    function condition_js9322() {
            }
    function check_js9322(id, form_id) {
        if (id != 0) {
            x = jQuery("#" + form_id + "form_view"+id);
        } else {
            x = jQuery("#form"+form_id);
        }
            }
    function onsubmit_js9322() {
        
                                jQuery("<input type=\"hidden\" name=\"wdform_2_allow_other9322\" value=\"no\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_2_allow_other_num9322\" value=\"0\" />").appendTo("#form9322");
                            jQuery("<input type=\"hidden\" name=\"wdform_21_hidden_parent_label9322\" value=\"Branche \" /><input type=\"hidden\" name=\"wdform_21_hidden_child_label9322\" value=\"Branche \" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_23_allow_other9322\" value=\"no\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_23_allow_other_num9322\" value=\"0\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_28_allow_other9322\" value=\"no\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_28_allow_other_num9322\" value=\"0\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_52_allow_other9322\" value=\"no\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_52_allow_other_num9322\" value=\"0\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_55_allow_other9322\" value=\"no\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_55_allow_other_num9322\" value=\"0\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_56_allow_other9322\" value=\"no\" />").appendTo("#form9322");
                                jQuery("<input type=\"hidden\" name=\"wdform_56_allow_other_num9322\" value=\"0\" />").appendTo("#form9322");
            var disabled_fields = "";
            jQuery("#form9322 div[wdid]").each(function() {
                if(jQuery(this).css("display") == "none") {
                    disabled_fields += jQuery(this).attr("wdid");
                    disabled_fields += ",";
                }
                if(disabled_fields) {
                    jQuery("<input type=\"hidden\" name=\"disabled_fields9322\" value =\""+disabled_fields+"\" />").appendTo("#form9322");
                }
            });    }
    jQuery(document).ready(function () {
        formOnload(9322);
    });
    form_view_count9322 = 0;
    jQuery(document).ready(function () {
        fm_document_ready(9322);
    });
