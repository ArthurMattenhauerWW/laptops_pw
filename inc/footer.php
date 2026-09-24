
	<hr>
		</main> <!-- /container -->

	<footer data-bs-theme="dark" class="container">
    	<?php $dt = new DateTime("now", new DateTimeZone("America/Sao_Paulo")); ?>
    	<p class="mb-0">&copy; 2026 à <?= $dt->format("Y") ?> - Arthur Mattenhauer & Daniel Rodrigues</p>
	</footer>

	<script src="<?php echo BASEURL; ?>js/jquery-4.0.0.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.bundle.min.js"></script>	    
	<script src="<?php echo BASEURL; ?>js/all.min.js"></script>
	<script src="<?php echo BASEURL; ?>js/main.js"></script>
</body>
</html>