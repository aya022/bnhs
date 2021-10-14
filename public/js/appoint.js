let d = new Date();
let n = d.getFullYear();

let eventHoliday = [];
$.ajax({
    url: "holiday/list",
    type: "GET",
})
    .done(function (data) {
        data.forEach((element) => {
            eventHoliday.push(
                monthNameToNum(element.holi_date_from.split(" ")[0]) +
                    "/" +
                    element.holi_date_from.split(" ")[1] +
                    "/" +
                    n
            );
            if (element.holi_date_to != null) {
                for (
                    let i = parseInt(element.holi_date_from.split(" ")[1]);
                    i <= parseInt(element.holi_date_to.split(" ")[1]);
                    i++
                ) {
                    eventHoliday.push(
                        monthNameToNum(element.holi_date_to.split(" ")[0]) +
                            "/" +
                            i +
                            "/" +
                            n
                    );
                }
            }
        });
        console.log(eventHoliday);
    })
    .fail(function (a, b, c) {
        console.log(a, b, c);
    });

let dateFetch = [];
$.ajax({
    url: "list",
    type: "GET",
})
    .done(function (data) {
        data.forEach((val) => {
            dateFetch.push({
                set_date: val.set_date,
                inTotal: val.inTotal,
            });
        });
    })
    .fail(function (a, b, c) {
        console.log(a, b, c);
    });

$(".datepicker").datepicker({
    dateFormat: "mm/dd/yy",
    minDate: 0,
    beforeShowDay: function (date) {
        let day = date.getDay();

        // First convert all values in dateArray to date Object and compare with current date
        let dateFound = eventHoliday.find((item) => {
            let formattedDate = new Date(item);
            return (
                date.toLocaleDateString() === formattedDate.toLocaleDateString()
            );
        });
        //limit 100
        let changeColor = dateFetch.find((item) => {
            let datew = $.datepicker.formatDate("mm/dd/yy", date);
            if (item.set_date.toString() == datew.toString()) {
                return item.inTotal >= 100;
            }
        });

        if (changeColor || dateFound) {
            return [false, "full", ""];
        } else {
            return [true && day != 0 && day != 6, "vacant", ""];
        }
    },
});

