<html>
<head>

    <title>HTML Language</title>
    <link rel="stylesheet" href="css/First.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="../prism.js"></script>
    <link rel="stylesheet" href="../prism.css">

</head>
<body>
<?php include("./include/header.php"); ?>
    <table>
        <tr>
            <td>
                <center>
                    <h1>HTML tutorial</h1>
                </center>
                <h5>1.Simple hello world program</h5>
                <p>
                    here we write iostream which we have to include to access the cout method and syntax is much similar to c language
                </p>
                <p>
                   h1  tag represents the heading.
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;                                                                                                                                                                       
&lt;head&gt;
&lt;title&gt;This is document title&lt;/title&gt;
&lt;/head&gt;	
&lt;body style="background:black;color:white;"&gt;
&lt;h1&gt;This is a heading&lt;/h1&gt;
&lt;p&gt;Hello World!&lt;/p&gt;
&lt;/body&gt;	
&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/1-hello.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <h5>2.Basic HTML Document</h5>
                <p>
                As told earlier, HTML is a markup language and makes use of various tags to format the content.
                <br/>
                 &lt;!DOCTYPE...&gt;This tag defines the document type and HTML version.
                 <br/>
                 The &lt;title&gt; tag is used inside the &lt;head&gt; tag to mention the document title.
                </p>

<pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;This is document title&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;h1&gt;This is a heading&lt;/h1&gt;
&lt;p&gt;Document content goes here.....&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/2-document.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <h5>3.Heading Tags</h5>
                <p>
                Any document starts with a heading. You can use different sizes for your headings. HTML also has six levels of headings, which use the elements &lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, and &lt;h6&gt;. While displaying any heading, browser adds one line before and one line after that heading.
                </p>

<pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Heading Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;h1&gt;This is heading 1&lt;/h1&gt;
&lt;h2&gt;This is heading 2&lt;/h2&gt;
&lt;h3&gt;This is heading 3&lt;/h3&gt;
&lt;h4&gt;This is heading 4&lt;/h4&gt;
&lt;h5&gt;This is heading 5&lt;/h5&gt;
&lt;h6&gt;This is heading 6&lt;/h6&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/3-tag.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <h5>4.HTML Tag vs. Element</h5>
                <p>
                An HTML element is defined by a starting tag. If the element contains other content, it ends with a closing tag.
                <br/> 
                For example, &lt;p&gt; is starting tag of a paragraph and &lt;/p&gt; is closing tag of the same paragraph but &lt;p&gt;This is paragraph&lt;/p&gt; is a paragraph element.   
            </p>

<pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Nested Elements Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;h1&gt;This is &lt;i&gt;italic&lt;/i&gt; heading&lt;/h1&gt;
&lt;p&gt;This is &lt;u&gt;underlined&lt;/u&gt; paragraph&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/4-Element.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <h5>5.HTML - Attributes</h5>
                <p>
                The name is the property you want to set. For example, the paragraph &lt;p&gt; element in the example carries an attribute whose name is align, which you can use to indicate the alignment of paragraph on the page.
                <br/> 
                The value is what you want the value of the property to be set and always put within quotations. The below example shows three possible values of align attribute: left, center and right.
            </p>

<pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt; 
&lt;html&gt;

&lt;head&gt; 
&lt;title&gt;Align Attribute  Example&lt;/title&gt; 
&lt;/head&gt;

&lt;body&gt; 
&lt;p align = "left"&gt;This is left aligned&lt;/p&gt; 
&lt;p align = "center"&gt;This is center aligned&lt;/p&gt; 
&lt;p align = "right"&gt;This is right aligned&lt;/p&gt; 
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/5-Attributes.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <h5>6.HTML - Formatting</h5>
                <p>
                If you use a word processor, you must be familiar with the ability to make text bold, italicized, or underlined; these are just three of the ten options available to indicate how text can appear in HTML and XHTML.
            </p>
            <h5>6.1 Bold Text</h5>
                <p>
                Anything that appears within &lt;b&gt;...&lt;/b&gt; element, is displayed in bold as shown below 
            </p>
<pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Bold Text Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;The following word uses a &lt;b&gt;bold&lt;/b&gt; typeface.&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/6-bold.png" class="img-fluid">
                <h5>6.2 Italic Text</h5>
                <p>
                Anything that appears within &lt;i&gt;...&lt;/i&gt; element is displayed in italicized as shown below 
            </p>
<pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Italic Text Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;The following word uses an &lt;i&gt;italicized&lt;/i&gt; typeface.&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/7-Italic.png" class="img-fluid">
                <h5>6.3 Underlined Text</h5>
                <p>
                Anything that appears within &lt;u&gt;...&lt;/u&gt; element, is displayed with underline as shown below 
            </p>
            <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Underlined Text Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;The following word uses an &lt;u&gt;underlined&lt;/u&gt; typeface.&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/8-Underlined.png" class="img-fluid">
                <h5>6.4 Strike Text</h5>
                <p>
                Anything that appears within &lt;strike&gt;...&lt;/strike&gt; element is displayed with strikethrough, which is a thin line through the text as shown below
            </p>
            <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Strike Text Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;The following word uses a &lt;strike&gt;strikethrough&lt;/strike&gt; typeface.&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/9-Strike.png" class="img-fluid">
                <h5>6.5 Monospaced Font</h5>
                <p>
                The content of a &lt;tt&gt;...&lt;/tt&gt; element is written in monospaced font. Most of the fonts are known as variable-width fonts because different letters are of different widths (for example, the letter 'm' is wider than the letter 'i'). In a monospaced font, however, each letter has the same width.
            </p>
            <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Monospaced Font Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;The following word uses a &lt;tt&gt;monospaced&lt;/tt&gt; typeface.&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/10-Monospaced.png" class="img-fluid">
                <h5>6.6 Grouping Content</h5>
                <p>
                The &lt;div&gt; and &lt;span&gt; elements allow you to group together several elements to create sections or subsections of a page.
            </p>
            <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Span Tag Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;This is the example of &lt;span style = "color:green"&gt;span tag&lt;/span&gt;
and the &lt;span style = "color:red"&gt;div tag&lt;/span&gt; alongwith CSS&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/11-Grouping.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <h5>7.HTML - Phrase Tags</h5>
                <p>
                The phrase tags have been desicolgned for specific purposes, though they are displayed in a similar way as other basic tags like &lt;b&gt;, &lt;i&gt;, &lt;pre&gt;, and &lt;tt&gt;, you have seen in previous chapter. This chapter will take you through all the important phrase tags, so let's start seeing them one by one.
                </p>
                <h5>7.1 Emphasized Text</h5>
                <p>
                Anything that appears within &lt;em&gt;...&lt;/em&gt; element is displayed as emphasized text
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Emphasized Text Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;The following word uses an &lt;em&gt;emphasized&lt;/em&gt; typeface.&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/12-Emphasized .png" class="img-fluid">
                <h5>7.2 Marked Text</h5>
                <p>
                Anything that appears with-in &lt;mark&gt;...&lt;/mark&gt; element, is displayed as marked with yellow ink.
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Marked Text Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;The following word has been &lt;mark&gt;marked&lt;/mark&gt; with yellow&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/13-Marked.png" class="img-fluid">
                <h5>7.3 Text Abbreviation</h5>
                <p>
                You can abbreviate a text by putting it inside opening &lt;abbr&gt; and closing &lt;/abbr&gt; tags. If present, the title attribute must contain this full description and nothing else.
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Text Abbreviation&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;My best friend's name is  &lt;abbr title = "Abhishek"&gt;Abhy&lt;/abbr&gt;.&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/14-Abbreviation.png" class="img-fluid">
                <h5>7.4 Text Direction</h5>
                <p>
                The &lt;bdo.&gt;..&lt;/bdo&gt; element stands for Bi-Directional Override and it is used to override the current text direction.
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;Text Direction Example&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;This text will go left to right.&lt;/p&gt;
&lt;p&gt;&lt;bdo dir = "rtl"&gt;This text will go right to left.&lt;/bdo&gt;&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/15- Direction.png" class="img-fluid">
            </td>
        </tr>
        <tr>
            <td>
                <h5>8.HTML - Comments</h5>
                <p>
                HTML comments are placed in between lt;!-- ... --&gt; tags. So, any content placed with-in lt;!-- ... --&gt; tags will be treated as comment and will be completely ignored by the browser
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;  &lt;!-- Document Header Starts --&gt;
&lt;title&gt;This is document title&lt;/title&gt;
&lt;/head&gt; &lt;!-- Document Header Ends --&gt;

&lt;body&gt;
&lt;p&gt;Document content goes here.....&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/16-comment.png" class="img-fluid">
                <h5>8.1 Multiline Comments</h5>
                <p>
                You can comment multiple lines by the special beginning tag &lt;!-- and ending tag --&gt; placed before the first line and end of the last line as shown in the given example below.
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;  
&lt;title&gt;Multiline Comments&lt;/title&gt;
&lt;/head&gt; 

&lt;body&gt;
&lt;!-- 
This is a multiline comment and it can
span through as many as lines you like.
--&gt;

&lt;p&gt;Document content goes here.....&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/17-Multiline.png" class="img-fluid">
            
            <h5>8.2 Conditional Comments</h5>
                <p>
                Conditional comments only work in Internet Explorer (IE) on Windows but they are ignored by other browsers. They are supported from Explorer 5 onwards, and you can use them to give conditional instructions to different versions of IE.
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;  
&lt;title&gt;Conditional Comments&lt;/title&gt;

&lt;!--[if IE 6]&gt;
Special instructions for IE 6 here
&lt;![endif]--&gt;
&lt;/head&gt; 

&lt;body&gt;
&lt;p&gt;Document content goes here.....&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/18-Conditional.png" class="img-fluid">
                </td>
                </tr>
                <tr>
            <td>
                <h5>9.HTML - Tables</h5>
                <p>
                The HTML tables are created using the &lt;table&gt; tag in which the &lt;tr&gt; tag is used to create table rows and &lt;td&gt; tag is used to create data cells. The elements under &lt;td&gt; are regular and left aligned by default
                </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;HTML Tables&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;table border = "1"&gt;
&lt;tr&gt;
&lt;td&gt;Row 1, Column 1&lt;/td&gt;
&lt;td&gt;Row 1, Column 2&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;Row 2, Column 1&lt;/td&gt;
&lt;td&gt;Row 2, Column 2&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/19-table.png" class="img-fluid">
                <h5>9.1 Tables Backgrounds</h5>
                <p>
                bgcolor attribute − You can set background color for whole table or just for one cell.
                <br/>
                background attribute − You can set background image for whole table or just for one cell.   
            </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;HTML Table Background&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;table border = "1" bordercolor = "green" bgcolor = "yellow"&gt;
&lt;tr&gt;
&lt;th&gt;Column 1&lt;/th&gt;
&lt;th&gt;Column 2&lt;/th&gt;
&lt;th&gt;Column 3&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td rowspan = "2"&gt;Row 1 Cell 1&lt;/td&gt;
&lt;td&gt;Row 1 Cell 2&lt;/td&gt;
&lt;td&gt;Row 1 Cell 3&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Row 2 Cell 2&lt;/td&gt;
&lt;td&gt;Row 2 Cell 3&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td colspan = "3"&gt;Row 3 Cell 1&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/20-Table Background.png" class="img-fluid">
        <h5>9.2 Table Height and Width</h5>
                <p>
                You can set a table width and height using width and height attributes. You can specify table width or height in terms of pixels or in terms of percentage of available screen area.
            </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;HTML Table Width/Height&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;table border = "1" width = "400" height = "150"&gt;
&lt;tr&gt;
&lt;td&gt;Row 1, Column 1&lt;/td&gt;
&lt;td&gt;Row 1, Column 2&lt;/td&gt;
&lt;/tr&gt;

&lt;tr&gt;
&lt;td&gt;Row 2, Column 1&lt;/td&gt;
&lt;td&gt;Row 2, Column 2&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/21-Table WidthHeight.png" class="img-fluid">
            </td>
        </tr>
        <tr>
        <td>
        <h5>10. HTML - Lists</h5>
                <p>
                HTML offers web authors three ways for specifying lists of information. All lists must contain one or more list elements. 
            </p>
            <h5>10.1 HTML Unordered Lists</h5>
                <p>
                An unordered list is a collection of related items that have no special order or sequence. This list is created by using HTML &lt;ul&gt; tag. Each item in the list is marked with a bullet.
            </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;HTML Unordered List&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;ul&gt;
&lt;li&gt;Beetroot&lt;/li&gt;
&lt;li&gt;Ginger&lt;/li&gt;
&lt;li&gt;Potato&lt;/li&gt;
&lt;li&gt;Radish&lt;/li&gt;
&lt;/ul&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/22-Unordered List.png" class="img-fluid">
                <h5>10.2 The type Attribute</h5>
                <p>
                You can use type attribute for &lt;ul&gt; tag to specify the type of bullet you like. By default, it is a disc. Following are the possible options
            </p>
                <pre class="language-html"><code>&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;head&gt;
&lt;title&gt;HTML Unordered List&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;ul type = "square"&gt;
&lt;li&gt;Beetroot&lt;/li&gt;
&lt;li&gt;Ginger&lt;/li&gt;
&lt;li&gt;Potato&lt;/li&gt;
&lt;li&gt;Radish&lt;/li&gt;
&lt;/ul&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
                <h5>Output</h5>
                <img src="./html language output/23-Unordered Lists.png" class="img-fluid">
            </td>
        </tr>
</table>
</body>
</html>