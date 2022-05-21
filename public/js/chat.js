console.log("ok");
$(function () {
    // submitボタンがクリックされたとき
    $('.submit-button').onclick(function () {

        $.ajax({
            url: 'http://127.0.0.1:8000/test',
            type: 'POST',
            dataType: "json",
            timeout: 10000
        })
        .done(function(data){
            alert('通信OK');
            alert(data);
        })
    });
});







// public function index()
// {
//   return response()->json(['body' => 'こんにちは', 'chat_room_id' => '1', 'create_user_id' => '2']);
// }
