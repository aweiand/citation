<?php

require_once "autoload.php";

@session_cache_expire(180); // 2 hours
@session_start();

/*
  echo "<pre>";
  print_r($post);
  exit();
 */

//##################################
$db = new data();
$uti = new utils();
//#################################

/**
 * Login na seção
 */
if (isset($post["username"]) && (isset($post['pass']))) {
        if (!$uti->badWords($post)) {
                $uti->_insActlog("_err-login", "login", "Erro de Login BadWords = " . $post['username'] . " ||| " . $post['pass']);
                return "Não Logado";
                break;
        }

        $log = $db->_login($post['username'], $post['pass']);
        if (isset($log['usuid'])) {
                if ($db->_get("alo.permissoes", "pessoa = " . $log['usuid'])->RecordCount() != 0) {
                        $_SESSION['usuid'] = $log['usuid'];
                        $_SESSION['usu'] = $log['usu'];
                        $_SESSION['email'] = $log['email'];
                        $_SESSION['autenticado'] = true;
                } else
                        $_SESSION['autenticado'] = false;

                if (!$_SESSION['autenticado']) {
                        $uti->_insActlog("_err-login", "login", "Erro de Login = " . $post['username']);
                        session_destroy();
                        header("Location: ../index.php?action=erroLogin");
                } else {
                        $uti->_insActlog("_login", "login", "Login");

                        unset($_COOKIE['lembrar']);
                        if (isset($post['lembrar']) && $post['lembrar'] == 'lembrar') {
                                if (!isset($_COOKIE['lembrar']))
                                        setcookie('lembrar', $post['username'], time() + 3600 * 24, "/");
                                else {
                                        unset($_COOKIE['lembrar']);
                                        setcookie('lembrar', $post['username'], time() + 3600 * 24, "/");
                                };
                        }

                        header("Location: ../alo.php");
                        break;
                }
        } else {
                $uti->_insActlog("_err-login", "login", "Erro de Login = " . $post['username']);
                session_destroy();
                header("Location: ../index.php?action=erroLogin");
        }
}

if (isset($get['action'])) {
        switch ($get['action']) {
                /**
                 * LogOff na sessão
                 */
                case "logoff" : {
                                session_destroy();
                                header("Location: ../index.php?action=logOff");
                        } break;
        }
};

if (isset($post['action'])) {
        switch ($post['action']) {
                /**
                 * Função para inserir dados
                 *  @param String $post['table'] Tabela
                 *  @param String $post['field'] Campo da chave primária
                 *  @param Array $post['data'] Dados
                 *  @return Integer
                 */
                case "_insrtData" : {
                                $table = $post['table'];
                                $field = $post['field'];
                                parse_str($post['data'], $post);

                                if (!isset($post['data']['id'])) {
                                        $id = $db->seed("$table", $field);
                                } else
                                        $id = $post['data']['id'];

                                $post['id'] = $id;
                                if ($db->_insrt("$table", $post))
                                        echo $id;
                                else
                                        echo '-1';
                        } break;

                /**
                 * Função para atualizar dados
                 *  @param String $post['table'] Tabela
                 *  @param String $post['field'] Campo da chave primária
                 *  @param Integer $post['id'] ID da chave primária
                 *  @param Array $post['data'] Dados
                 *  @return Boolean
                 */
                case "_updtData" : {
                                $table = $post['table'];
                                $field = $post['field'];
                                $id = $post['id'];

                                parse_str($post['data'], $post);

                                if ($db->_updt("$table", $post, "$field = $id"))
                                        echo true;
                                else
                                        echo false;
                        } break;

                /**
                 * Função para deletar dados
                 *  @param String $post['table'] Tabela
                 *  @param String $post['field'] Campo da chave primária
                 *  @param Integer $post['id'] ID da chave primária
                 *  @return Boolean
                 */
                case "_delData" : {
                                $table = $post['table'];
                                $field = $post['field'];
                                $id = $post['id'];

                                if ($db->command("DELETE FROM $table WHERE $field = $id"))
                                        echo true;
                                else
                                        echo false;
                        } break;

                /**
                 * Upa foto e registros
                 */
                case "upAndup" : {
                                if (isset($_SESSION['return']))
                                        $retorno = "../" . $_SESSION['return'];
                                else {
                                        $retorno = explode("?", $_SERVER['HTTP_REFERER']);
                                        $retorno = $retorno[0];
                                }

                                if (!isset($post['userid'])) {
                                        @session_start();
                                        $post['userid'] = $_SESSION['usuid'];
                                }

                                if (isset($files['imagem']) && $files['imagem']['name'] != '') {
                                        $docs = "assets/imagens/" . $post['table'] . "/";

                                        $formato = explode('.', $files['imagem']['name']);
                                        $formato = $formato[sizeof($formato) - 1];

                                        $post['imagem'] = $docs . md5($files['imagem']['name']) . "." . $formato;

                                        if ($files['imagem']['error'] != 0) {
                                                header("Location: $retorno?err=envImg");
                                                break;
                                        } else if (!file_exists("../" . $docs) && !mkdir("../" . $docs, 0777, true)) {
                                                header("Location: $retorno?err=directory");
                                                break;
                                        } else if (!move_uploaded_file($files['imagem']['tmp_name'], "../" . $post['imagem'])) {
                                                header("Location: $retorno?err=upImg");
                                                break;
                                        }
                                }

                                if (isset($files['link']) && $files['link']['name'] != '') {
                                        $docs = "assets/" . $post['table'] . "/";

                                        $formato = explode('.', $files['link']['name']);
                                        $formato = $formato[sizeof($formato) - 1];

                                        $post['link'] = $docs . md5($files['link']['name']) . "." . $formato;

                                        if ($files['link']['error'] != 0) {
                                                header("Location: $retorno?err=envImg");
                                                break;
                                        } else if (!file_exists("../" . $docs) && !mkdir("../" . $docs, 0777, true)) {
                                                header("Location: $retorno?err=directory");
                                                break;
                                        } else if (!move_uploaded_file($files['link']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/alo/" . $post['link'])) {
                                                header("Location: $retorno?err=upImg" . $files['link']['error']);
                                                break;
                                        }
                                } elseif (isset($post['link']))
                                        $post['link'] = trim($post['link']);

                                if (isset($post['id'])) {
                                        if ($db->_get("alo." . $post['table'], "id = " . $post['id'])->RecordCount() == 0)
                                                if ($db->_insrt("alo." . $post['table'], $post)) {
                                                        header("Location: $retorno?mens=insOk");
                                                } else {
                                                        header("Location: $retorno?err=insrt");
                                                } else {
                                                if ($db->_updt("alo." . $post['table'], $post, "id = " . $post['id'])) {
                                                        header("Location: $retorno?mens=uptOk");
                                                } else {
                                                        header("Location: $retorno?err=updt");
                                                }
                                        }
                                } else {
                                        if ($db->_insrt("alo." . $post['table'], $post)) {
                                                header("Location: $retorno?mens=insOk");
                                        } else {
                                                header("Location: $retorno?err=insrt");
                                        }
                                }
                        } break;

        }
};



