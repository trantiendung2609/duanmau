const $$ = document.querySelectorAll.bind(document);
const $ = document.querySelector.bind(document);

const iconSearch = $(".header_search i");
const inputSearch = $(".header_search-input");
const dotSlider = $$(".slider_btn");
const article_slider_run = $(".article_slider_run");
const slider_next = $(".slider--next");
const slider_prev = $(".slider--prev");
const dot = $$(".article_slider_information--dot-item");
let index = 0;
function start() {
  search();
}
start();

function search() {
  iconSearch.onclick = function () {
    index++;
    if (index == 0) {
      inputSearch.style = "display: none";
    } else {
      inputSearch.style = "display: inline-block";
      index = -1;
    }
  };
}

function slider(valueOfSlider) {
console.log(index);
  if (valueOfSlider == "next") {
    index++;
    dot.forEach((element) => {
      if (element.className === "article_slider_information--dot-item active" && index !=4) {
        element.classList.remove("active");
      } else {
        if (element.getAttribute("data-index") == index) {
          element.classList.add("active");
        }
      }
    });
    if (valueOfSlider == "next" && index == 1) {
      slider_prev.removeAttribute("disabled");
      article_slider_run.style = "transform: translate(-82.5rem);";
    }
    if (valueOfSlider == "next" && index == 2) {
      article_slider_run.style = "transform: translate(-165rem);";
    }
    if (valueOfSlider == "next" && index >= 3) {
      article_slider_run.style = "transform: translate(-248rem);";
      slider_next.setAttribute("disabled", "true");
      slider_next.setAttribute("style", "cursor:pointer");
    }
    console.log(index);
  } else {
    index--;
    dot.forEach((element) => {
      if (
        element.className === "article_slider_information--dot-item active" &&
        index != -1
      ) {
        element.classList.remove("active");
      } else {
        if (element.getAttribute("data-index") == index) {
          element.classList.add("active");
        }
      }
    });
    if (index == -1) {
      slider_prev.setAttribute("disabled", "true");
      slider_prev.setAttribute("style", "cursor:pointer;z-index:1");
      index = 0;
    }
    if (valueOfSlider == "prev" && index == 0) {
      article_slider_run.style = "transform: translate(0);";
    }
    if (valueOfSlider == "prev" && index == 1) {
      article_slider_run.style = "transform: translate(-82.5rem);";
    }
    if (valueOfSlider == "prev" && index == 2) {
      slider_next.removeAttribute("disabled");
      article_slider_run.style = "transform: translate(-165rem);";
    }
  }
}

/* SLIDER DOT CẦN SỬA THÊM */
  dot.forEach((element) => element.addEventListener("click", function dotClickHandler() {
    sliderIndex(this.getAttribute("data-index"),this)
  }
  ))
  function sliderIndex(valueOfDataIndex) {
dot.forEach((element) =>{
  if (valueOfDataIndex == 0) {
    article_slider_run.setAttribute("style","transform: translate(0)");
    element.classList.add("active");
    if (element.getAttribute("data-index") != valueOfDataIndex && element.className === "article_slider_information--dot-item active") {
      element.classList.remove("active");
    }
    return index = valueOfDataIndex;
  }
  if (valueOfDataIndex == 1) {
    article_slider_run.setAttribute("style","transform: translate(-82.5rem)");
    element.classList.add("active");
    if (element.getAttribute("data-index") != valueOfDataIndex && element.className === "article_slider_information--dot-item active") {
      element.classList.remove("active");
    }
    return index = valueOfDataIndex;
  }
  if (valueOfDataIndex == 2) {
    article_slider_run.setAttribute("style","transform: translate(-165rem)");
    element.classList.add("active");
    if (element.getAttribute("data-index") != valueOfDataIndex && element.className === "article_slider_information--dot-item active") {
      element.classList.remove("active");
    }
    return index = valueOfDataIndex;
  }
  if (valueOfDataIndex == 3) {
    article_slider_run.setAttribute("style","transform: translate(-248rem)");
    element.classList.add("active");
    if (element.getAttribute("data-index") != valueOfDataIndex && element.className === "article_slider_information--dot-item active") {
      element.classList.remove("active");
    }
    return index = valueOfDataIndex;
  }
})
    
  }

/* SLIDER DOT CẦN SỬA THÊM */



