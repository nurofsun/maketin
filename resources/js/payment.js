import Rupiaf from '../../node_modules/rupiaf.js/dist/scripts/rupiaf.common';

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

function convertInputAmountField() {
    return new Promise((resolve, reject) => {
        let field = document.querySelector('.amount-input');
        if (field) {
            resolve(field)
        }
        reject(new Error('Cannot find field amount.'))
    })
}

convertInputAmountField()
    .then(element => {
        element.addEventListener('keyup', function(event) {
            let rupiah = new Rupiaf(event.target.value);
            event.target.value = rupiah.convert();
        });
    })
    .catch(err => {
        console.log(err)
    });


function convertToNumberAmountField() {
    return new Promise((resolve, reject) => {
        let formPayment = document.querySelector('#newPaymentModal');
        let amountInput = document.querySelector('.amount-input');

        if (formPayment && amountInput) {
            resolve({formPayment, amountInput})
        }
        reject(new Error('Cannot find form element.'));
    })
}

convertToNumberAmountField()
    .then(elements => {
        elements.formPayment.addEventListener('submit', function() {
            elements.amountInput.value = new Rupiaf(elements.amountInput.value).clean();
        });
    })
    .catch(err => console.log(err));
