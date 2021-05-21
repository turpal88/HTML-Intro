const modalBtn = document.querySelector(".modal-section-btn"),
  modalWindow = document.querySelector(".modal"),
  overlay = document.querySelector(".overlay"),
  slideArr = document.querySelectorAll(".slider-content__item"),
  arrowLeft = document.querySelector(".arrow-left"),
  arrowRight = document.querySelector(".arrow-right"),
  dots = document.querySelector(".dots"),
  dotsArr = [];
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
      removeActiveClass(contentWrapper, "content-active");
      addActiveClass(element, "content-active");
    }
  }
});

//Modal

modalBtn.addEventListener("click", (event) => {
  event.preventDefault();
  modalWindow.style.display = "block";
  overlay.style.display = "block";
  modalWindow.style.position = "absolute";
  modalWindow.style.right = "325px";
  modalWindow.style.top = "-150px";
});
overlay.addEventListener("click", (event) => {
  modalWindow.style.display = "none";
  overlay.style.display = "none";
});
//Слайдер. Решил задрочиться и сделать карусель. Но получилось не идеально

let curPos = 0;
//Вставка динамически dot в зависимости от количества слайдов
for (let i = 0; i < slideArr.length; i++) {
  let div = document.createElement("div");
  div.innerHTML = `<svg width='12' height='12' viewBox='0 0 12 12' fill='none' xmlns='http://www.w3.org/2000/svg'>
     <rect width='12' height='12' fill='#E9E9E9'/>
     </svg>`;
  div.classList.add("dots__item");
  dots.append(div);
  dotsArr.push(div);
}
dotsArr[0].classList.add("dot-active");
//Функция для изменения свойства transition-duration при работе карусели. По факту костыль, как сделать нормально я так и не разобрался. Можно было сделать по классу активности - но тогда нет эффекта уезжания вбок как у каруслеи
const transitionDuration = (sec) => {
  slideArr.forEach((item) => {
    item.style.transitionDuration = `${sec}s`;
  });
};
//Функция двигает слайды на определенное число процентов, кратное 100%, в зависимости от текущего слайда.
const makeAktiveItem = (curItem) => {
  slideArr.forEach((item) => {
    item.style.transform = `translateX(${-100 * curItem}%)`;
  });
  dotsArr.forEach((item) => {
    item.classList.remove("dot-active");
  });
  dotsArr[curItem].classList.add("dot-active");
};
//Обработчики на стрелки
arrowLeft.addEventListener("click", (event) => {
  event.preventDefault();

  if (curPos > 0) {
    curPos--;
    transitionDuration(1);
    makeAktiveItem(curPos);
  } else if (curPos == 0) {
    curPos = slideArr.length - 1;
    transitionDuration(0);
    makeAktiveItem(curPos);
  }
});
arrowRight.addEventListener("click", (event) => {
  event.preventDefault();

  if (curPos < slideArr.length - 1) {
    curPos++;
    transitionDuration(1);
    makeAktiveItem(curPos);
  } else if (curPos == slideArr.length - 1) {
    curPos = 0;
    transitionDuration(0);
    makeAktiveItem(curPos);
  }
});
