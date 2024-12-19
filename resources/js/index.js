
const loginBtn = document.getElementById('login');
const closeBtn = document.getElementById('close');
const modal = document.getElementById('modal');
loginBtn.addEventListener('click', function(){
    // alert('open');
    modal.classList.remove('opacity-0');
    modal.classList.remove('pointer-events-none');
})

closeBtn.addEventListener('click', function(){
    // alert('close');
    modal.classList.add('opacity-0');
    modal.classList.add('pointer-events-none');
})

modal.addEventListener('click', function(e){
    // alert('close');
    if(e.target.id ==='modal') {
        modal.classList.add('opacity-0');
        modal.classList.add('pointer-events-none');
    }
})
