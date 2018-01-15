// SlideShow For Banner
var bannerDiv = document.querySelectorAll("#banner .banner-box");
var bannerCount = 0;
var bannerLength = bannerDiv.length - 1;
// Show the first banner box and hid the rest
for (var i = 0; i < bannerDiv.length; i++) {
  bannerDiv[i].style.display = "none";
}
bannerDiv[0].style.display = "block";
// SlideShow Function
function BannerSlide() {
  for (var i = 0; i < bannerDiv.length; i++) {
    bannerDiv[i].style.display = "none";
  }
  bannerDiv[bannerCount].style.display = "block";
  if(bannerCount < bannerLength){ bannerCount++; }
	else{ bannerCount = 0; }
  setTimeout("BannerSlide()", 10000);
}
BannerSlide();

// Menu Toggle For Mobile
var menuBtn = document.querySelector(".menu-toggle span i");
var menuSM = document.querySelector("#nav-sm");
menuBtn.addEventListener("click", menuToggleFunction);
function menuToggleFunction(e) {
  e.preventDefault();
  if(menuSM.style.display == "block"){menuSM.style.display = "none";}
  else {menuSM.style.display = "block";}
  if(this.classList.contains("fa-navicon")){
    this.classList.remove("fa-navicon");
    this.classList.add("fa-close");
  }else {
    this.classList.add("fa-navicon");
    this.classList.remove("fa-close");
  }
}

// Scrolling Event
window.onscroll = function() {
  barHeader();
  stickyNav();
  addClassScroll();
  showGoToTop();
}
function barHeader(e) {
  var bar = document.querySelector(".border-bar");
	scrollTop = window.scrollY;
	fullScroll= parseInt(document.body.clientHeight) - window.innerHeight;
	scrollPercent = Math.ceil(scrollTop / fullScroll * 100);
  if(scrollPercent > 0){
    bar.style.width = scrollPercent + "%";
    bar.style.border = "solid red";
  }else{
    bar.style.border = 0;
  }
}
// Sticky Navigation
function stickyNav() {
  header = document.getElementById("header")
  scrollTop = window.scrollY;
  if (scrollTop > "300") {
    header.style.position = "fixed";
  }
  else {
    header.style.position = "absolute";
  }
}

// Add class to menu list using scroll Event
function addClassScroll() {
  scrollTop = window.scrollY;
  container = document.querySelectorAll(".container-box");
  listTarget = document.querySelectorAll("#nav ul li");
  beginArray = new Array();
  endArray = new Array();
  for (var i = 0; i < container.length; i++) {
    beginArray.push(container[i].offsetTop);
    endArray.push(container[i].offsetTop + container[i].offsetHeight);
  }
  for (var i = 0; i < listTarget.length; i++) {
    listTarget[i].classList.remove("current");
  }
  for (var i = 0; i < beginArray.length; i++) {
    if(scrollTop >= beginArray[i] && scrollTop < endArray[i]){
      listTarget[i].className = "current";
    }
  }
}

// Show Go to Top function
function showGoToTop() {
  scrollTop = window.scrollY;
  gototop = document.getElementById("gototop");
  if (scrollTop > 300) {
    gototop.style.bottom = "5%";
  }
  else {
    gototop.style.bottom = "-60px";
  }
}

// Portfolio Event
var portfolioBtn = document.querySelectorAll("#portfolio-btn li a");
var portfolioBtnList = document.querySelectorAll("#portfolio-btn li");
function portfolioFunction(e) {
  e.preventDefault();
  var images = document.querySelectorAll(".portfolio-image li");
  target = this.getAttribute("title").toLowerCase();
  // Remove current class name from all the nav
  for (var i = 0; i < portfolioBtnList.length; i++) {
    if (portfolioBtnList[i].classList.contains("current")) {
      portfolioBtnList[i].classList.remove("current");
    }
  }
  this.parentNode.className = "current";
  for (var i = 0; i < images.length; i++) {
    if(images[i].classList.contains(target)){
      images[i].style.display = "block";
    }else{
      images[i].style.display = "none";
    }
  }
}
for (var x = 0; x < portfolioBtn.length; x++) {
  portfolioBtn[x].addEventListener("click", portfolioFunction);
}

// Menu link to section
var menuList = document.querySelectorAll("#nav ul li a, #nav-sm ul li a");
var menuListAll = document.querySelectorAll("#nav ul li, #nav-sm ul li");
for (var i = 0; i < menuList.length; i++) {
  menuList[i].addEventListener("click", gotoSection);
}
function gotoSection(e) {
  e.preventDefault();
  target = this.title.toLowerCase();
  getTarget = document.getElementById(target);
  targetOffset = getTarget.offsetTop + 10;
  window.scrollTo(0, targetOffset);

  for (var i = 0; i < menuListAll.length; i++) {
    if (menuListAll[i].classList.contains("current")) {
      menuListAll[i].classList.remove("current");
    }
  }
  this.parentNode.className = "current";
}

// Goto Top Function
var gototop = document.getElementById("gototop");
gototop.addEventListener("click", gototopFunction);
function gototopFunction(e) {
  e.preventDefault();
  target = window.scrollY;
  for (var i = target; i >= 0; i--) {
    window.scrollTo(0,i);
  }
}

// Form Validation
var formName = document.getElementById("name");
var formPhone = document.getElementById("phone");
var formEmail = document.getElementById("email");
var formMessage = document.getElementById("message");
var formBox = document.getElementById("contact.php-form");

formName.addEventListener("blur", checkName);
formEmail.addEventListener("blur", checkEmail);
formPhone.addEventListener("keydown", ForceNumericOnly);
formPhone.addEventListener("blur", checkPhone);
formMessage.addEventListener("blur", checkMessage);
formBox.addEventListener("submit", submitFunction);
