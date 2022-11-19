export default class Musik {
    constructor() {
        this.data = {
            password:"KickPHP"
        }

        this.rootElem = document.querySelector('.musik');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
    }

    async init(){
        this.nameSearch.addEventListener('input', () => {
            this.render();
        })
        await this.render();
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-12', 'col-md-6', 'col-lg-5', 'p-2', 'm-5', 'shadow');

            col.innerHTML = `
            <div class="row">
                <div class="col-4">
                <img src="images/${item.musikBilled}" class="card-img-top" alt="cover">
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <a href="sang.php"><h5 class="card-title">${item.musikTitel} </h5></a>
                        <h5 class="card-text">${item.musikAlbum} </h5>
                        <h5 class="card-text">${item.musikKunstner} </h5>
                        <p class="card-text">${item.musikTid} </p>
                        <p class="card-text">${item.musikDato} </p>
                        <a href="#"><img src="images/download.png" alt="social"></a>
                    </div>
                </div>
            </div>
        `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);

    }

    async getData(){
        this.data.nameSearch = this.nameSearch.value;
        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }
}