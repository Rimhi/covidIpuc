<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="Jota">
	<META NAME="CREATED" CONTENT="20201003;15800000000000">
	<META NAME="CHANGEDBY" CONTENT="Jota">
	<META NAME="CHANGED" CONTENT="20201003;15800000000000">
	<META NAME="AppVersion" CONTENT="16.0000">
	<META NAME="DocSecurity" CONTENT="0">
	<META NAME="HyperlinksChanged" CONTENT="false">
	<META NAME="LinksUpToDate" CONTENT="false">
	<META NAME="ScaleCrop" CONTENT="false">
	<META NAME="ShareDoc" CONTENT="false">
	<STYLE TYPE="text/css">
	<!--
		@page { size: 8.5in 11in; margin-left: 1.18in; margin-right: 1.18in; margin-top: 0.39in; margin-bottom: 0.98in }
		P { margin-bottom: 0.08in; direction: ltr; widows: 2; orphans: 2 }
	-->
	</STYLE>
</HEAD>
<BODY LANG="es-CO" DIR="LTR">
<TABLE WIDTH=727 CELLPADDING=7 CELLSPACING=0 STYLE="page-break-before: always">
	<COL WIDTH=123>
	<COL WIDTH=414>
	<COL WIDTH=146>
	<TR VALIGN=TOP>
		<TD ROWSPAN=4 WIDTH=123 HEIGHT=12 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P STYLE="margin-left: 0.61in; margin-right: -0.7in; text-indent: -0.61in">
			<IMG SRC="{{ asset('img/16078aa09f87fd7503a54499b4a2d531_html_c4d92db7.gif') }}" NAME="Imagen 2" ALIGN=BOTTOM WIDTH=123 HEIGHT=84 BORDER=0></P>
		</TD>
		<TD WIDTH=414 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=2><B>ESTANDAR – PROCESOS DE APOYO
			COVID-19</B></FONT></P>
		</TD>
		<TD WIDTH=146 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=2><B>CÓD: PR-AST CV 01</B></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=414 BGCOLOR="#d9e2f3" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=2><B>IGLESIA PENTECOSTAL UNIDA DE
			COLOMBIA</B></FONT></P>
		</TD>
		<TD WIDTH=146 BGCOLOR="#d9e2f3" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=2><B>Fecha: 01-09-2020</B></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD ROWSPAN=2 WIDTH=414 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=2><B>PLAN DE CONTINGENCIA Y MANUAL DE
			BIOSEGURIDAD</B></FONT></P>
		</TD>
		<TD WIDTH=146 BGCOLOR="#d9e2f3" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=2><B>Versión: 001</B></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=146 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=2><B>Página </B></FONT><FONT SIZE=2>29
			</FONT><FONT SIZE=2><B>de </B></FONT><FONT SIZE=2>40</FONT></P>
		</TD>
	</TR>
</TABLE>
<P ALIGN=CENTER STYLE="margin-bottom: 0.11in"><B>Anexo 2</B>.
Cuestionario Previo de Ingreso a la Congregación</P>
<P STYLE="margin-bottom: 0.11in">
</P>
<OL>
	<LI><P STYLE="margin-bottom: 0.11in"><B>Datos del Personal</B></P>
</OL>
<TABLE WIDTH=589 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=211>
	<COL WIDTH=347>
	<TR VALIGN=TOP>
		<TD WIDTH=211 BGCOLOR="#66ffff" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Nombre y Apellidos</P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$ingreso->persona->name." ".$ingreso->persona->lastname}}</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Tipo y Número de Documento de Identidad</P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$ingreso->persona->tipo_documento.". ".$ingreso->persona->number_id}}</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Edad</P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$ingreso->persona->edad." AÑOS"}}</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Dirección y Ciudad de Referencia</P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$ingreso->persona->direccion." Monteria - Cordoba"}}</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Teléfono de Contacto</P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$ingreso->persona->number_phone}}</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 BGCOLOR="#66ffff" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Temperatura al Ingreso a la Congregación</P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$ingreso->temperatura_ingreso."º"}}</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Fecha de Registro</P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$ingreso->created_at}}</P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-left: 0.5in; margin-bottom: 0.11in">
</P>
<OL START=2>
	<LI><P STYLE="margin-bottom: 0.11in"><B>Preguntas de Rigor.</B></P>
</OL>
<TABLE WIDTH=750 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=14>
	<COL WIDTH=485>
	<COL WIDTH=14>
	<COL WIDTH=17>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=485 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER><B>Preguntas</B></P>
		</TD>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><B>Si</B></P>
		</TD>
		<TD WIDTH=17 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><B>No</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P STYLE="margin-bottom: 0in">1</P>
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>¿En tu barrio, edificio, condominio o lugar de residencia hay
			casos confirmados de COVID-19?</P>
		</TD>
        @if($ingreso->respuesta_1=="Si")
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P STYLE="margin-bottom: 0in">2</P>
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>¿Has estado en Contacto con Personas diagnosticadas con
			COVID-19 y bajo sospecha?</P>
		</TD>
        @if($ingreso->respuesta_2=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P STYLE="margin-bottom: 0in">3</P>
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>¿Hace parte Usted del Personal de Salud Activo o en línea
			directa de Atención de Urgencias?</P>
		</TD>
        @if($ingreso->respuesta_3=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
		
	</TR>
	<TR>
		<TD COLSPAN=4 WIDTH=573 VALIGN=TOP BGCOLOR="#66ffff" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>¿Ha presentado en los últimos dos (2) días los siguientes
			síntomas?:</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>4</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Fiebre o cuadro febril superior a 38 Grados Celsius</P>
		</TD>
        @if($ingreso->respuesta_4=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>5</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Tos</P>
		</TD>
        @if($ingreso->respuesta_5=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>6</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Fatiga</P>
		</TD>
        @if($ingreso->respuesta_6=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>7</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Dificultad Respiratoria</P>
		</TD>
        @if($ingreso->respuesta_7=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>8</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Bronquitis / Neumonía</P>
		</TD>
        @if($ingreso->respuesta_8=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>9</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Diarrea o alteraciones del Sistema Gastrointestinal</P>
		</TD>
        @if($ingreso->respuesta_9=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>10</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Deshidratación</P>
		</TD>
        @if($ingreso->respuesta_10=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>11</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Pérdida del Olfato (Anosmia)</P>
		</TD>
        @if($ingreso->respuesta_11=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>
        @else
		<TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
        @endif
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>12</P>
		</TD>
		<TD WIDTH=485 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Pérdida del Pérdida o Cambios en el Gusto (Disgeusia/Ageusia)</P>
		</TD>
        @if($ingreso->respuesta_12=="Si")
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P></P>
		</TD>                   
        @else
        <TD WIDTH=14 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><BR>
			</P>
		</TD>
		<TD WIDTH=17 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>X</P>
		</TD>                 
        @endif
		
	</TR>
	<TR>
		<TD COLSPAN=4 WIDTH=573 HEIGHT=10 VALIGN=TOP BGCOLOR="#66ffff" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>Terminada la Encuesta se Prueba el Ingreso a la Iglesia</P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-bottom: 0.11in">
</P>
<P STYLE="margin-bottom: 0.11in">Registro Diligenciado por: {{$ingreso->user->name}} 
</P>
<P STYLE="margin-bottom: 0.11in">Cargo dentro de la Iglesia: {{$ingreso->user->cargo}}</P>
<P STYLE="margin-bottom: 0.11in">Teléfono de Contacto: {{$ingreso->user->number_phone}}</P>
</BODY>
</HTML>