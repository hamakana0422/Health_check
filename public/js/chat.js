$(function () {

    // クラスではなくIDでしたので修正しました
    $('#submit-button').click(function () {
        var message = $('#msg').val()
        $.ajax({
    
            // formと同じでrestでのやりとりはトークン必須なので追加しました。
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    
            // apiじゃないと違和感があるので、好みの問題ですが直しました。
                url: '/api/chat2',
                type: 'POST',
                data: {msg: message},
                dataType: "json",
                timeout: 100000
                })
                .done(function(data){
            // アラートは削除するの手間なのでログで確認しました。

                    var html = `
                        <div class="media comment-visible">
                            <div class="media-body comment-body">
                                <div class="row">
                                    <div class="flex-row">
                                        <span class="comment-body-user" id="user_name">田中学</span>
                                        <span>　</span>
                                        <span class="comment-body-user small" id="created_at">05-05 12:00</span>
                                    </div>
                                    <span class="comment-body-user pb-3" id="body">${data.body}</span>
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