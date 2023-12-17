    var fm_currentDate = new Date();
    var FormCurrency_9503 = '$';
    var FormPaypalTax_9503 = '0';
    var check_submit9503 = 0;
    var check_before_submit9503 = {};
    var required_fields9503 = ["17","19","4","5","10","10_confirm"];
    var labels_and_ids9503 = {"17":"type_radio","3":"type_section_break","19":"type_text","6":"type_section_break","9":"type_section_break","2":"type_radio","12":"type_section_break","4":"type_text","5":"type_text","16":"type_section_break","7":"type_text","8":"type_text","18":"type_section_break","10":"type_submitter_mail","11":"type_text","20":"type_section_break","14":"type_text","15":"type_own_select","22":"type_section_break","21":"type_textarea","24":"type_section_break","28":"type_recaptcha","26":"type_section_break","25":"type_label","29":"type_section_break","27":"type_submit_reset","30":"type_section_break"};
    var check_regExp_all9503 = [];
    var check_paypal_price_min_max9503 = [];
    var file_upload_check9503 = [];
    var spinner_check9503 = [];
    var scrollbox_trigger_point9503 = '20';
    var header_image_animation9503 = 'none';
    var scrollbox_loading_delay9503 = '0';
    var scrollbox_auto_hide9503 = '1';
    function onload_js9503() {
            }
    function condition_js9503() {
            }
    function check_js9503(id, form_id) {
        if (id != 0) {
            x = jQuery("#" + form_id + "form_view"+id);
        } else {
            x = jQuery("#form"+form_id);
        }
            }
    function onsubmit_js9503() {
        
                                jQuery("<input type=\"hidden\" name=\"wdform_17_allow_other9503\" value=\"no\" />").appendTo("#form9503");
                                jQuery("<input type=\"hidden\" name=\"wdform_17_allow_other_num9503\" value=\"0\" />").appendTo("#form9503");
                                jQuery("<input type=\"hidden\" name=\"wdform_2_allow_other9503\" value=\"no\" />").appendTo("#form9503");
                                jQuery("<input type=\"hidden\" name=\"wdform_2_allow_other_num9503\" value=\"0\" />").appendTo("#form9503");
            var disabled_fields = "";
            jQuery("#form9503 div[wdid]").each(function() {
                if(jQuery(this).css("display") == "none") {
                    disabled_fields += jQuery(this).attr("wdid");
                    disabled_fields += ",";
                }
                if(disabled_fields) {
                    jQuery("<input type=\"hidden\" name=\"disabled_fields9503\" value =\""+disabled_fields+"\" />").appendTo("#form9503");
                }
            });    }
    jQuery(document).ready(function () {
        formOnload(9503);
    });
    form_view_count9503 = 0;
    jQuery(document).ready(function () {
        fm_document_ready(9503);
    });
