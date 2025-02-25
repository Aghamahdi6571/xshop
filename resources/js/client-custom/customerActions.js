window.addEventListener('load', function () {
    const favUrl = document.querySelector('#api-fav-toggle').value;
    const compUrl = document.querySelector('#api-compare-toggle').value;
    document.querySelectorAll('.fav-btn')?.forEach(function (el) {
        el.addEventListener('click', async function () {
            let resp = await axios.get(favUrl+this.getAttribute('data-slug'));
            if (resp.data.success){
                this.setAttribute('data-is-fav',resp.data.data);
                window.$toast.success(resp.data.message);
            }else {
                window.$toast.error("Error!");
            }
        });
    });
    document.querySelectorAll('.compare-btn')?.forEach(function (el) {
        el.addEventListener('click', async function () {
            let resp = await axios.get(compUrl+this.getAttribute('data-slug'));
            if (resp.data.success){
                window.$toast.success(resp.data.message);
            }else {
                window.$toast.error("Error!");
            }
        });
    });

    document.querySelectorAll('.add-to-card')?.forEach(function (el) {
        el.addEventListener('click', async function (e) {
            e.preventDefault();
            let resp = await axios.get(this.getAttribute('href'));
            if (resp.data.success){
                window.$toast.success(resp.data.message);
                document.querySelectorAll('.card-count')?.forEach(function (el2) {
                   el2.innerText = resp.data.data.count;
                });
            }else {
                window.$toast.error("Error!");
            }
        });
    });
});
