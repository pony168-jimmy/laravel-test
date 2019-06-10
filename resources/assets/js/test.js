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
var html = converter.makeHtml(text);
$('.markdown').html(html);
document.querySelector('.markdown').innerHTML = html;