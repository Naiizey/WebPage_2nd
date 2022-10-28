const cards = document.querySelectorAll('.card');
const addClass = 'hugeCard';
const closeButt = document.querySelector('.close');
const baseClass = 'card';

function openCard(projets){
    projets.classList.add(addClass);
    closeButt.style.display = 'block';
}

function cardListener(){
    for(let i of cards){
        i.addEventListener('click', () => {openCard(i);});
    }
}

function closeButton(){
    for(let i of cards){
        if(i.classList.contains(addClass)){
            i.classList.remove(addClass);
            closeButt.style.display = 'none';
        }
    }
}

cardListener();
closeButt.addEventListener('click', () => {closeButton()});