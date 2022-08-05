/* Theme Name: Zuscon - Landing page Template
   Author: Themesdesign
   Version: 1.0.0
   Created:July 2016
   File Description:Main JS file of the template
*/

/********************* Menu Js **********************/

function windowScroll() {
    const navbar = document.getElementById("navbar");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar.classList.add("nav-sticky");
    } else {
        navbar.classList.remove("nav-sticky");
    }
  }
  
  window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
  })

  /********************* Preloader **********************/
  
function preloader() {
    setTimeout(() => {
        document.getElementById('preloader').style.visibility = 'hidden';
        document.getElementById('preloader').style.opacity = '0';
    }, 500);
} 