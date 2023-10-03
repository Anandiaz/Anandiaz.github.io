// Dark Mode
const darkContainer = document.querySelector('div.container');
const darkNav = document.querySelector('nav.navbar');
const darkFoot = document.querySelector('footer');
var darkIcon = document.getElementById("dark-icon")

const darkstyleContainer = document.createElement('style');
darkstyleContainer.innerHTML = `
.newDark {
    background-color: #0b3341;
    box-shadow: 0 0 15px 15px #0b3341;
}
`;

const darkstyleNav = document.createElement('style');
darkstyleNav.innerHTML = `
.navDark {
    background-color: #112D4E;
    
}
`;

const darkstyleFoot = document.createElement('style');
darkstyleFoot.innerHTML = `
.footDark {
    background-color: #112D4E;
    
}
`;


function darkMode() {
    
    document.body.classList.toggle("dark_mode");
    darkContainer.classList.toggle("newDark");
    darkNav.classList.toggle("navDark");
    darkFoot.classList.toggle("footDark");
    if(document.body.classList.contains("dark_mode")){
        darkIcon.src =  "sun.png";
    }
    else{
        darkIcon.src = "moon.png"
    }
    document.head.appendChild(darkstyleContainer);
    document.head.appendChild(darkstyleNav);
    document.head.appendChild(darkstyleFoot);
    localStorage.setItem("theme", "dark");
    
}

darkIcon.addEventListener("click", darkMode);

// Pindah halaman
var pindah = document.getElementById("profil");

pindah.onclick = function(){
    var konfirmasi = confirm("Apakah anda ingin pindah halaman?");
    if(konfirmasi ==true){
        document.location.href="about-me.html";
        pindah.setAttribute('href','about-me.html');
    }else{
        console.log("gjdi")
        
    }
}