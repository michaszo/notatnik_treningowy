const btn = document.querySelector(".add_trening__button");

btn.addEventListener("click", function() {
    const add_trening = document.querySelector(".add_trening").classList;

    if (add_trening.contains('add_trening--collapse')) {
        add_trening.remove('add_trening--collapse');
    } else {
        add_trening.add('add_trening--collapse');
    }
});