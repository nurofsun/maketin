import Rupiaf from '../../node_modules/rupiaf.js/dist/scripts/rupiaf.common';
function convertTablePaymentAmount() {
    return new Promise((resolve, reject) => {
        let columnAmounts = document.querySelectorAll('#payments .amount');
        if (columnAmounts) {
            resolve(columnAmounts);
        }
        reject(error)
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
