
// NAVIGATION

var navToggle = document.querySelector(".nav-toggle");
var navContainer = document.querySelector(".nav-sub-menu");
var open = false;


navToggle.addEventListener("click",toggleNav);

//Navigation functionality
function toggleNav()
{
    //If nav is not open open it
    if(open == false)
    {
        navContainer.classList.add("nav-container-active");
        open = true;
    }

    //If nav is open, close it
    else if(open == true)
    {
        navContainer.classList.remove("nav-container-active");
        open = false;
    }
}