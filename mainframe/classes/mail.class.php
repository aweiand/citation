<?php

/**
 * Esta Classe prove mÈtodos para envio de e-mails
 *  
 * @author Augusto Weiand <guto.weiand@gmail.com>
 * @version 0.1
 * @access public
 * @name mail
 * @category tablesManipulate  
 * @package mail
 */

class mail {

    var $campos;
    var $imagens;
    var $cabecalhos;
    var $txtCabecalho;
    var $conteudo;
    var $txtConteudo;
    var $assunto;
    var $objMail;
    var $config;
	var $port = 587;

    function mail($nome_arquivo, $caminho_imagens = "", $conteudo = "") {
        $this->imagens = array();
        $this->campos = array();
        $this->cabecalhos = array();
        $this->txtCabecalho = "";
        $this->txtConteudo = "";

        $this->caminho_imagens = $caminho_imagens;
        if ($nome_arquivo != "")
            $this->abreArquivo($nome_arquivo);
        else
            $this->conteudo = $conteudo;

        $this->objMail = new PHPMailer();
    }

    /**
     * Metodo que abre o arquivo passado no parametro e coloca seu conteudo em $this->conteudo
     * @access public
     * @param $nomeArquivo String - caminho para o arquivo
     * @return null
     */
    function abreArquivo($nomeArquivo) {
        $fh = fopen($nomeArquivo, "r");
        $this->conteudo = fread($fh, filesize($nomeArquivo));
    }

    /**
     * Metodo que troca a chave pelo dado que existe no conteudo guardado na variavel
     * @access public
     * @return null
     */    
    function parse() {
        // Cabecalhos.
        $this->txtCabecalho = "Content-Type: text/html; charset=UTF-8\r";
        $this->txtCabecalho .= "MIME-Version: 1.0\r";
        $chaves = array_keys($this->cabecalhos);
        foreach ($chaves as $chave)
            if ($chave != "To")
                $this->txtCabecalho .= "$chave: " . $this->cabecalhos[$chave] . "\r";

        // Corpo da mensagem.
        $chaves = array_keys($this->campos);
        $this->txtConteudo = $this->conteudo;
        foreach ($chaves as $chave)
            $this->txtConteudo = str_replace("***$chave***", $this->campos[$chave], $this->txtConteudo);
    }

    /**
     * Metodo que seta as configuraÁıes do server de e-mail
     * @access public
     * @param $server_smtp String - SMTP Server
     * @param $login String - Login SMTP Server
     * @param $pass String - Password SMTP Server
     * @param $port Integer - Porta do SMTP Server
     * @return null 
     */    
    function setConfig($server_smtp, $login, $pass, $port = false) {
        $this->objMail->Host = $server_smtp;
        $this->objMail->Username = $login;
        $this->objMail->Password = $pass;
		
		if (isset($port) || !$port)
			$this->objMail->Port = $this->port;
		else
			$this->objMail->Port = $port;
		
        $this->objMail->SMTPAuth = true;
        $this->objMail->IsSMTP();
        $this->objMail->Timeout = 180;
    }

    /**
     * Metodo que envia o e-mail
     * @access public
     * @param $use String - Tipo de envio se mail, phpmailer ou view para visualizar em tela
     * @return String echo se view ou 'ok' ou echo do erro 
     */
    function send($use = false) {
        if ($use == "mail") {
            if (mail($this->cabecalhos["To"], ($this->assunto), $this->txtConteudo, $this->txtCabecalho))
                return "ok";
            else
                return "erro no mail()";
        }
        else
        if ($use == "phpmailer") {
            $mail = $this->objMail;

            /*
             * 			$mail->IsMail();   
             */

            $f = $this->cabecalhos["From"];
            $fs = explode("<", $f);
            $from_name = str_replace("\"", "", $fs[0]);
            $from = str_replace("<", "", $fs[1]);
            $from = str_replace(">", "", $from);

            $t = $this->cabecalhos["To"];
            $ts = explode("<", $t);
            $to_name = str_replace("\"", "", $ts[0]);
            $to = str_replace("<", "", $ts[1]);
            $to = str_replace(">", "", $to);

            if (isset($this->cabecalhos["Reply-To"])) {
                $rpt = $this->cabecalhos["Reply-To"];
                $rpts = explode("<", $rpt);
                $rpto_name = str_replace("\"", "", $rpts[0]);
                $rpto = str_replace("<", "", $rpts[1]);
                $rpto = str_replace(">", "", $rpto);
                $mail->AddReplyTo($rpto, $rpt_name);
            }

            $mail->From = $from;
            $mail->FromName = $from_name;
            $mail->AddAddress($to, $to_name);

            if (isset($this->cabecalhos["Cc"])) {
                $t = $this->cabecalhos["Cc"];
                $ts = explode("<", $t);
                $to_name = str_replace("\"", "", $ts[0]);
                $to = str_replace("<", "", $ts[1]);
                $to = str_replace(">", "", $to);

                $mail->AddAddress($to, $to_name);
            }

            $mail->WordWrap = 50;                                 // set word wrap to 50 characters
            $mail->IsHTML(true);                                  // set email format to HTML

            $mail->Subject = $this->assunto;
            $mail->Body = utf8_decode($this->txtConteudo);
            $mail->AltBody = "Seu cliente de email n„o suporta e-mails em formato HTML.";

            if (count($this->imagens) > 0) {
                foreach ($this->imagens as $pos => $imagem)
                    $mail->AddEmbeddedString(base64_decode($imagem["imagem"]), $imagem["cid"], "img_" . $pos, "base64", $imagem["ct_imagem"]);
            }

            $resultado = $mail->Send();
            if ($resultado != true)
                return $mail->ErrorInfo;
            else
                return "ok";
        }
        else
        if ($use == "view") {
            echo "<pre>";
            echo "Cabecalho: <BR>" . $this->txtCabecalho . "<BR><BR>";
            echo "</pre>";
            echo "Conte√∫do: <BR>" . $this->txtConteudo . "<BR><BR>";
            exit();
        }
    }

}

?>
