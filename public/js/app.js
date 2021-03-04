

 const sections = document.querySelectorAll("section");
 const navLi = document.querySelectorAll("nav .containerr ul li");
 console.log('hi');
 window.addEventListener("scroll", () => {
     let current = "";
     sections.forEach((section) => {
         const sectionTop = section.offsetTop;
         const sectionHeight = section.clientHeight;
         if (pageYOffset >= sectionTop - sectionHeight / 3) {
             current = section.getAttribute("id");
         }
     });
console.log('hii');
     navLi.forEach((li) => {
         li.classList.remove("active");
         if (li.classList.contains(current)) {
             li.classList.add("active");
         }
     });
 });