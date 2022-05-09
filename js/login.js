function Giris() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var ture = false;
    var alert1 = document.getElementById("text");
    if (email == "g211210559@sakarya.tr" & password == "g211210559") {
        alert("Başarılı ")
        ture = true;

    } else {
        alert1.innerHTML = "Başarsız"

    }
    if (ture == true) {
        location.href = 'Anasayfa.php';

    }

}