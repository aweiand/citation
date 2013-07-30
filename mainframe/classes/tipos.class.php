<?php

/**
 * Esta Classe prove métodos úteis para utilização Geral de construção de campos e forms
 *  
 * @author Augusto Weiand <guto.weiand@gmail.com>
 * @version 0.1
 * @access public
 * @name tipos
 * @category field constructors
 * @package tipos
 */
class tipos extends data {

        var $bg = "#FFFFFF";
        var $bgCor = "#E8F7E8";

        function formulario1() {
                $str = "<table width='94%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                        <tbody>
                                            <tr>
                                                <td colspan='2' align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><font class='titulo05'>Livros</font></font>
                                                    <br>
                                                    <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td height='57' bgcolor='#FFFFFF'>
                                                                    <p><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;</font><font class='textoHelp'></font>
                                                                    </p>
                                                                    <p></p>
                                                                </td>
                                                                <td height='57' colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'><strong>Tipo do Autor:</strong><br>
                                    <select name='tipoautor' onchange='altera(this)'>
                                    <option value='1'>Desconhecido</option>
                                    <option value='2' selected=''>Pessoa(s) Física(s)</option>
                                    <option value='4'>Entidade Coletiva (Associações, Empresas, etc.)</option>
                                    <option value='5'>Órgãos Governamentais</option>
                                    </select><a href='javascript:help('help/02.html')' class='titulo06'> ?</a>
                                    </font>
                                                                </td>
                                                                <td colspan='2' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                                    <table width='99%' height='166' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width='3%' height='166' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                                <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                                    <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                                    </font>
                                                                                    </strong>
                                                                                    </font>
                                                                                </td>
                                                                                <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width='2%' height='27' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'>
                                    <input type='radio' name='orgs_eds_comps' value='1' checked=''> Autor
                                    <input type='radio' name='orgs_eds_comps' value='2'> Organizador
                                    <input type='radio' name='orgs_eds_comps' value='3'> Compilador
                                    <input type='radio' name='orgs_eds_comps' value='4'> Editor</font>  <a href='javascript:help1('help/19.html')' class='titulo06'> ?</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='48' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='20%' height='48' bgcolor='#FFFFFF'>
                                                                    <div id='Layer6' style='visibility: visible;'><font class='textoHelp'>Mais de 3 Autores <br>
                                    <input name='tres_autores' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                                    <input name='tres_autores' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não </font>
                                                                    </div>
                                                                </td>
                                                                <td height='48' colspan='2' bgcolor='#FFFFFF'>
                                                                    <div id='Layer1' style='visibility: visible;'><font class='textoHelp'>Autor * <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a><br></font>
                                                                        <input class='Texto'
                                                                        type='text' size='22' name='textfield52'>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='42' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='20%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer7' style='visibility: visible;'><font class='textoHelp'>2° Autor <br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield53'>
                                                                    </div>
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                    <div id='Layer8' style='visibility: visible;'><font class='textoHelp'>3° Autor <br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield54'>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='20%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer9' style='visibility: hidden;'><font class='textoHelp'>País, Estado ou Munic.<br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield56'>
                                                                    </div>
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                    <div id='Layer10' style='visibility: hidden;'><font class='textoHelp'>Subordinação do Autor <br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield57'>
                                                                    </div>
                                                                </td>
                                                                <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Título * <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' size='22' name='textfield2'>
                                                                </td>
                                                                <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Subtítulo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' size='22' name='textfield3'>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='20%' bgcolor='#FFFFFF'><font class='textoHelp'>N° da Edição <a href='javascript:help1('help/09.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' size='22' name='textfield4'>
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>Local(Cidade) * <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' size='22' name='textfield5'>
                                                                </td>
                                                                <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Ano(aaaa) * <a href='javascript:help('help/06.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' size='22' name='textfield6'>
                                                                </td>
                                                                <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Editora *<a href='javascript:help2('help/11.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' size='22' name='textfield7'>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='24' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='20%' bgcolor='#FFFFFF'><font class='textoHelp'>
                                    <input type='radio' name='num_pag_vol' onfocus='MM_showHideLayers('Layer2','','show','Layer3','','hide')' value='1' checked=''>N° de Páginas</font>
                                                                </td>
                                                                <td width='21%' bgcolor='#FFFFFF'><font class='textoHelp'>
                                    <input type='radio' name='num_pag_vol' onfocus='MM_showHideLayers('Layer2','','hide','Layer3','','show')' value='2'>N° de Volumes</font>
                                                                </td>
                                                                <td width='11%' bgcolor='#FFFFFF'>
                                                                    <div align='left'></div>
                                                                </td>
                                                                <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Série</font>
                                                                </td>
                                                                <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Notas <a href='javascript:help3('help/18.html')' class='titulo06'> ?</a></font>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='20%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer2' style='visibility: visible;'>
                                                                        <input class='Texto' type='text' size='22' name='textfield8'>
                                                                    </div>
                                                                </td>
                                                                <td width='21%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer3' style='visibility: hidden;'>
                                                                        <input class='Texto' type='text' size='22' name='textfield9'>
                                                                    </div>
                                                                </td>
                                                                <td width='11%' bgcolor='#FFFFFF'></td>
                                                                <td width='23%' bgcolor='#FFFFFF'>
                                                                    <input class='Texto' type='text' size='22' name='textfield10'>
                                                                </td>
                                                                <td width='23%' bgcolor='#FFFFFF'>
                                                                    <input class='Texto' type='text' size='22' name='textfield58'>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan='3' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'> On-Line?
                                    <input type='radio' name='tipomidia' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                                    <input name='tipomidia' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name='tipomidia' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM</font>
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp;</font>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan='3' bgcolor='#FFFFFF'>
                                                                    <div id='Layer4' style='visibility: hidden;'><font class='textoHelp'>Endereço (URL) * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dia - Mês - Ano * <br></font>
                                                                        <input class='Texto' type='text' name='textfield12'>&nbsp;&nbsp;
                                                                        <input name='textfield13' type='text' size='3' class='Texto'>
                                                                        <input name='textfield14' type='text' size='3' class='Texto'>&nbsp;
                                                                        <input name='textfield15' type='text' size='5' class='Texto'>
                                                                    </div>
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                    <div align='center'>
                                                                        <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#FFFFFF'>
                                                                    <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                    <div align='right'>
                                                                        <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='97'>
                                                                                        <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <div align='left'></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>";

                return $str;
        }
        
        function formulario1_2(){
                $str = "<table width='94%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                <tbody>
                                    <tr>
                                        <td colspan='2' align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><font class='titulo05'>Dicionários e Enciclopédias</font></font>
                                            <br>
                                            <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                <tbody>
                                                    <tr>
                                                        <td height='57' bgcolor='#FFFFFF'>
                                                            <p><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;</font><font class='textoHelp'></font>
                                                            </p>
                                                            <p></p>
                                                        </td>
                                                        <td height='57' colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'><strong>Tipo do Autor:</strong><br>
                            <select name='select' onchange='altera(this)'>
                            <option value='1'>Desconhecido</option>
                            <option value='2' selected=''>Pessoa(s) Física(s)</option>
                            <option value='4'>Entidade Coletiva (Associações, Empresas, etc.)</option>
                            <option value='5'>Órgãos Governamentais</option>
                            </select><a href='javascript:help('help/02.html')' class='titulo06'> ?</a>
                            </font>
                                                        </td>
                                                        <td colspan='2' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                            <table width='99%' height='166' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='3%' height='166' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                            <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                            </font>
                                                                            </strong>
                                                                            </font>
                                                                        </td>
                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width='2%' height='27' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton4' value='1' checked=''> Autor
                            <input type='radio' name='radiobutton4' value='2'> Organizador
                            <input type='radio' name='radiobutton4' value='3'> Compilador
                            <input type='radio' name='radiobutton4' value='4'> Editor</font>  <a href='javascript:help1('help/19.html')' class='titulo06'> ?</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='48' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' height='48' bgcolor='#FFFFFF'>
                                                            <div id='Layer6' style='visibility: visible;'><font class='textoHelp'>Mais de 3 Autores <br>
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não </font>
                                                            </div>
                                                        </td>
                                                        <td height='48' colspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer1' style='visibility: visible;'><font class='textoHelp'>Autor * <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto'
                                                                type='text' size='22' name='textfield52'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='42' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'>
                                                            <div id='Layer7' style='visibility: visible;'><font class='textoHelp'>2° Autor <br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield53'>
                                                            </div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer8' style='visibility: visible;'><font class='textoHelp'>3° Autor <br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield54'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'>
                                                            <div id='Layer9' style='visibility: hidden;'><font class='textoHelp'>País, Estado ou Munic.<br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield56'>
                                                            </div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer10' style='visibility: hidden;'><font class='textoHelp'>Subordinação do Autor <br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield57'>
                                                            </div>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Título * <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield2'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Subtítulo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield3'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'><font class='textoHelp'>N° da Edição <a href='javascript:help1('help/09.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield4'>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>Local(Cidade) * <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield5'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Ano(aaaa) * <a href='javascript:help('help/06.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield6'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Editora <a href='javascript:help2('help/11.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield7'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='24' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','show','Layer3','','hide')' value='1' checked=''>N° de Páginas</font>
                                                        </td>
                                                        <td width='21%' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','hide','Layer3','','show')' value='2'>N° de Volumes</font>
                                                        </td>
                                                        <td width='11%' bgcolor='#FFFFFF'>
                                                            <div align='left'></div>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Série</font>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Notas <a href='javascript:help3('help/18.html')' class='titulo06'> ?</a></font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'>
                                                            <div id='Layer2' style='visibility: visible;'>
                                                                <input class='Texto' type='text' size='22' name='textfield8'>
                                                            </div>
                                                        </td>
                                                        <td width='21%' bgcolor='#FFFFFF'>
                                                            <div id='Layer3' style='visibility: hidden;'>
                                                                <input class='Texto' type='text' size='22' name='textfield9'>
                                                            </div>
                                                        </td>
                                                        <td width='11%' bgcolor='#FFFFFF'></td>
                                                        <td width='23%' bgcolor='#FFFFFF'>
                                                            <input class='Texto' type='text' size='22' name='textfield10'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'>
                                                            <input class='Texto' type='text' size='22' name='textfield58'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan='3' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'> On-Line?
                            <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM</font>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp;</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='3' bgcolor='#FFFFFF'>
                                                            <div id='Layer4' style='visibility: hidden;'><font class='textoHelp'>Endereço (URL) * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dia - Mês - Ano * <br></font>
                                                                <input class='Texto' type='text' name='textfield12'>&nbsp;&nbsp;
                                                                <input name='textfield13' type='text' size='3' class='Texto'>
                                                                <input name='textfield14' type='text' size='3' class='Texto'>&nbsp;
                                                                <input name='textfield15' type='text' size='5' class='Texto'>
                                                            </div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div align='center'>
                                                                <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div align='right'>
                                                                <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width='97'>
                                                                                <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div align='left'></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>";
                
                return $str;
        }
        
        function formulario1_4(){
                $str = "<table width='94%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                <tbody>
                                    <tr>
                                        <td colspan='2' align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><font class='titulo05'>Relatório Técnico</font></font>
                                            <br>
                                            <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                <tbody>
                                                    <tr>
                                                        <td height='57' bgcolor='#FFFFFF'>
                                                            <p><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;</font><font class='textoHelp'></font>
                                                            </p>
                                                            <p></p>
                                                        </td>
                                                        <td height='57' colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'><strong>Tipo do Autor:</strong><br>
                            <select name='select' onchange='altera(this)'>
                            <option value='1'>Desconhecido</option>
                            <option value='2' selected=''>Pessoa(s) Física(s)</option>
                            <option value='4'>Entidade Coletiva (Associações, Empresas, etc.)</option>
                            <option value='5'>Órgãos Governamentais</option>
                            </select><a href='javascript:help('help/02.html')' class='titulo06'> ?</a>
                            </font>
                                                        </td>
                                                        <td colspan='2' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                            <table width='99%' height='166' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='3%' height='166' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                            <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                            </font>
                                                                            </strong>
                                                                            </font>
                                                                        </td>
                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width='2%' height='27' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton4' value='1' checked=''> Autor
                            <input type='radio' name='radiobutton4' value='2'> Organizador
                            <input type='radio' name='radiobutton4' value='3'> Compilador
                            <input type='radio' name='radiobutton4' value='4'> Editor</font>  <a href='javascript:help1('help/19.html')' class='titulo06'> ?</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='48' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' height='48' bgcolor='#FFFFFF'>
                                                            <div id='Layer6' style='visibility: visible;'><font class='textoHelp'>Mais de 3 Autores <br>
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não </font>
                                                            </div>
                                                        </td>
                                                        <td height='48' colspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer1' style='visibility: visible;'><font class='textoHelp'>Autor * <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto'
                                                                type='text' size='22' name='textfield52'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='42' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'>
                                                            <div id='Layer7' style='visibility: visible;'><font class='textoHelp'>2° Autor <br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield53'>
                                                            </div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer8' style='visibility: visible;'><font class='textoHelp'>3° Autor <br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield54'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'>
                                                            <div id='Layer9' style='visibility: hidden;'><font class='textoHelp'>País, Estado ou Munic.<br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield56'>
                                                            </div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer10' style='visibility: hidden;'><font class='textoHelp'>Subordinação do Autor <br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield57'>
                                                            </div>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Título * <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield2'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Subtítulo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield3'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'><font class='textoHelp'>N° da Edição <a href='javascript:help1('help/09.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield4'>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>Local(Cidade) * <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield5'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Ano(aaaa) * <a href='javascript:help('help/06.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield6'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Editora <a href='javascript:help2('help/11.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' size='22' name='textfield7'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='24' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','show','Layer3','','hide')' value='1' checked=''>N° de Páginas</font>
                                                        </td>
                                                        <td width='21%' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','hide','Layer3','','show')' value='2'>N° de Volumes</font>
                                                        </td>
                                                        <td width='11%' bgcolor='#FFFFFF'>
                                                            <div align='left'></div>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Série</font>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'><font class='textoHelp'>Notas <a href='javascript:help3('help/18.html')' class='titulo06'> ?</a></font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='20%' bgcolor='#FFFFFF'>
                                                            <div id='Layer2' style='visibility: visible;'>
                                                                <input class='Texto' type='text' size='22' name='textfield8'>
                                                            </div>
                                                        </td>
                                                        <td width='21%' bgcolor='#FFFFFF'>
                                                            <div id='Layer3' style='visibility: hidden;'>
                                                                <input class='Texto' type='text' size='22' name='textfield9'>
                                                            </div>
                                                        </td>
                                                        <td width='11%' bgcolor='#FFFFFF'></td>
                                                        <td width='23%' bgcolor='#FFFFFF'>
                                                            <input class='Texto' type='text' size='22' name='textfield10'>
                                                        </td>
                                                        <td width='23%' bgcolor='#FFFFFF'>
                                                            <input class='Texto' type='text' size='22' name='textfield58'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan='3' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'><font class='textoHelp'> On-Line?
                            <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM</font>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp;</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='3' bgcolor='#FFFFFF'>
                                                            <div id='Layer4' style='visibility: hidden;'><font class='textoHelp'>Endereço (URL) * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dia - Mês - Ano * <br></font>
                                                                <input class='Texto' type='text' name='textfield12'>&nbsp;&nbsp;
                                                                <input name='textfield13' type='text' size='3' class='Texto'>
                                                                <input name='textfield14' type='text' size='3' class='Texto'>&nbsp;
                                                                <input name='textfield15' type='text' size='5' class='Texto'>
                                                            </div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div align='center'>
                                                                <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div align='right'>
                                                                <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width='97'>
                                                                                <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div align='left'></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>";
                
                return $str;
        }

        function formulario2() {
                $str = "<table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                        <tbody>
                                                <tr>
                                                        <td align='center' valign='top'>
                                                                <table width='700' border='0' cellspacing='0' cellpadding='0'>
                                                                        <tbody>
                                                                                <tr>
                                                                                        <td align='left' valign='top' bgcolor='#FFFFFF'>
                                                                                                Teses e Dissertações
                                                                                        </td>
                                                                                </tr>
                                                                                <tr align='center' valign='top'> 
                                                                                        <td height='379'> 
                                                                                        <br>
                                                                                        <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                                                                <tbody>
                                                                                                        <tr>
                                                                                                                <td width='3%' height='41' bgcolor='#FFFFFF'>
                                                                                                                        &nbsp;
                                                                                                                </td>
                                                                                                                <td height='41' colspan='2' bgcolor='#FFFFFF'>
                                                                                                                        <div align='left'>
                                                                                                                                <font class='textoHelp'>Autor* <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a></font>
                                                                                                                                <br> 
                                                                                                                                <input class='Texto' name='textfield12' type='text' size='44'>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                                <td width='42%' height='157' rowspan='5' valign='top' bgcolor='#3487AF'>
                                                                                                                        <table width='99%' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                                                                        <tbody>
                                                                                                                                <tr>
                                                                                                                                        <td width='3%' height='155' align='left' valign='middle' bgcolor='#FFFFFF'>
                                                                                                                                </td>
                                                                                                                                <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'>
                                                                                                                                        <font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:
                                                                                                                                        <br>&nbsp;&nbsp;
                                                                                                                                        <font size='1'>
                                                                                                                                                <br>
                                                                                                                                                <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                                                                                        </font></strong></font>
                                                                                                                                </td>
                                                                                                                                <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;
                                                                                                                                </td>
                                                                                                                        </tr>
                                                                                                                </tbody>
                                                                                                        </table>
                                                                                                </td>
                                                                                        </tr>
                                                                                <tr>
                                                                                <td height='19' bgcolorffffff=''>
                                                                                        &nbsp;
                                                                                </td>
                                                                                <td width='26%' height='19' bgcolor='#FFFFFF'>
                                                                                        <div align='left'>
                                                                                                <font class='textoHelp'>Título* <a href='javascript:help('help/24.html')' class='titulo06'> ?</a>
                                                                                                <br>
                                                                                                </font>
                                                                                                <input class='Texto' type='text' name='textfield'>
                                                                                        </div>
                                                                                </td>
                                                                                <td width='29%' height='19' bgcolor='#FFFFFF'>
                                                                                        <div align='left'>
                                                                                                <font class='textoHelp'>Subtítulo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a>
                                                                                                <br>
                                                                                                </font>
                                                                                                <input class='Texto' type='text' name='textfield2'>
                                                                                        </div>
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td height='19' bgcolor='#FFFFFF'>
                                                                                        &nbsp;
                                                                                </td>
                                                                                <td height='19' bgcolor='#FFFFFF'>
                                                                                        <div align='left'>
                                                                                                <font class='textoHelp'>Local(Cidade)* 
                                                                                                <br>
                                                                                                </font>
                                                                                                <input class='Texto' type='text' name='textfield4'>
                                                                                        </div>
                                                                                </td>
                                                                                <td width='29%' height='19' bgcolor='#FFFFFF'>
                                                                                        <div align='left'>
                                                                                                <font class='textoHelp'>Ano(aaaa)* &nbsp;&nbsp;&nbsp;&nbsp; Capítulo
                                                                                                <br>
                                                                                                </font>
                                                                                                <input class='Texto' type='text' name='textfield5' size='22'>&nbsp;&nbsp;
                                                                                                <input class='Texto' type='text' name='textfield54' size='3'>
                                                                                        </div>
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td height='21' rowspan='2' bgcolor='#FFFFFF'>
                                                                                        &nbsp;
                                                                                </td>
                                                                                <td height='21' bgcolor='#FFFFFF'>
                                                                                        <div align='left'>
                                                                                                <font class='textoHelp'>
                                                                                                <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','show','Layer3','','hide')' value='1' checked=''> N° de Folhas*</font>
                                                                                        </div>
                                                                                </td>
                                                                                <td width='29%' height='21' bgcolor='#FFFFFF'>
                                                                                        <div align='left'>
                                                                                                <font class='textoHelp'> 
                                                                                                <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','hide','Layer3','','show')' value='2'>N° de Volumes*</font>
                                                                                        </div>
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td height='30' bgcolor='#FFFFFF'>
                                                                                        <div id='Layer2' style='visibility: visible;'>
                                                                                                <div align='left'>
                                                                                                        <input class='Texto' type='text' name='textfield7'>
                                                                                                </div>
                                                                                        </div>
                                                                                </td>
                                                                        <td width='29%' height='30' bgcolor='#FFFFFF'>
                                                                                <div id='Layer3' style='visibility: hidden;'>
                                                                                        <div align='left'>
                                                                                                <input class='Texto' type='text' name='textfield3'>
                                                                                        </div>
                                                                                </div>
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                <td height='19' rowspan='2' bgcolor='#FFFFFF'>
                                                                        &nbsp;
                                                                </td>
                                                                <td height='19' bgcolor='#FFFFFF'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>Tipo* <a href='javascript:help3('help/23.html')' class='titulo06'> ?</a>
                                                                                <br></font>
                                                                                <input class='Texto' type='text' name='textfield6'>
                                                                        </div>
                                                                </td>
                                                                <td width='29%' height='19' bgcolor='#FFFFFF'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>Grau* <a href='javascript:help3('help/12.html')' class='titulo06'> ?</a>
                                                                                <br></font>
                                                                                <input class='Texto' type='text' name='textfield9'>
                                                                        </div>
                                                                </td>
                                                                <td width='42%' valign='top'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>Instituição* 
                                                                                <br></font>
                                                                                <input class='Texto' type='text' name='textfield42'>
                                                                        </div>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td height='10' bgcolor='#FFFFFF'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>Ano Entrega(aaaa)* 
                                                                                <br></font>
                                                                                <input class='Texto' type='text' name='textfield53' size='22'>
                                                                        </div>
                                                                </td>
                                                                <td width='29%' height='10' bgcolor='#FFFFFF'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>Curso <a href='javascript:help3('help/05.html')' class='titulo06'> ?</a>
                                                                                <br> </font>
                                                                                <input class='Texto' type='text' name='textfield93'>
                                                                        </div>
                                                                </td>
                                                                <td width='42%' valign='top'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>Departamento
                                                                                <br></font>
                                                                                <input class='Texto' type='text' name='textfield94'>
                                                                        </div>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td rowspan='3' bgcolor='#FFFFFF'>
                                                                        &nbsp;
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>On-Line?
                                                                                <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                                                                                <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM
                                                                                <br>
                                                                                </font>
                                                                        </div>
                                                                </td>
                                                                <td width='42%' rowspan='2' bgcolor='#FFFFFF'>
                                                                        <div align='center'>
                                                                                <br>
                                                                                <input name='submit' type='submit' class='botao' value='   Gerar Referência   '><br>&nbsp;&nbsp;&nbsp; 
                                                                        </div>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td height='20' colspan='2' rowspan='2' bgcolor='#FFFFFF'>
                                                                        <div id='Layer4' style='visibility: hidden;'>
                                                                                <div align='left'>
                                                                                        <font class='textoHelp'>Endereço (URL)*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dia(dd)Mês(mm)Ano(aaaa)* </font>
                                                                                </div>
                                                                                <div align='left'>
                                                                                </div>
                                                                                <div align='left'>
                                                                                        <input class='Texto' type='text' name='textfield62'>&nbsp;&nbsp;&nbsp;
                                                                                        <input class='Texto' typetext='' name='textfield52' size='2'>
                                                                                        <input class='Texto' type='text' name='textfield32' size='2'>
                                                                                        <input class='Texto' type='text' name='textfield92' size='3'>
                                                                                </div>
                                                                                <div align='left'>
                                                                                        <font class='textoHelp'> </font>
                                                                                </div>
                                                                        </div>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td width='42%' bgcolor='#FFFFFF'>
                                                                        <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                                <tbody>
                                                                                        <tr>
                                                                                                <td width='97'>
                                                                                                        <div align='center'>
                                                                                                                <a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                                        </div>
                                                                                                </td>
                                                                                        </tr>
                                                                                </tbody>
                                                                        </table>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td bgcolor='#FFFFFF'>
                                                                        &nbsp;
                                                                </td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                        <div align='left'>
                                                                                <font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;
                                                                        </div>
                                                                </td>
                                                                <td width='42%' bgcolor='#FFFFFF'>
                                                                        <div align='right'>
                                                                        </div>
                                                                </td>
                                                        </tr>
                                                </tbody>
                                        </table>
                                        <div align='right'>
                                        </div>
                                </td>
                        </tr>
                </tbody>
        </table> 
</td>
</tr>
</tbody>
</table>";
                return $str;
        }

        function formulario3() {
                $str = "<table width='97%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                        <tbody>
                                            <tr>
                                                <td height='390' align='center' valign='top'>
                                                    <table width='700' border='0' cellspacing='0' cellpadding='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><font class='titulo05'>Anais/Proceedings</font> </font>
                                                                </td>
                                                            </tr>
                                                            <tr align='center' valign='top'>
                                                                <td>
                                                                    <br>
                                                                    <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width='3%' height='41' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td height='41' colspan='2' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Nome* <a href='javascript:help3('help/17.html')' class='titulo06'> ?</a></font>
                                                                                        <br>
                                                                                        <input class='Texto' name='textfield12' type='text' size='49'>
                                                                                    </div>
                                                                                </td>
                                                                                <td width='43%' height='157' rowspan='5' valign='top' bgcolor='#3487AF'>
                                                                                    <table width='99%' height='155' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='3%' height='189' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                                                <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                                    <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                                                    </font>
                                                                                                    </strong>
                                                                                                    </font>
                                                                                                </td>
                                                                                                <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='19' rowspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td width='26%' height='19' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>N° do Evento<br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield' size='22'>
                                                                                    </div>
                                                                                </td>
                                                                                <td width='28%' height='19' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Ano(aaaa)* <a href='javascript:help3('help/01.html')' class='titulo06'> ?</a><br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield5' size='22'>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='10' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Local(Cidade)* <a href='javascript:help2('help/15.html')' class='titulo06'> ?</a><br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield4'>
                                                                                    </div>
                                                                                </td>
                                                                                <td width='28%' height='10' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Titulo do Documento:* <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield72'>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td height='19' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Subtitulo: <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield10'>
                                                                                    </div>
                                                                                </td>
                                                                                <td height='19' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Publicado(Cidade)* <a href='javascript:help('help/14.html')' class='titulo06'> ?</a><br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield7'>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td height='51' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Editora* <a href='javascript:help2('help/11.html')' class='titulo06'> ?</a><br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield6'>
                                                                                    </div>
                                                                                </td>
                                                                                <td height='51' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>Ano Publicação* <a href='javascript:help('help/06.html')' class='titulo06'> ?</a><br>
                                    </font>
                                                                                        <input class='Texto' type='text' name='textfield3' size='22'>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='19' rowspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td height='19' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>
                                    <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','show','Layer3','','hide')' value='1' checked=''>N° de Paginas<br></font> 
                                                                                    </div>
                                                                                </td>
                                                                                <td valign='top' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'><font class='textoHelp'>
                                    <input type='radio' name='radiobutton2' onfocus='MM_showHideLayers('Layer2','','hide','Layer3','','show')' value='2'>N° de Volumes </font></font> <font class='textoHelp'> </font>
                                                                                    </div>
                                                                                </td>
                                                                                <td width='43%' rowspan='2' valign='top'>
                                                                                    <div align='center'>
                                                                                        <br>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='10' bgcolor='#FFFFFF'>
                                                                                    <div id='Layer2' style='visibility: visible;'>
                                                                                        <div align='left'>
                                                                                            <input class='Texto' type='text' name='textfield9' size='22'>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td valign='top' bgcolor#ffffff=''>
                                                                                    <div id='Layer3' style='visibility: hidden;'>
                                                                                        <div align='left'>
                                                                                            <input class='Texto' type='text' name='textfield8' size='22'>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>On-Line?
                                    <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                                    <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM </font>
                                                                                    </div>
                                                                                </td>
                                                                                <td width='43%' valign='top'>
                                                                                    <div align='center'>
                                                                                        <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td colspan='3' bgcolor='#FFFFFF'>
                                                                                    <div id='Layer4' style='visibility: hidden;'>
                                                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div align='left'><font class='textoHelp'>Endereço (URL)*&nbsp;&nbsp;&nbsp; Dia(dd) Mês(mm) Ano(aaaa)* <br></font>
                                                                                                            <input class='Texto' type='text' name='textfield62'>&nbsp;&nbsp;&nbsp;
                                                                                                            <input class='Texto' typetext='' name='textfield52' size='2'>&nbsp;
                                                                                                            <input class='Texto' type='text' name='textfield32' size='2'>&nbsp;
                                                                                                            <input class='Texto' type='text' name='textfield92' size='3'>
                                                                                                        </div><font class='textoHelp'></font>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td colspan='3' bgcolor='#FFFFFF'>
                                                                                    <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                                                    <div align='right'>
                                                                                        <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td width='97'>
                                                                                                        <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div align='right'></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>";
                return $str;
        }

        function formulario4() {
                $str = "<table width='98%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                <tbody>
                                        <tr>
                                                <td colspan='2' align='left' valign='top' bgcolor='#FFFFFF'>
                                                        <br> <font color='#4970A5'>
                                                        <br><font class='titulo05'>Capítulos de Livros
                                                                </font></font>
                                                        <br>
                                                        <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                        <tr>
                                                                                <td height='57' bgcolor='#FFFFFF'>
                                                                                        <p><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;</font><font class='textoHelp'></font>
                                                                                        </p>
                                                                                        <p></p>
                                                                                </td>
                                                                                <td height='57' colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'><strong>Tipo do Autor da Parte:</strong>
                                                                                <br>
                                                                                <select name='select' onchange='altera(this)'>
                                                                                        <option value='1' selected=''>Desconhecido</option>
                                                                                        <option value='2' selected=''>Pessoa(s) Física(s)</option>
                                                                                        <option value='4'>Entidade Coletiva (Associações, Empresas, etc.)</option>
                                                                                        <option value='5'>Órgãos Governamentais</option>
                                                                                </select>
                                                                                <a href='javascript:help('help/02.html')' class='titulo06'> ?</a>
                                                                                </font>
                                                                        </td>
                                                                        <td colspan='2' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                                                <table width='99%' height='166' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                                        <tbody>
                                                                                                <tr>
                                                                                                        <td width='3%' height='166' align='left' valign='middle' bgcolor='#FFFFFF'>
                                                                                                        </td>
                                                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'>
                                                                                                                <font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'>
                                                                                                                <br>
                                                                                                                <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
</font></strong></font>
                                                                                                        </td>
                                                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>
                                                                                                                &nbsp;
                                                                                                        </td>
                                                                                                </tr>
                                                                                        </tbody>
                                                                                </table>
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                        <td width='3%' height='27' bgcolor='#FFFFFF'>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                                                <font class='textoHelp'>
                                                                                        <input type='radio' name='radiobutton4' value='1' checked=''> Autor
                                                                                        <input type='radio' name='radiobutton4' value='2'> Organizador
                                                                                        <input type='radio' name='radiobutton4' value='3'> Compilador
                                                                                        <input type='radio' name='radiobutton4' value='4'> Editor
                                                                                </font>
                                                                                <a href='javascript:help1('help/19.html')' class='titulo06'> ?</a>
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                        <td height='48' bgcolor='#FFFFFF'>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                                                <div id='Layer6' style='visibility: visible;'>
                                                                                        <font class='textoHelp'>Mais de 3 Autores 
                                                                                        <br>
                                                                                        <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                                                                                        <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não 
                                                                                        </font>
                                                                                </div>
                                                                        </td>
                                                                        <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                                                <div id='Layer1' style='visibility: visible;'>
                                                                                        <font class='textoHelp'>Autor da Parte* <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a>
                                                                                        <br></font>
                                                                                        <input class='Texto' type='text' size='22' name='textfield52'>
                                                                                </div>
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                        <td height='42' bgcolor='#FFFFFF'>
                                                                                &nbsp;
                                                                        </td>
                                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                                                <div id='Layer7' style='visibility: visible;'><font class='textoHelp'>2° Autor da Parte 
                                                                        <br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield53'>
                                                                </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'> 
                                                                <div id='Layer8' style='visibility: visible;'>
                                                                        <font class='textoHelp'>3° Autor da Parte <br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield54'>
                                                                </div>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td height='51' bgcolor='#FFFFFF'>
                                                                &nbsp;
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                                <div id='Layer9' style='visibility: hidden;'>
                                                                        <font class='textoHelp'>País, Estado ou Munic.<br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield56'>
                                                                </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                                <div id='Layer10' style='visibility: hidden;'><font class='textoHelp'>Subordinação do Autor <br></font>
                                                                        <input class='Texto' type='text' size='22' name='textfield57'>
                                                                </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                                <font class='textoHelp'>Título da Parte* <a href='javascript:help3('help/25.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield2'>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                                <font class='textoHelp'>Subtítulo da Parte <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto' type='text' size='22' name='textfield58'>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td bgcolor='#FFFFFF'>
                                                                <font class='textoHelp'>&nbsp; </font><font class='textoHelp'>&nbsp;
                                                                </font>
                                                        </td>
                                                        <td colspan='4' bgcolor='#FFFFFF'>
                                                                &nbsp;
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td bgcolor='#FFFFFF'>
                                                                &nbsp;
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                                <div align='center'>
                                                                        <input name='submit' type='submit' class='botao' value='   Continuar   '>
                                                                </div>
                                                                <br>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td bgcolor='#FFFFFF'>
                                                                &nbsp;
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>
                                                                <div align='left'>
                                                                        <font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;
                                                                </div>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>
                                                                &nbsp;
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                                <div align='right'>
                                                                        <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                                <tbody>
                                                                                        <tr>
                                                                                                <td width='97'>
                                                                                                        <div align='center'>
                                                                                                                <a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                                        </div>
                                                                                                </td>
                                                                                        </tr>
                                                                                </tbody>
                                                                        </table>
                                                                </div>
                                                        </td>
                                                </tr>
                                        </tbody>
                                </table>
                        </td>
                </tr>
        </tbody>
</table>";

                return $str;
        }

        function formulario5() {
                $str = "<table width='700' border='0' cellspacing='0' cellpadding='0'>
                                <tbody>
                                    <tr>
                                        <td align='left' valign='top' bgcolor='#FFFFFF'>
                                                <font color='#4970A5'><font class='titulo05'>Trabalhos Apresentados em Congresso.</font></font>
                                        </td>
                                    </tr>
                                    <tr align='center' valign='top'>
                                        <td>
                                            <br>
                                            <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                <tbody>
                                                    <tr>
                                                        <td width='1%' height='41' rowspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='24%' height='20' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Mais de 3 Autores <br>
                            <input name='radiobutton4' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                            <input name='radiobutton4' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não </font>
                                                            </div>
                                                        </td>
                                                        <td width='25%' height='20' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Autor*  <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto'
                                                                type='text' name='textfield53'>
                                                            </div>
                                                        </td>
                                                        <td height='147' colspan='2' rowspan='5' valign='top' bgcolor='#3487AF'>
                                                            <table width='99%' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='3%' height='172' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                            <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                            </font>
                                                                            </strong>
                                                                            </font>
                                                                        </td>
                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width='24%' height='21' bgcolor='#FFFFFF'>
                                                            <div id='Layer7' style='visibility: visible;'>
                                                                <div align='left'><font class='textoHelp'>2° Autor<br></font>
                                                                    <input class='Texto' type='text' name='textfield532'>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td width='25%' height='21' bgcolor='#FFFFFF'>
                                                            <div id='Layer8' style='visibility: visible;'>
                                                                <div align='left'><font class='textoHelp'>3° Autor<br></font>
                                                                    <input class='Texto' type='text' name='textfield533'>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='24%' height='19' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Título do Trabalho*  <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto' type='text' name='textfield63'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' height='19' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Subtítulo do Trabalho <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto' type='text' name='textfield632'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='24%' height='19' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Nome do Evento*  <a href='javascript:help3('help/17.html')' class='titulo06'> ?</a></font>
                                                                <br>
                                                                <input class='Texto' name='textfield12' type='text'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' height='19' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>N° do Evento* <br></font>
                                                                <input class='Texto' type='text' name='textfield' size='22'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='21' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='24%' height='21' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Ano(aaaa)* <a href='javascript:help3('help/01.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto' type='text' name='textfield5' size='22'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' height='21' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Local(Cidade)*  <a href='javascript:help2('help/15.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto' type='text' name='textfield4'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' rowspan='3' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='24%' height='9' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Titulo do Documento* <a href='javascript:help3('help/26.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto' type='text' name='textfield72'>
                                                            </div><font class='textoHelp'>&nbsp;</font><font class='textoHelp'>&nbsp;</font><font class='textoHelp'><div id='Layer2'></div></font>
                                                        </td>
                                                        <td width='25%' valign='top' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>Publicado(Cidade)* <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a></font>
                                                                <br>
                                                                <input class='Texto' type='text' name='textfield7'>
                                                            </div>
                                                        </td>
                                                        <td width='22%' valign='top'><font class='textoHelp'>Editora* <a href='javascript:help2('help/11.html')' class='titulo06'> ?</a></font>
                                                            <br>
                                                            <input class='Texto' type='text' size='14' name='textfield6'>
                                                        </td>
                                                        <td width='33%' valign='top'>
                                                            <p><font class='textoHelp'>Ano Publicação* <a href='javascript:help('help/06.html')' class='titulo06'> ?</a></font>
                                                                <br>
                                                                <input class='Texto' type='text' size='22' name='textfield3'>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width='24%' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'><font class='textoHelp'>N° de Volumes<br></font>
                                                                <input class='Texto' type='text' name='textfield64' size='22'>
                                                                </font>
                                                            </div>
                                                        </td>
                                                        <td width='25%' valign='top' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'><font class='textoHelp'>Página Inicial e Final* <br></font>
                                                                <input class='Texto' type='text' size='6' name='textfield33'>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <input class='Texto' type='text' size='6' name='textfield9'>
                                                                </font>
                                                            </div>
                                                        </td>
                                                        <td colspan='2' valign='top'>
                                                            <div align='center'>
                                                                <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='2' valign='top'>
                                                            <div align='center'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='19bgcolor=#FFFFFF' colspan='4'>
                                                            <div align='left'><font class='textoHelp'>On-Line?
                            <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não &nbsp;&nbsp;&nbsp;&nbsp;
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM </font>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'>
                                                            <div id='Layer4' style='visibility: hidden;'>
                                                                <div align='left'><font class='textoHelp'>Endereço (URL)* &nbsp;&nbsp;&nbsp;Dia(dd)Mês(mm)Ano(aaaa)*<br></font>
                                                                    <input class='Texto' type='text' name='textfield62'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input class='Texto' type='text' name='textfield52' size='2'>&nbsp;
                                                                    <input class='Texto' type='text' name='textfield32' size='2'>&nbsp;&nbsp;
                                                                    <input class='Texto' type='text' name='textfield92' size='3'>
                                                                </div>
                                                                <div align='right'></div>
                                                            </div>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>
                                                            <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='97'>
                                                                            <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='4' bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>";

                return $str;
        }

        function formulario6() {
                $str = "<table width='700' border='0' cellspacing='0' cellpadding='0'>
                                <tbody>
                                    <tr>
                                        <td align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><br><font class='titulo05'>Revista</font> </font>
                                        </td>
                                    </tr>
                                    <tr align='center' valign='top'>
                                        <td>
                                            <br>
                                            <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                <tbody>
                                                    <tr>
                                                        <td width='3%' height='41' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='41' bgcolor='#FFFFFF'><font class='textoHelp'>Título* <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield2'>
                                                            <br>
                                                        </td>
                                                        <td height='41' bgcolor='#FFFFFF'><font class='textoHelp'>Subtítulo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield22'>
                                                        </td>
                                                        <td width='43%' height='157' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                            <table width='99%' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='3%' height='149' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                            <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                            </font>
                                                                            </strong>
                                                                            </font>
                                                                        </td>
                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' height='19' bgcolor='#FFFFFF'><font class='textoHelp'>Local(Publicação)*   <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield8'>
                                                        </td>
                                                        <td width='29%' height='19' bgcolor='#FFFFFF'><font class='textoHelp'>Editora*  <a href='javascript:help2('help/11.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text'
                                                            name='textfield'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='19' bgcolor='#FFFFFF'><font class='textoHelp'>Volume<br></font>
                                                            <input class='Texto' type='text' name='textfield63' size='22'>
                                                        </td>
                                                        <td height='19' bgcolor='#FFFFFF'><font class='textoHelp'>Número do Fascículo <br></font>
                                                            <input class='Texto' type='text' name='textfield6' size='22'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='21' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='21' bgcolor='#FFFFFF'><font class='textoHelp'>Dia-Mês-Ano* <a href='javascript:help1('help/07.html')' class='titulo06'> ?</a><br>
                            <input class='Texto' type='text' name='textfield3' size='2'>&nbsp;<input class='Texto' type='text' name='textfield9' size='2'>
                            <input class='Texto' type='text' name='textfield33' size='3'></font>
                                                        </td>
                                                        <td height='21' bgcolor='#FFFFFF'><font class='textoHelp'>Periodicidade <a href='javascript:help2('help/21.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield4'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='19' bgcolor='#FFFFFF'> <font class='textoHelp'>Notas <a href='javascript:help3('help/18.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield10'><font class='textoHelp'>&nbsp;</font> 
                                                        </td>
                                                        <td valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='43%' valign='top'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='43%' valign='top'>
                                                            <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>On-Line?
                            <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não &nbsp;&nbsp;&nbsp;&nbsp;
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM </font>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'>
                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div id='Layer4' style='visibility: hidden;'> <font class='textoHelp'>Endereço (URL):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dia - Mês - Ano * <br></font> 
                                                                                <input class='Texto'
                                                                                type='text' name='textfield62'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <input name='textfield52' type='text' class='Texto' size='2'>
                                                                                <input name='textfield32' type='text' class='Texto' size='2'>
                                                                                <input name='textfield92' type='text' class='Texto' size='3'>
                                                                            </div>
                                                                        </td>
                                                                        <td><font class='textoHelp'><br></font>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'>&nbsp;
                                                            <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align='right'>
                                                <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                    <tbody>
                                                        <tr>
                                                            <td width='97'>
                                                                <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>";

                return $str;
        }

        function formulario7() {
                $str = "<table width='700' border='0' cellspacing='0' cellpadding='0'>
                                <tbody>
                                    <tr>
                                        <td align='left' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
                                    </tr>
                                    <tr align='center' valign='top'>
                                        <td>
                                            <br>
                                            <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                <tbody>
                                                    <tr>
                                                        <td width='1%' height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='19' colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='43%' height='157' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                            <table width='99%' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='3%' height='147' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                            <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                            </font>
                                                                            </strong>
                                                                            </font>
                                                                        </td>
                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='23%' height='51' bgcolor='#FFFFFF'><font class='textoHelp'>Título* <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font> 
                                                            <input class='Texto' type='text'
                                                            name='textfield'>
                                                        </td>
                                                        <td width='33%' height='51' bgcolor='#FFFFFF'><font class='textoHelp'>Subtítulo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text'
                                                            name='textfield2'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='19' bgcolor='#FFFFFF'><font class='textoHelp'>Local(Publicação)*  <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto'
                                                            type='text' name='textfield6'>
                                                        </td>
                                                        <td height='19' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp;</font>  <font class='textoHelp'>Dia(dd) Mês(mm) Ano(aaaa)* <a href='javascript:help1('help/07.html')' class='titulo06'> ?</a><br></font>
                                                            <input name='textfield4' type='text' class='Texto' size='3'>
                                                            <input name='textfield5' type='text' class='Texto' size='3'>
                                                            <input name='textfield7' type='text' class='Texto' size='5'> <a href='javascript:help1('help/07.html')' class='titulo06'> ?</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td height='19' bgcolor='#FFFFFF'><font class='textoHelp'> <br></font>  <font class='textoHelp'></font>
                                                        </td>
                                                        <td height='19' bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td rowspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td rowspan='2' valign='top' bgcolor='#FFFFFF'><font class='textoHelp'><br></font>
                                                        </td>
                                                        <td width='43%' height='19' valign='top'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width='43%' height='19' valign='top'>
                                                            <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>On-Line?
                            <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não &nbsp;&nbsp;&nbsp;&nbsp;
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM </font>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'>
                                                            <div id='Layer4' style='visibility: hidden;'>
                                                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><font class='textoHelp'>Endereço (URL) * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dia- Mês - Ano * <br>
                            </font>
                                                                                <input class='Texto' type='text' name='textfield62'>&nbsp;&nbsp;
                                                                                <input name='textfield52' type='text' class='Texto' size='3'>&nbsp;
                                                                                <input name='textfield32' type='text' class='Texto' size='3'>
                                                                                <input name='textfield92' type='text' class='Texto' size='5'>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='3' bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align='right'>
                                                <div align='left'><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Campos Obrigatórios</font>&nbsp;</div>
                                                <table width='110' border='1' cellpadding='0'
                                                cellspacing='0' bordercolor='#FFCC33'>
                                                    <tbody>
                                                        <tr>
                                                            <td width='97'>
                                                                <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>";
                return $str;
        }

        function formulario8() {
                $str = "<table width='98%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                        <tbody>
                                            <tr>
                                                <td colspan='2' align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><font class='titulo05'>Artigo de Revista</font></font>
                                                    <br>
                                                    <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td height='57' bgcolor='#FFFFFF'>
                                                                    <p><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;</font><font class='textoHelp'></font>
                                                                    </p>
                                                                    <p></p>
                                                                </td>
                                                                <td height='57' colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'><strong>Tipo do Autor:</strong><br>
                                    <select name='select' onchange='altera(this)'>
                                    <option value='1'>Desconhecido</option>
                                    <option value='2' selected=''>Pessoa(s) Física(s)</option>
                                    <option value='4'>Entidade Coletiva (Associações, Empresas, etc.)</option>
                                    <option value='5'>Órgãos Governamentais</option>
                                    </select><a href='javascript:help('help/02.html')' class='titulo06'> ?</a>
                                    </font>
                                                                </td>
                                                                <td colspan='2' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                                    <table width='99%' height='166' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width='3%' height='166' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                                <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                                    <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                                    </font>
                                                                                    </strong>
                                                                                    </font>
                                                                                </td>
                                                                                <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width='3%' height='27' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>
                                    <input type='radio' name='radiobutton4' value='1' checked=''> Autor
                                    <input type='radio' name='radiobutton4' value='2'> Organizador
                                    <input type='radio' name='radiobutton4' value='3'> Compilador
                                    <input type='radio' name='radiobutton4' value='4'> Editor</font>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='48' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                                    <div id='Layer6' style='visibility: visible;'><font class='textoHelp'>Mais de 3 Autores <br>
                                    <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                                    <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não </font>
                                                                    </div>
                                                                </td>
                                                                <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                                    <div id='Layer1' style='visibility: visible;'><font class='textoHelp'>Autor * <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a><br></font>
                                                                        <input class='Texto'
                                                                        type='text' name='textfield52'>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='42' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='25%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer7' style='visibility: visible;'><font class='textoHelp'>2° Autor <br></font>
                                                                        <input class='Texto' type='text' name='textfield53'>
                                                                    </div>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer8' style='visibility: visible;'><font class='textoHelp'>3° Autor <br></font>
                                                                        <input class='Texto' type='text' name='textfield54'>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='25%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer9' style='visibility: hidden;'><font class='textoHelp'>País, Estado ou Munic.<br></font>
                                                                        <input class='Texto' type='text' name='textfield56'>
                                                                    </div>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'>
                                                                    <div id='Layer10' style='visibility: hidden;'><font class='textoHelp'>Subordinação do Autor <br></font>
                                                                        <input class='Texto' type='text' name='textfield57'>
                                                                    </div>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Título do Artigo* <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' name='textfield2'>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Subtítulo do Artigo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' name='textfield22'>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Título da Revista*<br></font>
                                                                    <input class='Texto' type='text' name='textfield3'>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'>
                                                                    <p><font class='textoHelp'>Subtítulo da Revista <br></font>
                                                                        <input class='Texto' type='text' name='textfield32'><font class='textoHelp'><br></font> 
                                                                    </p>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>N° Fascículo  e Volume <br></font>
                                                                    <input class='Texto' type='text' size='6' name='textfield4'>&nbsp;
                                                                    <input class='Texto' type='text' size='6' name='textfield42'>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Local(Cidade)* <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a><br></font>
                                                                    <input class='Texto' type='text' name='textfield5'>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='24' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Periodicidade<a href='javascript:help2('help/21.html')' class='titulo06'> ?</a></font>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Dia - Mês - Ano * <a href='javascript:help1('help/07.html')' class='titulo06'> ?</a> </font>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Página Inicial e Final*</font>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Notas <a href='javascript:help3('help/18.html')' class='titulo06'> ?</a></font>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td bgcolor='#FFFFFF'>
                                                                    <input class='Texto' size='22' type='text' name='textfield10'>
                                                                </td>
                                                                <td bgcolor='#FFFFFF'><font class='textoHelp'><input name='textfield132' type='text' class='Texto' size='3'>&nbsp;<input name='textfield142' type='text' class='Texto' size='3'>&nbsp;<input name='textfield152' type='text' class='Texto' size='5'></font>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'><input name='textfield59' type='text' class='Texto' size='5'>&nbsp;&nbsp;</font><font class='textoHelp'><input name='textfield60' type='text' class='Texto' size='5'></font>
                                                                </td>
                                                                <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'><a href='javascript:help3('help/18.html')' class='titulo06'><input class='Texto' size='22' type='text' name='textfield58'></a></font>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan='4' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'> On-Line
                                    <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                                    <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM</font>
                                                                </td>
                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan='2' rowspan='2' bgcolor='#FFFFFF'>
                                                                    <div id='Layer4' style='visibility: hidden;'><font class='textoHelp'>Endereço (URL) * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dia(dd)Mês(mm)Ano(aaaa)* <br></font>
                                                                        <input class='Texto' type='text' name='textfield12'>&nbsp;&nbsp;
                                                                        <input name='textfield13' type='text' class='Texto' size='3'>
                                                                        <input name='textfield14' type='text' class='Texto' size='3'>&nbsp;
                                                                        <input name='textfield15' type='text' class='Texto' size='5'>
                                                                    </div>
                                                                </td>
                                                                <td bgcolor='#FFFFFF'>
                                                                    <div align='center'></div>
                                                                </td>
                                                                <td bgcolor='#FFFFFF'>
                                                                    <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor='#FFFFFF'>
                                                                    <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                                </td>
                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                <td colspan='2' bgcolor='#FFFFFF'>
                                                                    <div align='right'>
                                                                        <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width='97'>
                                                                                        <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>";

                return $str;
        }

        function formulario9() {
                $str = "<table width='98%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                <tbody>
                                    <tr>
                                        <td colspan='2' align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><font class='titulo05'>Artigo de jornal</font></font>
                                            <br>
                                            <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                <tbody>
                                                    <tr>
                                                        <td height='57' bgcolor='#FFFFFF'>
                                                            <p><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;</font><font class='textoHelp'></font>
                                                            </p>
                                                            <p></p>
                                                        </td>
                                                        <td height='57' colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'><strong>Tipo do Autor:</strong><br>
                            <select name='select' onchange='altera(this)'>
                            <option value='1'>Desconhecido</option>
                            <option value='2' selected=''>Pessoa(s) Física(s)</option>
                            <option value='4'>Entidade Coletiva (Associações, Empresas, etc.)</option>
                            <option value='5'>Órgãos Governamentais</option>
                            </select><a href='javascript:help('help/02.html')' class='titulo06'> ?</a>
                            </font>
                                                        </td>
                                                        <td colspan='2' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                            <table width='99%' height='166' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='3%' height='166' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                            <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                            </font>
                                                                            </strong>
                                                                            </font>
                                                                        </td>
                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width='3%' height='27' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton4' value='1' checked=''> Autor
                            <input type='radio' name='radiobutton4' value='2'> Organizador
                            <input type='radio' name='radiobutton4' value='3'> Compilador
                            <input type='radio' name='radiobutton4' value='4'> Editor</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='48' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                            <div id='Layer6' style='visibility: visible;'><font class='textoHelp'>Mais de 3 Autores <br>
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não </font>
                                                            </div>
                                                        </td>
                                                        <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                            <div id='Layer1' style='visibility: visible;'><font class='textoHelp'>Autor * <a href='javascript:help1('help/03.html')' class='titulo06'> ?</a><br></font>
                                                                <input class='Texto'
                                                                type='text' name='textfield52'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='42' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer7' style='visibility: visible;'><font class='textoHelp'>2° Autor <br></font>
                                                                <input class='Texto' type='text' name='textfield53'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer8' style='visibility: visible;'><font class='textoHelp'>3° Autor <br></font>
                                                                <input class='Texto' type='text' name='textfield54'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer9' style='visibility: hidden;'><font class='textoHelp'>País, Estado ou Munic.<br></font>
                                                                <input class='Texto' type='text' name='textfield56'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer10' style='visibility: hidden;'><font class='textoHelp'>Subordinação do Autor <br></font>
                                                                <input class='Texto' type='text' name='textfield57'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Título do Artigo* <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield2'>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Subtítulo do Artigo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield22'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Título do Jornal*<br></font>
                                                            <input class='Texto' type='text' name='textfield3'>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <p><font class='textoHelp'>Subtítulo do Jornal <br></font>
                                                                <input class='Texto' type='text' name='textfield222'><font class='textoHelp'><br></font> 
                                                            </p>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>N° Fascículo  e Volume <br></font>
                                                            <input class='Texto' type='text' size='6' name='textfield223'>&nbsp;
                                                            <input class='Texto' type='text' size='6' name='textfield224'>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Local(Cidade)* <a href='javascript:help1('help/14.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield5'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='24' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Complemento</font>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp; </font>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Dia - Mês - Ano * <a href='javascript:help1('help/07.html')' class='titulo06'> ?</a></font>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Página Inicial e Final*</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <input type='checkbox' name='checkbox' value='1'><font class='textoHelp'> Caderno
                            <input type='checkbox' name='checkbox2' value='2'> Seção  <input type='checkbox' name='checkbox3' value='3'> Suplemento</font>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'><input name='textfield123' type='text' class='Texto' size='3'>&nbsp;<input name='textfield142' type='text' class='Texto' size='3'>&nbsp;<input name='textfield152' type='text' class='Texto' size='5'></font>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'><input name='textfield59' type='text' class='Texto' size='5'>&nbsp;&nbsp;</font><font class='textoHelp'><input name='textfield60' type='text' class='Texto' size='5'></font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan='4' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'> On-Line
                            <input type='radio' name='radiobutton3' onfocus='MM_showHideLayers('Layer4','','show')' value='1'>Sim
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='2' checked=''>Não&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name='radiobutton3' type='radio' onfocus='MM_showHideLayers('Layer4','','hide')' value='3'>CD-ROM	</font>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'><font class='textoHelp'>Complemento Número e Nome </font>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='2' rowspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer4' style='visibility: hidden;'><font class='textoHelp'>Endereço (URL) * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dia(dd)Mês(mm)Ano(aaaa)* <br></font>
                                                                <input class='Texto' type='text' name='textfield12'>&nbsp;&nbsp;
                                                                <input name='textfield13' type='text' class='Texto' size='3'>
                                                                <input name='textfield14' type='text' class='Texto' size='3'>&nbsp;
                                                                <input name='textfield15' type='text' class='Texto' size='5'>
                                                            </div>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>
                                                            <input class='Texto' type='text' size='6' name='textfield32'>&nbsp;
                                                            <input class='Texto' size='22' type='text' name='textfield322'>
                                                            <div align='center'></div>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>
                                                            <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div align='right'>
                                                                <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width='97'>
                                                                                <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>";
                return $str;
        }

        function formulario10() {
                $str = "<table width='98%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                <tbody>
                                    <tr>
                                        <td colspan='2' align='left' valign='top' bgcolor='#FFFFFF'><font color='#4970A5'><br><font class='titulo05'>Homepage</font></font>
                                            <br>
                                            <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                <tbody>
                                                    <tr>
                                                        <td height='57' bgcolor='#FFFFFF'>
                                                            <p><font class='textoHelp'>&nbsp;&nbsp;&nbsp;&nbsp;</font><font class='textoHelp'></font>
                                                            </p>
                                                            <p></p>
                                                        </td>
                                                        <td height='57' colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'><strong>Tipo do Autor:</strong><br>
                            <select name='select' onchange='altera(this)'>
                            <option value='1'>Desconhecido</option>
                            <option value='2' selected=''>Pessoa(s) Física(s)</option>
                            <option value='4'>Entidade Coletiva (Associações, Empresas, etc.)</option>
                            <option value='5'>Órgãos Governamentais</option>
                            </select><a href='javascript:help('help/02.html')' class='titulo06'> ?</a>
                            </font>
                                                        </td>
                                                        <td colspan='2' rowspan='4' valign='top' bgcolor='#3487AF'>
                                                            <table width='99%' height='166' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width='3%' height='166' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                        <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                            <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                            </font>
                                                                            </strong>
                                                                            </font>
                                                                        </td>
                                                                        <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width='3%' height='27' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>
                            <input type='radio' name='radiobutton4' value='1' checked=''> Autor
                            <input type='radio' name='radiobutton4' value='2'> Organizador
                            <input type='radio' name='radiobutton4' value='3'> Compilador
                            <input type='radio' name='radiobutton4' value='4'> Editor</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='48' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                            <div id='Layer6' style='visibility: visible;'><font class='textoHelp'>Mais de 3 Autores <br>
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','hide','Layer8','','hide')' type='radio' value='1'>Sim
                            <input name='radiobutton5' onfocus='MM_showHideLayers('Layer7','','show','Layer8','','show')' type='radio' value='2' checked=''>Não </font>
                                                            </div>
                                                        </td>
                                                        <td width='25%' height='48' bgcolor='#FFFFFF'>
                                                            <div id='Layer1' style='visibility: visible;'><font class='textoHelp'>Autor * <br></font>
                                                                <input class='Texto' type='text' name='textfield52'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='42' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer7' style='visibility: visible;'><font class='textoHelp'>2° Autor <br></font>
                                                                <input class='Texto' type='text' name='textfield53'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer8' style='visibility: visible;'><font class='textoHelp'>3° Autor <br></font>
                                                                <input class='Texto' type='text' name='textfield54'>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='51' bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer9' style='visibility: hidden;'><font class='textoHelp'>País, Estado ou Munic.<br></font>
                                                                <input class='Texto' type='text' name='textfield56'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'>
                                                            <div id='Layer10' style='visibility: hidden;'><font class='textoHelp'>Subordinação do Autor <br></font>
                                                                <input class='Texto' type='text' name='textfield57'>
                                                            </div>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Título* <a href='javascript:help('help/24.html')' class='titulo06'> ?</a><br></font>
                                                            <input class='Texto' type='text' name='textfield2'>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp; Subítulo <a href='javascript:help2('help/22.html')' class='titulo06'> ?</a><br></font>
                                                            &nbsp;
                                                            <input class='Texto' type='text' name='textfield22'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Endereço* <br></font>
                                                            <input class='Texto' type='text' name='textfield5'>
                                                        </td>
                                                        <td width='25%' bgcolor='#FFFFFF'><font class='textoHelp'>Dia - Mês - Ano * <a href='javascript:help1('help/07.html')' class='titulo06'> ?</a><br>
                            <input name='textfield123' type='text' class='Texto' size='3'>&nbsp;<input name='textfield142' type='text' class='Texto' size='3'>&nbsp;<input name='textfield152' type='text' class='Texto' size='5'></font> 
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>Informações Complementares<a href='javascript:help2('help/13.html')' class='titulo06'> ?</a><br>
                            <input class='Texto' type='text' name='textfield58'></font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' rowspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp;</font><font class='textoHelp'>&nbsp;
                            </font><font class='textoHelp'>&nbsp; </font><font class='textoHelp'>&nbsp; </font>
                                                        </td>
                                                        <td colspan='2' rowspan='2' bgcolor='#FFFFFF'><font class='textoHelp'>&nbsp;</font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan='4' bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='2' rowspan='2' bgcolor='#FFFFFF'>
                                                            <div id='Layer4' style='visibility: hidden;'></div>
                                                        </td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div align='center'>
                                                                <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan='2' bgcolor='#FFFFFF'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor='#FFFFFF'>
                                                            <div align='left'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</div>
                                                        </td>
                                                        <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                        <td colspan='2' bgcolor='#FFFFFF'>
                                                            <div align='right'>
                                                                <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width='97'>
                                                                                <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>";
                return $str;
        }

        function formulario11() {
                $str = "<table width='97%' border='0' align='center' cellpadding='0' cellspacing='0'>
                                        <tbody>
                                            <tr>
                                                <td align='center' valign='top'>
                                                    <p align='left'>
                                                        <br><font class='titulo05'>E-mail</font>
                                                    </p>
                                                    <table width='700' border='0' cellspacing='0' cellpadding='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='left' valign='top' bgcolor='#FFFFFF'>
                                                                </td>
                                                            </tr>
                                                            <tr align='center' valign='top'>
                                                                <td>
                                                                    <br>
                                                                    <table width='98%' border='0' cellpadding='0' cellspacing='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width='2%' height='147' rowspan='7' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td width='24%' height='36' valign='top' bgcolor='#FFFFFF'><font class='textoHelp'>Autor*<br>
                                    </font> 
                                                                                    <input class='Texto' type='text' name='textfield5'>
                                                                                </td>
                                                                                <td width='30%' height='36' bgcolor='#FFFFFF'><font class='textoHelp'>Assunto*<br>
                                    </font> 
                                                                                    <input class='Texto' type='text' name='textfield6'>
                                                                                </td>
                                                                                <td width='44%' height='147' rowspan='5' valign='top' bgcolor='#3487AF'>
                                                                                    <table width='99%' border='0' align='right' cellpadding='0' cellspacing='0'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='3%' height='137' align='left' valign='middle' bgcolor='#FFFFFF'></td>
                                                                                                <td width='95%' align='left' valign='middle' bgcolor='#FFFFFF'><font color='#0099CC' size='2' face='Verdana'><strong>Resultado da Referência:<br>&nbsp;&nbsp;<font size='1'><br>
                                    <font color='#FF0000'>Seu Status é Anônimo, para que você posa gravar suas referências click no menu Minha Conta<a href='login' target='_parent'> ou click aqui!</a></font>
                                                                                                    </font>
                                                                                                    </strong>
                                                                                                    </font>
                                                                                                </td>
                                                                                                <td width='2%' align='left' valign='middle' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width='24%' height='37' valign='top' bgcolor='#FFFFFF'><font class='textoHelp'>Destinatario*<a href='javascript:help3('help/28.html')' class='titulo06'> ?</a><br>
                                    </font> 
                                                                                    <input class='Texto' type='text' name='textfield3'>
                                                                                </td>
                                                                                <td height='37' bgcolor='#FFFFFF'><font class='textoHelp'>Dia(dd) Mês(mm) Ano(aaaa)*<br></font>
                                                                                    <input class='Texto' type='text' name='textfield9' size='2'>
                                                                                    <input class='Texto' type='text' name='textfield10' size='2'>
                                                                                    <input class='Texto' type='text' name='textfield11' size='3'>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width='24%' height='18' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td height='18' bgcolor='#FFFFFF'></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='9' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td height='19' rowspan='2' bgcolor='#FFFFFF'>
                                                                                    <input name='submit' type='submit' class='botao' value='   Gerar Referência   '>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='10' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height='18' colspan='2' align='center' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td width='44%' height='18' valign='top'>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width='24%' valign='top' bgcolor='#FFFFFF'><font class='textoHelp'>* Campos Obrigatórios</font>&nbsp;</td>
                                                                                <td bgcolor='#FFFFFF'>&nbsp;</td>
                                                                                <td width='44%' valign='top'>
                                                                                    <table width='110' border='1' cellpadding='0' cellspacing='0' bordercolor='#FFCC33'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='97'>
                                                                                                    <div align='center'><a href='index.jsp' target='_parent' class='sub_menu'>&nbsp;&nbsp;&nbsp;&nbsp;Voltar</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div align='right'></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>";

                return $str;
        }

}
