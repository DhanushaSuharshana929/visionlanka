

//--------------------------------------------------check one by one on blur--------------------------------------------------

jQuery(document).ready(function () {



    jQuery("#txtFullName").blur(function () {

        validateEmpty("txtFullName", "spanFullName");

    });


    jQuery("#txtEmail").blur(function () {

        ValidateEmail("txtEmail", "spanEmail");

    });


    jQuery("#txtCountry").blur(function () {

        validateEmpty("txtCountry", "spanCountry");

    });



    jQuery("#txtAdate").blur(function () {

        validateEmpty("txtAdate", "spanAdate");

    });



    jQuery("#txtDdate").blur(function () {

        validateEmpty("txtDdate", "spanDdate");

    });



    jQuery("#txtAdult").blur(function () {

        validateEmpty("txtAdult", "spanAdult");

    });





    jQuery("#txtMessage").blur(function () {

        validateEmpty("txtMessage", "spanMessage");

    });



    jQuery("#captchacode").blur(function () {

        validateEmpty("captchacode", "capspan");

    });



    jQuery("#btnSubmit").bind('click', function () {



        if (!validate()) {

            return;

        }



        jQuery("#checking").show();

        sendForm();

    });



    jQuery('.input-validater').keypress(function (e) {

        if (e.keyCode == 13) {



            if (!validate()) {

                return;

            }

            jQuery("#checking").show();

            sendForm();

        }

    });



});





//--------------------------------------------------function to check button click --------------------------------------------------



function validate() {

    if (

            validateEmpty("txtFullName", "spanFullName") &

            ValidateEmail("txtEmail", "spanEmail") &

            validateEmpty("txtCountry", "spanCountry") &

            validateEmpty("txtPhone", "spanPhone") &

            validateEmpty("txtDdate", "spanDdate") &

            validateEmpty("txtAdate", "spanAdate") &

            validateEmpty("txtAdult", "spanAdult") &

//            validateEmpty("txtChildren", "spanChildren") &

//            validateEmpty("txtRooms", "spanRooms") &

//            validateEmpty("txtMealtype", "spanMealtype") &

//            validateEmpty("txtPackage", "spanPackage") &

            validateEmpty("txtMessage", "spanMessage") &

            validateEmpty("captchacode", "capspan")

            )

    {

        return true;

    } else {

        return false;

    }

}


//-----------------   function to check empty -------------------------------------------------------



function validateEmpty(field, validatorspan)

{



    if (jQuery('#' + field).val().length != 0)

    {

        jQuery('#' + validatorspan).addClass("validated");

        jQuery('#' + validatorspan).removeClass("notvalidated");

        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);

        jQuery('#' + validatorspan).text("");



        return true;

    } else

    {

        jQuery('#' + validatorspan).addClass("notvalidated");

        jQuery('#' + validatorspan).removeClass("validated");

        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);

        jQuery('#' + validatorspan).text("This field can not be empty");



        return false;

    }

}


