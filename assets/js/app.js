document.querySelector('form').addEventListener("submit", function(e) {
    e.preventDefault();

    var data = new FormData(this);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(xhr);
                console.log(this.response);
                var result = this.response;
                if (result.success) {
                    Swal.fire({
                        title: 'Félicitation !',
                        text: 'Votre message à bien été envoyé !',
                        icon: 'success',
                        confirmButtonText: 'Valider',
                        customClass: {
                            confirmButton: 'thm-btn contact-page__btn'
                        }
                    });
                }
            }
        } else if (this.readyState == 4) {
            alert('Une erreur est survenue...');
        }
    };

    xhr.open("POST", "assets/inc/script.php", true);
    xhr.responseType = "json";
    // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);

    return false;
});