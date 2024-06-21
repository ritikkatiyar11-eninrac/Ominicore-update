
const inputSelectionElement = {
    addIcon(name){
        return `<span class="input-img p-2">
            <i class="icon-enin ${name} text-primary-700 fs-20"></i>
        </span>`
    },
    valueDom() {
        return `${this.addIcon('icon-By-Value')}
               <div class="input-group flex-nowrap align-items-center border py-1 form-box">
                 <label class="w-100 ps-2 fs-14 text-primary-800" for="ev-value">By Value</label>
                 <div class="input-value-group pe-3">
                   <input class="form-check-input EV-value" type="checkbox" id="ev-value" value="value" name="value">
                 </div>
               </div>`;
    },
    volumeDom() {
        return `${this.addIcon('icon-By-Value')}
        <div class="input-group flex-nowrap align-items-center border py-1 form-box">
          <label class="w-100 ps-2 fs-14 text-primary-800" for="ev-volume">By Volume</label>
          <div class="input-value-group pe-3">
            <input class="form-check-input EV-volume" type="checkbox" value="volume" id="ev-volume" name="volume">
          </div>
        </div>`;
    },
    dateRangeDom() {
        return `${this.addIcon('icofont-calendar')}
            <input type="text" name="daterange" class="form-box form-control fs-14 text-primary-400 rounded-0 EV-datarange" value="01/01/${new Date().getFullYear()} - 12/31/${new Date().getFullYear()}">`;
    },
    regionDom() {
        return `${this.addIcon('icon-by-region')}
            <i class="select-dropdown-icon icofont-caret-down"></i>
            <select name="region" id="region" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 EV-region">
                <option value="">All Region<option>
            </select>`
    },
    stateDom() {
        return `${this.addIcon('icon-by-state')}
            <i class="select-dropdown-icon icofont-caret-down"></i>
            <select name="state" id="state" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 EV-state">
                <option value="">All State<option>
            </select>`
    },
    categoriesDom() {
        return `${this.addIcon('icon-by-category')}
            <i class="select-dropdown-icon icofont-caret-down"></i>
            <select name="categories" id="categories" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 EV-categories">
            <option value="">Select Categories<option>
            </select>`
    },
    brandDom() {
        return `${this.addIcon('icon-by-brand')}
            <i class="select-dropdown-icon icofont-caret-down"></i>
            <select name="brand" id="brand" class="form-box form-control fs-14 text-primary-400 bg-transparent rounded-0 EV-brand">
                <option value="">Select Brand<option>
            </select>`
    },
    createDom(domClass,domMethod){
       return `<div class="${domClass}">
            <div class="input-group flex-nowrap align-items-center">${domMethod}</div>
        </div>` 
    },
    init(selector){
        let container = document.createElement('div')
        container.setAttribute('class','container-fluid py-2')
        container.innerHTML = `<div class="row" style="gap: 9px 0;">
        ${this.createDom('col-lg-3 col-xxl-3 col-md-6',this.valueDom())}
        ${this.createDom('col-lg-3 col-xxl-3 col-md-6',this.volumeDom())}
        ${this.createDom('col-lg-6 col-xxl-6 col-md-6',this.dateRangeDom())}
        ${this.createDom('col-lg-3 col-xxl-3 col-md-6',this.regionDom())}
        ${this.createDom('col-lg-3 col-xxl-3 col-md-6',this.stateDom())}
        ${this.createDom('col-lg-3 col-xxl-3 col-md-6',this.categoriesDom())}
        ${this.createDom('col-lg-3 col-xxl-3 col-md-6',this.brandDom())}
        </div>`
        document.querySelector(selector).innerHTML = "";
        document.querySelector(selector).appendChild(container) 
    }
}
class Evl {
    constructor(input = {
        value: "",
        volume:"",
        date: "",
        region: "",
        state: "",
        category: "",
        brand: "",
        color: [],
    }) {
        this.value = input.value
        this.volume = input.volume
        this.date = input.date
        this.region = input.region
        this.state = input.state
        this.category = input.category
        this.category = input.brand
    }
    requestPromiseAll(urls) {
        const requests = urls.map(url => fetch(url));
        Promise.all(requests)
            .then(responses => {
                return Promise.all(responses.map(response => response.json()));
            })
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }
    inputRequestData(){
        
    }
    optionUpdate(){

    }
    errorMsg(){

    }
    valueInShort(value) {
        if (value < 1000) {
            return value.toFixed(0); // No need for formatting
        } else if (value < 1000000) {
            return (value / 1000).toFixed(1) + 'K'; // Convert to thousands (K)
        } else if (value < 1000000000) {
            return (value / 1000000).toFixed(1) + 'M'; // Convert to millions (M)
        } else if (value < 1000000000000) {
            return (value / 1000000000).toFixed(1) + 'B'; // Convert to billions (B)
        } else if (value < 1000000000000000) {
            return (value / 1000000000000).toFixed(1) + 'T'; // Convert to trillions (T)
        } else {
            return 'Too large to display';
        }
    }
    activateLoader(selector,callback) {
        document.querySelectorAll(selector).forEach(item => {
            if (item.classList.contains('disable')) {
                item.classList.remove('disable');
            }
        })
        callback();
    }
    deactivateLoader(selector) {
        document.querySelectorAll(selector).forEach(item => {
            item.classList.add('disable');
        })
    }

    overviewElementLoad() {

    }
    pieElementLoad() {

    }
    mapRankingElementLoad() {

    }
    categoryElementLoad() {

    }
    brandElementLoad() {

    }
    loadUiDocument(urls){
        this.requestPromiseAll(urls)
    }
    init(urls) {
        this.loadUiDocument(urls)
    }
}
