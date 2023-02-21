function favorite() {
    try {
        var form = new FormData(good);
        // Laravelで設定したAPIのURLを入れる
        const url = "http://localhost/api/menu/flower";
        // method:POSTなのかGETなのかの決定　,body:登録なら登録させたいもの、検索なら検索させたい値を設定するLaravelのリクエストと同じにする
        const params = {method : "POST",body : form};
        // 上記二つの変数をAPI通信の関数に入れる。値が返却されているのであればここで帰ってくる
        // awaitなのでこの関数内では処理を待っている状態
        const test = await fetch(url, params);
        console.log(test);
    } catch (error) {
    }
}