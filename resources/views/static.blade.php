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
        .chart-container {
    width: 50%;
    height: 50%;
    margin: auto;
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
      <div class="card chart-container">
    <canvas id="chart"></canvas>
  </div>
  <script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
<script>
      const ctx = document.getElementById("chart").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Веб-дизайн", "Манбаи додахо", "Шабакаи компютери", "Барномарези"],
          datasets: [{
            label: 'Термины',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });
</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      

    </body>
<html>