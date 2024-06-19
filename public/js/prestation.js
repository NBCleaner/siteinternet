const container = document.querySelector('.containerjs');
document.querySelector('.slider').addEventListener('input', (e) =>{
    container.style.setProperty('--position',`${e.target.value}%`)
})