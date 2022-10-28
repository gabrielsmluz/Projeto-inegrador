const input = document.querySelector('input')

input.addEventListener('keypress', () => {
    let inputlength = input.ariaValueMax.length

    if (inputlength === 3) {
        input.value += '.'

    }
})