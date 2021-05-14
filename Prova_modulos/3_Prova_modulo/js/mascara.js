$('#Email').change(function () {
    var status = false;
    var email = $('#Email').val();
    var emailLength = email.length;
    if (email != "" && emailLength > 4) {
        email = email.replace(/\s/g, "");  //To remove space if available
        var dotIndex = email.indexOf(".");
        var atIndex = email.indexOf("@");

        if (dotIndex > -1 && atIndex > -1) {   //To check (.) and (@) present in the string
            if (dotIndex != 0 && dotIndex != emailLength && atIndex != 0 && atIndex != emailLength && email.slice(email.length - 1) != ".") {   //To check (.) and (@) are not the firat or last character of string
                var dotCount = email.split('.').length
                var atCount = email.split('@').length

                if (atCount == 2 && (dotIndex - atIndex > 1)) { //To check (@) present multiple times or not in the string. And (.) and (@) not located subsequently
                    status = true;
                    if (dotCount > 2) {    //To check (.) are not located subsequently
                        for (i = 2; i <= dotCount - 1; i++) {
                            if (email.split('.')[i-1].length == 0) {
                                status = false;
                            }
                        }
                    }
                }
            }
        }

    }

    $('#Email').val(email);
    if (!status) {
        Document.write("Wrong Email Format");
   
    }
});