
	</section>

	<footer class="footer">
<br><br><br>
		<p>&copy; All rights reserved <?php echo date('Y'); ?></p>

	</footer>

<!-- <script>

function login() {
	jQuery('#loginbtn').click(function() {
		var u = jQuery('#username').val();
		var p = jQuery('#password').val();

		if(u == ""){
			jQuery('#username').addClass('unameERR');		
		}
		if(p == ""){
			jQuery('#password').addClass('pwordERR');
		}
		if(u == "" && p == ""){
			jQuery('#username').addClass('unameERR');
			jQuery('#password').addClass('pwordERR');
		}

		if(u != "" && p != ""){
			jQuery.get('<?php echo base_url(); ?>LoginController/checkLogin','uname=' + u + '&pword=' + p, function(data){
				if(data == ""){
					console.log(data);
					jQuery('#msg').addClass('showERR');
					jQuery('#msg').html('Invalid Username or Password');
				}
				else {
					console.log(data);
					jQuery('#msg').addClass('showSUC');
					jQuery('#msg').html(data);
				}
			},
			function(data) {
				alert("FAILED");
			});
		}
	});
}

function clicker() {
	jQuery('#username').click(function() {
		jQuery('#username').removeClass('unameERR');
	});
	
	jQuery('#password').click(function() {
		jQuery('#password').removeClass('pwordERR');
	});
}

jQuery(document).ready(function() {
	login();
	clicker();
});


</script>
 -->

	</body>

</html>