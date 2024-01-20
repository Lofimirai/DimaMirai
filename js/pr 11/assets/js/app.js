function closemodle (loseModal,modalGallery) {
    loseModal.addEventListener("click", () => {
    modalGallery.classList.remove("is-active");
    document.querySelector("html").classList.remove("is-clipped");
  });
}
function initCloseModal() {
    var modalGallery = document.querySelector(".modal-gallery");
    var closeModal = document.querySelector(".modal-gallery .modal-close");
    var closeModa = document.querySelector(".modal-gallery .modal-background");
    closemodle(closeModal,modalGallery);
    closemodle(closeModa,modalGallery);
  }
function init() {
    initCloseModal();
  }
  function initImagesClick(images) {
    // Добавляем обработчик события клика на каждое изображение
    for (let i = 0; i < images.length; i++) {
        images[i].addEventListener('click', function(event) {
            const image = event.target.src;
            const modal = document.querySelector('.modal-gallery');
            if (modal !== null) {
                modal.querySelector('img').src = image;
                modal.classList.add('is-active');
                document.querySelector('html').classList.add('is-clipped');
                const clickedImage = event.target;
                if (clickedImage.getAttribute('alt')) {
                    modal.querySelector('.image-subtitle').textContent = clickedImage.getAttribute('alt');
                    modal.querySelector('img').setAttribute('alt', clickedImage.getAttribute('alt'));
                    modal.querySelector('.image-subtitle').classList.remove('is-hidden');
                } else {
                    modal.querySelector('.image-subtitle').classList.add('is-hidden');
                    modal.querySelector('img').setAttribute('alt', '');
                }
            }
        });
    }
}

function addNewBlocks(images) {
  // Проверяем, осталось ли до конца страницы менее 15%
  if ((document.documentElement.scrollTop + document.documentElement.clientHeight) / document.documentElement.scrollHeight * 100 > 85) {
    // Добавляем новые блоки в конец страницы
    for (let i = 0; i < 15; i++) {
      const columns = document.querySelector('.tile-content .columns');
      const template = document.querySelector('#tile-image').content.cloneNode(true);
      columns.append(template);
      const addedBlock = columns.querySelector('div:last-child');
      const templateImage = images[Math.floor(Math.random() * images.length)];
      addedBlock.querySelector('img').src = templateImage.src;
      addedBlock.querySelector('img').setAttribute('alt', templateImage.getAttribute('alt'));
      const randomImage = images[Math.floor(Math.random() * images.length)];
      addedBlock.setAttribute('class', randomImage.closest('div').getAttribute('class'));
      initImagesClick([addedBlock.querySelector('img')]);
      console.log('Добавлено изображение');
    }
  }
}
function init() {
  // Получаем все изображения на странице
  const images = document.querySelectorAll('img');
  initCloseModal();
  initImagesClick(images); // Передаем амассив картинок....
  addNewBlocks(images);
  document.addEventListener('scroll', function () {
    addNewBlocks(images);
  });
}
init();