//------menu burger------------  
document.getElementById('Burger').addEventListener('click', fonctionMenu());

function fonctionMenu() {   
  //animation
   document.getElementById('Burger').classList.toggle("change");  
   //affichage
 if(getComputedStyle(d1).display != "none"){
  d1.style.display = "none";
 } else {
   d1.style.display = "block";}
}
  //------------changement de nav--------
/*document.getElementById("Burger").addEventListener("click", function()){
  let topbar = document.getElementById("d1");
  if("matchMedia" in window) { // Détection
    if(window.matchMedia("(max-width:412px)").matches) {
     elt.classList.add("topbarM"); 
     elt.classList.replace("topbar", "topbarM") // Remplacera topbar par topbarM si topbar était présente sur l'élément
    }
  }
};

fonctionMenu.onclick = fonctionMenu;
}

  /*let topbar = document.getElementById("d1");
  if("matchMedia" in window) { // Détection
    if(window.matchMedia("(max-width:412px)").matches) {
     elt.classList.add("topbarM"); 
     elt.classList.replace("topbar", "topbarM") // Remplacera topbar par topbarM si topbar était présente sur l'élément
    }
  }
};

fonctionMenu.onclick = fonctionMenu;
*/
//------------changement de nav--------
/*
function navMobil(){
  let topbar = document.getElementById("d1");
  if("matchMedia" in window) { // Détection
    if(window.matchMedia("(max-width:412px)").matches) {
     elt.classList.add("topbarM"); 
     elt.classList.replace("topbar", "topbarM") // Remplacera topbar par topbarM si topbar était présente sur l'élément
    }
  }
}
// On lie l'événement resize à la fonction
window.addEventListener('resize', navMobil, false);
*/