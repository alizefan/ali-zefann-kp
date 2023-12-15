let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let sections= document.querySelectorAll('section');
let navLinks= document.querySelectorAll('navbar a').

window.onscroll =()=> {
  sections.forEach(sec =>{
    let top=window.scrollY;
    let offset= sec.offsetTop;
    let height= sec.offsetHeight;
    let id =sec.getAttribute('id');

    if(top >= offset && top < offset + height){
      navLinks.forEach(links => {
        links.classList.remove('active');
        document.querySelector('header nav a [href*=' + id + ']').classList.add('active');
      })
    }
  })
};

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open')
};



sr.reveal('.logo',{delay:200, origin:'left'});
sr.reveal('.navbar',{delay:400, origin:'top'});
sr.reveal('.home-text span',{delay:600, origin:'top'});
sr.reveal('.home-text h1',{delay:600, origin:'left'});
sr.reveal('.home-text p',{delay:750, origin:'right'});
sr.reveal('.main-btn',{delay:850, origin:'left'});
sr.reveal('.share',{delay:950, origin:'bottom'});
sr.reveal('.home-img',{delay:1000, origin:'right'});
sr.reveal('.menu-icon',{delay:400, origin:'left'});


$(".bar").each(function(){
    $(this).find(".bar-inner").animate({
      width: $(this).attr("data-width")
    },2000)
  });

  var php = function(){
    document.querySelector(".php").className = "php1";
  };
  var css = function(){
    document.querySelector(".css").className = "css1";
  };
  var htm = function(){
  document.querySelector(".htm").className = "htm1";  
  };
  var jav = function(){
  document.querySelector(".javascript").className = "javascript1";  
  };
  setTimeout(php,1000);
  setTimeout(css,3000);
  setTimeout(htm,5000);
  setTimeout(jav,7000);

  