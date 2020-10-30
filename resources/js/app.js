// You can specify which plugins you need
import 'bootstrap';

function getNavLinks() {
    return new Promise((resolve, reject) => {
        let elements = document.querySelectorAll('.nav-link');
        if (elements.length != 0) {
            resolve(elements)
        }
        reject(new Error('Cannot find nav link elements'));
    });
}

getNavLinks()
    .then(elements => {
        elements.forEach(element => {
            if (element.pathname === window.location.pathname && !element.hasAttribute('data-toggle'))
            {
                element.classList.add('active')
            }
        })
    })
    .catch(err => console.log(err));
