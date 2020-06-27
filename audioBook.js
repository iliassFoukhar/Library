//Icon swiper
setInterval(()=>{
  if(speechSynthesis.speaking){
    //Icon
    buttons[1].children[0].classList.remove("fa-play-circle");
    buttons[1].children[0].classList.add("fa-stop-circle");
    //Color
    buttons[1].classList.add("btn-secondary");
    buttons[1].classList.remove("btn-danger");
  }
  else{
    //Icon
    buttons[1].children[0].classList.add("fa-play-circle");
    buttons[1].children[0].classList.remove("fa-stop-circle");
    //color
    buttons[1].classList.remove("btn-secondary");
    buttons[1].classList.add("btn-danger");
  }
},100);

//Once pressed
function playPressed(){
  let currentText = pagesArray[currentPage - 1].innerText;
  //if it's not speaking
  if(!speechSynthesis.speaking)
  {
    speakText(currentText);
  }
  else{
    speechSynthesis.cancel()
  }
}
//the function that'll make it speak
function speakText(text){
  const utterance = new SpeechSynthesisUtterance(text);
  utterance.rate = 1;
  speechSynthesis.speak(utterance);
}
