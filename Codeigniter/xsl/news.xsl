<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <h2>Testing XSL</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>ID</th>
        <th>Title</th>
      </tr>
      <xsl:for-each select="root/newspost">
        <tr>
          <td><xsl:value-of select="recipe_id"/></td>
          <td><xsl:value-of select="title"/></td>
        </tr>
      </xsl:for-each>
    </table>
</xsl:template>

</xsl:stylesheet>