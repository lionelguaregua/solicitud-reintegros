<?php
if(isset($_POST['callResq']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mensage'])){
    $name   = $_POST['name'];
    $email   = $_POST['email'];
    $mensage = $_POST['mensage'];
    $to  = 'bescalante822@gmail.com';
    $subject = 'Contacto Quántico Servicios de Asistencia';
    $message = '
        <table cellpadding="0" width="100%" cellspacing="0" border="0" bgcolor="#ededed">
            <tbody><tr>
                <td align="center">
                    <table cellpadding="0" cellspacing="0" width="90%" border="0" style="border-collapse:collapse">
                        <tbody><tr>
                            <td align="center" style="padding-top:20px">
                                <img src="http://www.quanticoservicios.net/images/Quantico1.png" alt="Quantico" class="CToWUd">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top:40px;padding-bottom:40px" align="center">
                                <table style="border-radius:15px" cellpadding="0" cellspacing="0" border="0" width="90%">
                                    <tbody><tr>
                                        <td align="center" style="padding-top:20px;padding-bottom:20px;color:#ffffff;border-radius:15px 15px 0px 0px;font-family:Calibri,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:26px;font-weight:bold" bgcolor="#201958">
                                            Contacto
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding-top:10px;padding-bottom:20px;border-radius:0px 0px 15px 15px" bgcolor="#ffffff">
                                            <table cellpadding="0" cellspacing="0" border="0" width="90%">
                                                <tbody>
                                                <tr>
                                                    <td style="padding-top:20px;line-height:150%;font-family:Calibri,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:15px;color:#555555">
                                                       <br>
                                                       <b>Nombre y Apellido:</b> '.$name.'
                                                       <br>
                                                       <b>Email:</b>  '.$email.'
                                                       <br>
                                                        <b>Mensaje:</b>  '.$mensage.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                            <tbody><tr>
                                                                <td width="75%" style="font-family:Calibri,Helvetica Neue,Helvetica,Arial,sans-serif">
                                                                    <p style="font-size:13px;color:#F18B00"><b>Enviado por <span class="il">Quántico</span>. <small style="color:#000000"></small></b></p>
                                                                    <p style="font-size:11px;color:#555555">@2018 <span class="il">Qu&aacute;ntico</span>
                                                                </p></td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>';
    $headers = 'From: Quántico Servicios de Asistencia <no-reply@quanticoservicios.net>' . "\r\n" .
    'Reply-To: no-reply@quanticoservicios.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8\r\n";
    if(mail($to,$subject,$message,$headers)){
        $status = 'ok';
    }else{
        $status = 'err';
    }
    echo $status;
    
}
?>