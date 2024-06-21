export function createPIE(obj = {
    'state': '',
    'data': [],
    'selector': '',
    'labels': [],
    'series': [],
    'prev': {
        'title': "",
        'icon': "",
        'Labels': "",
        'value': "",
        'unit': "",
    }
}, callback) {
    let totalRegion
    if (typeof obj.data == 'object') {
        totalRegion = caculateTotal(obj.data)
    }
    if (typeof obj.data == 'string' || 'number') {
        totalRegion = parseInt(obj.data)
    }
    let elementSelector = document.querySelector(obj.selector);
    let nextParentselector = elementSelector.parentNode.nextElementSibling
    nextParentselector.innerHTML = ""
    let LegendWrapper = document.createElement('div')
    let previousElementselector = elementSelector.parentNode.previousElementSibling
    previousElementselector.innerHTML = "";
    let Titlewrapper = document.createElement('div')
    let option = splitOption()
    option.colors = [color[6], extraColor[0]]
    option.labels = obj.labels;
    option.series = obj.series;

    LegendWrapper.setAttribute('class', 'legentgenrator');
    if (option.series != "") {
        option.series.forEach((item, key) => {
            let percent = parseInt(item) * 100 / totalRegion
            LegendWrapper.innerHTML += `<div class="lgnt-block fs-14 d-flex align-items-center">
            <div style="background: ${option.colors[key]};"></div> ${option.labels[key]} ${percent.toFixed(2)}%
            </div>`;
        })
    }
    if (option.series != "") {
        Titlewrapper.innerHTML = `<div class="text-darklight-500 fw-bold fs-20 text-center">${obj.prev.title}</div>
            <div class="d-flex justify-content-center align-items-center" style="gap: 5px;padding: 10px 0;">
            <div class="pie-icon">
                <i class="icon-enin ${obj.prev.icon} fs-40 text-primary-600"></i>
            </div>
            <div class="d-flex flex-wrap align-items-center">
                <div class="type-1 fs-15 fw-light">${obj.prev.Labels}</div>
                <div class="type-2 fs-25 mb-0 text-primary-600 fw-light">${obj.prev.unit + " " + valueInShort(obj.prev.value)}</div>
            </div>
            </div>`
    }
    nextParentselector.appendChild(LegendWrapper)
    previousElementselector.appendChild(Titlewrapper);
    callback(option);
}