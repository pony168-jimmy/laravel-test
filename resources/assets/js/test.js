var converter = new showdown.Converter();
var text = `
#  單字本 #
## DAY1 ##
- foundation : 基礎、根本、建立。
- dispatches : 派遣、分配。
- yield : 產量、產生、屈服、放棄。
- artisan : 工匠
- optimize : 優化、完善
- script : 腳本  
- buffer : 緩衝  
- solution : 解決  
- struggle : 奮鬥、掙扎  
`;
// var html = converter.makeHtml(text);
// $('.markdown').html(html);
// document.querySelector('.markdown').innerHTML = html;
let req = axios.create({
    url: '/top-matches-soccerstreams',
    baseURL: 'https://darsh.sportsvideo.net/api/',
    xsrfCookieName: '__cfduid=d680f0bdaaadb4eaa18adc9e77a759b341560250717',
    headers: {
        'authority': 'darsh.sportsvideo.net',
    },
    params: {
        date: '2019-06-11'
    },
});
req.get();
