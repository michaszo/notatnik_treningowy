const btn = document.querySelector(".add_trening__button");

btn.addEventListener("click", function() {
    if (document.querySelector(".add_trening").classList.contains('add_trening--collapse')) {
        document.querySelector(".add_trening").classList.remove('add_trening--collapse');
    } else {
        document.querySelector(".add_trening").classList.add('add_trening--collapse');
    }

});