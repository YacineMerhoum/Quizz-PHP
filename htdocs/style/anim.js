document.addEventListener('DOMContentLoaded', function () {
    
    document.querySelector('.animate-title').classList.add('active');
});

document.addEventListener('DOMContentLoaded', function () {
    // Ajouter la classe 'active' pour déclencher l'animation après un délai
    setTimeout(function () {
        document.querySelector('.animation').classList.add('go');
    }, 2500); // Délai en millisecondes avant le début de l'animation
});



