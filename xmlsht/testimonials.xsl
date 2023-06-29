<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <link href="./testimonials.css" rel="stylesheet" />
                <title> Testimonials </title>
            </head>
            <body>
                <h1> Testimonials </h1>
                <div id="main">
                    <xsl:for-each select="testimonials/testimonial">
                        <div class="sub">
                            <h2> <xsl:value-of select="name"/> </h2>
                            <p> <xsl:value-of select="content"/> </p>
                        </div>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>