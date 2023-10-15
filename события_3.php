<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<title>События</title>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link href="//netdna.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel='stylesheet' href='соб.css'>
	</head>
	<body>
	<h4>Новости недели</h4>
	<h5>Здесь, вы можете посмотреть действующие события</h5>
	<div class="container">
		<section class="border-bottom pb-4 mb-5">
			<div class="row gx-5">
				<div class="col-md-6 mb-4">
					<div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
					  <img src="noden_1.jpg" class="img-fluid" />
					  <a href="#!">
					<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
					  </a>
					</div>	
				</div>

				<div class="col-md-6 mb-4">
					<span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3" style='color:white;'>Новость дня</span>
					<h6>Поговорим об асинхронности</h6>
					<p class="text">
					Асинхронность используется в случаях, когда стек рмскует быть переполненным надолго из-за чего время ожидания запроса увеличивается. Чтобы не ждать выполнение одной долгой операции асинхронность позволяет выполнять параллельно с первой другие операции. Но как следукт правильно использовать асинхронность и какие есть подводные камени? Об этом поговорим на лекции.
					</p>
					<a style='color:white' class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Узнать больше</a>
				</div>
			</div>
		</section>
		
		<h4>Предстоящие новости</h4>
		<h5>Здесь, вы можете посмотреть предстоящие события</h5>
		<!--шапка 1-->
		<section>
			<div class="row gx-lg-5">
				<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
					<div> 
						<div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
						data-mdb-ripple-color="light">
							<img src="noden_2.jpg" class="img-fluid" />
							<a href="#!">
							  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
							</a>
						</div>
          <div class="row mb-3"><u>1 января 2024</u></div>

          <a href="" class="text-dark">
            <h3>Тайны мира IT</h3>
            <p class="text">
			Какие заблуждения до сих пор "витают" в мире IT? И, наоборот, какие новшества затронули эту сферу? Об этом поговорим на лекции.
            </p>
          </a>
          <hr />
          <!---Новость 1 -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_33.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Hollywood Sign on The Hill" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Язык программирования R</strong></p>
                <p>
                  <u>7 января 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- Новость 2 -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_4.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Palm Springs Road" />
              </div>
              <div class="col-9">
                <p class="mb-2"><strong>Визуал или серверная часть?Что выберешь ты?</strong></p>
                <p>
                  <u>10 января 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- Новость 3-->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_5.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Los Angeles Skyscrapers" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Почему программирование это важно?</strong></p>
                <p>
                  <u>14 января 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- Новость 4-->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_6.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Skyscrapers" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Твое первое программирование</strong></p>
                <p>
                  <u>16 января 2024</u>
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
		<!--2 шапка-->
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div>
          <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
            data-mdb-ripple-color="light">
            <img src="noden_7.jpg" class="img-fluid"
              alt="Brooklyn Bridge" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="row mb-3"><u>2 февраля 2024</u><br></div>

          <a href="" class="text-dark">
            <h3>Чудеса 3D-графики</h3>
            <p class='text'>
			Трехмерное пространство позволяет придавать больше реалистичности объектам и различным сценам. Анимация,конструктор объекта и его пошаговая реализация - все 3D-графика.Какие программы позволят ее реализовать? Об этом поговорим на лекции.
            </p>
          </a>
          <hr />

          <!--Новость 1-->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_88.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Five Lands National Park" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Как верстать сайты правильно?</strong></p>
                <p>
                  <u>12 февраля 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- Новость 2 -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_9.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Paris - Eiffel Tower" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Тенденции мобильной разработки</strong></p>
                <p>
                  <u>15 февраля 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_10.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Louvre" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Docker и Kubernetes</strong></p>
                <p>
                  <u>18 февраля 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_11.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Times Square" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Коммиты и ветки</strong></p>
                <p>
                  <u>22 февраля 2024</u>
                </p>
              </div>
            </div>
          </a>
        </div>
	</div>
		<!--3 шапка-->
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div>
          <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
            data-mdb-ripple-color="light">
            <img src="noden_12.jpg" class="img-fluid"
              alt="Golden Gate National Recreation Area" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
            <div class="row mb-3"><u>2 марта 2024</u><br></div>

          <a href="" class="text-dark">
            <h3>PHP</h3>
            <p class='text'>
			Кто помогает создавать динамику на сайте? С помощью кого мы можем проходить авторизацию или всевозможные тесты? Конечно, это не заслуга не только PHP,но он стоит отдельного внимания.Об этом поговорим на лекции.
            </p>
          </a>
          <hr />

          <!-- 1 новость-->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_13.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Brooklyn Bridge" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Язык программирования Perl</strong></p>
                <p>
                  <u>4 марта 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_14.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Hamilton Park" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Как не волноваться на собеседовании?</strong></p>
                <p>
                  <u>8 марта 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_88.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Perdana Botanical Garden Kuala Lumpur" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Мобильная разработка: что нового?</strong></p>
                <p>
                  <u>12 марта 2024</u>
                </p>
              </div>
            </div>
          </a>

          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="noden_16.jpg"
                  class="img-fluid shadow-1-strong rounded" alt="Perdana Botanical Garden" />
              </div>

              <div class="col-9">
                <p class="mb-2"><strong>Как и где публиковать свои проекты?</strong></p>
                <p>
                  <u>22 марта 2024</u>
                </p>
              </div>
            </div>
          </a>
        </div>
	 </div>
      </div>
    </div>
  </section>
  <nav class="my-4" aria-label="...">
    <ul class="pagination pagination-circle justify-content-center">
      <li class="page-item">
        <a class="page-link" href="события_2.php" tabindex="-1" aria-disabled="true">Назад</a>
      </li>
	  <li class="page-item"><a class="page-link" href="события.php">1</a></li>
      <li class="page-item"><a class="page-link" href="события_2.php">2</a></li>
	  <li class="page-item active" aria-current="page">
        <a class="page-link" href="#" style='background-color:#ffa742;color:#2d2d2d;'>3 <span class="sr-only">(current)</span></a>
      </li>
      <li class="page-item">
        <a class="page-link" href="события.php">Следующая</a>
      </li>
    </ul>
  </nav>

  <!-- Уведомление -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Уведомление</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style='text-align:justify;'>
	 Выполнение задач может занимать много процессорного времени на обработку , потому если задачи выполняются синхронно, то все больше пользователей могут покинуть ваш веб-сайт. Чтобы сократить время на обработку данных используется асинхронный процесс. Он обозначается через ключевые слова async и await, который указывает с какого действия надо снять блокировку. То есть этот процесс будет выполняться наряду с другими, стоящими после него.<br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style='background-color:#2d2d2d;color:#ffffff' >Закрыть</button>
      </div>
    </div>
  </div>
</div>
<div style="text-align:center;margin-bottom:3%;margin-top:3%;"><a class="back" onclick="javascript:history.back(); return false;">Назад</a></div>
<script>
var details = document.querySelectorAll("details");
for(i=0;i<details.length;i++) {
  details[i].addEventListener("toggle", accordion);
}
function accordion(event) {
  if (!event.target.open) return;
  var details = event.target.parentNode.children;
  for(i=0;i<details.length;i++) {
    if (details[i].tagName != "DETAILS" || !details[i].hasAttribute('open') || event.target == details[i]) continue;
    details[i].removeAttribute("open");
  }
}
</script>
	</body>
</html>