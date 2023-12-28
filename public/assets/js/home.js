const loadmoreId = document.querySelector('#loadmore');
const matchCard = document.querySelectorAll('.match-card-display');
let index = 0;
loadmoreId.addEventListener('click', function(){


    if(index >= matchCard.length){
        loadmoreId.textContent="Load More";
        for (let j = 3; j < matchCard.length; j++) { 
            matchCard[j].classList.remove('flex');  
            matchCard[j].classList.add('hidden');
        }
        index=0;
        
    }else{
           
        for (let i = index; i < index+3; i++) {;
            matchCard[i].classList.remove('hidden');
            matchCard[i].classList.add('flex');  
            console.log('Ook');

   
        }
        index+=3;
        if(index >= matchCard.length){
            loadmoreId.textContent="Load less";
        }
    }


});