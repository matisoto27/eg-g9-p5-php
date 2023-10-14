<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tu_email = $_POST["tu_email"];
        $destinatario = $_POST["email_amigo"];
        $asunto = "Te recomiendo este sitio web";
        $cuerpo = '
            <html>
                <head>
                    <title>Envio de mail</title>
                </head>
                <body>
                    Haz click en el siguiente enlace <a href="https://tusitio.com"></a>
                </body>
            </html>
        ';
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: NN <nn@nn.com>\r\n";
        $headers .= "Reply-To: ss@ss.com\r\n";
        $headers .= 'Cc:' . $destinatario . '\r\n';
        if (mail($destinatario, $asunto, $cuerpo, $headers)) {
            echo "Exito";
        } else {
            echo "Fracaso";
        }
    }
?>