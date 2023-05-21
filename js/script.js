let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .flex .navbar');

menuBtn.onclick = () =>{
   menuBtn.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}

window.onscroll = () =>{
   menuBtn.classList.remove('fa-times');
   navbar.classList.remove('active');
}

var swiper = new Swiper(".course-slider", {
   spaceBetween: 20,
   grabCursor:true,
   loop:true,
   pagination: {
     el: ".swiper-pagination",
     clickable: true,
   },
   breakpoints: {
      540: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".teachers-slider", {
   spaceBetween: 20,
   grabCursor:true,
   loop:true,
   pagination: {
     el: ".swiper-pagination",
     clickable: true,
   },
   breakpoints: {
      540: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".reviews-slider", {
   spaceBetween: 20,
   grabCursor:true,
   loop:true,
   pagination: {
     el: ".swiper-pagination",
     clickable: true,
   },
   breakpoints: {
      540: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

//   var nm=document.querySelector('#Fname');
//   var nmb=document.querySelector('#Pnumber');
//   var eml=document.querySelector('#mail');


// function validation(){

//   if(nmb.value=="" || nmb.value==NULL)
//   {
//     alert("enter phone number");
//     return false;
//   }

//   if(nm.value=="" || nm.value==NULL)
//   {
//     alert("You have not entered name");
//     return false;
//   }
  
  
//   if(eml.value=="" || eml.value==NULL){
//     alert("Enter email id");
//     return false;
//   }
//   return true;
// }

function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  let y = document.forms["myForm"]["email"].value;
  let z = document.forms["myForm"]["number"].value;

  var letters = /^[A-Za-z]+$/;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


  if (x.match(letters)) {
    console.log("done....")
  }
  else {
    alert("Name must be filled out properly");
    return false;
  }

  if (z=="" || z==null) {
    alert("Number must be filled out properly");
    return false;
  }
  else {
    console.log("done....")
  }

  if (y.match(mailformat)) {
    console.log("done....")
  }
  else {
    alert("You have entered an invalid email address!");

  }

  if (x.match(letters) && y.match(mailformat)) {
    alert("signin successful")
  }
}
