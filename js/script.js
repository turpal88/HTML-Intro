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
