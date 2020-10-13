import Rupiaf from '../../node_modules/rupiaf.js/dist/scripts/rupiaf.common.js';

function getAmounts() {
    return new Promise( (resolve, reject) => {
        let amountElements = document.querySelectorAll('.amount');
        if (amountElements.length !== 0)
        {
            resolve(amountElements);
        }
        reject('Cannot find amount elements');
    })
}

getAmounts()
    .then(elements => {
        elements.forEach(function(element) {
            element.textContent = new Rupiaf(element.textContent).convert();
        })
    })
