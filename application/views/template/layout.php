<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title><?=$title?></title>

	<link href="<?=base_url('assets/template/css/app.css')?>" rel="stylesheet">
    <?php
        foreach ($css_libs as $key => $css) {
          echo '<link href="'.base_url($css).'" rel="stylesheet">';
        }
    ?>
</head>
<body>
	<div class="wrapper">
        <?php $this->load->view('template/side-nav')?>
       
		<div class="main">
		<?php $this->load->view('template/top-nav')?>
			<main class="content">
				<?php $this->load->view($body);?>
			</main>
		</div>
	</div>

	<script src="<?=base_url('assets/template/js/app.js')?>"></script>
	<script>
		let base_url="<?php echo base_url();?>";
	</script>
    <?php
        foreach ($js_libs as $key => $js) {
           echo "<script src=".base_url($js)."></script>";
        }
    ?>
</body>

</html>