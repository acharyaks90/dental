import { teethForm } from "./renderForm.js";

const openModalButtons = document.querySelectorAll('[data-modal-target]');
const closeModalButtons = document.querySelectorAll('[data-close-button]');
const overlay = document.querySelector('#overlay');
let modelNumber = 1;

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal1 = document.querySelector(button.dataset.modalTarget)
    openModal(modal1)
  })
});

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal1.active');
    modals.forEach(modal1 => {
    closeModal(modal1)
  })
});



closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal1 = button.closest('.modal1')
    closeModal(modal1)
  })
})

function openModal(modal1) {
  if (modal1 == null) return
  modal1.classList.add('active');
  const addTeethButton = document.querySelector('.add-teeth');
  addTeethButton.addEventListener("click", () => {
    document.querySelector('.modal1-body').insertAdjacentHTML("beforeend", teethForm(modelNumber+=1));
    });
    const remveTeethButton = document.querySelector('.remove-teeth');
    remveTeethButton.addEventListener("click", () => {
      document.querySelector('.modal1-body').insertAdjacentHTML("beforeend", teethForm(modelNumber-=1));
      });
  overlay.classList.add('active')
}

function closeModal(modal1) {
  if (modal1 == null) return
  modal1.classList.remove('active')
  overlay.classList.remove('active')
}

