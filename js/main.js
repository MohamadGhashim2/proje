function Giris() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var ture = false;
    var alert1 = document.getElementById("text");


    if (email == "g211210559@sakarya.tr" & password == "g211210559") {
        alert("Hoşgeldin G211210559 ")
        ture = true;
        document.getElementById("form").submit;
    } else {
        alert1.innerHTML = "Başarsız"

    }
    if (ture == true) {
        location.href = 'Anasayfa.php';
    }



}
const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
        'X-RapidAPI-Key': 'db92cf214dmsheb40aef339bf3b4p16661bjsncf75d74d1496'
    }
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=spiderman', options)
    .then(response => response.json())
    .then(data => {
const list = data.d;
list.map((item) =>{
    const filmad = item.l;
    const poster = item.i.imageUrl;
    const film = `<div class="col film-img "><li><img src="${poster}" class="img-fluid" ><h2>${filmad}</h2></li></div>`
    document.querySelector(".films").innerHTML += film;
}  )



    })
    .catch(err => console.error(err));

function required()
{
    var ad = document.getElementById("ad");
    var email = document.getElementById("email");
    var form1 = document.getElementById("form1");

    if ( ad.value =="" ||  email.value=="" || ad.value == null ||  email.value== null) {
        alert("Boş Olmamalı!!");
    }
    else
    {
        form1.action ="iletisimbilgi.php"; 
    }
}
