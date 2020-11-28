<!-- Chama a biblioteca jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
session_start();
$_SESSION['variavel'] = "Hello World";
$variavel2 = "Hello World2";
?>
<input type = "text" value = "<?php echo $_SESSION['variavel']?>" id = "variavel" />
<input type = "text" value = "<?php echo $variavel2 ?>" id = "variavel2"/>
<script>
var variavel = jQuery("#variavel").val();
var variavel2 = jQuery("#variavel2").val();
alert(variavel);
alert(variavel2);
</script>
