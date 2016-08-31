import $ from "jquery"; // jqueryを読み込み

// CSRFトークンをヘッダーに含める
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// ボタンクリックイベントを定義
$("#addButton").click(() => {
    const name = $("#name").val();
    const postData = {name: name};

    // Ajaxでデータ送信
    $.post("/task", postData, (resData) => {
        renderList(resData);
    });
});

// リストを描画する
function renderList(data)
{
    const list = $("#taskList");
    list.empty(); // リストを空にする

    // レスポンスのデータからリストを作成する
    data.forEach((row) => {
        list.append($("<li>").text(row.name));
    });
}