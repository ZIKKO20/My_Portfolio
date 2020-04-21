const TypeWriter = function(txtElement, words, wait = 300) {
  this.txtElement = txtElement;
  this.words = words;
  this.txt = "";
  this.wordIndex = 0;
  this.wait = parseInt(wait, 10);
  this.type();
  this.isDelelting = false;
};

//Type Method
TypeWriter.prototype.type = function() {
  //Current Index of words
  const current = this.wordIndex % this.words.length;
  //Get Full Text
  const fullTxt = this.words[current];

  if (this.isDelelting) {
    //Remove a character
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    //Add a character
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }
  //Insert txt into element
  this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

  //T Init ype speed
  let TypeSpeed = 300;
  if (this.isDelelting) {
    TypeSpeed /= 2;
  }

  //Check to see if the word is completed
  if (!this.isDelelting && this.txt === fullTxt) {
    //Pause at end
    TypeSpeed = this.wait;
    //Set Delete to true
    this.isDelelting = true;
  } else if (this.isDelelting && this.txt === "") {
    this.isDelelting = false;

    //move to the next word
    this.wordIndex++;
    //Pause before start typing
    TypeSpeed = 500;
  }

  setTimeout(() => this.type(), TypeSpeed);
};
//Dom Initialize
document.addEventListener("DOMContentLoaded", init);

//Init App
function init() {
  const txtElement = document.querySelector(".txt-type");
  const words = JSON.parse(txtElement.getAttribute("data-words"));
  const wait = txtElement.getAttribute("data-wait");
  //Init Typewrite
  new TypeWriter(txtElement, words, wait);
}
