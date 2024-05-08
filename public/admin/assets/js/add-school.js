// function addInfrastructureField() {
//     const infrastructuresDiv = document.getElementById('infrastructures');
//     const newField = document.createElement('div');
//     newField.classList.add('card', 'mb-3');

//     newField.innerHTML = `
//         <div class="card-header bg-primary ">
//             <h5 class="card-title text-white">Catégorie : <span class="category-value"></span></h5>
//             <button type="button" class="btn btn-sm btn-danger float-end" onclick="removeInfrastructure(this)">Supprimer</button>
//             <button type="button" class="btn btn-sm btn-secondary float-end" onclick="addInfrastructureItem(this)">Ajouter un item</button>
//         </div>
//         <div class="card-body">
//             <div class="mb-2">
//                 <label for="category">Catégorie</label>
//                 <select name="category[]" class="form-control" onchange="updateCategoryValue(this)">
//                     <option value="">Choisir une catégorie</option>
//                     <option value="Bâtiment">Bâtiment</option>
//                     <option value="TIC">TIC</option>
//                     <option value="Restauration">Restauration</option>
//                     <option value="Installations Sportives">Installations Sportives</option>
//                 </select>
//             </div>
//             <div class="mb-2">
//                 <label for="items">Items</label>
//                 <input type="text" name="items[]" class="form-control" placeholder="Entrez les éléments">
//             </div>
//         </div>
//     `;

//     infrastructuresDiv.appendChild(newField);
// }

// function addInfrastructureItem(button) {
//     const cardBody = button.parentElement.nextElementSibling;
//     const itemsDiv = document.createElement('div');
//     itemsDiv.classList.add('mb-2');

//     itemsDiv.innerHTML = `
//         <input type="text" name="items[]" class="form-control mt-2" placeholder="Entrez un élément">
//         <button type="button" class="btn btn-sm btn-danger mt-2" onclick="removeItem(this)">Supprimer</button>
//     `;

//     cardBody.appendChild(itemsDiv);
// }

// function removeItem(button) {
//     button.parentElement.remove();
// }

// function updateCategoryValue(selectElement) {
//     const cardHeader = selectElement.closest('.card').querySelector('.card-header .category-value');
//     if (cardHeader) {
//         cardHeader.textContent = selectElement.value;
//     }
// }

// function removeInfrastructure(button) {
//     button.closest('.card').remove();
// }


function addInfrastructureField() {
    const infrastructuresDiv = document.getElementById('infrastructures');
    const newField = document.createElement('div');
    newField.classList.add('card', 'mb-3');

    newField.innerHTML = `
    <div class="card-header bg-primary ">
        <h5 class="card-title text-white">Catégorie : <span class="category-value"></span></h5>
        <button type="button" class="btn btn-sm btn-danger float-end" onclick="removeInfrastructure(this)">Supprimer</button>
        <button type="button" class="btn btn-sm btn-secondary float-end" onclick="addInfrastructureItem(this)">Ajouter un item</button>
    </div>
    <div class="card-body">
        <div class="mb-2">
            <label for="category">Catégorie</label>
            <select class="form-control category-select" onchange="updateCategoryValue(this)">
                <option value="">Choisir une catégorie</option>
                <option value="Bâtiment">Bâtiment</option>
                <option value="TIC">TIC</option>
                <option value="Restauration">Restauration</option>
                <option value="Installations Sportives">Installations Sportives</option>
            </select>
        </div>
        <div class="items-container"></div>
        <input type="hidden" class="category-input" name="infras[][category]">
    </div>
    `;

    infrastructuresDiv.appendChild(newField);
}

function addInfrastructureItem(button) {
    const cardBody = button.parentElement.nextElementSibling;
    const itemsContainer = cardBody.querySelector('.items-container');
    const newItem = document.createElement('div');
    newItem.classList.add('mb-2');

    newItem.innerHTML = `
        <input type="text" class="form-control mt-2 items-input" placeholder="Entrez un élément" name="infras[][items]">
        <button type="button" class="btn btn-sm btn-danger mt-2" onclick="removeItem(this)">Supprimer</button>
    `;

    itemsContainer.appendChild(newItem);

    // **Update infrasData object**
    const category = cardBody.querySelector('.category-select').value;
    const itemText = newItem.querySelector('.items-input').value;

    // Ensure infrasData exists and create it if necessary
    if (!infrasData) {
        infrasData = {};
    }

    // Access the items array for the specific category (create it if absent)
    if (!infrasData[category]) {
    //   infrasData[category] = { items: [] };
        infrasData[category] = {
            category: category,
            items: []
        }
    }

    // Push the item text to the category's items array
    // infrasData[category].items.push(itemText);
    infrasData.items.push(itemText);

    console.log('=============infras=======================');
    console.log(infrasData);
    console.log('====================================');
  }





function removeItem(button) {
    const itemToRemove = button.parentElement.querySelector('.items-input').value;
    const category = button.closest('.card').querySelector('.category-select').value;

    if (infrasData[category]) {
        infrasData[category] = infrasData[category].filter(item => item !== itemToRemove);
    }

    button.parentElement.remove();
}

function updateCategoryValue(selectElement) {
    const cardHeader = selectElement.closest('.card').querySelector('.card-header .category-value');
    const categoryInput = selectElement.closest('.card').querySelector('.category-input');

    if (cardHeader && categoryInput) {
        cardHeader.textContent = selectElement.value;
        categoryInput.value = selectElement.value;
    }
}

function removeInfrastructure(button) {
    button.closest('.card').remove();
}

// Global object to store infrastructure data
let infrasData = {};

function submitForm() {
    const jsonData = JSON.stringify(infrasData); // Convert infrasData object to JSON
    // ... (Send the JSON string to the server via the appropriate request object)
}


