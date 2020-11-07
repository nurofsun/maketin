import Rupiaf from 'rupiafjs';

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


function getAllMonthPaymentHistory() {
    return new Promise((resolve, reject) => {
        if (window.allMonthPaymentHistory)
        {
            resolve(window.allMonthPaymentHistory);
        }
        reject(new Error('Cannot find payment history'));
    })
}

function statisticYearlyChart() {
    getAllMonthPaymentHistory()
        .then(data => {
            let chartContainer = d3.select('#payment-chart');

            let height = 300;

            let width = document.querySelector('#payment-chart').clientWidth;

            let margin = {
                top: 10,
                right: 0,
                bottom: 20,
                left: 50
            }

            let x = d3.scaleBand()
                    .domain(data.map(d => d.month))
                    .rangeRound([margin.left, width])
                    .padding(0.1);

            let y = d3.scaleLinear()
                    .domain([0, d3.max(data, d => parseInt(d.amount))])
                    .range([height - margin.bottom, margin.top]);

            let chart = chartContainer.append('svg')
                    .attr('height', height)
                    .attr('width', x.range()[1]);

            let bar = chart.selectAll('g')
                    .data(data)
                    .join('g')
                        .attr('transform', d => `translate(${x(d.month)}, 0)`);

            bar.append('rect')
                .attr('fill', '#0CCE6B')
                .attr('y', d => y(d.amount))
                .attr('height', d => y(0) - y(d.amount))
                .attr('width', x.bandwidth())

            chart.append("g")
                .attr("transform", `translate(0,${height - margin.bottom})`)
                .call(d3.axisBottom(x));

            chart.append("g")
                .attr("transform", `translate(${margin.left},0)`)
                .call(d3.axisLeft(y));
        })
        .catch(err => console.log(err));
}

statisticYearlyChart();
