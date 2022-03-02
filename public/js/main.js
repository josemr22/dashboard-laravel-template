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
    const descriptionValue = inputDescription.value;
    const file = inputImage.files[0];
    if (!nameValue) {
        Swal.fire("Ups!", "Ingrese un nombre válido", "error");
        return;
    }
    if (file) {
        const fileReader = new FileReader();
        fileReader.onload = (arg) => {
            const imgUrl = arg.currentTarget.result;
            const data = {
                name: nameValue,
                description: descriptionValue,
                image: imgUrl,
            };
            if (action == "edit") {
                return Livewire.emit("updateArbitrators", JSON.stringify(data));
            }
            Livewire.emit("store", JSON.stringify(data));
        };
        fileReader.readAsDataURL(file);
    } else {
        const data = {
            name: nameValue,
            description: descriptionValue,
        };
        if (action == "edit") {
            return Livewire.emit("updateArbitrators", JSON.stringify(data));
        }
        Livewire.emit("store", JSON.stringify(data));
    }
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

// 9
// 6
// 1.3
// 14
// 8
// 8
// 12
// 14
// 19.50
// 14.00
// 12
// 8.00
// 8.00
// 4.00
// 8
// 16
// 7.5
// 10.2
// 3
// 6
// 2.3
// 14
// 8.5
// 2
// 14
// 8
// 11
// 8
// 4
// 11
// 8
// 8
// 8
// 6
// 8
// 15
// 18
// 20
// 4
// 90
// 6
// 11
// 8
// 6
// 8
// 11
// 8
