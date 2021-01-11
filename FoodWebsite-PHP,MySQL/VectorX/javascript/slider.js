/*
@Author: Molines, Emmanuel D.
@Date: 11/30/2020
@Version: 1.0
*/

const searchForm = document.querySelector("form");
const searchResultDiv = document.querySelector(".search-result");
const container = document.querySelector(".container");
let searchQuery = "";

//variables for slideshow
const slides = document.querySelector('.slide-image').children;
const nextSlide = document.querySelector(".right-slide");
const prevSlide = document.querySelector(".left-slide");
let totalSlides = slides.length;
let index = 0; 

function next(direction) {
  if(direction == "next") {
    index++;
    if(index == totalSlides) {
      index = 0;
    }
  }
  else { 
    if(index == 0) {
      index = totalSlides -1;
    }
      else {
        index--;
      }
  }
  for(i=0; i < slides.length; i++) {
      slides[i].classList.remove("active");
  }
  slides[index].classList.add("active")
}

nextSlide.onclick = function() {
  next("next")
}

prevSlide.onclick = function() {
  next("prev")
}








