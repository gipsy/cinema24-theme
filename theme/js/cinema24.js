/*
 * cinema24 JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {
		// Build movie poster slider (bootstrap carousel)
		// function buildMoviePosterSlider( data ) {
		// 	let
		// }
		const assetUrl = "https://image.tmdb.org/t/p/w300"
		const movieItem = ({ title, overview, poster_path }, index) => `
          <div class="carousel-item ${!index ? 'active' : ''}">
            <div class="col-md-3">
              <div class="card">
                <div class="card-img">
                  <img class="w-100" src="${assetUrl}${poster_path}" class="img-fluid">
                </div>
                <div class="card-body">
                  <h5 class="card-title">${title}</h5>
                  <p class="card-text">${overview}</p>
                </div>
              </div>
            </div>
          </div>
		`;

		// Get movies data
		const moviesAPI = "https://api.themoviedb.org/3/trending/movie/day?api_key=19cc2d55ec287216302aaf07144d9835";
		const $carouselWrapper = $('#carouselNewFilms .carousel-inner');
		$.getJSON( moviesAPI, {
			tags: "mount rainier",
			tagmode: "any",
			format: "json"
		})
		.done(function( data ) {
			$carouselWrapper.html(data.results.map(movieItem).join(''));

			// Init Carousel
			const $carouselNewFilms = $('#carouselNewFilms');
			const carousel = new bootstrap.Carousel($carouselNewFilms, {
				interval: 2000,
				wrap: true,
				ride: 'carousel'
			})

			let items = document.querySelectorAll('.carousel-new-films .carousel-item')

			items.forEach((el) => {
				const minPerSlide = 4
				let next = el.nextElementSibling
				for (var i=1; i<minPerSlide; i++) {
					if (!next) {
						// wrap carousel by using first child
						next = items[0]
					}
					let cloneChild = next.cloneNode(true)
					el.appendChild(cloneChild.children[0])
					next = next.nextElementSibling
				}
			})

		});

		// Get latest news
		const settings = {
			"async": true,
			"crossDomain": true,
			"url": "https://movies-news1.p.rapidapi.com/movies_news/recent",
			"method": "GET",
			"headers": {
				"X-RapidAPI-Key": "fgCRpcDKd8mshXZqMddO2HPEcKLNp1pjF4ajsnlEVDFaCJQdO9",
				"X-RapidAPI-Host": "movies-news1.p.rapidapi.com"
			}
		};

		const latestNewsItem = ({image, description, link, title}, index) => `
			<li class="card mb-3 latest-news--item">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="${image}" class="img-fluid rounded-start" alt="${title}"/>
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><a class="latest-news--link" href="${link}">${title}</a></h5>
							<p class="card-text">${description}</p>
						</div>
					</div>
				</div>
			</li>
		`
		const $latestNewsWrapper = $('#latestNewsSection .latest-news--list')
		$.ajax(settings).done(function (response) {
		    const threeLatestNews = response.slice(0,3)
			$latestNewsWrapper.html(threeLatestNews.map(latestNewsItem).join(''));
		});

	});

}(jQuery));
