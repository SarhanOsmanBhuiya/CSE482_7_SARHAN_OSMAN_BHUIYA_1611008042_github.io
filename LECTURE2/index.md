<!DOCTYPE html>
<html>
<head>
	<title>Lecture2(TASK2.pdf)</title>
</head>
<style type="">
	
.bod{
	border-bottom: 1px solid black;
}

.head{
	text-align: center;
	color: white;
	background-color: #D34776;
	padding:20px;
	border-radius: 5px;
}

span{
	border: 1px solid black;
	padding: 4px;
}

</style>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>

<div class="container">
	<br><br>
	<h2 class="bod">
		About the Lecture
	</h2>
		<p>CSS is used to control the style of a web document in a simple and easy way. CSS stands
			for Cascading Style Sheets. This tutorial covers both the versions CSS1 and CSS2 and
			gives a complete understanding of CSS, starting from its basics to advanced concepts. 
		</p>
		<br><br>
	<h2 class="bod">
		HTML and CSS
	</h2>
		<p>
			Both the HTML and CSS section will be cover here
		</p>
		<br><br>
	<h2 class="bod">
		Prerequisites
	</h2>
		<p>
			You should be familiar with:
			<ul>
			  <li>Basic word processing using any text editor.
</li>
			  <li>How to create directories and files.</li>
			  <li>How to navigate through different directories</li>
			  <li>Internet browsing using popular browsers like Internet Explorer or Firefox.</li>
			  <li>Developing simple Web Pages using HTML or XHTML.</li>
			</ul>  
			If you are new to HTML and XHTML, then we would suggest you to go through our HTML
			Tutorial or XHTML Tutorial first.
		</p>
		<br><br><br><br><br>
		<h1 class="head">1. CSS ─ OVERVIEW</h1>
		<br><br><br><br><br>
		<h2 class="bod">
			What is CSS?
		</h2>
			<p>
				Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to
				simplify the process of making web pages presentable. <br> <br>
				CSS handles the look and feel part of a web page. Using CSS, you can control the color of the
				text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out,
				what background images or colors are used, as well as a variety of other effects. <br> <br>
				CSS is easy to learn and understand but it provides a powerful control over the presentation
				of an HTML document. Most commonly, CSS is combined with the markup languages HTML
				or XHTML.
			</p>
			<br><br>
		<h2 class="bod">
			Advantages of CSS
		</h2>
			<p>
				You should be familiar with:
				<ul>
				  <li><b>CSS saves time -</b> You can write CSS once 	and then reuse the same sheet in multiple
					HTML pages. You can define a style for each HTML element and apply it to as many
					web pages as you want.</li>
				  <li><b>Pages load faster -</b> If you are using 		CSS, you do not need to write HTML tag
					attributes every time. Just write one CSS rule of a tag and apply it to all the
					occurrences of that tag. So, less code means faster download times.</li>
				  <li><b>Easy maintenance -</b> To make a global change, simply change the style, and all the
					elements in all the web pages will be updated automatically.</li>
				  <li><b>Superior styles to HTML -</b> CSS has a much wider array of attributes than HTML, so
					you can give a far better look to your HTML page in comparison to HTML attributes.</li>
				  <li><b>Multiple Device Compatibility -</b> Style sheets allow content to be optimized for more
					than one type of device. By using the same HTML document, different versions of a
					website can be presented for handheld devices such as PDAs and cellphones or for
					printing.</li>
					<li><b>Global web standards –</b> Now HTML attributes are being deprecated and it is being
					recommended to use CSS. So it’s a good idea to start using CSS in all the HTML pages
					to make them compatible with future browsers.</li>
				</ul>  
			</p>
			<br><br>
			<h2 class="bod">
			Who Creates and Maintains CSS?
			</h2>
				<p>
					CSS is created and maintained through a group of people within the W3C called the CSS
					Working Group. The CSS Working Group creates documents called specifications. When a
					specification has been discussed and officially ratified by the W3C members, it becomes a
					recommendation. 	<br> <br>
					These ratified specifications are called recommendations because the W3C has no control over
					the actual implementation of the language. Independent companies and organizations create
					that software. <br> <br>
					<b>NOTE:</b> The World Wide Web Consortium or W3C is a group that makes recommendations
					about how the Internet works and how it should evolve.
									</p>
				<br><br>
				<h2 class="bod">
				CSS Versions
				</h2>
					<p>
						Cascading Style Sheets level 1 (CSS1) came out of W3C as a recommendation in December
						1996. This version describes the CSS language as well as a simple visual formatting model
						for all the HTML tags. <br> <br>
						CSS2 became a W3C recommendation in May 1998 and builds on CSS1. This version adds
						support for media-specific style sheets e.g. printers and aural devices, downloadable fonts,
						element positioning and tables.
					</p>
					<br><br><br><br><br>
					<h1 class="head">2. CSS ─ SYNTAX</h1>
					<br><br><br><br><br>
					<p>A CSS comprises of style rules that are interpreted by the browser and then applied to the
					corresponding elements in your document. A style rule is made of three parts:
					<ul>
						<li><b>Selector:</b>: A selector is an HTML tag at which a style will be applied. This could be any
						tag like h1 or table etc.</li>
						<li><b>Property:</b>: A property is a type of attribute of HTML tag. Put simply, all the HTML
						attributes are converted into CSS properties. They could be color, border, etc.
						</li>
						<li><b> Value:</b>Values are assigned to properties. For example, color property can have the
						value either red or #F1F1F1 etc.
						</li>
					</ul>
					You can put CSS Style Rule Syntax as follows:<br> <br>
					<span>selector { property: value }</span><br><br>
					Example: You can define a table border as follows: <br><br>
					<span>table{ border :1px solid #C00; }</span><br><br>
					Here table is a selector and border is a property and the given value 1px solid #C00 is the
					value of that property. <br><br>
					You can define selectors in various simple ways based on your comfort. Let me put these
					selectors one by one.
					</p> <br><br>
					<h2 class="bod">
						The Type Selectors
					</h2>
					<p>
						This is the same selector we have seen above. Again, one more example to give a color to all
						level 1 headings: <br><br>
						<span>h1 {color: #36CFFF;}</span>
					</p>
					<br><br>
					<h2 class="bod">
						The Universal Selectors
					</h2>
					<p>
						Rather than selecting elements of a specific type, the universal selector quite simply matches
						the name of any element type: <br><br>
						<span>* {color: #000000;}</span> <br><br>This rule renders the content of every element in our document in black.
					</p>
					<br><br>
					<h2 class="bod">
						The Type Selectors
					</h2>
					<p>
						This is the same selector we have seen above. Again, one more example to give a color to all
						level 1 headings: <br><br>
						<span>h1 {color: #36CFFF;}</span>
					</p>
					<br><br>
					<h2 class="bod">
						The Descendant Selectors
					</h2>
					<p>
						Suppose you want to apply a style rule to a particular element only when it lies inside a
						particular element. As given in the following example, the style rule will apply to em
						element only when it lies inside the ul tag.
						<br><br>
						<span>ul em {color: #000000;}</span> 
					</p>
					<br><br>
					<h2 class="bod">
						The Class Selectors
					</h2>
					<p>
						You can define style rules based on the class attribute of the elements. All the elements having
						that class will be formatted according to the defined rule.
						<br><br>
						<span>.black {
						 color: #000000;
						}
						</span> <br><br>
						This rule renders the content in black for every element with class attribute set to black in our
						document. You can make it a bit more particular. For example:<br><br>
						<span>h1.black {
						 color: #000000;
						}</span><br><br>
						This rule renders the content in black for only h1 elements with class attribute set to black. <br>
						You can apply more than one class selectors to a given element. Consider the following
						example:<br><br>
						<span>This para will be styled by the classes center and bold.</span>
					</p>


</div>

</div>

</body>
</html>
