/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var count=0;

for(var n=2; n<=1000000; n++){
    //接收頻率太高，也容易導致crash
    //postMessage("正在檢查" +n+ "，目前共發現" +count+ "個質數");
    var is_prime = true;
    for(var i=2; i<= Math.sqrt(n); i++){
        if(n % i == 0){
        is_prime = false;
        break;
        }
    }
        if (is_prime){
        //找到質數
        count++;
        postMessage("正在檢查" +n+ "，目前共發現" +count+ "個質數");
    }
}   
//複雜運算結束
postMessage("運算結束" + "1000000" + "，目前共發現" +count+ "個質數");

