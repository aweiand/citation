<?php
require_once "mainframe/autoload.php";
/*
  $ut = new utils();
  @session_start();
  if ((!isset($_SESSION['autenticado'])) && !isset($_SESSION['usuid'])) {
  header("Location:/alo/index.php?action=erroLogin");
  } elseif (isset($_SESSION['usuid']) && !$ut->_autentica())
  header("Location:/alo/index.php?action=erroLogin");
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

                <?php
                $url = $_SERVER['REQUEST_URI'];
                $url = substr($url, strpos($url, "/pg/") + 4, strlen($url));
                $url = explode("/", $url);

                if (($url[0] == '') && ($url[1] == "home.php"))
                        include "mainframe/act/comuns/comuns/home.php";

                else {
                        $param = substr($url[2], strpos($url[2], ".php?") + 5, strlen($url[2]));
                        parse_str($param, $param);

                        $param = json_decode(json_encode($param), FALSE);

                        if (!class_exists($url[0]))
                                echo "  <div style='text-align: center;'>
                                                                                                        <img src='/alo/img/easter_3.jpeg' />
                                                                                                        <p style='margin-top: 20px;'>Ops, houve algum problema com o link class...</p>
                                                                                                </div>";
                        else {
                                $com = new $url[0]();

                                if (!method_exists(get_class($com), $url[1]))
                                        echo "  <div style='text-align: center;'>
                                                                                                        <img src='/alo/img/easter_3.jpeg' />
                                                                                                        <p style='margin-top: 20px;'>Ops, houve algum problema com o link...</p>
                                                                                                </div>";
                                else {
                                        echo $com->$url[1](substr($url[2], 0, strpos($url[2], ".php")), $param);
                                }
                        }
                }
                ?>
        </body>
</html>
