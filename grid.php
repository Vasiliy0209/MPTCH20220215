<!-- Доктайп -->
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Пример шаблона Bootstrap</title>
    <meta charset="utf-8">
    <!-- Метатег Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
      crossorigin="anonymous">
	<style>
		.row div{
			background-color: #F00;
			border-style: solid;
			border-color: #000;
		}
	</style>
  </head>
  <body>

  <!-- Ваше содержимое начинается здесь -->
	<div class="container text-center">
		<div class="row">	
		<?for($i=1;$i<=14;$i++){?>
			<?if($i==5):?>
			<div class="w-100">w100</div>
			<?endif;?>
			<div class="col">
				<?="Это столбец $i"?>
			</div>
		<?}?>
		</div>		
	</div>
	
  <!-- Ваше содержимое заканчивается здесь -->

  <!-- JavaScript: размещается в конце документа, чтобы страницы загружались быстрее -->
    <!-- Библиотека jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
      crossorigin="anonymous"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
      crossorigin="anonymous"></script>
    <!-- Последний скомпилированный и минимизированный Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
      crossorigin="anonymous"></script>
  </body>
</html>
