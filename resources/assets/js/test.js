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

// let time_code = Math.round(new Date().getTime() / 1000);
// const appkey = '26ed0c5c46587d77';
// let hash_key = `26ed0c5c46587d77apple_key_${time_code}2arfjnv1kxbVZKy2QnSUKJ1R2X1C8qkF`
// let content = {
//     'q': 'apple',
//     'from': 'en',
//     'to': 'zh-CHS',
//     'appkey': '26ed0c5c46587d77',
//     'salt': '_key_',
//     'sign': hash_key,
//     'signType': 'v3',
//     'curtime': time_code
// }

// axios.post('http://openapi.youdao.com/api', content).then((res) => {
//     console.log(res)
// }).catch((error) => {
//     console.log(error)
// })
// let test = axios({
//     method: 'post',
//     url: 'http://openapi.youdao.com/api',
//     data: {
//         'q': 'apple',
//         'from': 'en',
//         'to': 'zh-CHS',
//         'appkey': '26ed0c5c46587d77',
//         'salt': '_key_',
//         'sign': hash_key,
//         'signType': 'v3',
//         'curtime': time_code
//     },
//     headers: { 'refer': 'http://openapi.youdao.com/' },
// });
// axios.post('http://openapi.youdao.com/api');
