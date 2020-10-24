import Rupiaf from 'rupiafjs';

function convertTablePaymentAmount() {
    return new Promise((resolve, reject) => {
        let columnAmounts = document.querySelectorAll('#payments .amount');
        if (columnAmounts) {
            resolve(columnAmounts);
        }
        reject(new Error('Cannot find column amount.'));
    })
}

convertTablePaymentAmount()
    .then(elements => {
        elements.forEach(element => {
            let rupiah = new Rupiaf(element.textContent);
            element.textContent = rupiah.convert();
        })
    })
    .catch(error => console.log(error));

function convertInputAmountField(element) {
    return new Promise((resolve, reject) => {
        let field = document.querySelector(element);
        if (field) {
            resolve(field)
        }
        reject(new Error('Cannot find field amount.'))
    })
}

convertInputAmountField('.amount-input')
    .then(element => {
        element.value = new Rupiaf(element.value).convert()
        element.addEventListener('keyup', function(event) {
            let rupiah = new Rupiaf(event.target.value);
            event.target.value = rupiah.convert();
        });
    })
    .catch(err => {
        console.log(err)
    });



function convertToNumberAmountField(formElement, inputElement) {
    return new Promise((resolve, reject) => {
        let formPayment = document.querySelector(formElement);
        let amountInput = document.querySelector(inputElement);

        if (formPayment && amountInput) {
            resolve({formPayment, amountInput})
        }
        reject(new Error('Cannot find form element.'));
    })
}

convertToNumberAmountField('#newPaymentModal', '.amount-input')
    .then(element => {
        element.formPayment.addEventListener('submit', function() {
            element.amountInput.value = new Rupiaf(element.amountInput.value).clean();
        });
    })
    .catch(err => console.log(err));


let editPaymentModals = document.querySelectorAll('.edit-payment-modal')

for (let indexEditPaymentModal = 1; indexEditPaymentModal <= editPaymentModals.length; indexEditPaymentModal++) {
    convertInputAmountField(`.edit-amount-input-${indexEditPaymentModal}`)
        .then(element => {
            element.value = new Rupiaf(element.value).convert()
            element.addEventListener('keyup', function(event) {
                let rupiah = new Rupiaf(event.target.value);
                event.target.value = rupiah.convert();
            });
        })
        .catch(err => {
            console.log(err)
        });
    convertToNumberAmountField(`#editPaymentModal-${indexEditPaymentModal}`,`.edit-amount-input-${indexEditPaymentModal}`)
        .then(element => {
            element.formPayment.addEventListener('submit', function() {
                element.amountInput.value = new Rupiaf(element.amountInput.value).clean();
            });
        })
        .catch(err => console.log(err));
}

function getAmountColumn() {
    return new Promise((resolve, reject) => {
        let amountColumns = document.querySelectorAll('.amount');
        if (amountColumns) {
            resolve(amountColumns);
        }
        reject(new Error('Cannot find amount column'));
    })
}

getAmountColumn()
    .then(elements => {
        elements.forEach(element => {
            element.textContent = new Rupiaf(element.textContent).convert();
        })
    })
    .catch(err => console.log(err));
