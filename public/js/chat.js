$(function () {

    // XSS対策(サニタイジング：エスケープ処理)
    function escapeHTML(string){
        return string.replace(/&/g, '&lt;')
        .replace(/</g, '&lt')
        .replace(/>/g, '&gt')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#x27;');
    }

    // クラスではなくIDでしたので修正しました
    $('#submit-button').click(function () {
        var message = $('#msg').val()
        if(message == false){
            alert ("メッセージを入力してください。");
            return false;
        }
        var chat_room_id = $('#chat_room_id').val()
        var login_user_id = $('#login_user_id').val()
        var name = $('#name').val()
        $.ajax({
    
            // formと同じでrestでのやりとりはトークン必須なので追加しました。
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    
            // apiじゃないと違和感があるので、好みの問題ですが直しました。
                url: '/api/chat2',
                type: 'POST',
                data: {
                    msg: message,
                    cid: chat_room_id,
                    lid: login_user_id
                    },
                dataType: "json",
                timeout: 100000
                })
                .done(function(data){
            // アラートは削除するの手間なのでログで確認しました。

            // 投稿日時を表示
            let toDoubleDigits = function(num) {
                num += "";
                if (num.length === 1) {
                    num = "0" + num;
                }
                return num;
            };
                let d = new Date(data.created_at);
                let year = d.getFullYear();
                let month = toDoubleDigits(d.getMonth() + 1);
                let day = toDoubleDigits(d.getDate());
                let hour = toDoubleDigits(d.getHours());
                let minute = toDoubleDigits(d.getMinutes());
                let second = toDoubleDigits(d.getSeconds());
                let created_date = year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second;

                    var html = `
                        <div class="media comment-visible">
                            <div class="media-body comment-body">
                                <div class="row">
                                    <div class="flex-row">
                                        <span class="comment-body-user" id="user_name">${name}</span>
                                        <span>　</span>
                                        <span class="comment-body-user small" id="created_at">${created_date}</span>
                                    </div>
                                    <span class="comment-body-user pb-3" id="body">${escapeHTML(data.body)}</span>
                                </div>
                            </div>
                        </div>
                    `;

                $("#test").append(html);
                
            })
    
            // 現状のコントローラーではうまくやりとりができないので、結果失敗になりこちらに流れてきます。
            .fail(function (jqXHR, textStatus, errorThrown) {
                // 通信失敗時の処理
                alert('ファイルの取得に失敗しました。');
                console.log("ajax通信に失敗しました");
                console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
                console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
                console.log("errorThrown    : " + errorThrown.message); // 例外情報
                console.log("URL            : " + url);
            });
        });
    });