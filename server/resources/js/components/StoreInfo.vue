<template>
    <div class="pt-2 text-center font-weight-bold">
        <div>{{ storeName }}</div>
        <div>{{ today }}</div>
        <div class="text-info pt-2">現在の計量月： {{ measurementMonth }} 月 (計量日… {{ measurementDate }} 日)</div>
    </div>
</template>

<script>

const toDoubleDigits = function(num) {
    num += "";
    if (num.length === 1) {
        num = "0" + num;
    }
    return num;     
};

// 日付をYYYY/MM/DD HH:DD:MI:SS形式で取得
function today() {
    const weekDay = ["日", "月", "火", "水", "木", "金", "土"];

    let date = new Date();

    let yyyy = date.getFullYear();
    let mm = toDoubleDigits(date.getMonth() + 1);
    let dd = toDoubleDigits(date.getDate());
    let wd = weekDay[ date.getDay() ];
    let hh = toDoubleDigits(date.getHours());
    let mi = toDoubleDigits(date.getMinutes());
    return yyyy + '/' + mm + '/' + dd + '(' + wd + ') ' + hh + ':' + mi;
};


export default {
    data : function () {
        return {
            storeName: '株式会社アイグリッドストア 1号店',
            today: today(),
            measurementMonth: 1,
            measurementDate: 1,
        }
    },
}
</script>