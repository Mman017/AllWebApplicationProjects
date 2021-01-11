/*
@Author: Emmanuel D. Molines Jr.
@Date: 01/05/2021.
@Version: 1.0
*/

/*
	Initialization of variables needed for using Edamam API
*/
const searchForm = document.querySelector("form"); // get the value of selector called "form"
const searchResultDiv = document.querySelector(".search-result"); // get the value of selector called "search-result"
const container = document.querySelector(".container"); // get the value of selector called "container"
let searchQuery = "";

//APP_ID and APP_KEY is used in order access the content data of the web service API of Edamam
const APP_ID = "3f5017f6"; // Edenmam APP_ID  is given to each edamam account users
const APP_key = "a45021a8e86e003bb8ab68f515d27a0c"; //Edenmam APP_KEY is given to each edamam account users


//variables for slideshow
const slides = document.querySelector('.slide-image').children;
const nextSlide = document.querySelector(".right-slide");
const prevSlide = document.querySelector(".left-slide");
let totalSlides = slides.length;
let index = 0; 


/*
	Function for section Slider in the HTML/CSS used to set the conditions for the animation of sliders
*/
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
  next("next") //event used to preview the next slide in the slider if the selector called .right-side is click.
}

prevSlide.onclick = function() {
  next("prev") //event used to preview the previous slide in the slider if the selector called .left-side is click.
}


//Event handler of search function in the html
searchForm.addEventListener("submit", (e) => {
  e.preventDefault();
  searchQuery = e.target.querySelector("input").value;
  fetchAPI();
});


/*
Functions procedure for search filtering in Edamam API.
*/
function sFunction(){	
  searchQuery = "Chicken";
  fetchAPI();
}

function bFunction(){	
  searchQuery = "Beef";
  fetchAPI();
}

function pFunction(){	
  searchQuery = "Pork";
  fetchAPI();
}

function fFunction(){	
  searchQuery = "Fish";
  fetchAPI();
}

function dFunction(){	
  searchQuery = "Desert";
  fetchAPI();
}

function vFunction(){	
  searchQuery = "Vegan";
  fetchAPI();
}


/*
 Funtion that will return a promise
*/
async function fetchAPI() {
  const baseURL = `https://api.edamam.com/search?q=${searchQuery}&app_id=${APP_ID}&app_key=${APP_key}&from=0&to=20`; // Initializing the Edamam URL
  
   // wait until the fetching is complete for the content of the Edamam website
  const response = await fetch(baseURL);
  const data = await response.json();
  
  generateHTML(data.hits); // call the function generateHTML

}

	
/*
	Function for generating the gathered data of Edamam API 
*/
function generateHTML(results) {
  container.classList.remove("initial");
  let generatedHTML = "";
  
  //Iterates each data hits that was fetch in the Edamam API and stored these data using the HTML language
  results.map((result) => {
    generatedHTML += `
      <div class="item">
        <img src="${result.recipe.image}" alt="img">
        <div class="flex-container">
          <h1 class="title">${result.recipe.label}</h1>
        </div>
        <p class="item-data">Calories: ${result.recipe.calories.toFixed(2)}</p>
        <p class="item-data">Diet label: ${
          result.recipe.dietLabels.length > 0
            ? result.recipe.dietLabels
            : "No Data Found"
        }</p>
        <p class="item-data">Health labels: ${result.recipe.healthLabels}</p>
				   <a class="view-btn" target="_blank" href="${
            result.recipe.url
          }">Recipe</a>
      </div>
    `;
  });
  searchResultDiv.innerHTML = generatedHTML; //Set the items of HTML selector .search-result using the data gathered in the iterations.
}




