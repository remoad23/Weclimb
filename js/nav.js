// Animierung von Nav bei onclick

function openNav()
{
    let child1 = document.getElementById("burger_menu").children[0];
    let child2 = document.getElementById("burger_menu").children[1];
    let child3 = document.getElementById("burger_menu").children[2];
    let nav_overlay = document.getElementById("mobile_nav");

    if(child1.style.transform != "translateY(12px) rotate(-45deg)" && child2.style.opacity != "0" &&
    child3.style.transform != "translateY(-12px) rotate(45deg)")
    {
        child1.style.transform = "translateY(12px) rotate(-45deg)";
        child2.style.opacity = "0";
        child3.style.transform = "translateY(-12px) rotate(45deg)";
        nav_overlay.style.display = "flex";
    }
    else
    {
        child1.style.transform = "translateY(0) rotate(0)";
        child2.style.opacity = "1";
        child3.style.transform = "translateY(0) rotate(0)";
        nav_overlay.style.display = "none";
    }

}