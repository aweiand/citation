<?php
require_once "mainframe/autoload.php";
/*
  @session_start();
  $ut = new utils();
  if ((isset($_SESSION['autenticado'])) && isset($_SESSION['usu'])) {
  if ($ut->_autentica())
  header("Location: /alo/alo.php");
  }
 * 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <meta name="application-name" content="Citation" /> 
                <meta name="author" content="Augusto Weiand <guto.weiand@gmail.com> Deividi Schumacher Velho <deividi@gmail.com>" />
                <meta name="keywords" content="Gerador, Citações, Referências, Bibliográficas" />
                <meta property="og:title" content="Gerador de Citação e Referências Bibliográficas"/>
                <meta property="og:type" content="website"/>
                <meta property="og:url" content="http://<?= $_SERVER['SERVER_NAME'] ?>.com.br/"/>
                <meta property="og:image" content="http://<?= $_SERVER['SERVER_NAME'] ?>/portal/assets/imgs/logo.png"/>
                <meta property="og:site_name" content="Gerador de Citação e Referências Bibliográficas"/>
                <meta property="og:description" content="Gerador de Citação e Referências Bibliográficas"/>
                <meta name="robots" content="index, follow" />
                <meta name="title" content="Gerador de Citação e Referências Bibliográficas" />
                <meta name="description" content="Gerador de Citação e Referências Bibliográficas" />
                <link rel="shortcut icon" type="image/x-icon" href="http://<?= $_SERVER['SERVER_NAME'] ?>/assets/imgs/favicon.ico" />
                <link rel="canonical" href="http://<?= $_SERVER['SERVER_NAME'] ?>/" />

                <title>Geradot de Citações e Referências</title>

                <?php require_once("mainframe/incs.php"); ?>
        </head>
        <body>


        </body>
</html>
