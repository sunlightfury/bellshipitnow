    var fm_currentDate = new Date();
    var FormCurrency_3895 = '$';
    var FormPaypalTax_3895 = '0';
    var check_submit3895 = 0;
    var check_before_submit3895 = {};
    var required_fields3895 = ["45","44","8","9","10","11","12","46","19","19_child","21"];
    var labels_and_ids3895 = {"6":"type_label","45":"type_radio","5":"type_section_break","3":"type_text","44":"type_text","7":"type_section_break","42":"type_submitter_mail","22":"type_section_break","25":"type_label","26":"type_section_break","8":"type_text","9":"type_text","27":"type_section_break","10":"type_text","11":"type_text","31":"type_section_break","12":"type_text","46":"type_text","32":"type_section_break","14":"type_submitter_mail","15":"type_text","33":"type_section_break","17":"type_text","34":"type_section_break","19":"type_cascading_lookup","35":"type_section_break","20":"type_text","36":"type_section_break","21":"type_textarea","37":"type_section_break","48":"type_recaptcha","38":"type_section_break","23":"type_label","39":"type_section_break","1":"type_submit_reset"};
    var check_regExp_all3895 = [];
    var check_paypal_price_min_max3895 = [];
    var file_upload_check3895 = [];
    var spinner_check3895 = [];
    var scrollbox_trigger_point3895 = '20';
    var header_image_animation3895 = 'none';
    var scrollbox_loading_delay3895 = '0';
    var scrollbox_auto_hide3895 = '1';
         function before_load3895() {	
        }	
                 function before_submit3895() {
                     }	
                 function before_reset3895() {	
        }    function onload_js3895() {
        
                            var CASCADING_PARENT_19_3895 = ["Auto","Dienstleistung, Service","Druckerei, Copyshop","Florist, Garten, Tier","Foto","Freizeit","Geschenke","Kurzwaren, Wolle","Lebensmittel","Medizin, Drogerie, Sanit\u00e4tshaus","Mobilfunk, Internet","Pers\u00f6nlicher Bedarf","Presse, Tabak, B\u00fccher, Schreibwaren","Reinigung, b\u00fcgeln, waschen","Wohnbedarf","Bitte ausw\u00e4hlen"];
                            var CASCADING_CHILD_19_3895 = [["Autohandel","Autovermietung","Autowerkstatt","Ersatzteilhandel","Fahrschule","Tankstelle"],["\u00c4nderungsschneiderei","Depot, Transportunternehmer","Friseur","Klemptner, Schreiner, Schlosser","Nagelstudio","Schl\u00fcsseldienst, Schuster","Sch\u00f6nheitssalon, Kosmetik","Sonstige Dienstleistung","Verbraucherberatung"],["Copyshop","Druckerei","Tinten, Druckertankstelle"],["Blumen, Florist","Blumen, G\u00e4rtnerei","Gartenbau, Garten","S\u00e4merei","Tierfachgesch\u00e4ft, Zoohandel"],["Fotofachgesch\u00e4ft","Fotografen"],["Angel-, Jagd-, Waffengesch\u00e4ft","Bastelgesch\u00e4ft","Bootszubeh\u00f6r","Fahrradladen","Motorradfachgesch\u00e4ft","Musikgesch\u00e4ft","Outdoor, Camping","Reiseb\u00fcro","Spielzeugladen","Videothek, Gameshop"],["Geschenkartikel","Souvenirshop"],["Kurzwaren","Stoffgesch\u00e4ft","Wolle und stricken"],["Getr\u00e4nkemarkt","Kiosk, Conviencestore","Obst- und Gem\u00fcseladen","Reformhaus, Bioladen","Supermarkt","Wein, Kaffee, Schokolade, Tee"],["Apotheke","Drogerie","Sanit\u00e4tshaus"],["Internetcafe","Kabelnetzbetreiber","Mobilfunk, Internet"],["Arbeits-, Schutzkleidung","Baby-Fachgesch\u00e4ft","Lederwaren","Mode, Textilhandel","Optiker","Parf\u00fcmerie, Kosmetik","Schuhladen","Sonnenstudio","Sonstiger pers\u00f6nlicher Bedarf","Uhren, Schmuck","W\u00e4sche"],["Buchladen, Schreibwarenhandlung","B\u00fcro-, Schulbedarf","E-Zigaretten","Lotto, Zeitschriften, Tabak","Tabakfachgesch\u00e4ft","Zeitungen, Tabak, B\u00fccher, Schreibwaren"],["B\u00fcgelservice, Hei\u00dfmangel","Chemische Reinigung","Waschsalon"],["Baumarkt","Computer","Dekoration","Elektronik-Fachgesch\u00e4ft","Farben, Tapeten","Haushaltswaren","M\u00f6belhaus, Beleuchtung","Tr\u00f6delhandel, Gebrauchtwaren"],["Bitte ausw\u00e4hlen"]];
                            jQuery("select#wdform_19_element3895").change(function(e) {
                                var index = $("option:selected", this).attr("data-parent-position");
                                var $div_option = jQuery("select#wdform_19_child_element3895")
                                    .closest('div[type="type_cascading_lookup"]').find(".cascading-option-wrap");
                                jQuery("select#wdform_19_child_element3895").html("");
                                $div_option.html("").prev('.placeholder').text("");
                                if (typeof CASCADING_CHILD_19_3895[index] !== "undefined") {
                                    for(var x = 0; x < CASCADING_CHILD_19_3895[index].length; x++) {
                                        var option_value = CASCADING_CHILD_19_3895[index][x];
                                        jQuery("select#wdform_19_child_element3895").append(
                                            jQuery("<option></option>").val(option_value).text(option_value)
                                        );
                                        $div_option.append(jQuery("<div></div>").addClass("select-option").attr("data-value", option_value).data("value", option_value).append(jQuery("<span></span>").text(option_value)));
                                    };
                                }
                                var $childSelect = jQuery("select#wdform_19_child_element3895");
                                $childSelect.prev(".cascading-select-box").find(".placeholder").text($childSelect.val());
                            });
                            var CASCADING_DEF_19_3895 = "Bitte ausw\u00e4hlen";
                            if (CASCADING_DEF_19_3895 == "" && jQuery("select#wdform_19_element3895").val() != "") {
                                jQuery("select#wdform_19_element3895").val("");
                            }    }
    function condition_js3895() {
            }
    function check_js3895(id, form_id) {
        if (id != 0) {
            x = jQuery("#" + form_id + "form_view"+id);
        } else {
            x = jQuery("#form"+form_id);
        }
            }
    function onsubmit_js3895() {
        
                                jQuery("<input type=\"hidden\" name=\"wdform_45_allow_other3895\" value=\"no\" />").appendTo("#form3895");
                                jQuery("<input type=\"hidden\" name=\"wdform_45_allow_other_num3895\" value=\"0\" />").appendTo("#form3895");
                            jQuery("<input type=\"hidden\" name=\"wdform_19_hidden_parent_label3895\" value=\"Branche\" /><input type=\"hidden\" name=\"wdform_19_hidden_child_label3895\" value=\"Branche\" />").appendTo("#form3895");
            var disabled_fields = "";
            jQuery("#form3895 div[wdid]").each(function() {
                if(jQuery(this).css("display") == "none") {
                    disabled_fields += jQuery(this).attr("wdid");
                    disabled_fields += ",";
                }
                if(disabled_fields) {
                    jQuery("<input type=\"hidden\" name=\"disabled_fields3895\" value =\""+disabled_fields+"\" />").appendTo("#form3895");
                }
            });    }
    jQuery(document).ready(function () {
        formOnload(3895);
    });
    form_view_count3895 = 0;
    jQuery(document).ready(function () {
        fm_document_ready(3895);
    });
