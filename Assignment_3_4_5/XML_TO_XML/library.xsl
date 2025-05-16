<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <library>
            <xsl:apply-templates select="books/book"/>
        </library>
    </xsl:template>

    <xsl:template match="book">
        <bookDetails>
            <bookTitle><xsl:value-of select="title"/></bookTitle>
            <bookAuthor><xsl:value-of select="author"/></bookAuthor>
            <bookPrice><xsl:value-of select="price"/></bookPrice>
            <bookpages><xsl:value-of select="pages"/></bookpages>
        </bookDetails>
    </xsl:template>
</xsl:stylesheet>
