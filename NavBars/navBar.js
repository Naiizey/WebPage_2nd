// NavBar transition
const logoPlace = document.getElementById("logoPlace");
const navBar = document.getElementsByClassName("navBar");

navBar[0].addEventListener("mouseover", () => logoPlace.style.cssText = "width:30ex;transition:width .3s ease-in-out");
navBar[0].addEventListener("mouseleave", () => logoPlace.style.cssText = "width:15ex;");

// Logo transition
const logoPlaceChilds = logoPlace.children;

navBar[0].addEventListener("mouseover", () => logoPlaceChilds[1].style.cssText = "opacity:1;transition: opacity 1s ease-in-out");
navBar[0].addEventListener("mouseleave", () => logoPlaceChilds[1].style.cssText = "opacity:0;margin-left:0ex");

navBar[0].addEventListener("mouseover", () => logoPlace.style.cssText = "width:30ex;transition:width .3s ease-in-out");

// NavBarBg variator
const navLinks = navBar[0].getElementsByTagName("a");

const page = window.location.pathname.split("/").slice(-1);
const navList = document.getElementById("navList");
const navChilds = navList.children;

function navLinkBg(){
    switch(page[0]){
        case "profile.php": navChilds[1].style['background-color'] = "#09092A";
                            navChilds[1].style['border-radius'] = "1.5ex 1ex 1ex 1.5ex";
                            break;
    
        case "projets.php": navChilds[2].style['background-color'] = "#09092A";
                                navChilds[2].style['border-radius'] = "1.5ex 1ex 1ex 1.5ex";
                                break;

        case "experiences.php": navChilds[3].style['background-color'] = "#09092A";
                                navChilds[3].style['border-radius'] = "1.5ex 1ex 1ex 1.5ex";
                                break;
    
        case "oeuvres.php": navChilds[4].style['background-color'] = "#09092A";
                            navChilds[4].style['border-radius'] = "1.5ex 1ex 1ex 1.5ex";
                            break;
    
        default: navChilds[0].style['background-color'] = "#09092A";
                        navChilds[0].style['border-radius'] = "1.5ex 1ex 1ex 1.5ex";
                        break;
    }
}

navLinkBg();