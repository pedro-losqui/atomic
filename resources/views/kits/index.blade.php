<title>{{ $employee->nomColaborador }}</title>
<link rel="stylesheet" href="https://sistema.soc.com.br/estatico/webcontext/padrao/css/layout/0/0_sui.css?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/jquery/ui.core.min.css.jsp?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/jquery/ui.datepicker.min.css.jsp?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/jquery/ui.theme.min.css.jsp?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/bootstrap.min.css.jsp?1637273152000" type="text/css">

<style>
    body{
        background: #fff none;
        font-size:8pt;
    }
    .cb_e1
    {
        font-size: 8pt;
    }
    .cb_e2
    {
        font-size: 10pt;
        width: 80%;
    }
    .m0000, .m1000, .m0100, .m0010, .m0001, .m1100, .m1010, .m1001 , .m0110, .m0101, .m0011, .m1110, .m1101, .m1011, .m0111, .m1111 {
        font-size:8pt;
    }
    td{
        font-size:8pt;
        padding: 0;
        margin: 0;
    }


    #div_biometrias
    {
        position: fixed;
        width: 18%;
        float: left;
        margin-left: 10%;
        margin-right: 5%;
        text-align: left;
        border: 1px solid #cccccc;
        border-top: 0;
        top: 36px;
        padding: 1%;
        background-color: #fff;
        z-index: 999;
    }
    #div_biometrias p
    {
        margin: 5px 0;
    }
    #div_biometrias .label
    {
        font-size: 9pt;
    }
    #div_biometriasi
    {
        position: relative;
        display: block;
        width: 30%;
        float: left;
        margin: 5px 5% 0 10%;
        text-align: left;
        padding: 0 1%;
        font-size: 10pt;
        color: #545454;
        cursor: pointer;
    }
    #div_biometriasi img
    {
        width: 15px;margin-right: 10px;float: left;
    }
    #biometriaass{
        position: static;
        margin-top: 0;
    }

    @media print {
      .noprint { display: none; }
    }

    .tb-padrao{
        border-spacing: 0px;
        width:100%;
        border: 1px solid;
    }

    .nome-tabela {
        background-color: #eeeeee;
        border-bottom: 1px solid;
        width: 100%;
    }

    .width-20 {
        width: 20%;
    }
</style>

{{-- ASO --}}

@for ($i = 0; $i < 3 ; $i++)
<table style="margin:0px;padding:0px;border:0px;width:100%;height:100%">
    <tbody>
     <tr>
      <td class="ui-sortable" id="sortable" style="vertical-align:top">
       <table id="T1" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;text-align:center;font-family:'verdana';border-collapse:collapse" data-grupo="CABECALHO">
        <tbody>
         <tr style="height:15px">
          <td class="ui-droppable" style="width:15%;text-align:center;vertical-align:top"><img title="Logo da Empresa Principal" src="{{ asset('assets/images/logo_soc_150x100.png') }}" style="width:150px; height:100px;"></td>
          <td class="ui-droppable" style="width:70%"><span style="color:rgb( 49 , 131 , 131 );font-family:'verdana';font-size:12pt;font-variant:small-caps;font-weight:bold;text-decoration:underline">A S O - Atestado de Saúde Ocupacional</span></td>
          <td class="ui-droppable" style="width:15%;text-align:right"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"><span style="font-family:'verdana';font-size:10pt;font-variant:small-caps;font-weight:bold">{{ $employee->nomEmpresa }}</span></td>
          <td class="ui-droppable" style="text-align:center"><span style="font-weight:bold">{{ date('d/m/Y') }}</span></td>
         </tr>
        </tbody>
       </table>
       <table id="T2" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;font-family:'verdana';border-collapse:collapse" data-grupo="GENERICO">
        <thead>
         <tr style="height:15px">
          <td style="background:rgb( 238 , 238 , 238 );font-weight:bold;border-bottom-color:black;border-bottom-width:1px;border-bottom-style:solid" colspan="4"><span>Empresa</span></td>
         </tr>
        </thead>
        <tbody>
         <tr style="height:15px">
          <td class="ui-droppable" style="width:17%"><span>Razão Social:</span></td>
          <td class="ui-droppable" style="width:33%"><span style="font-weight:bold">{{ $employee->nomEmpresa }}</span></td>
          <td class="ui-droppable" style="width:17%"></td>
          <td class="ui-droppable" style="width:33%"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>CNPJ:</span></td>
          <td class="ui-droppable"><span>{{ $employee->cnpjFilial }}</span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Unidade:</span></td>
          <td class="ui-droppable"><span><span style="font-weight:bold">{{ $employee->nomFilial }}</span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
            <td class="ui-droppable"><span>CNPJ Unidade:</span></td>
            <td class="ui-droppable"><span>{{ $employee->cnpjPosto }}</span></td>
            <td class="ui-droppable"></td>
            <td class="ui-droppable"></td>
         </tr>
        </tbody>
       </table>
       <table id="T3" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;font-family:'verdana';border-collapse:collapse" data-grupo="GENERICO">
        <thead>
         <tr style="height:15px">
          <td style="background:rgb( 238 , 238 , 238 );font-weight:bold;border-bottom-color:rgb( 0 , 0 , 0 );border-bottom-width:1px;border-bottom-style:solid" colspan="4"><span>Funcionário</span></td>
         </tr>
        </thead>
        <tbody>
         <tr style="height:15px">
          <td class="ui-droppable" style="width:17%"><span>Nome:</span></td>
          <td class="ui-droppable" style="width:33%"><span style="font-weight:bold">{{ $employee->nomColaborador }}</span></td>
          <td class="ui-droppable" style="width:17%"></td>
          <td class="ui-droppable" style="width:33%"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>RG:</span></td>
          <td class="ui-droppable"><span>N/A</span></td>
          <td class="ui-droppable"><span>Órgão Emissor:</span></td>
          <td class="ui-droppable"><span>N/A</span></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>CPF:</span></td>
          <td class="ui-droppable"><span>{{ $employee->cpfColaborador }}</span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Nascimento:</span></td>
          <td class="ui-droppable"><span>{{ $employee->nasColaborador }}</span><span></span><span></span></td>
          <td class="ui-droppable"><span>Sexo:</span></td>
          <td class="ui-droppable"><span>{{ $employee->presenter()->gender($employee->sexColaborador) }}</span></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Cargo:</span></td>
          <td class="ui-droppable"><span>{{ $employee->nomCargo }}</span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Setor:</span></td>
          <td class="ui-droppable"><span>{{ $employee->nomPosto }}</span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
        </tbody>
       </table>
       <table id="T4" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;font-family:'verdana';border-collapse:collapse" data-grupo="GENERICO">
        <thead>
         <tr style="height:15px">
          <td style="background:rgb( 238 , 238 , 238 );font-weight:bold;border-bottom-color:rgb( 0 , 0 , 0 );border-bottom-width:1px;border-bottom-style:solid" colspan="4"><span>Médico responsável pelo PCMSO</span></td>
         </tr>
        </thead>
        <tbody>
         <tr style="height:15px">
          <td class="ui-droppable" style="width:17%"><span>Nome:</span></td>
          <td class="ui-droppable" style="width:33%"><span>CLAUDIO ERNANI MARCONDES DE MIRANDA</span></td>
          <td class="ui-droppable" style="width:17%"></td>
          <td class="ui-droppable" style="width:33%"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>CRM:</span></td>
          <td class="ui-droppable"><span>37287</span><span></span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Endereço:</span></td>
          <td class="ui-droppable"><span>Avenida Francisco Pereira de Castro, 358</span></td>
          <td class="ui-droppable"><span>Cidade/UF</span></td>
          <td class="ui-droppable"><span>Jundiaí</span><span> / </span><span>SP</span></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Bairro:</span></td>
          <td class="ui-droppable"><span>Anhangabaú</span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Telefone:</span></td>
          <td class="ui-droppable"><span>(11) 4806-8400</span></td>
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
        </tbody>
       </table>
       <table id="T5" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;font-family:'verdana';border-collapse:collapse" data-grupo="RISCOS" data-qtde_minima_linhas="1" data-qtde_registros_por_linha="1" data-agrupa_riscos="sim">
        <thead>
         <tr style="height:15px">
          <td style="background:rgb( 238 , 238 , 238 );font-weight:bold;border-bottom-color:rgb( 0 , 0 , 0 );border-bottom-width:1px;border-bottom-style:solid"><span>Perigos / Fatores de Risco</span></td>
         </tr>
        </thead>
        <tbody data-corpo="RISCOS">
         <tr>
          <td style="width:100%">
           <table style="margin:0px;padding:0px;border:0px;width:100%;border-collapse:collapse">
            <tbody>
                @if ($employee->risk)
                <tr>
                    <td width="10%" valign="top" style="color: #009966;"><b>Físicos:</b></td>
                    <td width="90%" valign="top" class="m0000">
                        {{ $employee->risk['physicist'] }}
                    </td>
                </tr>
            @endif
            @if ($employee->risk)
                <tr>
                    <td width="10%" valign="top" style="color: red;"><b>Químicos:</b></td>
                    <td width="90%" valign="top" class="m0000">
                        {{ $employee->risk['chemical'] }}
                    </td>
                </tr>
            @endif
            @if ($employee->risk)
                <tr>
                    <td width="10%" valign="top" style="color: rgb(107, 74, 74);"><b>Biológicos:</b></td>
                    <td width="90%" valign="top" class="m0000">
                        {{ $employee->risk['biological'] }}
                    </td>
                </tr>
            @endif
            @if ($employee->risk)
                <tr>
                    <td width="10%" valign="top" style="color: rgb(161, 161, 39);"><b>Ergonômicos:</b></td>
                    <td width="90%" valign="top" class="m0000">
                        {{ $employee->risk['ergonomic'] }}
                    </td>
                </tr>
            @endif
            @if ($employee->risk)
                <tr>
                    <td width="10%" valign="top" style="color: #0000FF;"><b>Acidentais :</b></td>
                    <td width="90%" valign="top" class="m0000">
                        {{ $employee->risk['accident'] }}
                    </td>
                </tr>
            @endif
            @if ($employee->risk)
                <tr>
                    <td width="10%" valign="top" style="color: #e49329;"><b>Outros :</b></td>
                    <td width="90%" valign="top" class="m0000">
                        {{ $employee->risk['other'] }}
                    </td>
                </tr>
            @endif
            </tbody>
           </table></td>
         </tr>
        </tbody>
       </table>
       <table id="T6" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;font-family:'verdana';border-collapse:collapse" data-grupo="GENERICO">
        <thead>
         <tr style="height:15px">
          <td style="background:rgb( 238 , 238 , 238 );font-weight:bold;border-bottom-color:rgb( 0 , 0 , 0 );border-bottom-width:1px;border-bottom-style:solid"><span>EM CUMPRIMENTO ÀS PORTARIAS NºS 3214/78, 3164/82, 12/83, 24/94 E 08/96 NR7 DO MINISTÉRIO DO TRABALHO E EMPREGO PARA FINS DE EXAME:</span></td>
         </tr>
        </thead>
        <tbody>
         <tr style="height:15px">
          <td class="ui-droppable"><span>{{ $employee->presenter()->tagExamAso($employee->retTipExa) }}</span></td>
         </tr>
        </tbody>
       </table>
       <table id="T25" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;font-family:'verdana';border-collapse:collapse" data-grupo="EXAMES" data-qtde_minima_linhas="1" data-qtde_registros_por_linha="1">
        <thead>
         <tr style="height:15px">
          <td style="background:rgb( 238 , 238 , 238 );font-weight:bold;border-bottom-color:rgb( 0 , 0 , 0 );border-bottom-width:1px;border-bottom-style:solid"><span>Avaliação Clínica e Exames Realizados</span></td>
         </tr>
        </thead>
        <tbody data-corpo="EXAMES">
         <tr>
          <td style="width:100%">
           <table style="margin:0px;padding:0px;border:0px;width:100%;border-collapse:collapse">
            <tbody>
                @foreach ($employee->exams as $item)
                    <tr style="height:15px">
                        <td class="ui-droppable" style="width:15%"><span>____/____/______</span></td>
                        <td class="ui-droppable" style="width:85%"><span>{{ $item->description }}</span></td>
                    </tr>
                @endforeach
            </tbody>
           </table>
        </td>
         </tr>
        </tbody>
       </table>
       <table id="T18" style="margin:0px 0px 5px;padding:0px;border:1px solid black;width:100%;font-family:'verdana';border-collapse:collapse" data-grupo="GENERICO">
        <thead>
         <tr style="height:15px">
          <td style="background:rgb( 238 , 238 , 238 );font-weight:bold;border-bottom-color:rgb( 0 , 0 , 0 );border-bottom-width:1px;border-bottom-style:solid"><span>Parecer</span></td>
         </tr>
        </thead>
        <tbody>
         <tr style="height:15px">
            <td class="ui-droppable"><span>&nbsp;[ &nbsp; ] Apto para função &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ &nbsp; ] Inapto para função </span></td>
            @foreach ($employee->appears as $item)
            <tr style="height:15px">
                <td class="ui-droppable"><span>&nbsp;[ &nbsp; ] Apto para {{ $item->description }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ &nbsp; ] Inapto para {{ $item->description }} </span></td>
            </tr>
            @endforeach
            </tr>
        </tbody>
       </table>
       <table id="T20" style="margin:0px 0px 5px;padding:0px;border:0px;width:100%;text-align:center;font-family:'verdana';border-collapse:collapse" data-grupo="GENERICO">
        <tbody>
         <tr style="height:15px">
          <td class="ui-droppable" style="width:50%"></td>
          <td class="ui-droppable" style="width:50%"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>__________________________</span></td>
          <td class="ui-droppable"><span>__________________________</span></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>Carimbo e Assinatura</span></td>
          <td class="ui-droppable"><span>DECLARO TER RECEBIDO CÓPIA DESTE ATESTADO</span></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"><span>&nbsp;</span></td>
          <td class="ui-droppable"><span>{{ $employee->nomColaborador }}</span></td>
         </tr>
         <tr style="height:15px">
          <td class="ui-droppable"></td>
          <td class="ui-droppable"></td>
         </tr>
        </tbody>
       </table></td>
     </tr>
    </tbody>
   </table>
@endfor

{{-- Pedido de exame --}}

<form name="cad011Form" method="post" action="/WebSoc/cad011.do">
    <div><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="459ffb14cab76bdf951c99c09edbda20"></div>
    <input type="hidden" name="ac" value="tela">
    <input type="hidden" name="crecid" value="aYkFbXMLRuwkZ__X01l8JLPgiF__YPjgZsag">
    <table class="tableHeader" width="100%" border="0" align="center"
        style="position: relative; border: 1px solid #000; margin-top: 15px;">
        <tbody>
            <tr>
                <td width="120px">
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('assets/images/logo_soc_150x100.png') }}"
                                        width="150" height="100"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="cb_e2" style="font-size:16px;" align="center">Pedido de Exames<br>
                    <font size="3"></font>
                </td>
                <td width="20%">&nbsp; </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td id="#tituloCabecalho" align="center" class="cb_e1" style="font-size:12px;">{{ $employee->nomEmpresa }}</td>
                <td width="20%" align="right" class="cb_e1">{{ date('d/m/Y') }}</td>
            </tr>
        </tbody>
    </table>
    <table width="100%" bgcolor="#eeeeee" border="0" cellspacing="0" cellpadding="0" style="position: relative;">
        <tbody>
            <tr>
                <td class="m1111" colspan="3">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="10%" class="m0000">
                                    <font size="3"><b>Prestador</b></font>
                                </td>
                                <td width="40%" class="m0000" align="left">
                                    <font size="3"><b>{{ $employee->nomLaboratorio }}</b></font>&nbsp;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="position: relative;">
        <tbody>
            <tr>
                <td class="m0101" colspan="6">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m1111" width="20%" nowrap="">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>

                                <td class="m0000" style="font-weight: bold" nowrap="">&nbsp;Funcionário</td>
                            </tr>
                            <tr>
                                <td class="m0000" nowrap="">&nbsp;
                                    {{ $employee->nomColaborador }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m1110" colspan="1" nowrap="">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m1110" width="15%" nowrap="" colspan="1">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold" nowrap="">CPF</td>
                            </tr>
                            <tr>
                                <td class="m0000" nowrap="">{{ $employee->cpfColaborador }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m1110" width="15%" nowrap="">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold" nowrap="">Tipo de Exame</td>
                            </tr>
                            <tr>
                                <td class="m0000" nowrap="">{{ $employee->presenter()->tagExamAso($employee->retTipExa) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" width="50%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">&nbsp;Empresa</td>
                            </tr>
                            <tr>
                                <td class="m0000">
                                    {{ $employee->nomEmpresa }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="25%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Unidade</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->nomFilial }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="25%" colspan="2">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">CNPJ</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->cnpjFilial }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" width="25%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Data de Nascimento</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->nasColaborador }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>

                <td class="m0110" width="25%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Data de admissão</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->dataAdm }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="10%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">&nbsp;Idade</td>
                            </tr>
                            <tr>
                                <td class="m0000">&nbsp;{{ $employee->presenter()->age($employee->nasColaborador) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="40%" colspan="1">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Data Ficha</td>
                            </tr>
                            <tr>
                                <td class="m0000">&nbsp;{{ $employee->created_at->format('d/m/Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" width="40%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" width="100%" colspan="1">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td class="m0000" style="font-weight: bold">Nome do Setor</td>
                                            </tr>
                                            <tr>
                                                <td class="m0000">{{ $employee->nomPosto }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="60%" colspan="3">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Nome do Cargo</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->nomCargo }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="position: relative;">
        <tbody>
            <tr>
                <td class="m1110" colspan="4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0001" bgcolor="#eeeeee" align="center">Exames</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" colspan="4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">

                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" colspan="4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="20%" class="m0010" style="font-weight: bold">Nome do Exame</td>
                                <td width="*" class="m0010" style="font-weight: bold">Recomendação</td>
                                <td width="10%" class="m0010" style="font-weight: bold">Data</td>
                                <td width="10%" class="m0010" style="font-weight: bold">Hora</td>
                            </tr>
                            <tr>
                                <td class="m0000" valign="top">
                                    @foreach ($employee->exams as $item)
                                        {{ $item->description }} <br>
                                    @endforeach
                                </td>
                                <td class="m0000" valign="top">
                                </td>
                                <td class="m0000"></td>
                                <td class="m0000"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>

    <table width="100%" border="0" style="position: relative;">
        <tbody>
            <tr>
                <td width="51%" valign="middle" align="center" class="camrel">&nbsp;


                </td>
            </tr>
            <tr>
                <td width="51%" valign="middle" align="center" class="camrel">
                    <div class="divAssinaturaResponsavel"></div>
                    <br>
                    <p>____________________________________</p>
                    Carimbo e Assinatura
                    <br>
                    Médico Examinador com CRM
                </td>
                <td width="11%" valign="middle" align="center">&nbsp;</td>
                <td width="38%" valign="middle" align="center" class="camrel">
                    <div class="assinaturaFuncionario">
                    </div>
                    <font color="#000000">____________________________________</font><br>
                    {{ $employee->nomColaborador }}
                    <br>
                    <br>
                </td>
            </tr>
        </tbody>
    </table>
</form>

{{-- Ficha clínica --}}

<p class="pagina">&nbsp;</p>

<style type="text/css">

    .tabela{
      width: 100%;
      border: 0;
      border-spacing: 0;
    }
     .tabela td{
          padding: 0;
     }

</style>

<table class="tableHeader" width="100%" border="0" align="center"
    style="position: relative; border: 1px solid #000; margin-top: 15px;">
    <tbody>
        <tr>
            <td width="120px">
                <table cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('assets/images/logo_soc_150x100.png') }}"
                                    width="150" height="100"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="cb_e2" style="font-size:16px;" align="center">Ficha Clínica<br>
                <font size="3"></font>
            </td>
            <td width="20%">&nbsp; </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td id="#tituloCabecalho" align="center" class="cb_e1" style="font-size:12px;">{{ $employee->nomEmpresa }}</td>
            <td width="20%" align="right" class="cb_e1">{{ date('d/m/Y') }}</td>
        </tr>
    </tbody>
</table>
<table class="tabela">
    <tbody>
        <tr>
            <td class="s1111" colspan="3">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Funcionário</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->nomColaborador }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s1110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;CPF</td>
                        </tr>
                        <tr>
                            <td class="s0000">{{ $employee->cpfColaborador }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="3">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Empresa</td>
                        </tr>
                        <tr>
                            <td class="s0000">

                                &nbsp;{{ $employee->nomEmpresa }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">

                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;CNPJ</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{  $employee->cnpjFilial  }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" width="50%" colspan="2">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Unidade</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->nomRateio }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" colspan="2">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Setor</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->nomPosto }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="2">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Cargo</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->nomCargo }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>

            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Sexo</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->presenter()->gender($employee->sexColaborador) }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Idade</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->presenter()->age($employee->nasColaborador) }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" width="25%" colspan="1">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Nascimento</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->nasColaborador }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>

            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Admissão</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->dataAdm }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>


            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="3">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Tipo de Exame</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->presenter()->tagExamAso($employee->retTipExa) }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Data Ficha</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;{{ $employee->created_at->format('d/m/Y') }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="4">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Exames </td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;Exame Clinico, </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<table class="tabela">
    <tbody><tr>
     <td class="s1111" colspan="4">
         <table class="tabela">
             <tbody><tr>
                 <td class="titclaro" colspan="4" align="center"><b>SINAIS VITAIS</b></td>
             </tr>
         </tbody></table>
     </td>
 </tr>
 <tr>
     <td class="s0111" width="25%">
         <table class="tabela">
              <tbody><tr>
                  <td class="s0000" style="font-weight:bold">&nbsp;Temperatura</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
     <td class="s0110" width="25%">
         <table class="tabela">
              <tbody><tr>
                 <td class="s0000" style="font-weight:bold">&nbsp;Frequência Respiratória (IPM)</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
     <td class="s0110" width="25%">
         <table class="tabela">
             <tbody><tr>
                 <td class="s0000" style="font-weight:bold">&nbsp;Pressão Arterial (mmHg)</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
     <td class="s0110" width="25%">
         <table class="tabela">
             <tbody><tr>
                 <td class="s0000" style="font-weight:bold">&nbsp;Frequência de Pulso (BPM)</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
 </tr>
 <tr>
     <td class="s0111" width="25%">
         <table class="tabela">
              <tbody><tr>
                  <td class="s0000" style="font-weight:bold">&nbsp;Altura</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
     <td class="s0110" width="25%">
         <table class="tabela">
              <tbody><tr>
                 <td class="s0000" style="font-weight:bold">&nbsp;Biotipo</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
     <td class="s0110" width="25%">
         <table class="tabela">
             <tbody><tr>
                 <td class="s0000" style="font-weight:bold">&nbsp;Peso (Kg)</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
     <td class="s0110" width="25%">
         <table class="tabela">
             <tbody><tr>
                 <td class="s0000" style="font-weight:bold">&nbsp;Índice de Massa Corpórea</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;

                 </td>
             </tr>
         </tbody></table>
     </td>
    </tr>
 <tr>
     <td class="s0111" colspan="2">
           <table class="tabela">
                <tbody><tr>
                    <td class="s0000" style="font-weight:bold">&nbsp;Perímetro Cintura (cm)</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
     <td class="s0110" colspan="2">
         <table class="tabela">
             <tbody><tr>
                 <td class="s0000" style="font-weight:bold">&nbsp;Perímetro Quadril (cm)</td>
             </tr>
             <tr>
                 <td class="s0000">&nbsp;</td>
             </tr>
         </tbody></table>
     </td>
    </tr>


</tbody></table>

<table style="width: 100%; border: 0px; border-spacing: 0;" align="center">
    <tbody><tr class="s1111">
        <td class="s1111">
              <table style="width: 100%; border: 0px;">
                <tbody><tr>
                    <td class="titesc" colspan="2" align="center"><b>Ficha Clínica</b></td>
                </tr>

                    <tr>
                        <td class="titclaro" colspan="2" align="center"><b>
                            PREENCHIMENTO DO FUNCIONÁRIO</b>
                        </td>
                    </tr>



                           <tr>
                         <td class="s1111" style="vertical-align: top; width: 50%;">
                             <table style="width: 100%;">
                             <tbody><tr>

                                 <td width="100%" colspan="4" class="s0111">


                                   Antecedentes pessoais/familiares


                            </td>
                         </tr>





                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Afastamento pelo INSS
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Acidente de trabalho
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Internação prévia
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Cirurgia
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Doenças
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Uso de medicamentos
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                        </td>
                                    </tr>



                               </tbody></table>
                         </td>




                         <td class="s1111" style="vertical-align: top; width: 50%;">
                             <table style="width: 100%;">
                             <tbody><tr>

                                 <td width="100%" colspan="4" class="s0111">


                                   Saúde da mulher


                            </td>
                         </tr>





                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Métodos contraceptivos
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Data da última menstruação
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               ____/____/________
                                        </td>
                                    </tr>



                               </tbody></table>
                         </td>

                             </tr>



                           <tr>
                         <td class="s1111" style="vertical-align: top; width: 50%;">
                             <table style="width: 100%;">
                             <tbody><tr>

                                 <td width="100%" colspan="4" class="s0111">


                                   Histórico profissional e estilo de vida


                            </td>
                         </tr>





                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Tempo de trabalho
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Última empresa
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Função
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Atividade insalubre ou perigosa
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Dores decorrente do emprego anterior
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Tabagista
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Sim&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Ex-tabagista&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Etilista
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Diariamente&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Eventualmente&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Atividade física
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Não&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Diariamente&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Eventualmente&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>



                               </tbody></table>
                         </td>


                    <td width="50%" class="s0000"></td></tr>

                    <tr>
                        <td class="titclaro" colspan="2" align="center"><b>
                            PREENCHIMENTO DO MÉDICO EXECUTOR</b>
                        </td>
                    </tr>



                           <tr>
                         <td class="s1111" style="vertical-align: top; width: 50%;">
                             <table style="width: 100%;">
                             <tbody><tr>

                                 <td width="100%" colspan="4" class="s0111">

                                   Exame físico
                            </td>
                         </tr>





                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Pele/Mucosa
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Cabeça/Pescoço
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Pulmão
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Coração
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Tórax
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Abdomem
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    MMII
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Ósteo-Artic
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Sist. Nerv
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Normal&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Alterado&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>



                               </tbody></table>
                         </td>




                         <td class="s1111" style="vertical-align: top; width: 50%;">
                             <table style="width: 100%;">
                             <tbody><tr>

                                 <td width="100%" colspan="4" class="s0111">


                                   Conclusões


                            </td>
                         </tr>





                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Parecer
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;</div><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Apto&nbsp;</td></tr></tbody></table><table width="49%" border="0" color="FF3333" cellpadding="0" cellspacing="0" style="float: left;"><tbody><tr><td class="s0000" width="5%" style="border: solid 1px #000000; width: 29px;">&nbsp;</td><td class="s0000">&nbsp;Inapto&nbsp;</td></tr></tbody></table>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Observações
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                        </td>
                                    </tr>



                               </tbody></table>
                         </td>

                             </tr>



                           <tr>
                         <td class="s1111" style="vertical-align: top; width: 50%;">
                             <table style="width: 100%;">
                             <tbody><tr>

                                 <td width="100%" colspan="4" class="s0111">


                                   Assinaturas


                            </td>
                         </tr>





                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Carimbo e Assinatura do Médico Examinador
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>
                                        </td>
                                    </tr>



                               </tbody></table>
                         </td>




                         <td class="s1111" style="vertical-align: top; width: 50%;">
                             <table style="width: 100%;">
                             <tbody><tr>

                                 <td width="100%" colspan="4" class="s0111">


                                   Assinatura


                            </td>
                         </tr>





                                    <tr>
                                        <td width="100%" class="s0000" colspan="4">

                                                    Assinatura do Funcionário
                                                    <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif" border="0">

                                               <br>___________________________________________________<br>
                                        </td>
                                    </tr>



                               </tbody></table>
                         </td>

                             </tr>




             </tbody></table>
        </td>
    </tr>
</tbody></table>
