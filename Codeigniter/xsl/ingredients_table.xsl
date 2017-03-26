<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <h2>Ingredients</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Amount</th>
      <th>Name</th>
      <th>Manufacturer</th>     
    </tr>
    <xsl:for-each select="ingredients/recipe_entry">
    <tr>
      <td><xsl:value-of select="amount"/> <xsl:value-of select="unit"/></td>
      <td><xsl:value-of select="ing_name"/></td>
      <td><xsl:value-of select="ing_manu"/></td>
    </tr>
    </xsl:for-each>
  </table>
</xsl:template>
</xsl:stylesheet>