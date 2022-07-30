<style>
	.curtain {
		background-color: #6C757D;
	}
	.col-2 {
		border: 1px solid #fff;
		border-radius: 4px;
		margin-right: 2px;
	}
	.btn-group {
		padding: 0;
		margin: 0;
		background-color: #6C757D;
	}
	.btn-group button {
		width: 100%;
	}
	.btn-group a {
		padding: 0;
	}
	.dropdown-menu {
		min-width: 100%;
		padding: 1em;
	}
	.bottom {
		margin-top: 10px;
	}
	.dropdown-menu .btn {
		margin-bottom: 2px;
	}
/*Matherial Button*/
.btn {
	position: relative;
	overflow: hidden;
}

.btn:hover::before {
	animation: ripple 1s ease;
}

.btn::before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(255, 255, 255, 0.7);
	border-radius: 50%;
	transform: scale(0);
}

@keyframes ripple {
	form {
		transform: scale(0);
		opacity: 1;
	}
	to {
		transform: scale(3);
		opacity: 0;
	}
}
/*matherial button*/
</style>
<div class="box5 curtain">
	<div class="row">
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Автоматы
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/automaty/autdin/stack1"><button class="btn btn-secondary">Евростандарт(на динрейку)</button></a>
				<a class="dropdown-item" href="/automaty/autprom/euro/"><button class="btn btn-secondary">Промышленные</button></a>
				<a class="dropdown-item" href="/automaty/uzo/"><button class="btn btn-secondary">УЗО и дифавтоматы</button></a>
				<a class="dropdown-item" href="/automaty/zaschity/"><button class="btn btn-secondary">Защиты двигателей</button></a>
				<a class="dropdown-item" href="/automaty/shina/"><button class="btn btn-secondary">Шина соединительная</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Светильники
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/svetotechnika/e27/plastic/"><button class="btn btn-secondary">Настенные под E27</button></a>
				<a class="dropdown-item" href="/svetotechnika/podvesnye-e27/"><button class="btn btn-secondary">Подвесные под лампу накаливания</button></a>
				<a class="dropdown-item" href="/svetotechnika/kvadrat-ip20/"><button class="btn btn-secondary">Квадрат IP20</button></a>
				<a class="dropdown-item" href="/svetotechnika/krug-ip20/"><button class="btn btn-secondary">Круг IP20</button></a>
				<a class="dropdown-item" href="/svetotechnika/svetilniki-ip-54-65/"><button class="btn btn-secondary">Светильники (IP54,65)</button></a>
				<a class="dropdown-item" href="/svetotechnika/lineynye-led/"><button class="btn btn-secondary">Светильники Линейные LED</button></a>
				<a class="dropdown-item" href="/svetotechnika/nastenno-potolochnye/krug/"><button class="btn btn-secondary">Настенно-Потолочные LED</button></a>
				<a class="dropdown-item" href="/svetotechnika/svetilniky-podvesnye/"><button class="btn btn-secondary">Светильники Подвесные</button></a>
				<a class="dropdown-item" href="/svetotechnika/consolnye/svetilniky/"><button class="btn btn-secondary">Светильники Консольные</button></a>
				<a class="dropdown-item" href="/svetotechnika/nastolnye/"><button class="btn btn-secondary">Настольные лампы</button></a>
				<a class="dropdown-item" href="/svetotechnika/panely-600-600/"><button class="btn btn-secondary">Панели 600x600 LED</button></a>
				<a class="dropdown-item" href="/svetotechnika/projectors/"><button class="btn btn-secondary">Прожекторы</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/nakonechniky/sylovye/">
				<button type="button" class="btn btn-secondary shadow-none">
					Наконечники
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/korobky-montazhnye/">
				<button type="button" class="btn btn-secondary shadow-none">
					Коробки монтажные
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Розетки Выключатели
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/rozetky/nakladnye/"><button class="btn btn-secondary">Накладные</button></a>
				<a class="dropdown-item" href="/rozetky/vstraivaemye/main/"><button class="btn btn-secondary">Встраиваемые</button></a>
				<a class="dropdown-item" href="/rozetky/ulichnye/"><button class="btn btn-secondary">Уличные</button></a>
				<a class="dropdown-item" href="/rozetky/kauchuk/"><button class="btn btn-secondary">Каучук</button></a>
				<a class="dropdown-item" href="/rozetky/vilky/"><button class="btn btn-secondary">Вилки</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				ТЭНЫ
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/teny/bloky-ten/euro/"><button class="btn btn-secondary">Блоки ТЭН</button></a>
				<a class="dropdown-item" href="/teny/vozd-gibkye/"><button class="btn btn-secondary">Воздушные гибкие 6 и 8</button></a>
				<a class="dropdown-item" href="/teny/13/"><button class="btn btn-secondary">Ø13</button></a>
				<a class="dropdown-item" href="/teny/tenr/"><button class="btn btn-secondary">Оребренные для калориферов</button></a>
				<a class="dropdown-item" href="/teny/dlya-boylerov/"><button class="btn btn-secondary">Для бойлеров</button></a>
				<a class="dropdown-item" href="/teny/distilyatornye/"><button class="btn btn-secondary">Дистилляторные</button></a>
				<a class="dropdown-item" href="/teny/dlya-radiatorov/"><button class="btn btn-secondary">Для радиаторов</button></a>
				<a class="dropdown-item" href="/teny/dlya-pet-pechey/"><button class="btn btn-secondary">Для ПЭТ-печей</button></a>
				<a class="dropdown-item" href="/teny/kpe/"><button class="btn btn-secondary">КПЭ-тэны</button></a>
				<a class="dropdown-item" href="/teny/dlya-stir-mashin/"><button class="btn btn-secondary">Для стиральных машин</button></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Пускатели Контакторы
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/puskately-contactory/puskately/bez-korpusa/"><button class="btn btn-secondary">Пускатели IEK АСКО</button></a>
				<a class="dropdown-item" href="/puskately-contactory/modulnye/"><button class="btn btn-secondary">Модульные</button></a>
				<a class="dropdown-item" href="/puskately-contactory/mini/"><button class="btn btn-secondary">Мини</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Лампы
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/electrolampy/g9-gu5/"><button class="btn btn-secondary">G9 GU5.3 GU10</button></a>
				<a class="dropdown-item" href="/electrolampy/led/"><button class="btn btn-secondary">LED-Е27/E40</button></a>
				<a class="dropdown-item" href="/electrolampy/decor/decor/"><button class="btn btn-secondary">LED декоративные</button></a>
				<a class="dropdown-item" href="/electrolampy/t8-led/"><button class="btn btn-secondary">Лампы Т8 LED</button></a>
				<a class="dropdown-item" href="/electrolampy/nakalivanya/"><button class="btn btn-secondary">Лампы накаливания</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/gilzy/aluminyevye/">
				<button type="button" class="btn btn-secondary shadow-none">
					Гильзы
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Боксы пластиковые
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/boxes-plastic/avtomaty/negermet/"><button class="btn btn-secondary">Под автоматы</button></a>
				<a class="dropdown-item" href="/boxes-plastic/schetchiky/"><button class="btn btn-secondary">Для счетчиков</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/kolodky-udlinnitely/udlinnitely/">
				<button type="button" class="btn btn-secondary shadow-none">Колодки Удлиннители</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/dvigately/">
				<button type="button" class="btn btn-secondary shadow-none">Двигатели</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				ПМЛ
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/pml/pml1/"><button class="btn btn-secondary">ПМЛ-1</button></a>
				<a class="dropdown-item" href="/pml/pml2/"><button class="btn btn-secondary">ПМЛ-2</button></a>
				<a class="dropdown-item" href="/pml/pml3/"><button class="btn btn-secondary">ПМЛ-3</button></a>
				<a class="dropdown-item" href="/pml/pml4/"><button class="btn btn-secondary">ПМЛ-4</button></a>
				<a class="dropdown-item" href="/pml/pml5678/"><button class="btn btn-secondary">ПМЛ-5-6-7-8</button></a>
				<a class="dropdown-item" href="/pml/pristavky/"><button class="btn btn-secondary">Приставки</button></a>
			</div>
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/signal-armatura/">
				<button type="button" class="btn btn-secondary shadow-none">Сигнальная арматура</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/klemnye-kolodky/">
				<button type="button" class="btn btn-secondary shadow-none">
					Клеммные колодки
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Шкафы металлические
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/boxes-metall/avtomaty/"><button class="btn btn-secondary">Под автоматы</button></a>
				<a class="dropdown-item" href="/boxes-metall/schetchiky/"><button class="btn btn-secondary">Для счетчиков</button></a>
				<a class="dropdown-item" href="/boxes-metall/montazh/"><button class="btn btn-secondary">Под монтаж (пустые)</button></a>
			</div>
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/razjemy-silovye/">
				<button type="button" class="btn btn-secondary shadow-none">
					Разъемы силовые
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/electroinstrument/">
				<button type="button" class="btn btn-secondary shadow-none">Электроинструмент</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-2 btn-group">
			<a class="white btn" href="/pme-pma/">
				<button type="button" class="btn btn-secondary shadow-none">
					ПМЕ-ПМА
				</button>
			</a>
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/datchiky-dvizhenya/">
				<button type="button" class="btn btn-secondary shadow-none">
					Датчики движения
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/izolenta/">
				<button type="button" class="btn btn-secondary shadow-none">
					Изолента
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Рубильники ЯРП
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/yaschiky/jarp/"><button class="btn btn-secondary">ЯРП</button></a>
				<a class="dropdown-item" href="/yaschiky/amex/"><button class="btn btn-secondary">Амекс</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Посты Кнопки
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/posty-knopky/euro/odinochnye/"><button class="btn btn-secondary">Евро</button></a>
				<a class="dropdown-item" href="/posty-knopky/gost/"><button class="btn btn-secondary">ГОСТ</button></a>
			</div>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/pribory/">
				<button type="button" class="btn btn-secondary shadow-none">Приборы</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-2 btn-group">
			<a class="white btn" href="/teplovoe-rele/">
				<button type="button" class="btn btn-secondary shadow-none">
					Тепловое реле
				</button>
			</a>
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/schetchiky/">
				<button type="button" class="btn btn-secondary shadow-none">Счетчики</button>
			</a>			
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/homuty/">
				<button type="button" class="btn btn-secondary shadow-none">Хомуты</button>
			</a>
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/korob-lotok/korob/">
				<button type="button" class="btn btn-secondary shadow-none">
					Короб Лоток
				</button>
			</a>
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/knopky/">
				<button type="button" class="btn btn-secondary shadow-none">Посты тельферные</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/batareyky/">
				<button type="button" class="btn btn-secondary shadow-none">
					Батарейки
				</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/pkp/">
				<button type="button" class="btn btn-secondary shadow-none">
					Пакетные перекл ПКП
				</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/transformatory/">
				<button type="button" class="btn btn-secondary shadow-none">
					Трансформаторы
				</button>
			</a>
		</div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/termousadka/">
				<button type="button" class="btn btn-secondary shadow-none">Термоусадка</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown">
			<a class="white btn" href="/armatura-sip/">
				<button type="button" class="btn btn-secondary shadow-none">Арматура для СИП</button>
			</a>
		</div>
		<div class="col-2 btn-group dropdown"></div>
		<div class="col-2 btn-group">
			<a class="white btn" href="/predohranitely/nizkovoltnye/">
				<button type="button" class="btn btn-secondary shadow-none">
					Предохранители
				</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-2 btn-group">
			<a class="white btn" href="/rele-promezhutochnoe/">
				<button type="button" class="btn btn-secondary shadow-none">
					Реле промежуточное
				</button>
			</a>
		</div>
		<div class="col-2 btn-group"></div>
		<div class="col-2 btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Крепеж
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="/krepezh/skoby/"><button class="btn btn-secondary">Скобы</button></a>
				<a class="dropdown-item" href="/krepezh/dlya-trub/"><button class="btn btn-secondary">Для труб</button></a>
				<a class="dropdown-item" href="/krepezh/bysrtyj-montazh/"><button class="btn btn-secondary">Быстрый монтаж</button></a>
			</div>
		</div>
		<div class="col-2 btn-group"></div>
		<div class="col-2 btn-group"></div>
		<div class="col-2 btn-group"></div>
	</div>
	<div class="row">
		<div class="col-2 btn-group">
			<a class="white btn" href="/rele-napryazhenija/">
				<button type="button" class="btn btn-secondary shadow-none">
					Реле напряжения
				</button>
			</a>
		</div>
		<div class="col-2 btn-group"></div>
		<div class="col-2 btn-group dropdown"></div>
		<div class="col-2 btn-group"></div>
		<div class="col-2 btn-group"></div>
		<div class="col-2 btn-group"></div>
	</div>
</div>