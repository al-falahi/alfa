console.log("main.js is connected!");
// javaScript
// Mobile nav
const menuBtn = document.getElementById("menu-btn");
menuBtn.addEventListener("click", function() {
  console.log("click");
  const firstSpan = document.getElementById("first-span");
  const secondSpan = document.getElementById("second-span");
  const lastSpan = document.getElementById("last-span");
  const x = document.getElementById("mobile-links");

  if (x.style.opacity == 0) {
    x.style.opacity = "1";
    x.style.top = "0";
    firstSpan.style.transform = "rotate(45deg)";
    secondSpan.style.opacity = "0";
    lastSpan.style.transform = "rotate(-45deg)";
    lastSpan.style.marginRight = "3px";
  } else {
    x.style.opacity = "0";
    x.style.top = "-100%";
    firstSpan.style.transform = "rotate(0deg)";
    secondSpan.style.opacity = "1";
    lastSpan.style.marginRight = "0";
    lastSpan.style.transform = "rotate(0deg)";
  }
});
//End mobile nav

// jQuery
// jQuery(document).ready(function($) {
//   $("a[href='#home']").click(function() {
//     $("html, body").animate({ scrollTop: 0 }, 2000);
//     return false;
//   });

//   $("a[href='#contact']").click(function() {
//     $("html, body").animate({ scrollTop: document.body.scrollHeight }, 2000);
//     return false;
//   });
// });
