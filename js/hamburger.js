$(function(){

    // $.each(customer_voice, function(index, value){
    //     console.log('名:'+index+' 値:'+value.name+','+value.age+','+value.sex+','+value.comment);
    // });


    // 1)ハンバーガーメニュー系処理
    $('#header__toggle').on('click', function () {
        $('#header__toggle, #header__nav-sp-list, .header__sp-button').toggleClass('show');
    });

    // 2)トップページ判定
    // ※実際にサーバーにアップしたときは条件を"/"にする
    top_url = location.pathname;
    // str = top_url === '/for-ec-psuedo-project2/' ? console.log('OK') : console.log('NG');
    // if(top_url === '/') {
    if(top_url === '/for-ec-psuedo-project2/') {
        // console.log('OK');
        $('header').addClass('front_page');
        $('#header__nav-pc-list').addClass('front_page');
    }
});