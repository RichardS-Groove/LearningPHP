<!-- Contact -->
<section id="contact" class="four">
    <div class="container">

        <header>
            <h2>Contact</h2>
        </header>

        <p>Elementum sem parturient nulla quam placerat viverra
            mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
            donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
            orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

        <form method="post" action="#">
            <div class="row">
                <div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" id="txtName" /></div>
                <div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" id="txtEmail" /></div>
                <div class="col-12">
                    <textarea name="message" placeholder="Message" id="txtMessage"></textarea>
                </div>
                <div class="col-12">
                    <input type="submit" value="Send Message" id="btnSubmit" />
                </div>
            </div>
        </form>

    </div>
</section>

<script>
    (() => { //función que se ejecuta al cargar la página

        let btnSubmit = window.document.getElementById('btnSubmit');
        btnSubmit.addEventListener('click', function(e) { //e = event
            e.preventDefault();
            let nombre = window.document.getElementById('txtName').value;
            let email = window.document.getElementById('txtEmail').value;
            let mensaje = window.document.getElementById('txtMessage').value;

            //alert(`Nombre: ${nombre} \nEmail: ${email} \nMensaje: ${mensaje}`);

            fetch('email.php?nombre=' + nombre + '&email=' + email + '&mensaje=' + mensaje, { //fetch() es una función nativa de JS que permite hacer peticiones a un servidor
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
            }).then(e => { //then() es una función nativa de JS que permite manejar las respuestas de una petición
                alert(e);
            })
        });

    })();
</script>