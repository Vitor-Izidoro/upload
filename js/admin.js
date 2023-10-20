function upload() {
    var arquivo = document.getElementById('arquivo').files[0];
    var dados = new FormData();
    dados.append('arquivo', arquivo);

    fetch('../php/admin.php', {
        method: 'POST',
        body: dados
    })
    .then(response => response.json())
    .then(data => {
        // Exibir a mensagem na página HTML
        document.getElementById('mensagem').textContent = data.mensagem;
    })
    .catch(error => console.error(error));
}
