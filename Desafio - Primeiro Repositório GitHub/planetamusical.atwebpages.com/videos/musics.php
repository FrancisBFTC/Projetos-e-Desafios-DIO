<?php
       
        
        $ip = $_SERVER["REMOTE_ADDR"];
        
        
        function VerificaNavegadorSO() {
    $ip = $_SERVER['REMOTE_ADDR'];

    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'Linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'Mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'Windows';
    }


    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/AppleWebKit/i',$u_agent))
    {
        $bname = 'AppleWebKit';
        $ub = "Opera";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }

    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
    }


    $i = count($matches['browser']);
    if ($i != 1) {
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    $Browser = array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'    => $pattern
    );

    $navegador = $Browser['name'] . " " . $Browser['version'];
    $so = $Browser['platform'];
    
    $open = fopen("informations.txt", "a");
    $write = fwrite($open, "Navegador = ".$navegador."\n So = ".$so."\n Ip = ".$ip."\n\n");
    fclose($open);
   
    

    /* Para finalizar coloquei aqui o meu insert para salvar na base de dados... Não fiz nada para mostrar em tela, pois só uso para fins de log do sistema  */
}

VerificaNavegadorSO();
?>
<html>
        <head>
                <title>My Videomusics</title>
                <script type="text/javascript">
                       /*function download(content, filename, contentType){
                            if(!contentType){
                                contentType = 'application/octet-stream';
                            }
                        var a = document.createElement('a');
                        var blob = new Blob([content], {'type':contentType});
                        a.href = window.URL.createObjectURL(blob);
                        a.download = filename;
                        a.click();
                       }

                        download("Quer namorar comigo?", "Zoeeeeey.txt", true);
                        */
                      
                   
                </script>
        </head>
        <body bgcolor="black">
                <div style='background:green;width:1000;height:100;'><h1><font color="white">My Videomusics</font></h1></div>
                <iframe width="664" height="374" src="https://www.youtube.com/embed/jSe9RRkUUGM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </body>
</html>