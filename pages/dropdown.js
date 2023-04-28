document.querySelectorAll('.dropdown').forEach(function(dropDownWrapper){
	

	const dropDownBtn = dropDownWrapper.querySelector('.dropdown-button');
	const dropDownList = dropDownWrapper.querySelector('.dropdown-list');
	const dropDownListItems = dropDownList.querySelectorAll('.dropdown-list-item');
	const dropDownInput = dropDownWrapper.querySelector('.dropdown-input-hidden');

	//Клік по списку. Розвернути - згрнути
	dropDownBtn.addEventListener('click', function(){
		dropDownList.classList.toggle("dropdown-list--visible");
		this.classList.add("dropdown-button--active")
	});

	//Вибір елемента зі списку
	dropDownListItems.forEach(function (listItem){
		listItem.addEventListener('click', function(e){
			e.stopPropagation();
			dropDownBtn.innerText = this.innerText;
			dropDownBtn.focus();
			dropDownInput.value = this.dataset.value;
			dropDownList.classList.remove('dropdown-list--visible');
		})
	})

	// Якщо здійснено клік за межами dropdown - сховати його
	document.addEventListener('click', function(e){
		if (e.target !==  dropDownBtn) {
			dropDownList.classList.remove("dropdown-list--visible");
			dropDownBtn.classList.remove("dropdown-button--active");
		}
	})

	//Якщо натичнуто Таб або Escape
	document.addEventListener('keydown', function(e){
		if (e.key === "Tab" || e.key === "Escape") {
			dropDownList.classList.remove("dropdown-list--visible");
			dropDownBtn.classList.remove("dropdown-button--active");
		}
	})

})