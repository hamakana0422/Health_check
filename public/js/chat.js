$(function () {

    // クラスではなくIDでしたので修正しました
    $('#submit-button').click(function () {
        $.ajax({
    
            // formと同じでrestでのやりとりはトークン必須なので追加しました。
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    
            // apiじゃないと違和感があるので、好みの問題ですが直しました。
                url: '/api/chat2',
                type: 'POST',
                data: {msg:'ok'},
                dataType: "json",
                timeout: 100000
                })
                .done(function(data){
            // アラートは削除するの手間なのでログで確認しました。
                console.info("成功");
                console.info(data);
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