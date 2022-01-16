//------------------------------------------------------------------------------------------------
//---------Navigation Bar-------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
const navgationbar = document.querySelector(".navgiationbar");
const navgationbarOffsetTop = navgationbar.offsetTop;
const sections = document.querySelectorAll("section");
const navgationbarlinks = document.querySelectorAll(".navbarlink");
const scrollFn = () => {
    if(window.pageYOffset >= navgationbarOffsetTop){
        navgationbar.classList.add("navigationsticky");
    }else{
        navgationbar.classList.remove("navigationsticky")
    }

    sections.forEach((section,i)=>{
        if(window.pageYOffset >= section.offsetTop){
            navgationbarlinks.forEach((navbarLink) => {
                navbarLink.classList.remove("highlight");
            });
            navgationbarlinks[i].classList.add("highlight");
        }
    });
}
//------------------------------------------------------------------------------------------------
//---------End of Navigation Bar------------------------------------------------------------------
//------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------
//---------Section 2 - About Me-------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
const progressbarwarpper = document.querySelector(".progressbarswrapper");
const progressbarpercents = [60, 60, 50, 50, 65, 30, 30];
const progresspercentItems = document.querySelectorAll(".progresspercent");

const progressbarFn = () =>{
    progresspercentItems.forEach((el,i) =>{
        el.style.width=progressbarpercents[i] +"%";
        el.previousElementSibling.firstElementChild.textContent =
        progressbarpercents[i];
    });
}
//------------------------------------------------------------------------------------------------
//---------End of Section 2-----------------------------------------------------------------------
//------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------
//---------Common Functions-----------------------------------------------------------------------
//------------------------------------------------------------------------------------------------
//When user scrolls, call scroll and progress functions
window.addEventListener("scroll",()=>{
    scrollFn();
    progressbarFn();
});

scrollFn();
progressbarFn();

window.addEventListener('resize', ()=>{
    window.location.reload();
});
//------------------------------------------------------------------------------------------------
//---------End of Common Functions----------------------------------------------------------------
//------------------------------------------------------------------------------------------------


