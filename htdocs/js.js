function updateCountdown(seconds) {
    const countdownElementSpan = document.querySelector('.time');

    if (seconds <=10){
        countdownElementSpan.classList.add('text-warning');
    }
    
    if (seconds <= 5){
        countdownElementSpan.classList.add('text-danger');
        countdownElementSpan.classList.add('beat-seconds');
        countdownElementSpan.innerHTML = seconds;
        
    } 
    
    if (seconds <= 0) {  // Voici mes conditions au moment de la fin du Timer
        console.log('ppl');
        const countdownElement = document.querySelector('#countdown');
        countdownElementSpan
        countdownElement.innerHTML = 
        '<div class="text-danger fs-1">Trop tard mec, passe à autre chose ! </div><br> ';
        
        // alert('Trop tard mon pote  !');
    }else{
        countdownElementSpan.innerHTML = seconds;
    }
}

// Fonction pour démarrer le compte à rebours
function startCountdown(seconds) {
    updateCountdown(seconds); // Mettre à jour immédiatement pour éviter un délai d'une seconde
    countdownInterval = setInterval(function() {
        seconds--;
        updateCountdown(seconds, countdownInterval);
        if (seconds == 0) {
            
            clearInterval(countdownInterval)
            setTimeout(function() {
                location.reload(); // la page se recharge au bout de 1sec
            }, 3000);
            
            let button = document.querySelectorAll("#button");
            for (let i = 0; i < button.length; i++) { //boucle
                button[i].style.display = "none";
            }
        }
    }, 1000);
}

let seconds = 15;

startCountdown(seconds); // Démarrer le compte à rebours dès le chargement de la page
