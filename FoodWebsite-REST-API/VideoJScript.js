const api_Key = "bf0229ab8d4c42149053028ae3b1032b";
const searchBar = document.querySelector(".searchBar");
const container = document.querySelector(".containerBox");
//const searchContent = document.querySelector(".search-content");
let searchInput = "";

searchBar.addEventListener('submit', (e) => {
        e.preventDefault();
        searchInput = e.target.querySelector('input').value;
        loadfoodData();
    });

defaultFoodData();

function defaultFoodData() {
    let firstXhr = new XMLHttpRequest();
    firstXhr.open('GET', `https://api.spoonacular.com/food/videos/search?query=pasta&number=20&apiKey=${api_Key}`);
    firstXhr.onload = () => {
        let defaultFoodData = JSON.parse(firstXhr.responseText);
        console.log(defaultFoodData);

        defaultFoodData.videos.forEach((videos, index) => {
            let containerContent = document.createElement("div");
            containerContent.classList.add("containerContent");

            let image = document.createElement("img");
            image.classList.add("image");
            image.src = videos.thumbnail;
            containerContent.appendChild(image);

            let title = document.createElement("h3");
            title.innerText = videos.shortTitle;
            containerContent.appendChild(title);

            let foodViews = document.createElement("p");
            foodViews.innerText = "Food Views:  " + videos.views;
            containerContent.appendChild(foodViews);

            let foodLength = document.createElement("p");
            foodLength.innerText = "Food Length:  " + parseFloat((videos.length / 60)).toFixed(2) + " Minutes";
            containerContent.appendChild(foodLength);

            let ratings = document.createElement("p");
            ratings.innerText = "Food Ratings:  " + parseFloat(videos.rating).toFixed(2);
            containerContent.appendChild(ratings);

            let videoLink = document.createElement("a");
            videoLink.setAttribute('href', "https://www.youtube.com/watch?v=" +videos.youTubeId);
            videoLink.setAttribute('target', "_blank");
            videoLink.innerText = "Watch Video";
            containerContent.appendChild(videoLink);

            container.appendChild(containerContent);
        });
    }
    firstXhr.send()
}

 function loadfoodData() {
    container.classList.remove("initial");
    container.innerHTML = "";
    let xhr = new XMLHttpRequest();
    xhr.open('GET', `https://api.spoonacular.com/food/videos/search?query=${searchInput}&number=20&apiKey=${api_Key}`);
    xhr.onload = () => {
        let foodData = JSON.parse(xhr.responseText);
        console.log(foodData);

        foodData.videos.forEach((videos, index) => {
            let containerContent = document.createElement("div");
            containerContent.classList.add("containerContent");

            let image = document.createElement("img");
            image.classList.add("image");
            image.src = videos.thumbnail;
            containerContent.appendChild(image);

            let title = document.createElement("h3");
            title.innerText = videos.shortTitle;
            containerContent.appendChild(title);

            let foodViews = document.createElement("p");
            foodViews.innerText = "Food Views:  " + videos.views;
            containerContent.appendChild(foodViews);

            let foodLength = document.createElement("p");
            foodLength.innerText = "Food Length:  " + parseFloat((videos.length / 60)).toFixed(2) + " Minutes";
            containerContent.appendChild(foodLength);

            let ratings = document.createElement("p");
            ratings.innerText = "Food Ratings:  " + parseFloat(videos.rating).toFixed(2);
            containerContent.appendChild(ratings);

            let videoLink = document.createElement("a");
            videoLink.setAttribute('href', "https://www.youtube.com/watch?v=" +videos.youTubeId);
            videoLink.setAttribute('target', "_blank");
            videoLink.innerText = "Watch Video";
            containerContent.appendChild(videoLink);

            container.appendChild(containerContent);
        });   
    }
     xhr.send();
}





