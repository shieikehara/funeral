var btns = document.getElementsByClassName('comp');
for(var i = 0; i < btns.length; i++){
    btns[i].addEventListener('click',function(){
        if (this.innerText == '未') {
            var form_id = this.parentElement.firstElementChild.children['form_id'].value;
            var user_id = this.parentElement.firstElementChild.children['user_id'].value;
            var comp_num = this.getAttribute("comp_num");
            comp(form_id, user_id);
            this.setAttribute("comp_num", "1");
            this.innerText = '済';
        }else{
            var form_id = this.parentElement.firstElementChild.children['form_id'].value;
            var user_id = this.parentElement.firstElementChild.children['user_id'].value;
            var comp_num = this.getAttribute("comp_num");
            this.setAttribute("comp_num", "0");
            this.innerText = '未';
            notComp(form_id,user_id);
        };
    })
}

async function comp(form_id, user_id){
    const params = {form_id : form_id, user_id : user_id, comp_num : "1"};
    const query = new URLSearchParams(params);
    const url = `http://localhost/api/menu/form?${query}`;
    const method = {method : "GET"};
    const test = await fetch(url, method);
}
async function notComp(form_id, user_id){
    const params = {form_id : form_id, user_id : user_id, comp_num : "0"};
    const query = new URLSearchParams(params);
    const url = `http://localhost/api/menu/form?${query}`;
    const method = {method : "GET"};
    const test = await fetch(url, method);
}

