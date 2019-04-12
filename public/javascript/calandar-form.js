
$("#datepicker-1").datepicker({
    firstDay: 1,
    showOtherMonths: true,
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd/mm/yy"
});

$(".date").mousedown(function() {
    $(".ui-datepicker").addClass("active");
});


$("#datepicker-2").datepicker({
    firstDay: 1,
    showOtherMonths: true,
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd/mm/yy"
});

$(".date").mousedown(function() {
    $(".ui-datepicker").addClass("active");
});