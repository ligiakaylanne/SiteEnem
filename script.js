// Função para coletar o feedback do usuário e fazer algo com ele
function coletarFeedback(numeroDoFeedback) {
    var feedbackText = document.getElementById('feedbackText' + numeroDoFeedback).value;
    alert('Feedback ' + numeroDoFeedback + ':\n' + feedbackText);
}

document.getElementById('feedbackButton1').addEventListener('click', function() {
    coletarFeedback(1);
});

document.getElementById('feedbackButton2').addEventListener('click', function() {
    coletarFeedback(2);
});

document.getElementById('feedbackButton3').addEventListener('click', function()