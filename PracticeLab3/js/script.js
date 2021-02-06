/* var outfit = {
  tops: ["Black Short Sleeve Shirt", "White Short Sleeve Shirt", "Black Long Sleeve Shirt", "White Long Sleeve Shirt"],
  bottoms: ["White Pants", "Black Pants", "Blue Jeans"],
  shoes: ["White Sneakers", "Black Sneakers"]
};

function pickOutfit(){
  pickOutfit.tops[1] + ", " + pickOutfit.bottoms[2]. ", " + pickOutfit.shoes[1]


var index = 0;
var myList = ["banana", "apple", "pear"];

onEvent("leftButton", "click", function() {
if(index >  0) {
  index--;
}
  updateScreen()
});

onEvent("rightButton", "click", function() {
  if(index < myList.length - 1) {
    index++;
  }
  updateScreen();
});

function updateScreen{
  setProperty("fruitLabel", "text", myList[index]);
}
*/

var index=0;
var myList = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];
function up() {
  if (index>=0) {
    index--;
    updateScreen();
  }
}

function down() {
  if (index<=myList.length-1) {
    index++;
    updateScreen();
  }
function updateScreen(){
  document.getElementById('roygbiv').innerHTML=myList[index];
}
}
