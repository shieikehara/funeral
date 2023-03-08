function comp() {
    // var a = document.getElementsByClassName("comp");
    // if (a.innerText == '未') {
        // console.log('未');
        // a.innerText = '済';
    // }else{
        // console.log('済');
        // let id = document.getElementById('id').value;
        // console.log(id);
        // a.innerText ='未';
    // }
}

// var btns = document.getElementsByClassName('comp');
// for(var i = 0; i < btns.length; i++){
    // btns[i].addEventListener('click',function(){
        // if (this.innerText == '未') {
            // let id = this.parentElement.firstElementChild.children['id'].value;
            // console.dir(id)
            // this.innerText = '済';
        // }else{
            // this.innerText = '未';
        // }
    // });
// }

async function comp() {
    var form = new FormData(formList);
    const url = 'http://localhost/api/menu/form';
    const params = {method : "POST", body : form};
    const test = await fetch(url, params);
    console.log(test);
}