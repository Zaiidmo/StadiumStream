const loadmoreId = document.querySelector('#loadmoreId');
const matchCard = document.querySelectorAll('.match-card-display');
let index = 0;
loadmoreId.addEventListener('click', function(){


    if(index >= matchCard.length){
        loadmoreId.textContent="Load More";
        for (let j = 0; j < matchCard.length; j++) { 
            matchCard[j].style.display = "none";   
        }
        index=0;
        
    }else{
           
        for (let i = index; i < index+3; i++) {;
            matchCard[i].style.display = "flex"
        }
        index+=3;
        if(index >= matchCard.length){
            loadmoreId.textContent="Load less";
        }
    }


});