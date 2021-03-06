<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Erro 500</title>
        <meta name="viewport" content="width=device-width" />
        <style>
            body { font-family:"Verdana";font-weight:normal;font-size: .7em;color:black;} 
            p { font-family:"Verdana";font-weight:normal;color:black;margin-top: -5px}
            b { font-family:"Verdana";font-weight:bold;color:black;margin-top: -5px}
            H1 { font-family:"Verdana";font-weight:normal;font-size:18pt;color:red }
            H2 { font-family:"Verdana";font-weight:normal;font-size:14pt;color:maroon }
            pre { font-family:"Consolas","Lucida Console",Monospace;font-size:11pt;margin:0;padding:0.5em;line-height:14pt}
            .marker { font-weight: bold; color: black;text-decoration: none;}
            .version { color: gray;}
            .error { margin-bottom: 10px;}
            .expandable { text-decoration:underline; font-weight:bold; color:navy; cursor:hand; }
            @media screen and (max-width: 639px) {
                pre { width: 440px; overflow: auto; white-space: pre-wrap; word-wrap: break-word; }
            }
            @media screen and (max-width: 479px) {
                pre { width: 280px; }
            }
        </style>

    </head>
    <body bgcolor="white">

        <span><H1>Erro Interno de Servidor<hr width="100%" size="1" color="silver" /></H1>
            <h2> <i>{$Exception->getMessage()}</i> </h2></span>
        <font face="Arial, Helvetica, Geneva, SunSans-Regular, sans-serif ">

            <b> Description: </b> ...
            <br><br>

            <b> Requested URL: </b> {$smarty.server.REQUEST_URI} <br /><br />

            <hr width="100%" size="1" color="silver" />

            <b>Version Information:</b>&nbsp;PHP MVC Framework Version:1.0; PHP Version:{$smarty.const.PHP_VERSION}

            </font>

    </body>
</html>