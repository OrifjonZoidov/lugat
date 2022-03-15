<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<style>
		td{
			padding-right: 5px;
		}
		.bd-callout{
			border-right-color: #0c63e4 !important;
			border-right-width: 0.20rem;
		}
		.rounded-3{
			border-right-color: #0c63e4 !important;
			border-right-width: 0.20rem !important;
		}
		.jq-star {
    		display: inline-block;
		}
		.rating-area {
	overflow: hidden;
	width: 150px;
	margin: 0 ;
}
.rating-area:not(:checked) > input {
	display: none;
}
.rating-area:not(:checked) > label {
	float: right;
	width: 30px;
	padding: 0;
	cursor: pointer;
	font-size: 32px;
	line-height: 32px;
	color: lightgrey;
	text-shadow: 1px 1px #bbb;
}
.rating-area:not(:checked) > label:before {
	content: '★';
}
.rating-area > input:checked ~ label {
	color: gold;
	text-shadow: 1px 1px #c60;
}
.rating-area:not(:checked) > label:hover,
.rating-area:not(:checked) > label:hover ~ label {
	color: gold;
}
.rating-area > input:checked + label:hover,
.rating-area > input:checked + label:hover ~ label,
.rating-area > input:checked ~ label:hover,
.rating-area > input:checked ~ label:hover ~ label,
.rating-area > label:hover ~ input:checked ~ label {
	color: gold;
	text-shadow: 1px 1px goldenrod;
}
.rate-area > label:active {
	position: relative;
}
.fa, .fas {
	cursor: pointer;
    font-weight: 900;
    float: right;
    color: #d9d9d9;
}
	</style>
</head>
	<body>
		<header class="py-3 mb-3 border-bottom">
			<div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
			<div class="dropdown">
				<a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" id="dropdownNavLink" data-bs-toggle="dropdown" aria-expanded="false">
				<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
				</a>
				<ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownNavLink">
				<li><a class="dropdown-item " href="home.php" aria-current="page">Саҳифаи асосӣ</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Избранный</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Статистика</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Рейтинг</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Карзина</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">О нас</a></li>
				</ul>
			</div>
		
			<div class="d-flex align-items-center">
				<form class="w-100 me-3">
				<input type="search" class="form-control bd-callout" placeholder="Ҷустуҷӯ..." aria-label="Search">
				</form>
				<div class="flex-shrink-0 dropdown ">
				<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
				</a>
				<ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" >
					<li><a class="dropdown-item" href="#">Танзимотҳо</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#">Профиль</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="index.php">Баромадан</a></li>
				</ul>
				</div>
			</div>
			</div>
		</header>
	  <div class="container-fluid pb-3">
		  <div class="row">
			  <div class="col-12">
				<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
					<div class="col-md-6 px-0">
					  <h1 class="display-4 fst-italic">Луғати тафсирии мафҳумҳои илмӣ-техникӣ бо забони тоҷикӣ</h1>
					 </div>
				  </div>
			  </div>
		  </div>
		  <div class="row justify-content-center">
			<div class="col-4"></div>
			<div class="col-4">
				<table>
					<tr>
						<td><a href="javascript:void(0);">А</a></td>
						<td><a href="javascript:void(0);">Б</a></td>
						<td><a href="javascript:void(0);">В</a></td>
						<td><a href="javascript:void(0);">Г</a></td>
						<td><a href="javascript:void(0);">Ғ</a></td>
						<td><a href="javascript:void(0);">Д</a></td>
						<td><a href="javascript:void(0);">Е</a></td>
						<td><a href="javascript:void(0);">Ё</a></td>
						<td><a href="javascript:void(0);">Ж</a></td>
						<td><a href="javascript:void(0);">З</a></td>
						<td><a href="javascript:void(0);">И</a></td>
						<td><a href="javascript:void(0);">Й</a></td>
						<td><a href="javascript:void(0);">Ӣ</a></td>
						<td><a href="javascript:void(0);">К</a></td>
						<td><a href="javascript:void(0);">Қ</a></td>
						<td><a href="javascript:void(0);">Л</a></td>
						<td><a href="javascript:void(0);">М</a></td>
						<td><a href="javascript:void(0);">Н</a></td>
						<td><a href="javascript:void(0);">О</a></td>
						<td><a href="javascript:void(0);">П</a></td>
						<td><a href="javascript:void(0);">Р</a></td>
						<td><a href="javascript:void(0);">С</a></td>
						<td><a href="javascript:void(0);">Т</a></td>
						<td><a href="javascript:void(0);">У</a></td>
						<td><a href="javascript:void(0);">Ӯ</a></td>
						<td><a href="javascript:void(0);">Ф</a></td>
						<td><a href="javascript:void(0);">Х</a></td>
						<td><a href="javascript:void(0);">Ҳ</a></td>
						<td><a href="javascript:void(0);">Ч</a></td>
						<td><a href="javascript:void(0);">Ҷ</a></td>
						<td><a href="javascript:void(0);">Ш</a></td>
						<td><a href="javascript:void(0);">Ъ</a></td>
						<td><a href="javascript:void(0);">Э</a></td>
						<td><a href="javascript:void(0);">Ю</a></td>
						<td><a href="javascript:void(0);">Я</a></td>
					</tr>
				</table>
			  </div>		
			  <div class="col-4"></div>
		  </div>
		  </div>
	  <div class="container-fluid pb-3">
		<div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
		<div class="col-xs-12 col-md-4 col-lg-12">
		  <div class="bg-light border rounded-3">
			<div class="card-header">
				Слова
			</div>
			<?php
				$links = ['Введение в Web-дизайн','Средства навигации','Графика и мультимедиа','Использование CSS для макетирования'];
				for($i = 0; $i < 4; $i++){
				echo "<a href = 'catalog.php?id=$i'>$links[$i]</a> <br>";
				}
			?>  
		  </div>
			</div>
		  <div class="bg-light border rounded-3">
			<div class="accordion" id="accordionPanelsStayOpenExample">
				<div class="accordion-item ">
					<div class="card-header">
						Термин
					</div>
				  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
						Веб-дизайн
					</button>
				  </h2>
				  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
					<div class="accordion-body">
						<p>Ин як шохаи таҳияи веб ва як намуди тарроҳӣ мебошад, ки вазифаи он тарҳрезии интерфейсҳои корбари веб барои вебсайтҳо ё барномаҳои веб мебошад.</p>
						<!-- Button trigger modal -->
					<div class="card-body">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
					<svg xmlns="http://www.w3.org/2000/svg"  width="24px" height="23px" viewBox="0 0 576 512" style="fill:#f9f9f9"><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>  
					Написать комментарий
					</button>
					<i class="fa fa-bookmark fa-2x"></i>
					</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Написать отзыв</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  	<div class="form-group binding item ratingblock">
			<label>Оценка</label><br>
		<div class="rating-area ">
			<input type="radio" id="star-5" name="rating" value="5">
			<label for="star-5" title="Оценка «5»"></label>	
			<input type="radio" id="star-4" name="rating" value="4">
			<label for="star-4" title="Оценка «4»"></label>    
			<input type="radio" id="star-3" name="rating" value="3">
			<label for="star-3" title="Оценка «3»"></label>  
			<input type="radio" id="star-2" name="rating" value="2">
			<label for="star-2" title="Оценка «2»"></label>    
			<input type="radio" id="star-1" name="rating" value="1">
			<label for="star-1" title="Оценка «1»"></label>
		</div>
	    	<div class="form-floating">
			<label class="mt-1 p-0">Написать отзыва</label><br>
  				<textarea class="form-control mt-2 pt-1" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
        <button type="button" class="btn btn-primary">Отправить</button>
      </div>
    </div>
  </div>
</div>

					</div>
				  </div>

				</div>
			 </div>
		  </div>
		</div>
	  </div>
	<footer class="bd-footer py-5 mt-5 bg-light">
		<div class="container py-5">
		  <div class="row">
			<div class="col-6 col-lg-4  mb-3 text-center">
			  <h5>Меню</h5>
			  <ul class="list-unstyled">
				<li class="mb-2"><a href="javascript:void(0)">Саҳифаи асосӣ</a></li>
				<li class="mb-2"><a href="javascript:void(0)">Хатчӯбҳо</a></li>
				<li class="mb-2"><a href="javascript:void(0)">Таърихи ҷустуҷӯ</a></li>
				<li class="mb-2"><a href="javascript:void(0)">Избранный</a></li>
				<li class="mb-2"><a href="javascript:void(0)">Карзина</a></li>
				<li class="mb-2"><a href="javascript:void(0)">О нас</a></li>
			  </ul>
			</div>
			<div class="col-6 col-lg-4 mb-3 text-center">
			  <a href="javascript:void(0)" style="text-decoration: none;"><h1>Луғати тафсирӣ</h1></a>
			 </div>
			<div class="col-6 col-lg-4 mb-3 text-center">
			  <h5>Тамос</h5>
			  <ul class="list-unstyled">
				<li class="mb-2"><a href="javascript:void(0)"><a href="#"><i class="fab fa-telegram m-1"></i></a><a href="#"><i class="fab fa-whatsapp m-1"></i></a><a href="#"><i class="fab fa-viber m-1"></i></a></li>
				<li class="mb-2"><a href="javascript:void(0)">Тамос гиред</a></li>
				<li class="mb-2"><a href="javascript:void(0)">Саволҳо</a></li>
				</ul>
			</div>
		  </div>
		</div>
	  </footer>
	  <script>

	  </script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>