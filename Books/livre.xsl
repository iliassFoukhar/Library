<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/livre">
<html>

	<body style="background-color:black">
<div style="margin : 3rem; border: solid 0.3rem black; padding : 1rem;background-color:#2d2d2d">
		<p style="border-top-left-radius : 5rem;border-top-right-radius : 5rem;background-color:#8d2663; padding : 2rem ;color:white;text-align:center;font-size: 3rem;margin-bottom: 0;text-shadow: 2px 2px black;text-transform: capitalize;">
				<xsl:value-of select="titre"/>
			</p>
			<table align="center" style="background-color : #ababab; width : 100%;">
				<tr>
					<td>
						<div align="center" style="margin: 0 5rem; padding :2rem;font-size: 2rem; font-style:italic; background-color:#ababab;">
							<p>Ecrit par :</p>
							<p>Nom :<xsl:value-of select="auteur/nom" /></p>
							<p>Prénom : <xsl:value-of select="auteur/prenom" /></p>
						</div>
				</td>
				<td>
					<div align="center" style="margin:0 5rem; padding :0.2rem;font-size: 2rem; font-style:italic; background-color:#ababab;">
						<p style="text-decoration: none">Description :</p>
						<p>Nationalité : <xsl:value-of select="auteur/nationalité"/></p>
						<p>Date de parution : <xsl:value-of select="date" /></p>
						<p><xsl:value-of select="description" /></p>
					</div>
				</td>
			</tr>
		</table>
			<div align="center" style="margin:0; border-bottom-left-radius : 3rem ;border-bottom-right-radius : 3rem ;padding :0.2rem 2rem 3rem 2rem;font-size: 1.7rem;text-align:justify; background-color:#ababab;">

			<p style="text-align:center;font-size: 30px;text-transform: capitalize;">
			<xsl:value-of select="section/titre_s"/>
		</p>
		<p>
			<xsl:value-of select="section/paragraphe"/>
		</p>
		<p>
			<xsl:value-of select="section/paragraphe[2]"/>
		</p>
	</div>

</div>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>
