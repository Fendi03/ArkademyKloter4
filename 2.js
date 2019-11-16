var username = 'PENDOLZ';
var password = '111*yyy';


function validasi(username) {
    var lun = username.toUpperCase();
    if (username.length == 7) {
        return true;
    } else {
        return false;
    }
}
console.log(validasi(username));

function validasiPass(password) {
    var pass1a = password.substr(0, 1);
    var pass1b = password.substr(2, 1);
    var pass1c = password.substr(3, 1);
    var pass2 = password.substr(4, 1);
    var pass3a = pass.toUpperCase(5, 1);
    var pass3b = pass.toUpperCase(6, 1);
    var pass3c = pass.toUpperCase(7, 1);
    var pass3a = pass.toLowerCase(5, 1);
    var pass3b = pass.toLowerCase(6, 1);
    var pass3c = pass.toLowerCase(7, 1);

    if (pass1a == parseInt(pass1a) && (pass1b == pass1a) && (pass1c == pass1a && (pass2 == '*') && (pass3a == pass) && (pass3b == pass3a) && (pass3c == pass3a)) {
        return true;
    } else {
        return false;
    }
}

console.log(validasiPass(password));