//Global Variables
  //the book's Id
  const bookToRead = document.getElementsByClassName("bookToRead")[0].innerHTML;
  //the book's full content
  const contentBook = document.getElementsByClassName("content");
  //buttons | 0 : - |1 : p | 2 : + |
  const buttons = document.getElementsByClassName("lpr");
//--- to define the maximum number of maxPages----\\
   //each page with its text
  let pagesArray = [];
  let currentPage = 0;
  //so as to get executed until everything is loaded
  setTimeout(()=>{
    //to stock the pages in an array
    pagesArray = [...contentBook];
    currentPage = 1;
    changePage(currentPage - 1);
  },100); //after one sec



//increment Page
  function incrementPage(){
    if(currentPage < pagesArray.length){
      currentPage++;
      changePage(currentPage-1);
    }
      if(speechSynthesis.speaking){
          speechSynthesis.cancel();
      }
  }
//Decrement Page
  function decrementPage(){
    if(currentPage > 1){
      currentPage--;
      changePage(currentPage-1);
    }
    if(speechSynthesis.speaking){
        speechSynthesis.cancel();
        //Icon
        buttons[1].children[0].classList.add("fa-play-circle");
        buttons[1].children[0].classList.remove("fa-stop-circle");
        //color
        buttons[1].classList.remove("btn-secondary");
        buttons[1].classList.add("btn-danger");
    }

  }
//as it says to change the page
  function changePage(page){
      for(let i =0; i<pagesArray.length ; i++){
        if(i != page){
          pagesArray[i].style.cssText = "display:none;";
        }
      }
      pagesArray[page].style.cssText = "display:block;";
      //CSS TITLE AND AUTHOR
      if(page == 1 || page == 2 || page == 0){
        pagesArray[page].style.cssText = "margin-top: 5rem; font-size:5rem;text-align:center; font-weight:bold;";
      }
      else{
        pagesArray[page].style.cssText = " font-size:1.7rem;text-align:justify; margin : 2.5rem";
      }
      //colors of buttons
      switch(currentPage)
        {
          case 1:
            buttons[0].classList.add("btn-secondary");
            buttons[0].classList.remove("btn-warning");
            buttons[0].disabled = true;
            break;
          case pagesArray.length:
            buttons[2].classList.remove("btn-warning");
            buttons[2].classList.add("btn-secondary");
            buttons[2].disabled = true;
            break;
          default:
            buttons[0].classList.add("btn-warning");
            buttons[0].classList.remove("btn-secondary");
            buttons[2].classList.add("btn-warning");
            buttons[2].classList.remove("btn-secondary");
            buttons[2].disabled = false;
            buttons[0].disabled = false;
            break;
      }
    }
