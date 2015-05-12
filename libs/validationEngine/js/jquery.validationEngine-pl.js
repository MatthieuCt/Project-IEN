

(function($) {
    $.fn.validationEngineLanguage = function() {};
    $.validationEngineLanguage = {
        newLang: function() {
            $.validationEngineLanguage.allRules = 	{
                "required":{    			// Add your regex rules here, you can take telephone as an example
                    "regex":"none",
                    "alertText":"* Pole jest wymagane",
                    "alertTextCheckboxMultiple":"* Proszę zatwierdzić",
                    "alertTextCheckboxe":"* To pole jest wymagane"
                },
                "length":{
                    "regex":"none",
                    "alertText":"*Between ",
                    "alertText2":" and ",
                    "alertText3": " characters allowed"
                },
                "maxCheckbox":{
                    "regex":"none",
                    "alertText":"* Checks allowed Exceeded"
                },
                "minCheckbox":{
                    "regex":"none",
                    "alertText":"* Please select ",
                    "alertText2":" options"
                },
                "confirm":{
                    "regex":"none",
                    "alertText":"* Your field is not matching"
                },
                "telephone":{
                    "regex":"/^[0-9\-\(\)\ ]+$/",
                    "alertText":"* Invalid phone number"
                },
                "email":{
                    "regex":"/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/",
                    "alertText":"* Niepoprawny adres email"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* Niepoprawna wartość"
                },
                "number": {
                    // Number, including positive, negative, and floating decimal. credit: orefalo
                    "regex": /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/,
                    "alertText": "* Niepoprawna wartość zmienno przecinkowa"
                },
                "date":{
                    "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
                    "alertText":"* Invalid date, must be in YYYY-MM-DD format"
                },
                "onlyNumber":{
                    "regex":"/^[0-9\ ]+$/",
                    "alertText":"* Numbers only"
                },
                "noSpecialCaracters":{
                    "regex":"/^[0-9a-zA-Z]+$/",
                    "alertText":"* No special caracters allowed"
                },
                "ajaxUser":{
                    "file":"/cms/contest/check-email",
                    "extraData":"name=eric",
                    "alertTextOk":"* Poprawny adres",
                    "alertTextLoad":"* Sprawdzanie adresu",
                    "alertText":"* Twój email jest już zarejestrowany"
                },
                "ajaxName":{
                    "file":"validateUser.php",
                    "alertText":"* This name is already taken",
                    "alertTextOk":"* This name is available",
                    "alertTextLoad":"* Loading, please wait"
                },
                "onlyLetter":{
                    "regex":"/^[a-zA-Z\ \']+$/",
                    "alertText":"* Letters only"
                },
                "validate2fields":{
                    "nname":"validate2fields",
                    "alertText":"* Adresy muszą być różne"
                },
                "validateNIP":{
                    "nname":"validateNIP",
                    "alertText":"* Niepoprawny numer NIP"
                }
            }
					
        }
    }
})(jQuery);

$(document).ready(function() {	
    $.validationEngineLanguage.newLang()
});