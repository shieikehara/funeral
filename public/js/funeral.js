function dis() {
    if(document.getElementById('editbutton').innerText == 'キャンセル') {
        document.querySelectorAll('input').forEach(
            e => e.setAttribute("disabled", true),
        );
        document.getElementById('e_button').setAttribute("disabled", true);
        document.getElementById('e_button').style.color = "white";
        document.getElementById('editbutton').innerText = '編集';
    }else{
        document.querySelectorAll('input').forEach(
            e => e.removeAttribute("disabled")
        );
        document.getElementById('e_button').removeAttribute("disabled");
        document.getElementById('e_button').style.color = "black";
        document.getElementById('editbutton').innerText = 'キャンセル';
    }
}

async function user_edit() {
    try {
        let id = document.getElementById("id").value; 
        let name = document.getElementById("name").value; 
        let email = document.getElementById("email").value;
        let tel = document.getElementById("tel").value; 
        const params = {id : id, name : name, email : email, tel : tel};
        const query = new URLSearchParams(params);
        // Laravelで設定したAPIのURLを入れる
        const url = `http://localhost/api/mypage?${query}`;
        // method:POSTなのかGETなのかの決定　,body:登録なら登録させたいもの、検索なら検索させたい値を設定するLaravelのリクエストと同じにする
        const method = {method : "GET"};
        // 上記二つの変数をAPI通信の関数に入れる。値が返却されているのであればここで帰ってくる
        // awaitなのでこの関数内では処理を待っている状態
        const test = await fetch(url, method);
        if (name == "" || email == "" || tel == "") {
            alert('入力されていない項目があります。');
        } else {
            alert('編集完了');
        }
    } catch (error) {
        alert('編集できません。');
    }
}

function delete_click() {
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const param = params.get('id');
    var result = window.confirm('退会しますか？');
    if (result) {
        location.href = "delete?id="+param;
    }
}


