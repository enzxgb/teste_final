const botaoEntrar = document.getElementById('botaoEntrar');
const modalLogin = document.getElementById('modalLogin');
const botaoCancelar = document.getElementById('botaoCancelar')


botaoEntrar.addEventListener("click", function () {
    modalLogin.showModal()
})

botaoCancelar.addEventListener("click", function() {
    modalLogin.close()
})

// const botaoLike = document.getElementById('botaoLike');

// botaoLike.addEventListener("click", function() {
//     botaoLike.src = "{{ asset('flecha_cima_cheia.svg') }}"
// })


