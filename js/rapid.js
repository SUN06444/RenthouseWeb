/*
 * HTML DOM Select Object 下拉式選單操作實錄
 * http://blog.webgolds.com/view/317
 * 2016/12/11
 */

(function(){
  //得到下拉式目前選取的文字 (text)
  // get the text of a selected option
  var $cSel = $('select[name="test"]'); //指定要處理的特定元素物件名稱

  var select_option_text = $( 'option:selected', $cSel).text();
  $( "div" ).text( select_option_text );
  
});