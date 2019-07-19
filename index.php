<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="t.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
    <div class="page-header">
      <center><h1>Assessment 2</h1></center>
      <pre>
Create a HTML page as shown in the image with three div one inside the other.
&lt;body&gt;
    &lt;div id=&quot;div-one&quot;&gt;
        &lt;div id=&quot;div-two&quot;&gt;
            &lt;div id=&quot;div-three&quot;&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;

Attach click event to all the divs using jquery 
$(&quot;div&quot;).on(&#39;click&#39;,testClick) ;
create method testClick which will ONLY alert the id of the div which was clicked
and no other alters should be triggered.
      </pre> 
    </div>    
  </div>

<div class="container main">
  <div id="div-one">
      <h3>This is div-one</h3>
    <div id="div-two">
      <h3>This is div-two</h3>
      <div id="div-three">
        <h3>This is div-three</h3>
      </div>
    </div>
    
  </div>
</body>
</html>

<script src="script.js"></script>