<html>
<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
    //Should work
	$.get("/add_product/b98540d7-c3f9-4af3-8d77-e46662fcb3fa");
    
    //Should fail
	$.get("/add_product/b98540d7-c3f9-4af3-8d77-e46662fcb3fb");
    
    //Command on a different aggregate, should work
    $.get("/create_cart/b98540d7-c3f9-4af3-8d77-e46662fcb3fc");
});

</script>
</head>
<body>
<h2>Testing simultaneous commands</h2>
<ul>
  <li>Two commands to the same aggregate</li>
  <li>One command to a different aggregate</li>
</ul>
</body>
</html>