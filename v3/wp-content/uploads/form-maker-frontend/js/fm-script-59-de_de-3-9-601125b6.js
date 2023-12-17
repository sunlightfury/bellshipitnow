    var fm_currentDate = new Date();
    var FormCurrency_6011 = '$';
    var FormPaypalTax_6011 = '0';
    var check_submit6011 = 0;
    var check_before_submit6011 = {};
    var required_fields6011 = ["16","18","28","5","10","10_confirm","12","14"];
    var labels_and_ids6011 = {"16":"type_radio","18":"type_text","3":"type_section_break","28":"type_radio","29":"type_text","6":"type_section_break","20":"type_textarea","9":"type_section_break","2":"type_radio","13":"type_section_break","4":"type_text","5":"type_text","15":"type_section_break","17":"type_section_break","11":"type_text","7":"type_text","19":"type_section_break","10":"type_submitter_mail","8":"type_text","21":"type_section_break","12":"type_text","14":"type_own_select","23":"type_section_break","25":"type_section_break","31":"type_recaptcha","26":"type_section_break","24":"type_label","27":"type_section_break","1":"type_submit_reset"};
    var check_regExp_all6011 = [];
    var check_paypal_price_min_max6011 = [];
    var file_upload_check6011 = [];
    var spinner_check6011 = [];
    var scrollbox_trigger_point6011 = '20';
    var header_image_animation6011 = 'none';
    var scrollbox_loading_delay6011 = '0';
    var scrollbox_auto_hide6011 = '1';
         function before_load6011() {	
        }	
                 function before_submit6011() {
                     }	
                 function before_reset6011() {	
        }    function onload_js6011() {
            }
    function condition_js6011() {
            }
    function check_js6011(id, form_id) {
        if (id != 0) {
            x = jQuery("#" + form_id + "form_view"+id);
        } else {
            x = jQuery("#form"+form_id);
        }
            }
    function onsubmit_js6011() {
        
                                jQuery("<input type=\"hidden\" name=\"wdform_16_allow_other6011\" value=\"no\" />").appendTo("#form6011");
                                jQuery("<input type=\"hidden\" name=\"wdform_16_allow_other_num6011\" value=\"0\" />").appendTo("#form6011");
                                jQuery("<input type=\"hidden\" name=\"wdform_28_allow_other6011\" value=\"no\" />").appendTo("#form6011");
                                jQuery("<input type=\"hidden\" name=\"wdform_28_allow_other_num6011\" value=\"0\" />").appendTo("#form6011");
                                jQuery("<input type=\"hidden\" name=\"wdform_2_allow_other6011\" value=\"no\" />").appendTo("#form6011");
                                jQuery("<input type=\"hidden\" name=\"wdform_2_allow_other_num6011\" value=\"0\" />").appendTo("#form6011");
            var disabled_fields = "";
            jQuery("#form6011 div[wdid]").each(function() {
                if(jQuery(this).css("display") == "none") {
                    disabled_fields += jQuery(this).attr("wdid");
                    disabled_fields += ",";
                }
                if(disabled_fields) {
                    jQuery("<input type=\"hidden\" name=\"disabled_fields6011\" value =\""+disabled_fields+"\" />").appendTo("#form6011");
                }
            });    }
    jQuery(document).ready(function () {
        formOnload(6011);
    });
    form_view_count6011 = 0;
    jQuery(document).ready(function () {
        fm_document_ready(6011);
    });
