let tabsWrapper = document.querySelector(".tabs-wrapper"),
  contentWrapper = document.querySelector(".content-wrapper");

//Переключение табов
const removeActiveClass = (item, className) => {
  for (el of item.children) {
    el.classList.remove(className);
  }
};
const addActiveClass = (item, className) => {
  item.classList.add(className);
};
tabsWrapper.addEventListener("click", (event) => {
  let curNode = event.target;
  removeActiveClass(tabsWrapper, "tab-active");
  addActiveClass(curNode, "tab-active");
  for (element of contentWrapper.children) {
    if (element.dataset.content == curNode.dataset.tab) {
      console.log(element);
      removeActiveClass(contentWrapper, "content-active");
      console.log(element);
      addActiveClass(element, "content-active");
      console.log(element);
    }
  }
});

//Слайдер
const slideArr = document.querySelectorAll(".slider-content__item"),
  arrowLeft = document.querySelector(".arrow-left"),
  arrowRight = document.querySelector(".arrow-right");
let curPos = 0;
const makeAktiveClass = (curItem) => {
  slideArr.forEach((item) => {
    item.classList.remove("slide-active");
  });
  curItem.classList.add("slide-active");
};
slideArr.forEach((el, index) => {
  if (el.classList.contains("slide-active")) {
    curPos = index;
  }
});

arrowLeft.addEventListener("click", (event) => {
  event.preventDefault();
  if (curPos > 0) {
    curPos--;
    makeAktiveClass(slideArr[curPos]);
  } else if (curPos == 0) {
    curPos = slideArr.length - 1;
    makeAktiveClass(slideArr[curPos]);
  }
});
arrowRight.addEventListener("click", (event) => {
  event.preventDefault();
  if (curPos < slideArr.length - 1) {
    curPos++;
    makeAktiveClass(slideArr[curPos]);
  } else if (curPos == slideArr.length - 1) {
    curPos = 0;
    makeAktiveClass(slideArr[curPos]);
  }
});
