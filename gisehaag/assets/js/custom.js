let projects = {};
let technologies = {};

// aprovecho que WP ya tiene JQuery por default y este las ajax.
(function ($) {
	$.ajax({
		url: projectsData.ajaxurl,
		method: 'POST',
		data: {
			"action": "gh_getProjects",
		},

		success: function (response) {
			projects = response.projects;
			technologies = response.technologies;
		},

		error: function (error) {
			console.log(error);
		}
	})
})(jQuery);

const openDetails = document.querySelectorAll('.icon-chevron-down');

openDetails.forEach((button) => {
	button.addEventListener('click', displayDetails);
})

function nameTechnologies() {
	for (let key in projects) {
		projects[key].technology = projects[key].technology.map(element => technologies[element.slug]);
	}
}

function displayDetails(event) {
	nameTechnologies();

	let moreInfoButton = event.currentTarget;
	let projectBox = moreInfoButton.closest('.project-item');
	let name = projectBox.dataset.name;
	let projectName = projects[name];

	let infoBox = document.createElement('div');
	infoBox.classList.add('more-info');
	projectBox.appendChild(infoBox);


	if (projectName) {
		moreInfoButton.classList.add('hidden');

		let projectTech = projects[name].technology;
		let icons = '';
		for (let i = 0; i < projectTech.length; i++) {
			for (let key in technologies) {
				if (projectTech[i].slug == key) {
					icons += `<span class="tech-icon" style="color: ${technologies[key].color}"><p>${technologies[key].svg}</p></span>`
				};
			}
		}

		let description = projects[name].description;
		let descriptionList = '';
		for (let i = 0; i < description.length; i++) {
			descriptionList += `<li>${description[i].description}</li>`;
		}

		let inspiration = '';
		if (projectName.inspirationURL && projectName.inspirationTitle) {
			inspiration = `<p>
				<span class="tooltip" data-title="inspiration">💡</span>
				<a class="inspiration-link" href="${projectName.inspirationURL}">${projectName.inspirationTitle}</a>
			</p>`;
		}

		infoBox.innerHTML += `
		<div class="wrapper">
			<p class="date">${projectName.date}</p>
			<div class="icons">${icons}</div>
			<div class="inspiration">${inspiration}</div>
			<ul class="desciptionList">${descriptionList}</ul>
		</div>`

		let hideInfoButton = document.createElement('span');
		hideInfoButton.classList.add('icon-chevron-up');
		infoBox.querySelector('.wrapper').appendChild(hideInfoButton);

		setTimeout(() => infoBox.classList.add('visible'), 200);

		hideInfoButton.addEventListener('click', () => {
			infoBox.classList.remove('visible');

			setTimeout(() => {
				projectBox.removeChild(infoBox);
				moreInfoButton.classList.remove('hidden');
			}, 1200);
		});
	}
}


