import './bootstrap';
import '../css/style.css';

const input = document.querySelector('cpf')

input.addEventListener('keypress', () => {
    let inputlength = input.ariaValueMax.length

    if (inputlength === 3) {
        input.value += '.'

    }
})
