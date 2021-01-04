<template>
    <div class="pt-2 text-center font-weight-bold">
        <div>{{ storeName }}</div>
        <div>{{ today }}</div>
        <div class="text-info pt-2">現在の計量月： {{ measurementMonth }} 月 (計量日… {{ measurementDate }} 日)</div>
    </div>
</template>

<script>

const weekDay = ["日", "月", "火", "水", "木", "金", "土"];
const date = new Date();
const today = (date.getMonth()+1) + "/" + 
                date.getDate() + " (" + 
                weekDay[date.getDay()] + ") " + 
                date.getHours() + ":" + 
                date.getMinutes();

var toDoubleDigits = function(num) {
    num += "";
    if (num.length === 1) {
        num = "0" + num;
    }
    return num;     
};

// 日付をYYYY/MM/DD HH:DD:MI:SS形式で取得
var yyyymmddhhmiss = function() {
    var date = new Date();
    var yyyy = date.getFullYear();
    var mm = toDoubleDigits(date.getMonth() + 1);
    var dd = toDoubleDigits(date.getDate());
    var hh = toDoubleDigits(date.getHours());
    var mi = toDoubleDigits(date.getMinutes());
    return yyyy + '/' + mm + '/' + dd + ' ' + hh + ':' + mi;
};

export default {
    data : function () {
        return {
            storeName: '株式会社アイグリッドストア 1号店',
            today: today,
            measurementMonth: 1,
            measurementDate: 1,
        }
    },
}
</script>