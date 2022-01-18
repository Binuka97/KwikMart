// $(document).ready(function () {

    function item1Minus() {
        decreament = document.getElementById("myNumber").value;
        if (+decreament == 1 || +decreament > 1) {
            document.getElementById("myNumber").stepDown();
            num3 = document.getElementById("price").innerHTML;
            num4 = document.getElementById("myNumber").value;
            num5 = document.getElementById("result").innerHTML;
            console.log(num4)
            if (+num4 > 0) {
                document.getElementById("result").innerHTML = result - num3;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num3;
            }
            else {
                document.getElementById("result").innerHTML = 0;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num3;
            }
        }
    }

    function item1Plus() {
        document.getElementById("myNumber").stepUp();
        num1 = document.getElementById("price").innerHTML;
        num2 = document.getElementById("myNumber").value;
        document.getElementById("result").innerHTML = num1 * num2;
        total = document.getElementById("tottalCost").innerHTML;
        document.getElementById("tottalCost").innerHTML = +total + +num1;
    }

    function item2Minus() {
        decreament = document.getElementById("myNumber2").value;
        if (+decreament == 1 || +decreament > 1) {
            document.getElementById("myNumber2").stepDown();
            num1 = document.getElementById("price2").innerHTML;
            num2 = document.getElementById("myNumber2").value;
            result = document.getElementById("result2").innerHTML;
            if (+num2 > 0) {
                document.getElementById("result2").innerHTML = result - num1;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num1;
            }
            else {
                document.getElementById("result2").innerHTML = 0;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num1;
            }
        }
    }

    function item2Plus() {
        document.getElementById("myNumber2").stepUp();
        num1 = document.getElementById("price2").innerHTML;
        num2 = document.getElementById("myNumber2").value;
        document.getElementById("result2").innerHTML = num1 * num2;
        total = document.getElementById("tottalCost").innerHTML;
        document.getElementById("tottalCost").innerHTML = +total + +num1;
    }

    function item3Plus() {
        document.getElementById("myNumber3").stepUp();
        num1 = document.getElementById("price3").innerHTML;
        num2 = document.getElementById("myNumber3").value;
        document.getElementById("result3").innerHTML = num1 * num2;
        total = document.getElementById("tottalCost").innerHTML;
        result = document.getElementById("tottalCost").innerHTML = +total + +num1;
    }

    function item3Minus() {
        decreament = document.getElementById("myNumber3").value;
        if (+decreament == 1 || +decreament > 1) {
            document.getElementById("myNumber3").stepDown();
            num1 = document.getElementById("price3").innerHTML;
            num2 = document.getElementById("myNumber3").value;
            result = document.getElementById("result3").innerHTML;
            if (+num2 > 0) {
                document.getElementById("result").innerHTML = result - num1;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num1;
            }
            else {
                document.getElementById("result").innerHTML = 0;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num1;
            }
        }
    }

    function item4Minus() {
        decreament = document.getElementById("cabbage-myNumber").value;
        if (+decreament == 1 || +decreament > 1) {
            document.getElementById("cabbage-myNumber").stepDown();
            num3 = document.getElementById("cabbage-price").innerHTML;
            num4 = document.getElementById("cabbage-myNumber").value;
            result = document.getElementById("cabbage-result").innerHTML;
            if (+num4 > 0) {
                document.getElementById("cabbage-result").innerHTML = result - num3;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num3;
            }
            else {
                document.getElementById("cabbage-result").innerHTML = 0;
                total = document.getElementById("tottalCost").innerHTML;
                document.getElementById("tottalCost").innerHTML = total - num3;
            }
        }
    }

    function item4Plus() {
        document.getElementById("cabbage-myNumber").stepUp();
        num1 = document.getElementById("cabbage-price").innerHTML;
        num2 = document.getElementById("cabbage-myNumber").value;
        document.getElementById("cabbage-result").innerHTML = num1 * num2;
        total = document.getElementById("tottalCost").innerHTML;
        document.getElementById("tottalCost").innerHTML = +total + +num1;
    }

    function calculateFinalBalance() {
        // console.log("WE ARE INSIDEEEEE")
        item1 = document.getElementById("result").innerHTML;
        // console.log("WE ARE INSIDEEEEE", calc1)

        item2 = document.getElementById("result2").innerHTML;
        item3 = document.getElementById("result3").innerHTML;
        item4 = document.getElementById("cabbage-result").innerHTML;

        document.getElementById("tottalCost").innerHTML = +item1 + +item2 + +item3 + +item4;
        document.getElementById("tottalCost1").innerHTML = +item1 + +item2 + +item3 + +item4;

    }



// })