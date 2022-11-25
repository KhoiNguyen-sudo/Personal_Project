const modal = document.querySelector(".modal");
const openModalBtn = document.querySelector(".open-modal-btn");
const iconCloseModal = document.querySelector(".modal__header i");
const buttonCloseModal = document.querySelector(".modal__footer__button");

function toggleModal() {
  modal.classList.toggle("hide");
}

openModalBtn.addEventListener("click", toggleModal);
iconCloseModal.addEventListener("click", toggleModal);
buttonCloseModal.addEventListener("click", toggleModal);

// nhấn ra ngoài màn hình để tắt 
// modal.addEventListener("click", (e) => {
//   if (e.target == e.currentTarget) toggleModal();
// });
