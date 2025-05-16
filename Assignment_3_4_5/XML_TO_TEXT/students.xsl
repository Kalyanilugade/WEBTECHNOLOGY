<xsl:stylesheet version="1.0"
      xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="text"/>

  <xsl:template match="/students">
    <xsl:for-each select="student">
      Name: <xsl:value-of select="name"/>&#10;
      Roll No: <xsl:value-of select="rollno"/>&#10;
      Department: <xsl:value-of select="department"/>&#10;
      -------------------------&#10;
    </xsl:for-each>
  </xsl:template>

</xsl:stylesheet>
