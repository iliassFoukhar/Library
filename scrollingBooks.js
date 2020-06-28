//To decide whether it's left or right scroll
  let plusOrMinus = 0;
  let tempPlusOrMinus = 0;
//frequency of setInterval function
  const frequency = 10;
//scrolling speed
  const scrollSpeed = 1.5;
//these two variables are clear, one for the current Pos
  let currentPosition = 0;
//the other for the maximum maxWidth
  let maxWidth = 0;
//let's wait till everything is loaded
  window.addEventListener("load",()=>{
    //the object that holds the container of all books
      const outer = document.getElementById("outer");
      outer.addEventListener("mouseover", ()=>{
        tempPlusOrMinus = plusOrMinus;
        currentPosition = outer.scrollLeft;
        plusOrMinus = 0;
      });
      outer.addEventListener("mouseout", ()=>{
        plusOrMinus = tempPlusOrMinus;
      });
      plusOrMinus = 1;
      maxWidth = outer.scrollLeftMax;
      if(maxWidth == undefined || !maxWidth){
        maxWidth = 1200;
      }
});
//To scroll
  setInterval(()=>{
    if(plusOrMinus!=0){
      currentPosition += scrollSpeed * plusOrMinus;
      outer.scrollTo(currentPosition , 0);
      if(currentPosition >= maxWidth){
        plusOrMinus = -1;
      }
      else if(currentPosition <= 0){
        plusOrMinus = 1;
      }
    }
  }, frequency);
