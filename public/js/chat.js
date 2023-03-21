var btns = document.getElementsByClassName('comp');

for(var i = 0; i < btns.length; i++){
    btns[i].addEventListener('click',function(){
        return new Promise((resolve) => {
            if (this.innerText == '未') {
                let id = this.parentElement.firstElementChild.children['user_id'].value;
                let comp_id = this.parentElement.firstElementChild.children['comp_user'].value;
                const params = {method : "POST", user_id : id, comp_user : comp_id};
                const url = `http://localhost/api/menu/form`;

                const test = fetch(url, params);
                resolve(
                    console.dir(test)
                );
                this.innerText = '済';
            }else{
                this.innerText = '未';
            }
        })
    })
}
