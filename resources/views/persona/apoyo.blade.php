<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="Jota">
	<META NAME="CREATED" CONTENT="20200929;161100000000000">
	<META NAME="CHANGEDBY" CONTENT="Jota">
	<META NAME="CHANGED" CONTENT="20200929;162300000000000">
	<META NAME="AppVersion" CONTENT="16.0000">
	<META NAME="DocSecurity" CONTENT="0">
	<META NAME="HyperlinksChanged" CONTENT="false">
	<META NAME="LinksUpToDate" CONTENT="false">
	<META NAME="ScaleCrop" CONTENT="false">
	<META NAME="ShareDoc" CONTENT="false">
	<STYLE TYPE="text/css">
	<!--
		@page { size: 8.5in 11in; margin-left: 1.18in; margin-right: 1.18in; margin-top: 0.3in; margin-bottom: 0.49in }
		P { margin-bottom: 0.08in; direction: ltr; widows: 2; orphans: 2 }
	-->
	</STYLE>
</HEAD>
<BODY LANG="es-CO" DIR="LTR">
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<TABLE WIDTH=727 CELLPADDING=7 CELLSPACING=0>
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
			<P ALIGN=CENTER><FONT SIZE=2><B>Página </B></FONT><FONT SIZE=2>39
			</FONT><FONT SIZE=2><B>de </B></FONT><FONT SIZE=2>40</FONT></P>
		</TD>
	</TR>
</TABLE>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT SIZE=4><B>Anexo
11. </B></FONT><FONT SIZE=4>Formato de Registro Individual de
Temperatura (Para Miembros del Grupo de Apoyo Covid)</FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>1.
Información Personal </B></FONT></FONT></FONT>
</P>
<TABLE WIDTH=589 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=211>
	<COL WIDTH=347>
	<TR VALIGN=TOP>
		<TD WIDTH=211 BGCOLOR="#66ffff" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><FONT SIZE=3><B>Nombre y Apellidos</B></FONT></P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$persona->name}}
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 HEIGHT=30 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><FONT SIZE=3><B>Tipo y Número de Documento de Identidad</B></FONT></P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$persona->tipo_documento." ".$persona->number_id}}
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><FONT SIZE=3><B>Cargo o Función en la Iglesia</B></FONT></P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$persona->cargo}}
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 HEIGHT=32 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><FONT SIZE=3><B>Teléfono de Contacto / Emergencia</B></FONT></P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$persona->numero_persona}}
			</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=211 HEIGHT=5 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P><FONT SIZE=3><B>Mes de Registro</B></FONT></P>
		</TD>
		<TD WIDTH=347 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P>{{$mes}}
			</P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>2.
Registro de Temperatura y EPPS </B></FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 150%"><TABLE DIR="LTR" ALIGN=LEFT  HSPACE=4 CELLPADDING=7 CELLSPACING=0 STYLE="display:block;width:100%">
	<COL WIDTH=103>
	<COL WIDTH=104>
	<COL WIDTH=104>
	<COL WIDTH=104>
	<COL WIDTH=103>
	<TR VALIGN=TOP>
		<TD WIDTH=103 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=3><B>Día</B></FONT></P>
		</TD>
		<TD WIDTH=104 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=3><B>Temperatura al Ingreso</B></FONT></P>
		</TD>
		<TD WIDTH=104 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=3><B>EPP</B></FONT></P>
		</TD>
		<TD WIDTH=104 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=3><B>Temperatura Salida</B></FONT></P>
		</TD>
		<TD WIDTH=103 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
			<P ALIGN=CENTER><FONT SIZE=3><B>Síntomas de Alarma</B></FONT></P>
		</TD>
	</TR>

	
	@foreach($persona->ingresos as $ingreso)
		@if($ingreso->created_at->format('m')==$mes)
			<TR VALIGN=TOP>
				<TD WIDTH=103 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
					<P ALIGN=CENTER>{{$ingreso->created_at->format('d')}}
					</P>
				</TD>
				<TD WIDTH=104 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
					<P ALIGN=CENTER>{{$ingreso->temperatura_ingreso}}
					</P>
				</TD>
				<TD WIDTH=104 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
					<P ALIGN=CENTER>{{$ingreso->epp}}
					</P>
				</TD>
				<TD WIDTH=104 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
					<P ALIGN=CENTER>{{$ingreso->temperatura_salida}}
					</P>
				</TD>
				<TD WIDTH=103 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
					<P ALIGN=CENTER>{{$ingreso->sintomas}}
					</P>
				</TD>
			</TR>
		@endif
	@endforeach
	
</TABLE>


<FONT SIZE=3 style="display:block"><B>Responsable del Diligenciamiento:
____________________________________________ / Cargo dentro de la
Iglesia: ___________________________ / Teléfono de Contacto:
________________</B></FONT>
</P>
</BODY>
</HTML>