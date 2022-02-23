const myModal = new bootstrap.Modal(document.getElementById("myModal"));
let action = "new";

const mostrarModal = () => {
    myModal.show();
};
const ocultarModal = () => {
    myModal.hide();
};
const closeModalBtns = document.querySelectorAll("[data-bs-dismiss]");
closeModalBtns.forEach((btn) => {
    btn.addEventListener("click", ocultarModal);
});

document.querySelector("#newArbitratorBtn").addEventListener("click", () => {
    action = "new";
    inputName.value = "";
    modalTitle.innerHTML = "Crear Árbitro";
    submitBtn.innerHTML = "Guardar";
    mostrarModal();
});

const createArbitrator = (e) => {
    e.preventDefault();
    const nameValue = inputName.value;
    if (!nameValue) {
        Swal.fire("Bien Hecho!", "Ingrese un nombre válido", "success");
        return;
    }

    if (action == "edit") {
        return Livewire.emit("updateArbitrators", nameValue);
    }

    Livewire.emit("store", nameValue);
};

document.querySelector("#myForm").addEventListener("submit", createArbitrator);

Livewire.on("edit", (name) => {
    action = "edit";
    inputName.value = name;
    modalTitle.innerHTML = "Editar Árbitro";
    submitBtn.innerHTML = "Actualizar";
    mostrarModal();
});

Livewire.on("stored", () => {
    Swal.fire("Bien Hecho!", "Acción realizada correctamente", "success");
    ocultarModal();
});

Livewire.on("updated", () => {
    Swal.fire("Bien Hecho!", "Acción realizada correctamente", "success");
    ocultarModal();
});

Livewire.on("updatedAllState", () => {
    Swal.fire(
        "Bien Hecho!",
        "Todos los árbitros ahora están disponibles",
        "success"
    );
    ocultarModal();
});

Livewire.on("deleted", () => {
    Swal.fire("Bien Hecho!", "Árbitro Eliminado", "success");
    ocultarModal();
});
