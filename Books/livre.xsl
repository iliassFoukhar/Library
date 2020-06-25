<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/livre">
<html>

	<body style="background-color:silver">
		
		<p style="text-align:center;font-size: 50px;margin-bottom: 0;text-shadow: 2px 2px grey;text-transform: capitalize;">
			<xsl:value-of select="titre"/>
		</p>

		<hr style="width:85%;border-color: silver;border-width: 5px"/>

	<table align="center" style="border: 2px solid grey;border-radius: 15px;" cellpadding="10px">
	<tr>
		<td style="width: 500px;text-align: center;align-self: center;">
			<h1 style="text-decoration: underline;">Auteur :</h1>
			<p>Nom : <xsl:value-of select="auteur/nom" /></p>
			<p>Prenom : <xsl:value-of select="auteur/prenom" /></p>
			<p>Nationalite : <xsl:value-of select="auteur/nationalité"/></p>
		</td>

		<td style="width: 500px;text-align: center;align-self: center;">
			<h1 style="text-decoration: underline">Description :</h1>
			<p>Date de parution : <xsl:value-of select="date" /></p>
			<p><xsl:value-of select="description" /></p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p style="text-align:center;font-size: 30px;text-transform: capitalize;">
			<xsl:value-of select="section/titre_s"/>
		</p>
		<p>
			<xsl:value-of select="section/paragraphe"/>
		</p>
		<p>
			<xsl:value-of select="section/paragraphe[2]"/>
		</p>
		</td>
	</tr>
	</table>



	</body>

</html>
</xsl:template>
</xsl:stylesheet>
