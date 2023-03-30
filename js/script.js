var items1 = document.getElementsByTagName('li');
var counter1 = 1;

setInterval(function(){
  items1[counter1 - 1].style.opacity = 0;
  items1[counter1].style.opacity = 1;
  counter1++;
  if(counter1 == items1.length) {
    counter1 = 1;
    items1[0].style.opacity = 1;
    items1[items1.length - 1].style.opacity = 0;
  }
}, 500);

var items = document.getElementsByTagName('al');
var counter = 1;

setInterval(function(){
  items[counter - 1].style.opacity = 0;
  items[counter].style.opacity = 1;
  counter++;
  if(counter == items.length) {
    counter = 1;
    items[0].style.opacity = 1;
    items[items.length - 1].style.opacity = 0;
  }
}, 500);